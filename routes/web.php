<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.index');

Route::get('/register', function () {
    return view('auth.register');
});



Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    });

    Route::get('/buku',  function () {
        return view('dashboard.buku.index');
    });
    Route::get('/kategori',  function () {
        return view('dashboard.kategori.index');
    });
    Route::get('/user',  function () {
        return view('dashboard.user.index');
    });
});
