<?php

namespace App\Http\Livewire\Admin;

use App\Models\asset;
use App\Models\asset_type;
use Livewire\Component;

class AssetList extends Component
{
    public function render()
    {
        $assetTypes = asset_type::latest()->paginate();
        $assets = asset::latest()->paginate();
        
        return view('livewire.admin.asset-list', ['assets' => $assets]);
    }
}
