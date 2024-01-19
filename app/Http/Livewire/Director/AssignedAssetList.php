<?php

namespace App\Http\Livewire\Director;

use Illuminate\Support\Facades\Auth;
use App\Models\employee;
use App\Models\asset_assignment;
use Livewire\WithPagination;
use App\Models\asset;
use Livewire\Component;

class AssignedAssetList extends Component
{
    use WithPagination;

    public $asset;

    public $assigned_asset = [];

    public function ViewAsset(int $asset_id) {
        // array_splice($this->assigned_asset, 0);
        $this->assigned_asset = [];
        $this->assigned_asset = asset_assignment::where('id', $asset_id)->get();

    }

    public function closeModal() {
        $this->assigned_asset = [];
    }

    public function AssignAssetPage() {
        return redirect()->route('director.assignAsset');

    }

    public function render()
    {

        $director_id = Auth::user()->id;
        $director = employee::find($director_id);

        $assigned_assets = asset_assignment::join('assets', 'asset_assignments.asset_id', '=', 'assets.id')
        ->where('assets.is_active', true)->select('asset_assignments.*')
        ->where('department_id', $director->department_id)->whereNotNull('section_id')
        ->whereNotNull('room_id')->paginate(10);

        $employees = employee::latest()->get();
        
        $assets = asset::where('is_assigned', true)->latest()->paginate(10);

        return view('livewire.director.assigned-asset-list', ['assets' => $assets],['assigned_assets'=>$assigned_assets, 'employees' => $employees]);
    }
}
