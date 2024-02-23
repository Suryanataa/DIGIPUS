<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\DetailPinjam;
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice = Peminjaman::with('user')->where('invoice', $id)->first();
        $buku = DetailPinjam::where('id_pinjam', $invoice->id)->count();
        return view('landing.konfirmasi', compact('invoice', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credetials = $request->validate([
            "tgl_pinjam" => 'required',
        ]);

        Peminjaman::where('invoice',$id)->update($credetials);
        return redirect('/')->with('success', 'Silahkan konfimasi kepada petugas');
    }
}
