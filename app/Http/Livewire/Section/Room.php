<?php

namespace App\Http\Livewire\Section;


use Livewire\Component;
// use App\Models\department;
use App\Models\floor;
use App\Models\building;
use Livewire\WithPagination;
// use Illuminate\Validation\Rule as ValidationRule;

class Room extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $capacity, $floor_id, $building_id;

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

    public function AddRoom()
    {
        $validatedData = $this->validate();

        room::create($validatedData);
        session()->flash('add', 'Room Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    // public function getDeptDetails(int $department_id) {
    //     $departmentData = department::find($department_id);

    //     if ($departmentData) {

    //         $this->department_id = $departmentData->id;
    //         $this->name = $departmentData->name;
    //         $this->department_code = $departmentData->department_code;
    
    //     }
      
    // }

    // public function EditDepartment(int $department_id) {

    //     $validatedData = $this->validate();

    //     department::where('id', $department_id)->update([
    //         'name' => $validatedData['name'],
    //         'department_code' => $validatedData['department_code']
    //     ]);


    //     session()->flash('edit', 'Department Updated successfully');
    //     $this->resetInput();
    //     $this->dispatchBrowserEvent('close-modal');
    // }


    // public function getDeptDeleteDetails(int $department_id) {
    //     $this->department_id = $department_id;
    // }

    // public function DeleteDepartment(int $department_id) {

    //     department::find($department_id)->delete();
    //     session()->flash('delete', 'Department Deleted successfully');
    //     $this->dispatchBrowserEvent('close-modal');

    // }    

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset('name','capacity', 'floor_id', 'building_id');
    }

    public function render()
    {
        
        $buildings = building::latest()->get();
        $floors = floor::latest()->get();
        // $rooms = room::where('building_id', 'like', '%'.$this->building_id.'%')->where('floor_id', 'like', '%'.$this->floor_id.'%')->get();
        // $rooms = room::with('floor', 'building')->latest()->paginate();

          
        return view('livewire.section.room'
           
            // 'col' => $this->col
         );
            
    }
    //         $departmentsWithHeadOfDepartment = department::with('section', 'employee', 'role')
    // ->paginate(5);


        //  $departments = department::latest()->paginate(5);

         
     }


