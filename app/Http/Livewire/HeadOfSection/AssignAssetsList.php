<?php

namespace App\Http\Livewire\HeadOfSection;

use App\Models\asset_assignment;
use App\Models\asset_type;
use App\Models\building;
use App\Models\condition;
use App\Models\department;
use App\Models\employee;
use App\Models\floor;
use App\Models\role;
use App\Models\room;
use App\Models\section;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AssignAssetsList extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

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
                'remarks' => $this->remarksDisplay == 'none' ? 'required' : '',
                'role_id' => 'required',
                'section_id' =>  $this->sectionDisplay == 'block' ? 'required' : '',
                'building_id' => $this->buildingAndFloorDisplay == 'block' ? 'required' : '',
                'floor_id' => $this->buildingAndFloorDisplay == 'block' ? 'required' : '',
                'room_id' => $this->roomDisplay == 'block' ? 'required' : '',
    
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

        // $assetToAssign = asset_assignment::find($asset_id)->id;

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
        $this->remarksDisplay = 'none';
        
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

        if (!empty($this->assetToAssign_id)) {
            
            asset_assignment::where('id', $this->assetToAssign_id)->update([

                'remarks' => $validatedData['remarks'],
                'section_id' => $validatedData['section_id'],
                'room_id' => $validatedData['room_id'],
                'headOfSection_id' => $this->headOfSection_id,
                'headOfOffice_id' => $this->headOfOffice_id,

            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('asset-assigned', 'Asset Assigned successfully');
            

        }

        if (!empty($this->selectedAsset_id)) {

            for($i = 0; $i < count($this->selectedAsset_id); $i++) {

                if ((int)$this->selectedAsset_id[$i] != 0) {

                    $assetID = (int)$this->selectedAsset_id[$i];

                    asset_assignment::where('id', $assetID)->update([

                        // 'remarks' => $validatedData['remarks'],
                        'section_id' => $validatedData['section_id'],
                        'room_id' => $validatedData['room_id'],
                        'headOfSection_id' => $this->headOfSection_id,
                        'headOfOffice_id' => $this->headOfOffice_id,
        
                    ]);

                }
            
            }
            
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('assets-assigned', 'Assets Assigned successfully');
           
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
                'headOfSection_id',
                'headOfOffice_id',
                'HOS',

        );

        unset(
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

    public function assignedAssetsPage() {
        return redirect()->route('director.assignedAsset');
    }

    public function render()
    {
        $employeeToAssign = employee::all();

        foreach ($employeeToAssign as $employee) {
            if (!empty($this->role_id) && ($this->role_id == $employee->role_id)  && ($employee->role->name == 'head of section') && !empty($this->HOS->department_id) && ($this->HOS->department_id == $employee->department_id) && !empty($this->section_id) && ($this->section_id == $employee->section_id)) {
                $this->headOfSection_id = $employee->id;
                $this->headOfSection = $employee->first_name . ' ' . $employee->last_name;

            } elseif (!empty($this->role_id) && ($this->role_id == $employee->role_id)  && ($employee->role->name == 'head of office') && !empty($this->HOS->department_id) && ($this->HOS->department_id == $employee->department_id) && !empty($this->section_id) && ($this->section_id == $employee->section_id) && !empty($this->room_id) && ($this->room_id == $employee->room_id)) {
                $this->headOfOffice_id = $employee->id;
                $this->headOfOffice = $employee->first_name . ' ' . $employee->last_name;

            }

        }

        $HOS_id = Auth::user()->id;
        $this->HOS = employee::find($HOS_id);

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();
        $roles=role::latest()->get();
        $departments=department::latest()->get();
        $buildings = building::latest()->get();
        $floors = floor::latest()->get();
        $employees = employee::all();

        $sections = section::where('department_id', 'like', '%'.$this->HOS->department_id.'%')->get();

        if (!empty($this->role_id)) {

            foreach ($roles as $role) {
               if ($this->role_id == $role->id) {
   
                   if ($role->name == 'head of section') {
                       $this->sectionDisplay = 'block';
                       $this->col = '6';
                       $this->margin = '20px';
                       $this->buildingAndFloorDisplay = 'none';
                       $this->roomDisplay = 'none';

                   } elseif ($role->name == 'head of office') {
                        $this->sectionDisplay = 'block';
                        $this->col = '6';
                        $this->bdCol = '6';
                        $this->margin = '20px';
                        $this->buildingAndFloorDisplay = 'block';
                        $this->roomDisplay = 'block';

                   } 

               }
            }
   
        } else {

                $this->col = '12';
                $this->margin = '';
                $this->sectionDisplay = 'none';
                $this->buildingAndFloorDisplay = 'none';
                $this->roomDisplay = 'none';
   
        }
                 
        $rooms = room::where('building_id', 'like', '%'.$this->building_id.'%')->where('floor_id', 'like', '%'.$this->floor_id.'%')->get();

        // $assets = asset::where('is_assigned', false)->latest()->get();

        $assigned_assets=asset_assignment::where('department_id', $this->HOS->department_id)->whereNull('room_id')->paginate(10);
        
        return view('livewire.head-of-section.assign-assets-list', [
            'asset_types'=>$asset_types,
            'conditions'=>$conditions,
            'roles' => $roles, 
            'departments' => $departments, 
            'sections' => $sections, 
            'buildings' => $buildings,
            'floors' => $floors, 
            'rooms' => $rooms,
            'assigned_assets' => $assigned_assets,
            'sectionDisplay' => $this->sectionDisplay,
            'buildingAndFloorDisplay' => $this->buildingAndFloorDisplay,
            'roomDisplay' => $this->roomDisplay,
            'employeeToAssign' => $employeeToAssign,
            'employees' => $employees
        ]);
    }
}
