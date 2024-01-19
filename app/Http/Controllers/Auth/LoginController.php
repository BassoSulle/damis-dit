<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\employee;
use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\LoginController;


class LoginController extends Controller
{
    // use AuthenticatesUsers;

    // ...

    public function login_form(){
        return view('auth.login');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

            // Check if the login request is for an admin or employee
        if (Auth::guard('web')->attempt($credentials)) {
            // $user= User::whereEmail($request['email'])->first();
            // dd($user);
            // Admin login successful
            return redirect()->route('admin.dashboard');

        } elseif (Auth::guard('employee')->attempt($credentials)) {

            // Employee login successful
            $employee = employee::whereEmail($request['email'])->first();
            $roleData = role::find($employee->role_id);
            $role = $roleData->name;



            if ($role == 'store keeper') {
                return redirect()->route('store.dashboard');
            }
            elseif ($role == 'stock checker') {
                return redirect()->route('stock_checker.dashboard');
            }
             elseif ($role == 'estate') {
                return redirect()->route('estate.dashboard');
            }
             elseif ($role == 'director') {
                return redirect()->route('director.dashboard');
            }
            elseif ($role == 'head of section') {
                return redirect()->route('headOfSection.dashboard');
            }
             elseif ($role == 'head of office') {
                return redirect()->route('office-bearer.dashboard');
            }

            // Employee login successful
            // return redirect()->intended('/employee/dashboard');
        } else {
            // Authentication failed for both admin and employee
            return back()->withErrors(['email' => 'Invalid login credentials']);
        }

    //     if ($user = Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         $email = Auth::user()->email;
    //         dd($email);
    //         $admin_email = User::find($email);

    //         if(!empty($admin_email)) {
    //             return redirect()->route('admin.dashboard');
    //         }
    //         else {
    //             $employee_email = employee::find($email);
    //             dd($employee_email);
                
    //         }
    //         // $role = role::find($admin_data->role_id);

    //         // if ($role->name == 'admin') {
    //         //     return redirect()->route('admin.dashboard');
    //         // }
    // }

    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ])->onlyInput('email');

        // Handle other roles or scenarios here
    }

    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('user.login'));
    }
}


// LoginController.php





