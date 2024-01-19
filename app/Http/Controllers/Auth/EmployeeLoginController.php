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


class EmployeeLoginController extends Controller
{
    // use AuthenticatesUsers;

    // ...

    public function login_form(){
        return view('employee_login');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($employee = Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $id = Auth::employee()->id;
            dd($id);
            $employee_data = employee::find($id);
            $role = role::find($employee_data->role_id);

            if ($role->name == 'store keeper') {
                return redirect()->route('store.dashboard');
            }
            elseif ($role->name == 'stock checker') {
                return redirect()->route('stock_checker.dashboard');
            }
             elseif ($role->name == 'estate') {
                return redirect()->route('estate.dashboard');
            }
             elseif ($role->name == 'director') {
                return redirect()->route('director.dashboard');
            }
            elseif ($role->name == 'head of section') {
                return redirect()->route('user_department.dashboard');
            }
             elseif ($role->name == 'head of office') {
                return redirect()->route('office.dashboard');
            }
            
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

        // Handle other roles or scenarios here
    }
}


// LoginController.php






