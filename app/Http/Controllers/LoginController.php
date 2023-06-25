<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('index');
        }
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name'      => 'require',
            'password'  => 'required'
        ]);

        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->route('index');
        }
        return redirect()->back()->with('error', "nama atau password salah");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
