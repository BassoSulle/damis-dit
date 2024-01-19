<?php

namespace App\Http\Livewire\HeadOfSection;

use App\Models\asset;
use App\Models\asset_type;
use App\Models\condition;
use App\Models\employee;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\asset_assignment;
use Illuminate\Support\Facades\Auth;


class AssetsList extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public $asset_id, $asset_no, $description, $assettype_id, $serial_no, $condition_id, $cost, $accumulated_depreciation, $acquisition_date, $acquisition_type, $gfs_code, $gfs_description, $remarks ;

    public $asset;

    // protected $rules = [
    //     'asset_no' => 'required',
    //     'description' => 'required',
    //     'assettype_id' => 'required',
    //     'serial_no' => 'required',
    //     'condition_id' => 'required',
    //     'cost' => 'required',
    //     // 'accumulated_depreciation' => 'required',
    //     'acquisition_date' => 'required',
    //     'acquisition_type' => 'required',
    //     // 'gfs_code' => 'required',
    //     // 'gfs_description' => 'required',
    //     // 'remarks' => 'required',
    // ];

    // public function updated($fields)
    // {
    //     $this->validateOnly($fields);
    // }

    // public function getAssetDetails(int $asset_id) {

        // $this->asset_id = $asset_id;
        // $assetData = asset::find($asset_id);

        // if ($asset){

        //     $this->asset_no = $asset->asset_no;
        //     $this->serial_no = $asset->serial_no;
        //     $this->assettype_id = $asset->assettype_id;
        //     $this->condition_id = $asset->condition_id;
        //     $this->acquisition_date = $asset->acquisition_date;
        //     $this->acquisition_type = $asset->acquisition_type;
        //     $this->description = $asset->description;
        //     $this->cost = $asset->cost;
        // }

        // $this->emit('editAsset');

        // session()->flash('asset_id', $asset->id);

        // return redirect()->route('store.editAsset', ['asset_id' => $asset_id]);
        // return redirect()->to('store/registerAsset')->with('asset_id', $asset_id);


    // }

    // public function registerAssetPage() {
    //     return redirect()->route('store.registerAsset');

    // }

    // public function EditAsset(int $asset_id) {

    //     $validatedData = $this->validate();

    //     asset::where('id', $asset_id)->update([
    //         'name' => $validatedData['name']
    //     ]);

    //     session()->flash('edit', 'Asset type Updated successfully');
    //     $this->resetInput();
    //     $this->dispatchBrowserEvent('close-modal');
    // }

    // public function getDeleteAsset(int $asset_id) {
    //     $this->asset_id = $asset_id;
    // }

    // public function DeleteAsset(int $asset_id) {

    //     asset::find($asset_id)->delete();

    //     session()->flash('delete', 'Asset Deleted successfully');
    //     $this->dispatchBrowserEvent('close-modal');

    // }

    // public function closeModal() {
    //     $this->resetInput();
    // }

    // public function resetInput() {
    //     $this->reset('name');

    // }

    public function render()
    {
        $headOfSection_id = Auth::user()->id;
        $headOfSection = employee::find($headOfSection_id);

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();
        $employees = employee::all();

        $assets = asset::latest()->paginate(10);

        $assigned_assets=asset_assignment::where('department_id', $headOfSection->department_id)->where('section_id', $headOfSection->section_id)->paginate(10);
        
        return view('livewire.head-of-section.assets-list', ['assets' => $assets], [
            'asset_types'=>$asset_types,
            'conditions'=>$conditions,
            'assigned_assets' => $assigned_assets,
            'employees' => $employees
        ]);
        
    }
}
