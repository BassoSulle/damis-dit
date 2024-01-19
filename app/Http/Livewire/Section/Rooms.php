<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use App\Models\building;
use App\Models\employee;
use App\Models\floor;
use App\Models\room;
use Livewire\WithPagination;

class Rooms extends Component
{
public $WithPagination;
    public function render()
    {

    $rooms=room::latest()->paginate(10);
    $buildings=building::latest()->get();
    $floor=floor::latest()->get();
    $employees=employee::all();



        return view('livewire.section.rooms',['rooms'=>$rooms],[

        'buildings'=> $buildings,
        'employees'=>$employees,
        'floor'=>$floor,
        ]);
    }
}
