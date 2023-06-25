<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(LoginController::class)->group(function (){
    Route::get('login', 'login')->name('login');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'register')->name('register');
});
