<?php

namespace App\Http\Livewire\Admin;

use App\Models\employee;
use App\Models\section;
use App\Models\department;
use Livewire\WithPagination;
use Livewire\Component;

class SectionList extends Component
{

    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

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

    public function ShowSoftDeleteModal(int $section_id) {
        $this->section_id = $section_id;

    }

    public function SoftDeleteSection(int $section_id) {

        $section = section::find($section_id);

        if ($section->is_active == true) {

            section::where('id', $section_id)->update([
                'is_active' => false
            ]);

            session()->flash('deactivated', 'Section Account Deactivated successfully');
            $this->dispatchBrowserEvent('close-modal');

        } else {

            section::where('id', $section_id)->update([
                'is_active' => true
            ]);

            session()->flash('activated', 'Section Account Activated successfully');
            $this->dispatchBrowserEvent('close-modal');

    }

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

        // $sectionsWithHeadOfSection = section::with('employees', 'employees.role')
            // ->whereHas('employees.role', function ($query) {
            //     $query->orWhere('name', 'head of section');
            // })
            // ->paginate(5);

        $sectionsWithHeadOfSection = section::latest()->paginate(10);
        
        return view('livewire.admin.section-list',['sectionsWithHeadOfSection'=>$sectionsWithHeadOfSection], ['departments'=>$departments, 'employees' => $employees]);
    }
}
