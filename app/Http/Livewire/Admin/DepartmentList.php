<?php

namespace App\Http\Livewire\Admin;

use App\Models\address;
use Livewire\Component;
use App\Models\department;
use App\Models\employee;
use App\Models\role;
use Livewire\WithPagination;
use Illuminate\Validation\Rule as ValidationRule;

class DepartmentList extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public $name, $department_code, $department_id;

    protected $rules = [
            'name' => 'required',
            'department_code' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveDepartment()
    {
        $validatedData = $this->validate();

        department::create($validatedData);
        session()->flash('add', 'Department Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function getDeptDetails(int $department_id) {
        $departmentData = department::find($department_id);

        if ($departmentData) {
            $this->department_id = $departmentData->id;
            $this->name = $departmentData->name;
            $this->department_code = $departmentData->department_code;

        }

    }

    public function EditDepartment(int $department_id) {

        $validatedData = $this->validate();

        department::where('id', $department_id)->update([
            'name' => $validatedData['name'],
            'department_code' => $validatedData['department_code']
        ]);


        session()->flash('edit', 'Department Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function getDeptDeleteDetails(int $department_id) {
        $this->department_id = $department_id;
    }

    public function DeleteDepartment(int $department_id) {

        department::find($department_id)->delete();
        session()->flash('delete', 'Department Deleted successfully');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset('name','department_code');
    }

    public function render()
    {
        // $departmentsWithHeadOfDepartment = department::with(['sections.employees' => function ($query) {
        //     $query->whereHas('role', function ($roleQuery) {
        //         $roleQuery->where('name', 'director');
        //     });
        // }])
        //     ->paginate(5);

    //         $departmentsWithHeadOfDepartment = department::with('section', 'employee', 'role')
    // ->paginate(5);

        $addresses = address::all();
        $employees = employee::all();
        $roles = role::all();

        

        $departmentsWithHeadOfDepartment = department::latest()->paginate(10);
    
        //  $departments = department::latest()->paginate(5);

         return view('livewire.admin.department-list',['departmentsWithHeadOfDepartment'=>$departmentsWithHeadOfDepartment], ['addresses' => $addresses, 'employees' => $employees, 'roles' => $roles]);
    }

}
