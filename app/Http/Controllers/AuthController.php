<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){


        if(Auth::check() === true) {
        return view('admin.dashboard');
        }
         
        return redirect() -> route('admin.login');
        
    }

    public function showloginform(){

        return view('admin.formlogin');

    }

    public function showregisterform(){

        return view('admin.formregister');

    }

    public function login(Request $request){
          
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)){
            return view('welcome');
        }
        return redirect() -> route('admin.login');

    }

    public function logout(){
        Auth::logout();
        return view('home');

    }
}
