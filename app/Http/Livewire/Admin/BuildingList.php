<?php

namespace App\Http\Livewire\Admin;

use App\Models\building;
use Livewire\WithPagination;
use Livewire\Component;

class BuildingList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $building_id;

    protected $rules = [
            'name' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveBuilding()
    {
        $validatedData = $this->validate();

        building::create($validatedData);

        session()->flash('add', 'Building Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function getBuildingDetails(int $building_id) {
        $buildingData = building::find($building_id);

        if ($buildingData) {

            $this->building_id = $buildingData->id;
            $this->name = $buildingData->name;
    
        }
      
    }

    public function EditBuilding(int $building_id) {

        $validatedData = $this->validate();

        building::where('id', $building_id)->update([
            'name' => $validatedData['name'],
        ]);


        session()->flash('edit', 'Building Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function getBuildingDeleteDetails(int $building_id) {
        $this->building_id = $building_id;
    }

    public function DeleteBuilding(int $building_id) {

        building::find($building_id)->delete();
        session()->flash('delete', 'Building Deleted successfully');
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
        $buildings = building::latest()->paginate(5);
        return view('livewire.admin.building-list', ['buildings' => $buildings]);
    }
}
