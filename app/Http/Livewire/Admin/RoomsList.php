<?php

namespace App\Http\Livewire\Admin;

use App\Models\building;
use App\Models\employee;
use App\Models\floor;
use App\Models\room;
use Livewire\Component;
use Livewire\WithPagination;


class RoomsList extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public $name, $capacity, $floor_id, $building_id, $room_id;

    protected $rules = [
            'name' => 'required',
            'capacity' => 'required',
            'floor_id' => 'required',
            'building_id' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveRoom()
    {
        $validatedData = $this->validate();

        room::create($validatedData);

        session()->flash('add', 'Room Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function getRoomDetails(int $room_id) {
        $roomData = room::find($room_id);

        if ($roomData) {

            $this->room_id = $roomData->id;
            $this->name = $roomData->name;
            $this->capacity = $roomData->capacity;
            $this->floor_id = $roomData->floor_id;
            $this->building_id = $roomData->building_id;
        }

    }

    public function EditRoom(int $room_id) {

        $validatedData = $this->validate();

        room::where('id', $room_id)->update([
            'name' => $validatedData['name'],
            'capacity' => $validatedData['capacity'],
            'floor_id' => $validatedData['floor_id'],
            'building_id' => $validatedData['building_id'],
        ]);

        session()->flash('edit', 'Room Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function ShowSoftDeleteModal(int $room_id) {
        $this->room_id = $room_id;

    }

    public function SoftDeleteRoom(int $room_id) {

        $room = room::find($room_id);

        if ($room->is_active == true) {

            room::where('id', $room_id)->update([
                'is_active' => false
            ]);

            session()->flash('deactivated', 'Room Account Deactivated successfully');
            $this->dispatchBrowserEvent('close-modal');

        } else {

            room::where('id', $room_id)->update([
                'is_active' => true
            ]);

            session()->flash('activated', 'Room Account Activated successfully');
            $this->dispatchBrowserEvent('close-modal');

        }

    }

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset('name', 'capacity', 'building_id', 'floor_id');
    }

    public function render()
    {
        $floors = floor::latest()->get();
        $buildings = building::latest()->get();
        $employees = employee::all();

        // $rooms = room::with()->latest()->paginate();

        // $roomsWithHeadOfOffice = Room::with(['employees' => function ($query) {
        //     $query->whereHas('role', function ($roleQuery) {
        //         $roleQuery->where('name', 'head of office');
        //     });
        // }])->paginate(5);
        $roomsWithHeadOfOffice = room::latest()->paginate(10);

        return view('livewire.admin.rooms-list',
         ['roomsWithHeadOfOffice' => $roomsWithHeadOfOffice],
          ['floors' => $floors, 'buildings' => $buildings, 'employees' => $employees]
        );
    }

}
