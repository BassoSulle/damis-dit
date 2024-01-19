<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headOfSectionController extends Controller
{
    //
    public function dashboard(){
        return view('head-of-section.dashboard');
    }

    public function assetInfo(){
        return view('head-of-section.asset_information');
    }

    public function assignAsset()
    {
        return view('head-of-section.assign_asset');
    }

    public function assignedAssets(){
        return view('head-of-section.assigned_asset');
    }

    public function transferasset(){
        return view('head-of-section.transferAsset');
    }

    public function transferHistory(){
        return view('head-of-section.transferHistory');
    }

    public function employeeinfo(){
        return view('head-of-section.employee_info');
    }

    public function assetRequests(){
        return view('head-of-section.asset_requests');
    }

    public function myAssetRequests(){
        return view('head-of-section.my_asset_requests');
    }

    public function create()
    {
        return view('head-of-section.transferAsset'); // next:- page name created with next.blade.php
    }

    public function tempTransfer()
    {
        return view('head-of-section.tempTransfer');
    }

    public function office()
    {
        return view('head-of-section.office');
    }

    public function request()
    {
        return view('head-of-section.request');
    }
}
