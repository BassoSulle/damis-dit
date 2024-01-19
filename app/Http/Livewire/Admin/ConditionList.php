<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\condition;
use Livewire\WithPagination;
use Illuminate\Validation\Rule as ValidationRule;

class ConditionList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $name, $condition_id;

    public $rules = [
        'name' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function AddCondition() {

        $validatedData = $this->validate();

        condition::create($validatedData);
        session()->flash('add', 'Condition Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function getConditionDetails(int $condition_id) {
        $condition = condition::find($condition_id);

        if ($condition) {
            $this->condition_id = $condition->id;
            $this->name = $condition->name;
        }
    }

    public function EditCondition(int $condition_id) {

        $validatedData = $this->validate();

        condition::where('id', $condition_id)->update([
            'name' => $validatedData['name']
        ]);

        session()->flash('edit', 'Condition Updated successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function getDeleteCondition(int $condition_id) {
        $this->condition_id = $condition_id;
    }

    public function DeleteCondition(int $condition_id) {

        condition::where('id', $condition_id)->delete();

        session()->flash('delete', 'Condition Deleted successfully');
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
        $conditions = condition::latest()->paginate(5);
        return view('livewire.admin.condition-list', ['conditions' => $conditions]);
    }
}
