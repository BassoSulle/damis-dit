<?php

namespace App\Http\Livewire\OfficeBearer;

use App\Models\asset;
use App\Models\asset_assignment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\employee;

class AssignedAssetsList extends Component
{
    public $assigned_asset = [];

    public $viewing = false;

    // public function mount() {
    //     $this->assigned_asset = new asset_assignment();

    // }

    public function ViewAsset(int $asset_id) {
        $this->assigned_asset = asset_assignment::findOrFail($asset_id);
        $this->viewing = true;

    }
    
    public function closeModal() {
        $this->assigned_asset = [];
        $this->viewing = false;
    }

    public function render()
    {

        $officeBearer_id = Auth::user()->id;
        $officeBearer = employee::find($officeBearer_id);

        $assets = asset::where('is_assigned', true)->latest()->get();

        $assignedAssets = asset_assignment::where('department_id', $officeBearer->department_id)->where('section_id', $officeBearer->section_id)->where('room_id', $officeBearer->room_id)->paginate(10);

        $employees = employee::latest()->get();

        return view('livewire.office-bearer.assigned-assets-list', ['assignedAssets' => $assignedAssets],
        [
           'assets' => $assets, 
           'employees' => $employees
       ]);
    }
}
