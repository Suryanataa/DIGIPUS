<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Kategori;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LandingBuku;
use App\Http\Controllers\ListPinjamController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', [HomeController::class, "index"])->name('home.index');

Route::get('/buku', [LandingBuku::class, "index"])->name('buku.index');

Route::get('/buku/{kategori}', [LandingBuku::class, "kategori"])->name('buku.kategori');

Route::get('/buku/detail/{slug}', [LandingBuku::class, "detail"])->name('buku.detail');

Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/list-pinjam', ListPinjamController::class);
Route::post('/koleksi', [KoleksiController::class, "store"])->name('koleksi.store');

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