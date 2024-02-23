<?php

namespace App\Http\Controllers;

use App\Models\DetailPinjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Peminjaman::where('id_user', auth()->user()->id)->get();
        return view('landing.invoice', compact('invoice'));
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
        $invoice = Peminjaman::with('user')->where('invoice', $id)->first();
        $list = DetailPinjam::with('buku')->where('id_pinjam', $invoice->id)->get();
        return view('landing.invoiceDetail', compact('list','invoice'));
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
