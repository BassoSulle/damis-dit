<?php

namespace App\Http\Livewire\Store;

use App\Models\asset;
use App\Models\asset_assignment;
use App\Models\building;
use App\Models\employee;
use App\Models\floor;
use App\Models\role;
use App\Models\section;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\condition;
use App\Models\asset_type;
use App\Models\department;
use App\Models\room;
use Livewire\WithPagination;

class AssetAssignmentList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $asset_id, $description, $remarks, $condition_id, $assettype_id, $role_id, $department_id, $section_id, $building_id, $floor_id, $room_id, $bulkAssets, $numberOfAssets;
    
    public $assigned_by, $headOfDepartment_id, $headOfSection_id, $headOfOffice_id;
    
    public $headOfDepartment, $headOfSection, $headOfOffice;

    public $singleAsset = [];
    public $display1 = '';

    public $sectionDisplay = 'none';

    public $buildingDisplay = 'none';
    public $floorDisplay = 'none';

    public $col = '6';

    public $bdCol = '6';

    public $margin = '20px';

    public $display2 = 'none';

    public $selectedAsset_id = [0];
    public $selectedAssets = [];

    public $assetsToAssign = [];

    public $assetToAssign = [];

    public $assetToAssign_id;

    protected function rules() {
        return [
                'remarks' => 'required',
                'role_id' => 'required',
                'department_id' => 'required',
                'section_id' => $this->col == 12 ? 'required' : '',
                'building_id' => $this->bdCol == 6 ? 'required' : '',
                'floor_id' => $this->bdCol == 6 ? 'required' : '',
                'room_id' => $this->bdCol == 6 ? 'required' : '',
    
        ];

    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function getAssetToAssign(int $asset_id) {

        $this->display1 = 'block';
        $this->display2 = 'none';

        $this->bulkAssets = '';

        $this->selectedAsset_id = '';

        $assetToAssign = asset::find($asset_id)->id;

        $this->assetToAssign_id = $asset_id;

        $this->singleAsset[] = $assetToAssign;

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
        
        array_splice($this->selectedAsset_id, 0, 1);

        $this->bulkAssets = count($this->selectedAsset_id);

        if (empty($this->bulkAssets)) {
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('select-asset', 'Please select Asset(s) to assign.');

        }

    } 

    public function AssignAssets() {

        $validatedData = $this->validate();

        if (!empty($this->assetToAssign_id) && empty($this->bulkAssets)) {

            $assetAssigned = asset_assignment::create([

                'asset_id' => $this->assetToAssign_id,
                'remarks' => $validatedData['remarks'],
                'department_id' => $validatedData['department_id'],
                'section_id' => $validatedData['section_id'],
                'room_id' => $validatedData['room_id'],
                'headOfDepartment_id' => $this->headOfDepartment_id,
                'headOfSection_id' => $this->headOfSection_id,
                'headOfOffice_id' => $this->headOfOffice_id,
                'assigned_by' => $this->assigned_by

            ]);

            if ($assetAssigned) {

                asset::where('id', $this->assetToAssign_id)->update([
                    'is_assigned' => true
                ]);
    
            }

            session()->flash('asset-assigned', 'Asset Assigned successfully');
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');

        }

        if (!empty($this->selectedAsset_id) && !empty($this->bulkAssets)) {

            for($i = 0; $i < count($this->selectedAsset_id); $i++) {

                if ((int)$this->selectedAsset_id[$i] != 0) {

                    $assetID = (int)$this->selectedAsset_id[$i];

                    $assetAssigned = asset_assignment::create([

                        'asset_id' => $assetID,
                        'remarks' => $validatedData['remarks'],
                        'department_id' => $validatedData['department_id'],
                        'section_id' => $validatedData['section_id'],
                        'room_id' => $validatedData['room_id'],
                        'headOfDepartment_id' => $this->headOfDepartment_id,
                        'headOfSection_id' => $this->headOfSection_id,
                        'headOfOffice_id' => $this->headOfOffice_id,
                        'assigned_by' => $this->assigned_by
        
                    ]);

                    if ($assetAssigned) {

                        asset::where('id', $assetID)->update([
                            'is_assigned' => true
                        ]);
            
                    }

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
        // $this->selectedAssets = array_splice($this->selectedAssets, $asset_id, 1);
        // dd($this->assetsToAssign);

        if (empty($this->assetsToAssign)) {
            $this->dispatchBrowserEvent('close-modal');
        }
    }

    public function closeModal() {
        $this->resetInput();
    }

    public function resetInput() {
        $this->reset(
                'remarks',
                'role_id',
                'department_id',
                'section_id',
                'building_id',
                'floor_id',
                'room_id',
                'headOfDepartment_id',
                'headOfSection_id',
                'headOfOffice_id',
                'assigned_by',

        );

        unset(
            $this->headOfDepartment_id,
            $this->headOfDepartment,
            $this->headOfSection_id,
            $this->headOfSection,
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

    public function assignedAssetPage() {
        return redirect()->route('store.assignedAsset');

    }

    public function render()
    {

        $employeeToAssign = employee::all();

        foreach ($employeeToAssign as $employee) {
            if (!empty($this->role_id) && ($this->role_id == $employee->role_id) && ($employee->role->name == 'director') && !empty($this->department_id) && ($this->department_id == $employee->department_id)) {
                $this->headOfDepartment_id = $employee->id;
                $this->headOfDepartment = $employee->first_name . ' ' . $employee->last_name;

            } elseif (!empty($this->role_id) && ($this->role_id == $employee->role_id)  && ($employee->role->name == 'head of section') && !empty($this->department_id) && ($this->department_id == $employee->department_id) && !empty($this->section_id) && ($this->section_id == $employee->section_id)) {
                $this->headOfSection_id = $employee->id;
                $this->headOfSection = $employee->first_name . ' ' . $employee->last_name;

            } elseif (!empty($this->role_id) && ($this->role_id == $employee->role_id)  && ($employee->role->name == 'head of office') && !empty($this->department_id) && ($this->department_id == $employee->department_id) && !empty($this->section_id) && ($this->section_id == $employee->section_id) && !empty($this->room_id) && ($this->room_id == $employee->room_id)) {
                $this->headOfOffice_id = $employee->id;
                $this->headOfOffice = $employee->first_name . ' ' . $employee->last_name;

            }

        }

        $storeKeeper = Auth::user();
        $this->assigned_by = $storeKeeper->id;

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();
        $roles=role::latest()->get();
        $departments=department::latest()->get();
        $buildings = building::latest()->get();
        $floors = floor::latest()->get();
        $sections = section::where('department_id', 'like', '%'.$this->department_id.'%')->get();

        if (!empty($this->role_id)) {

            foreach ($roles as $role) {
               if ($this->role_id == $role->id) {
   
                   if ($role->name == 'head of section') {
                       $this->sectionDisplay = 'block';
                       $this->col = '12';
                       $this->margin = '';
                       $this->buildingDisplay = 'none';
                       $this->floorDisplay = 'none';

                   } elseif ($role->name == 'head of office') {
                        $this->sectionDisplay = 'block';
                        $this->col = '6';
                        $this->bdCol = '6';
                        $this->margin = '20px';
                        $this->buildingDisplay = 'block';
                        $this->floorDisplay = 'block';

                   } elseif (($role->name == 'director') || ($role->name == 'estate') || ($role->name == 'store keeper')) {
                       $sections = [];
                       $this->bdCol = '12';
                       $this->margin = '20px';
                       $this->sectionDisplay = 'none';
                       $this->buildingDisplay = 'none';
                       $this->floorDisplay = 'none';

                   }
               }
            }
   
        } 
        //    else {
        //        $sectionsDisplay = 'none';
   
        //    }
                 
        $rooms = room::where('building_id', 'like', '%'.$this->building_id.'%')->where('floor_id', 'like', '%'.$this->floor_id.'%')->get();

        $assets = asset::where('is_assigned', false)->where('is_active', true)->latest()->paginate(10);
        
        return view('livewire.store.asset-assignment-list', ['assets' => $assets], [
            'asset_types'=>$asset_types,
            'conditions'=>$conditions,
            'roles' => $roles, 
            'departments' => $departments, 
            'sections' => $sections, 
            'buildings' => $buildings,
            'floors' => $floors, 
            'rooms' => $rooms, 
            'sectionDisplay' => $this->sectionDisplay,
            'buildingDisplay' => $this->buildingDisplay,
            'floorDisplay' => $this->floorDisplay,
            'employeeToAssign' => $employeeToAssign,
            'storeKeeper' => $storeKeeper
        ]);
    }

}
