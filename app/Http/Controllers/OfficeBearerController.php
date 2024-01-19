<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeBearerController extends Controller
{
    //
    public function dashboard(){
        return view('office-bearer.dashboard');
    }

    public function assignedAssets(){
        return view('office-bearer.assigned_assets');
    }

    public function requestAsset(){
        return view('office-bearer.request_asset');
    }

}
