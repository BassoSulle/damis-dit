<?php

namespace App\Http\Livewire\Store;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\asset;
use App\Models\asset_type;
use App\Models\condition;


class AssetInformation extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $asset_id, $asset_no, $description, $assettype_id, $serial_no, $condition_id, $cost, $accumulated_depreciation, $acquisition_date, $acquisition_type, $gfs_code, $gfs_description, $remarks ;

    public $asset = [];

    public $formDisplay = 'none';

    public $tableDisplay = '';

    public function ViewAsset(int $asset_id) {
        $this->asset = [];

        $this->asset = asset::findOrFail($asset_id);

    }

    public function prepareDeleteAssetData(int $asset_id) {

        $this->asset_id = $asset_id;
    }

    public function DeleteAsset() {
     
        asset::where('id', $this->asset_id)->update([
            'is_active' => false
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('deleted', 'Asset Deleted successfully');

    }

    public function closeForm() {

        $this->resetInput();
        $this->formDisplay = 'none';
        $this->tableDisplay = '';

    }

    public function closeModal() {
        $this->resetInput();
        $this->asset = [];
    }

    public function EditAsset(int $asset_id) {

        $this->formDisplay = '';
        $this->tableDisplay = 'none';

        $asset = asset::findOrFail($asset_id);

        $this->asset_id = $asset->asset_id;
        $this->asset_no = $asset->asset_no;
        $this->serial_no = $asset->serial_no;
        $this->assettype_id = $asset->assettype_id;
        $this->condition_id = $asset->condition_id;
        $this->acquisition_date = $asset->acquisition_date;
        $this->acquisition_type = $asset->acquisition_type;
        $this->description = $asset->description;
        $this->cost = $asset->cost;

    }

    protected $rules = [
        'asset_no' => 'required',
        'serial_no' => 'required',
        'assettype_id' => 'required',
        'condition_id' => 'required',
        'acquisition_date' => 'required',
        'acquisition_type' => 'required',
        'description' => 'required',
        'cost' => 'required'
        // 'accumulated_depreciation' => 'required',
        // 'gfs_code' => 'required',
        // 'gfs_description' => 'required',
        // 'remarks' => 'required',
    ];

    public function updated($fields){
        $this->validateOnly($fields);
    }

    public function UpdateAsset() {

        $validatedData = $this->validate();

        asset::where('id', $this->asset_id)->update([
            'asset_no' => $validatedData['asset_no'],
            'serial_no' => $validatedData['serial_no'],
            'assettype_id' => $validatedData['assettype_id'],
            'condition_id' => $validatedData['condition_id'],
            'acquisition_date' => $validatedData['acquisition_date'],
            'acquisition_type' => $validatedData['acquisition_type'],
            'description' => $validatedData['description'],
            'cost' => $validatedData['cost']
        ]);

        $this->formDisplay = 'none';
        $this->tableDisplay = '';

        session()->flash('edited', 'Asset Updated successfully');
        $this->resetInput();

    }

    public function resetInput() {
        $this->reset('asset_no');
        $this->reset('serial_no');        
        $this->reset('assettype_id');
        $this->reset('condition_id');
        $this->reset('acquisition_date');
        $this->reset('acquisition_type');
        $this->reset('description');
        $this->reset('cost');
        // $this->reset('accumulated_depreciation');
        // $this->reset('gfs_code');
        // $this->reset('gfs_description');
        // $this->reset('remarks');

    }

    public function registerAssetPage() {
        return redirect()->route('store.registerAsset');

    }

    public function render()
    {

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();

        $assets = asset::where('is_active', true)->latest()->paginate(10);

        return view('livewire.store.asset-information', ['assets' => $assets], [
                'asset_types'=>$asset_types,
                'conditions'=>$conditions
        ]);
    }
}




























