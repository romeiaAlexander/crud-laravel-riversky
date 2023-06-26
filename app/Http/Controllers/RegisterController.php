<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register(){
        return view('auth/register');
    }

    function registerPost(Request $request){
        $user             = User::create([
            'username'    => $request->username,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
        ]);

        if($user){
            session()->flash("success", "Register Success");

            return redirect("/login");
        }else{
            session()->flash("error", "Register Failed!");

            return back();
        }
    }
}
