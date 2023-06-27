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

Route::group([], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginPost'])->name('login.post');
});

Route::group([], function () {
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'registerPost'])->name('register.post');
});

Route::group([], function () {
    Route::get('', [PageController::class, 'index'])->name('index');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('main', [PageController::class, 'main'])->name('main');

    Route::group(['prefix' => 'mahasiswa'], function () {
        Route::get('/main', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
        Route::get('/main', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
        Route::get('/main/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
        Route::post('/main', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
        Route::put('/main/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
        Route::delete('/main/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
    });
});
