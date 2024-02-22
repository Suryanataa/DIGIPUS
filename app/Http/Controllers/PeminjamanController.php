<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.pinjam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credetials = $request->validate([]);

        $credetials['id_user'] = auth()->user()->id;
        $credetials['invoice'] = 'INV-' . rand(1000, 9999) . '-' . auth()->user()->id;

        Peminjaman::create($credetials);

        return redirect('/list-pinjam/' . $credetials['invoice'])->with('success', 'Invoice dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
