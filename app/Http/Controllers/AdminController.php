<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard');
    }
    public function request(){
        return view('admin.request');
    }
    public function department(){
        return view('admin.department');
    }

        public function condition(){
        return view('admin.condition');
    }

    public function section(){
    return view('admin.department_section');
    }

    public function buildings(){
        return view('admin.building');
    }

    public function floors(){
        return view('admin.floor');
    }

    public function rooms(){
        return view('admin.rooms');
    }

    public function employees(){
        return view('admin.employees');
    }

        public function transfer(){
        return view('admin.transfer');
    }
        public function directorate(){
        return view('admin.directorate');
    }


        public function assets(){
        return view('admin.assets');
    }
        public function assettype(){
        return view('admin.assettype');
    }

        public function assetclass(){
        return view('admin.assetclass');
    }

        public function index(){
        return view('admin.index');
    }

     public function user(){
        return view('admin.user');
    }

}
