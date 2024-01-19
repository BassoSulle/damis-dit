<?php

namespace App\Http\Livewire\Admin;

use App\Models\floor;
use Livewire\Component;
use Livewire\WithPagination;


class FloorList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $floor_id;

    protected $rules = [
            'name' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveFloor()
    {
        $validatedData = $this->validate();

        floor::create($validatedData);

        session()->flash('add', 'Floor Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function getFloorDetails(int $floor_id) {
        $floorData = floor::find($floor_id);

        if ($floorData) {

            $this->floor_id = $floorData->id;
            $this->name = $floorData->name;
    
        }
      
    }

    public function EditFloor(int $floor_id) {

        $validatedData = $this->validate();

        floor::where('id', $floor_id)->update([
            'name' => $validatedData['name'],
        ]);


        session()->flash('edit', 'Floor Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function ShowSoftDeleteModal(int $floor_id) {
        $this->floor_id = $floor_id;
    }

    public function SoftDeleteFloor(int $floor_id) {

        $floor = floor::find($floor_id);

        if ($floor->is_active == true) {

            floor::where('id', $floor_id)->update([
                'is_active' => false
            ]);

            session()->flash('deactivated', 'Floor Deactivated successfully');
            $this->dispatchBrowserEvent('close-modal');

        } else {

            floor::where('id', $floor_id)->update([
                'is_active' => true
            ]);

            session()->flash('activated', 'Floor Activated successfully');
            $this->dispatchBrowserEvent('close-modal');

        }

    }    

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset('name');
    }


    public function render()
    {
        $floors = floor::latest()->paginate(5);
        return view('livewire.admin.floor-list', ['floors' => $floors]);
    }
}
