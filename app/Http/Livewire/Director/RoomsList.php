<?php

namespace App\Http\Livewire\Director;

use App\Models\room;
use App\Models\section;
use Livewire\Component;
use App\Models\employee;
use App\Models\department;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class RoomsList extends Component
{
    use WithPagination;

    public $room_id;

    public function render()
    {
        $director_id = Auth::user()->id;
        $director = employee::find($director_id);

        $departments = department::latest()->get();
        $sections = section::where('department_id', $director->department_id)->get();
        
        $rooms = room::latest()->paginate(10);
        $employees = employee::all();

        

        return view('livewire.director.rooms-list', ['rooms' => $rooms], [
            'employees' => $employees, 'sections' => $sections, 'departments' => $departments
        ]);
    }
}
