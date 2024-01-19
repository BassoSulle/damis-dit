<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directorController extends Controller
{
    public function dashboard(){
        return view('director.dashboard');
    }

    public function departmentSections(){
        return view('director.departmentSections');
    }

    public function departmentRooms(){
        return view('director.departmentRooms');
    }


    public function departmentreport(){
        return view('director.departmentreport');
    }

    public function assignAsset(){
        return view('director.assign_asset');
    }
    public function assignedAsset(){
        return view('director.assigned_asset');
    }

    public function assigned_asset_info(){
        return view('director.asset_information');
    }

    public function assethistory(){

        return view('director.assethistory');
    }

    public function assetassignment(){
        return view('director.assetassignment');
    }

    public function transferasset(){
        return view('director.transferasset');
    }

}
