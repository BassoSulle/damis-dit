<?php

namespace App\Http\Livewire\Store;

use App\Models\asset;
use App\Models\asset_assignment;
use App\Models\employee;
use Livewire\Component;

class AssignedAssetsList extends Component
{
    public $asset;

    public $assigned_asset = [];

    public function AssignAssetPage() {
        return redirect()->route('store.assignAsset');

    }

    public function ViewAsset(int $asset_id) {
        $this->assigned_asset = [];
        $this->assigned_asset = asset_assignment::where('id', $asset_id)->get();

    }

    public function closeModal() {
        $this->assigned_asset = [];
    }
    
    public function render()
    {
        $assets = asset::where('is_assigned', true)->where('is_active', true)->latest()->get();

        $assignedAssets = asset_assignment::latest()->paginate(10);

        $employees = employee::latest()->get();

        return view('livewire.store.assigned-assets-list', ['assignedAssets' => $assignedAssets],
         [
            'assets' => $assets, 
            'employees' => $employees
        ]);
    }
}
