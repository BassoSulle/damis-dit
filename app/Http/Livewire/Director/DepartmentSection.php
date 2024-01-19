<?php

namespace App\Http\Livewire\Director;

use App\Models\section;
use Livewire\Component;
use App\Models\employee;
use App\Models\department;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class DepartmentSection extends Component
{
    use WithPagination;

    public $name, $department_id, $section_id;

    protected $rules = [
        'name' => 'required',
        'department_id' => 'required'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function AddSection(){

        $validatedData = $this->validate();

        section::create($validatedData);

        session()->flash('add', 'Section Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

public function getSectionDetails(int $section_id){
$section=section::find($section_id);

if ($section) {
    $this->section_id = $section->id;
    $this->name = $section->name;
    $this->department_id= $section->department_id;
}
}

public function EditSection(int $section_id) {

    $validatedData = $this->validate();

    section::where('id', $section_id)->update([
        'name' => $validatedData['name'],
        'department_id' => $validatedData['department_id']
    ]);
    session()->flash('edit', 'Section Updated successfully');
    $this->resetInput();
    $this->dispatchBrowserEvent('close-modal');

    }

    public function getSectionDeleteDetails(int $section_id) {
        $this->section_id = $section_id;
    }

    public function DeleteSection(int $section_id) {

        section::find($section_id)->delete();
        session()->flash('delete', 'Department Section Deleted successfully');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function closeModal() {
        $this->resetInput();
    }
    public function resetInput() {
        $this->reset('name',"department_id");

    }

    public function render()
    {

        $departments=department::latest()->get();
        $employees = employee::all();

        $director_id = Auth::user()->id;
        $director = employee::find($director_id);

        $sectionsWithHeadOfSection = section::where('department_id', $director->department_id)->latest()
        // with('employees', 'employees.role')
        //     ->whereHas('employees.role', function ($query) {
        //         $query->orWhere('name', 'head of section');
        //     })
            ->paginate(5);

        return view('livewire.director.department-section',['sectionsWithHeadOfSection'=>$sectionsWithHeadOfSection], ['departments'=>$departments, 'employees' => $employees]);
    }
}
