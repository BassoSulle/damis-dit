<?php

namespace App\Http\Livewire\Section;

use App\Models\role;
use App\Models\room;
use App\Models\asset;
use App\Models\floor;
use App\Models\section;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\building;
use App\Models\employee;
use App\Models\condition;
use App\Models\asset_type;
use App\Models\department;
use Livewire\WithPagination;
use App\Models\asset_assignment;

class AssetAssignment extends Component
{
    use WithPagination;

    public $asset_id, $description, $remarks, $condition_id, $assettype_id, $role_id, $department_id, $section_id, $building_id, $floor_id, $room_id, $bulkAssets, $numberOfAssets;
    
    public $headOfSection_id, $headOfOffice_id;
    
    public $HOS, $headOfDepartment, $headOfSection, $headOfOffice;

    public $singleAsset = [];
    public $display1 = '';

    public $sectionDisplay = 'none';

    public $buildingAndFloorDisplay = 'none';
    public $roomDisplay = 'none';

    public $col = '12';

    public $bdCol = '6';

    public $margin = '';

    public $display2 = 'none';

    public $remarksDisplay = 'block';

    public $selectedAsset_id = [0];
    public $selectedAssets = [];

    public $assetsToAssign = [];

    public $assetToAssign = [];

    public $assetToAssign_id;

    protected function rules() {
        return [
                'building_id' => 'required',
                'floor_id' => 'required',
                'room_id' => 'required',
    
        ];

    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function getAssetToAssign(int $asset_id) {

        $this->display1 = 'block';
        $this->display2 = 'none';
        $this->remarksDisplay = 'block';

        $this->bulkAssets = '';

        $this->selectedAsset_id = '';

        $this->assetToAssign_id = $asset_id;

        $asset = asset_assignment::find($asset_id);
        $this->remarks = $asset->remarks;

        $this->singleAsset[] = $asset->id;

    }

    public function BulkAssetAssignment() {
        $this->display1 = 'none';
        $this->display2 = 'block';

        $this->singleAsset = '';

    }

    public function getAssetsToAssign() {
        $this->display1 = 'block';
        $this->display2 = 'none';   
        $this->assetToAssign_id = '';   
        $this->remarksDisplay = 'none';
        
        array_splice($this->selectedAsset_id, 0, 1);

        $this->bulkAssets = count($this->selectedAsset_id);

        if (empty($this->bulkAssets)) {
            session()->flash('select-asset', 'Please select Asset(s) to assign.');
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');

        }

    } 

    public function AssignAssets() {

        $validatedData = $this->validate();

        if (!empty($this->assetToAssign_id) && empty($this->bulkAssets)) {
            
            asset_assignment::where('id', $this->assetToAssign_id)->update([

                'room_id' => $validatedData['room_id'],
                'headOfOffice_id' => $this->headOfOffice_id,

            ]);

            session()->flash('asset-assigned', 'Assets Assigned successfully');
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
            

        }

        if (!empty($this->selectedAsset_id) && !empty($this->bulkAssets)) {

            for($i = 0; $i < count($this->selectedAsset_id); $i++) {

                if ((int)$this->selectedAsset_id[$i] != 0) {

                    $assetID = (int)$this->selectedAsset_id[$i];

                    asset_assignment::where('id', $assetID)->update([

                        'room_id' => $validatedData['room_id'],
                        'headOfOffice_id' => $this->headOfOffice_id,
        
                    ]);

                }
            
            }
            
            session()->flash('assets-assigned', 'Assets Assigned successfully');
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
           
        }
    }

    public function CancelBulkAssign() {
        $this->display1 = 'block';
        $this->display2 = 'none';

        $this->resetInput();
        
    }

    public function removeSelectedAsset(int $key) {

      unset($this->assetsToAssign[$key]);

        if (empty($this->assetsToAssign)) {
            $this->dispatchBrowserEvent('close-modal');
        }
    }

    public function mount() {

    }

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset(
                'role_id',
                'building_id',
                'floor_id',
                'room_id',
                'headOfOffice_id',

        );

        unset(
            $this->headOfOffice_id,
            $this->headOfOffice,
            
            $this->singleAsset,
            $this->bulkAssets,
            $this->assetsToAssign,
            $this->selectedAsset_id

        );

        $this->selectedAsset_id = [0];
        $this->assetsToAssign = [];

    }

    public function assignedAssetsPage() {
        return redirect()->route('headOfSection.assignedAssets');
    }

    public function render()
    {
        $HOS_id = Auth::user()->id;
        $this->HOS = employee::find($HOS_id);

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();
        $departments=department::latest()->get();
        $buildings = building::latest()->get();
        $floors = floor::latest()->get();
        $employees = employee::all();

        $sections = section::where('department_id', 'like', '%'.$this->HOS->department_id.'%')->get();

        $rooms = room::where('building_id', 'like', '%'.$this->building_id.'%')->where('floor_id', 'like', '%'.$this->floor_id.'%')->get();

        $role = role::where('name', 'head of office')->get();

        foreach ($role as $rl) {
            $this->role_id  = $rl->id;

        }

        $employeeToAssign = employee::where('department_id', 'like', '%'.$this->HOS->department_id.'%')->where('section_id', 'like', '%'.$this->HOS->section_id.'%')->where('room_id', 'like', '%'.$this->room_id.'%')->where('role_id', $this->role_id)->get();

        foreach ($employeeToAssign as $employee) {

            if (!empty($this->room_id)) {
                $this->headOfOffice_id = $employee->id;
                $this->headOfOffice = $employee->first_name . ' ' . $employee->last_name;

            } 

        }

        $assigned_assets=asset_assignment::where('section_id', $this->HOS->section_id)->whereNUll('room_id')->paginate(10);
        
        return view('livewire.section.asset-assignment', ['assigned_assets' => $assigned_assets], ['asset_types'=>$asset_types,
        'conditions'=>$conditions,
        // 'roles' => $roles, 
        'departments' => $departments, 
        'sections' => $sections, 
        'buildings' => $buildings,
        'floors' => $floors, 
        'rooms' => $rooms,
        'sectionDisplay' => $this->sectionDisplay,
        'buildingAndFloorDisplay' => $this->buildingAndFloorDisplay,
        'roomDisplay' => $this->roomDisplay,
        // 'employeeToAssign' => $employeeToAssign,
        'employees' => $employees]);
    }

}
