<?php

namespace App\Http\Livewire\Section;

use App\Models\asset;
use App\Models\asset_assignment;
use Livewire\Component;
use App\Models\employee;
use Illuminate\Support\Facades\Auth;

class AssetInfor extends Component
{

    public function AssignAssetPage() {
        return redirect()->route('headOfSection.assignAsset');

    }

    public function render()
    {
        $HOS_id = Auth::user()->id;
        $HOS = employee::find($HOS_id);

        
        $assigned_assets=asset_assignment::where('section_id', $HOS->section_id)->paginate(10);
        $employees = employee::latest()->get();
        
        $assets = asset::where('is_assigned', true)->latest()->paginate(10);
        
        return view('livewire.section.asset-infor', ['assigned_assets' => $assigned_assets], ['employees' => $employees]);
    }
}
