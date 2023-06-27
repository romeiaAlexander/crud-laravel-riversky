<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function main(){
        $mahasiswa = Mahasiswa::orderBy('nim', 'DESC')->get();
        return view('main.main', compact('mahasiswa'));
    }
}
