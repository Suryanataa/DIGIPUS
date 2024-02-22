<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Kategori;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\UserController;
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
    return view('landing.index');
});

Route::get('/buku', function () {
    return view('landing.buku');
});

Route::get('/buku/detail', function () {
    return view('landing.detail');
});

Route::get('/peminjaman', function () {
    return view('landing.pinjam');
});

Route::get('/login', [AuthController::class, "index"])->name('auth.index')->middleware('guest');

Route::post('/login', [AuthController::class, "login"])->name('auth.login');
Route::post('/logout', [AuthController::class, "logout"])->name('auth.logout');

Route::get('/register', [Register::class, "index"])->name('auth.index')->middleware('guest');
Route::post('/register', [Register::class, "register"])->name('auth.register');


Route::middleware(['auth', 'checkrole:admin,petugas'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/',[DashboardController::class, "index"])->name('dashboard.index');
        
        Route::resource('/buku',  BukuController::class);
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/user',  UserController::class);
    });
    
});