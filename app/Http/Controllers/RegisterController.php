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
        $request->validate([
            'username'  => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required'
        ]);

        $data['name']       = $request->username;
        $data['email']      = $request->email;
        $data['password']   = Hash::make($request->password);
        $user               = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error", "Registerasi gagal");
        }
        return redirect(route('login'))->with("success", "Registerasi sukses");
    }
}
