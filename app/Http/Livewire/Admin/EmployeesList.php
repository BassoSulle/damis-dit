<?php

namespace App\Http\Livewire\Admin;

use App\Models\address;
use App\Models\building;
use App\Models\department;
use App\Models\floor;
use App\Models\role;
use App\Models\room;
use App\Models\section;
use Livewire\Component;
use App\Models\employee;
use Livewire\WithPagination;
// use Illuminate\Support\Str;
use Illuminate\Validation\Rule as ValidationRule;

class EmployeesList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $first_name, $last_name, $phone, $email, $department_id, $section_id, $role_id, $building_id, $floor_id, $room_id, $employee_id, $col;

    protected function rules() {
        return [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
                'department_id' => 'required',
                'section_id' => $this->col == 4 ? 'required' : '',
                'role_id' => 'required',
                'building_id' => 'required',
                'floor_id' => 'required',
                'room_id' => 'required',
        ];

    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveEmployee()
    {
        $validatedData = $this->validate();

        // $addressCode = Str::uuid();
        
    //    $address = address::create([
    //         // 'address_code' => $addressCode,
    //         'department_id' => $validatedData['department_id'],
    //         'section_id' => $validatedData['section_id'],
    //         'room_id' => $validatedData['room_id']
    //     ]);

        // if($address) {

           $employee = employee::create(
                $validatedData
            // [

                // 'first_name' => $validatedData['first_name'],
                // 'last_name' => $validatedData['last_name'],
                // 'phone' => $validatedData['phone'],
                // 'email' => $validatedData['email'],
                // 'role_id' => $validatedData['role_id'],
    
            // ]
        );

            // if ($employee) {

            //     $createdAddress = address::latest()->first();
            //     $createdEmployee = employee::latest()->first();
    
            //     employee::where('id', $createdEmployee->id)->update([
            //         'address_id' => $createdAddress->id
            //     ]);
    
            // }

        // }

        session()->flash('add', 'Employee Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function getEmployeeDetails(int $employee_id) {
        $employeeData = employee::with('role', 'section.department', 'room.building', 'room.floor')->find($employee_id);

        if ($employeeData) {

            $this->employee_id = $employeeData->id;
            $this->first_name = $employeeData->first_name;
            $this->last_name = $employeeData->last_name;
            $this->email = $employeeData->email;
            $this->phone = $employeeData->phone;
            $this->department_id = $employeeData->section->department->id;
            $this->section_id = $employeeData->section_id;
            $this->role_id = $employeeData->role->id;
            $this->building_id = $employeeData->room->building->id;
            $this->floor_id = $employeeData->room->floor->id;
            $this->room_id = $employeeData->room_id;

        }

        if ($this->section_id != '' ) {
            $this->col = 4;

        }

    }

    public function EditEmployee(int $employee_id) {

        $validatedData = $this->validate();

        employee::where('id', $employee_id)->update([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'department_id' => $validatedData['department_id'],
            'section_id' => $validatedData['section_id'],
            'role_id' => $validatedData['role_id'],
            'building_id' => $validatedData['building_id'],
            'floor_id' => $validatedData['floor_id'],
            'room_id' => $validatedData['room_id'],
        ]);

        session()->flash('edit', 'Employee Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }


    public function ShowSoftDeleteModal(int $employeeId) {
        $this->employee_id = $employeeId;

    }

    public function SoftDeleteEmployee(int $employee_id) {

        $employee = employee::find($employee_id);

        if ($employee->is_active == true) {

            employee::where('id', $employee_id)->update([
                'is_active' => false
            ]);

            session()->flash('deactivated', 'Employee Account Deactivated successfully');
            $this->dispatchBrowserEvent('close-modal');

        } else {

            employee::where('id', $employee_id)->update([
                'is_active' => true
            ]);

            session()->flash('activated', 'Employee Account Activated successfully');
            $this->dispatchBrowserEvent('close-modal');

        }

    }


    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset(
      'first_name',
    'last_name',
    'email',
    'phone',
    'department_id',
    'section_id',
    'role_id',
    'building_id',
    'floor_id',
    'room_id'
        );
    }

    public function render()
    {

         $departments = department::latest()->get();

        //  $sections = section::where('department_id', 'like', '%'.$this->department_id.'%')->get();

         $roles = role::latest()->get();

         $buildings = building::latest()->get();
         $floors = floor::latest()->get();

         if (!empty($this->role_id)) {

         foreach ($roles as $role) {
            if ($this->role_id == $role->id) {

                if (($role->name == 'head of section') || ($role->name == 'head of office')) {
                    $sectionsDisplay = 'block';
                    $sections = section::where('department_id', 'like', '%'.$this->department_id.'%')->get();
                    $this->col = '4';

                    
                } else {
                    $sections = [];
                    $sectionsDisplay = 'none';
                    $this->col = '8';


                }
            }
         }

        } else {
            $sections = section::where('department_id', 'like', '%'.$this->department_id.'%')->get();
            $sectionsDisplay = 'none';
            $this->col = '8';

        }


         $rooms = room::where('building_id', 'like', '%'.$this->building_id.'%')->where('floor_id', 'like', '%'.$this->floor_id.'%')->get();

         $addresses = address::all();
         
         $employees = employee::latest()->paginate(10);

         return view('livewire.admin.employees-list',['employees' => $employees], [
            'departments' => $departments,
            'sections' => $sections,
            'roles' => $roles,
            'buildings' => $buildings,
            'floors' => $floors,
            'rooms' => $rooms,
            'addresses' => $addresses,
            'sectionsDisplay' => $sectionsDisplay,
            'col' => $this->col
         ]);
    }

}
