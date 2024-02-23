<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Kategori;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\PeminjamanDashboardController;
use App\Http\Controllers\Dashboard\ProfilDashboardController;
use App\Http\Controllers\Dashboard\UlasanDashboardController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LandingBuku;
use App\Http\Controllers\ListPinjamController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UlasanController;
use App\Models\Ulasan;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/buku', [LandingBuku::class, 'index'])->name('buku.index');

Route::get('/buku/{kategori}', [LandingBuku::class, 'kategori'])->name('buku.kategori');

Route::get('/buku/detail/{slug}', [LandingBuku::class, 'detail'])->name('buku.detail')->middleware('auth');

Route::middleware(['auth', 'checkrole:peminjam'])->group(function () {
    Route::resource('/peminjaman', PeminjamanController::class);
    Route::resource('/list-pinjam', ListPinjamController::class);
    Route::resource('/invoice', InvoiceController::class);
    Route::resource('/koleksi', KoleksiController::class);
    Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
    Route::resource('/profil', ProfileController::class);
});

Route::get('/login', [AuthController::class, 'index'])
    ->name('auth.index')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/register', [Register::class, 'index'])
    ->name('auth.index')
    ->middleware('guest');

Route::post('/register', [Register::class, 'register'])->name('auth.register');

Route::middleware(['auth', 'checkrole:admin,petugas'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::resource('/buku', BukuController::class);
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/user', UserController::class);
        Route::resource('/profile', ProfilDashboardController::class);

        Route::prefix('peminjaman')->group(function () {
            Route::get('/', [PeminjamanDashboardController::class, 'index'])->name('dashboard.peminjaman.index');
            Route::get('/detail/{invoice}', [PeminjamanDashboardController::class, 'show'])->name('dashboard.peminjaman.show');
            Route::get('/konfirmasi/{invoice}', [PeminjamanDashboardController::class, 'konfirmasi'])->name('dashboard.peminjaman.konfirmasi');
            Route::put('/konfirmasi/{invoice}', [PeminjamanDashboardController::class, 'store'])->name('dashboard.peminjaman.store');
            Route::get('/kembali/{invoice}', [PeminjamanDashboardController::class, 'kembali'])->name('dashboard.peminjaman.kembali');
            Route::put('/kembali/{invoice}', [PeminjamanDashboardController::class, 'update'])->name('dashboard.peminjaman.update');
        });

        Route::get('/ulasan', [UlasanDashboardController::class, 'index'])->name('dashboard.ulasan.index');
    });
});
