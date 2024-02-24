<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\DetailPinjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class ListPinjamController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoice = Peminjaman::where('invoice', $id)->first();
        $peminjaman = DetailPinjam::with('buku')
            ->where('id_pinjam', $invoice->id)
            ->get();

        $bukuDipinjam = $peminjaman->pluck('id_buku')->toArray();

        $buku = Buku::where('stok', '!=', 0)
            ->whereNotIn('id', $bukuDipinjam)
            ->whereDoesntHave('detail_pinjam', function ($query) use ($invoice) {
                $query->where('id_pinjam', $invoice->id);
            })
            ->get();
        return view('landing.list_pinjam', compact('peminjaman', 'buku', 'invoice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'id_pinjam' => 'required',
            'id_buku' => 'required',
        ]);

        $buku = Buku::find($credential['id_buku']);
        $buku->stok = $buku->stok - 1;
        $buku->jml_pinjam = $buku->jml_pinjam + 1;
        $buku->save();
        DetailPinjam::create($credential);
        return redirect()->back()->with('success', 'Buku ditambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = DetailPinjam::where('id', $id);
        $buku = Buku::find($detail->first()->id_buku);
        $buku->stok = $buku->stok + 1;
        $buku->jml_pinjam = $buku->jml_pinjam - 1;
        $buku->save();
        $detail->delete();
        return redirect()->back()->with('success', 'Buku dihapus');
    }
}
