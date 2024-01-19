<?php

namespace App\Http\Livewire\Admin;

use App\Models\asset_type;
use App\Models\asset_class;
use Livewire\Component;
use Illuminate\Validation\Rule as ValidationRule;

class ClassList extends Component
{

    public $name, $asset_type_id, $class_id;

    protected $rules = [
        'name' => 'required',
        'asset_type_id' => 'required'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function AddClass(){

        $validatedData = $this->validate();

        asset_class::create($validatedData);

        session()->flash('add', 'Asset Class Added successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

public function getClassDetails(int $class_id){

    $asset_class=asset_class::find($class_id);

    if ($asset_class) {
        $this->class_id = $asset_class->id;
        $this->name = $asset_class->name;
        $this->asset_type_id= $asset_class->asset_type_id;
    }
}

public function EditClass(int $class_id) {

    $validatedData = $this->validate();

    asset_class::where('id', $class_id)->update([
        'name' => $validatedData['name'],
        'asset_type_id' => $validatedData['asset_type_id']
    ]);

    session()->flash('edit', 'Class Updated successfully');
    $this->resetInput();
    $this->dispatchBrowserEvent('close-modal');

    }

    public function getClassDeleteDetails(int $class_id) {
        $this->class_id = $class_id;
    }

    public function DeleteClass(int $class_id) {

        asset_class::find($class_id)->delete();
        session()->flash('delete', 'Class Deleted successfully');
        $this->dispatchBrowserEvent('close-modal');

    }

    public function closeModal() {
        $this->resetInput();
    }
    public function resetInput() {
        $this->reset('name',"asset_type_id");

    }

    public function render()
    {
        $assetTypes=asset_type::latest()->get();

        $classes = asset_class::latest()->paginate(5);

        return view('livewire.admin.class-list',['classes'=>$classes], ['assetTypes'=>$assetTypes]);
    }
}
