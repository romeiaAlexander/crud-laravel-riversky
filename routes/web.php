<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
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

Route::controller(LoginController::class)->group(function (){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('main', [PageController::class, 'main'])->name('main');

    Route::controller(MahasiswaController::class)->group(function(){
        Route::get('', 'index')->name('mahasiswa.index');
        Route::get('', 'create')->name('mahasiswa.create');
        Route::get('main/{id}', 'edit')->name('mahasiswa.edit');
        Route::post('', 'store')->name('mahasiswa.store');
        Route::put('main/{id}', 'update')->name('mahasiswa.update');
        Route::delete('main/{id}','destroy')->name('mahasiswa.destroy');

        //
    });
});