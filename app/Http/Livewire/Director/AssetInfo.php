<?php

namespace App\Http\Livewire\Director;

use App\Models\role;
use App\Models\room;
use App\Models\asset;
use App\Models\floor;
use App\Models\section;
use Livewire\Component;
use App\Models\building;
use App\Models\employee;
use App\Models\condition;
use App\Models\asset_type;
use App\Models\department;
use Livewire\WithPagination;
use App\Models\asset_assignment;
use Illuminate\Support\Facades\Auth;


class AssetInfo extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public $asset_id, $asset_no, $description, $assettype_id, $serial_no, $condition_id, $cost, $accumulated_depreciation, $acquisition_date, $acquisition_type, $gfs_code, $gfs_description, $remarks ;

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

    public function registerAssetPage() {
        return redirect()->route('store.registerAsset');

    }

    public function render()
    {
        $director_id = Auth::user()->id;
        $director = employee::find($director_id);

        $asset_types=asset_type::latest()->get();
        $conditions=condition::latest()->get();
        $employees = employee::all();

        // $assets = asset::latest()->paginate(10);

        $assigned_assets = asset_assignment::join('assets', 'asset_assignments.asset_id', '=', 'assets.id')
        ->where('assets.is_active', true)->select('asset_assignments.*')
        ->where('department_id', $director->department_id)->paginate(10);

        return view('livewire.director.asset-info',  [
                'asset_types'=>$asset_types,
                'conditions'=>$conditions,
                'assigned_assets' => $assigned_assets,
                'employees' => $employees
        ]);
    }

}
