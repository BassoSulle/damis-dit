<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use App\Models\asset_type;
use Livewire\Component;
use Illuminate\Validation\Rule as ValidationRule;

class AssetTypeList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $assetType_id;

    protected $rules = [
        'name' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function AddAssetType() {

        $validatedData = $this->validate();

        asset_type::create($validatedData);
        session()->flash('add', 'Asset type Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function getAssetTypeDetails(int $assetType_id) {
        $assetType = asset_type::find($assetType_id);

        if ($assetType) {
            $this->assetType_id = $assetType->id;
            $this->name = $assetType->name;
        }
    }

    public function EditAssetType(int $assetType_id) {

        $validatedData = $this->validate();

        asset_type::where('id', $assetType_id)->update([
            'name' => $validatedData['name']
        ]);

        session()->flash('edit', 'Asset type Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function getDeleteAssetType(int $assetType_id) {
        $this->assetType_id = $assetType_id;
    }

    public function DeleteAssetType(int $assetType_id) {

        asset_type::find($assetType_id)->delete();

        session()->flash('delete', 'Asset type Deleted successfully');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset('name');
    }

    public function render()
    {
        $assetTypes = asset_type::latest()->paginate(5);
        return view('livewire.admin.asset-type-list', ['assetTypes' => $assetTypes]);
    }
}
