<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $sumBuku = Buku::all()->count();
        $sumPinjam = Peminjaman::where('status', 'pinjam')->count();
        $sumAkun = User::all()->count();
        $sumUlasan = Ulasan::all()->count();

        $buku = Buku::limit(5)->get();
        $peminjaman = Peminjaman::with('user')->where('tgl_pinjam', '!=', null)->limit(5)->get();
        $ulasan = Ulasan::with('user')->with('buku')->limit(5)->get();

        return view("dashboard.dashboard", compact("sumBuku", "sumPinjam", "sumAkun", "sumUlasan", "title", "buku", 'peminjaman', 'ulasan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
