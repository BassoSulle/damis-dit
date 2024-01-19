<?php

namespace App\Http\Controllers;

use App\Models\asset;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function storeDashboard(){
        return view('store.dashboard');
    }

    public function RegisterAsset(){
        return view('store.registerAsset');
    }

    public function EditAsset($assetId){

        $data = [
            'asset_id' => $assetId,
            'editAsset' => true
        ];

        return view('store.registerAsset', $data);
    }

    public function gamisRegister(){
        return view('store.gamisRegister');
    }
     
    public function assetInformation(){
        return view('store.assetInformation');
    }

    public function assetDisposition(){
        return view('store.assetDisposition');
    }   

    public function registeredAsset(){
        return view('store.registeredAsset');
    }
    
    public function assignAsset(){
        return view('store.assignAsset');
    }

    public function assignedAsset(){
        return view('store.assignedAssets');
    }

}
