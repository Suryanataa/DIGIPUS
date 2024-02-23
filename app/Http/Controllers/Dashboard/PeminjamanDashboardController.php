<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\DetailPinjam;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamanDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Peminjaman | Dashboard";
        $peminjaman = Peminjaman::with('user')->get();
        return view('dashboard.peminjaman.index',compact('title', 'peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function konfirmasi(string $id)
    {
        $title = "Peminjaman | Dashboard";
        $invoice = Peminjaman::with('user')->where('invoice', $id)->first();
        $list = DetailPinjam::with('buku')->where('id_pinjam', $invoice->id)->get();
        $tenggat = Carbon::create($invoice->tgl_pinjam)->addWeek(2)->format('Y-m-d');
        return view('dashboard.peminjaman.konfirmasi', compact('title', 'invoice','list', 'tenggat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $credential = $request->validate([
            "tenggat_pinjam" => "required",
            "status" => "required",
        ]);

        Peminjaman::where('invoice', $id)->update($credential);
        return redirect('/dashboard/peminjaman')->with('success', 'Peminjaman konfirmasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Peminjaman | Dashboard";
        $invoice = Peminjaman::with('user')->where('invoice', $id)->first();
        $list = DetailPinjam::with('buku')->where('id_pinjam', $invoice->id)->get();
        return view('dashboard.peminjaman.show', compact('title', 'invoice','list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function kembali(string $id)
    {
        $title = "Peminjaman | Dashboard";
        $invoice = Peminjaman::with('user')->where('invoice', $id)->first();
        $list = DetailPinjam::with('buku')->where('id_pinjam', $invoice->id)->get();
        $tenggat = Carbon::create($invoice->tgl_pinjam)->addWeek(2)->format('Y-m-d');
        return view('dashboard.peminjaman.kembali', compact('title', 'invoice','list', 'tenggat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            "tgl_kembali" => "required",
            "status" => "required",
        ]);

        // $detail = DetailPinjam::where('id', $id);
        // $buku = Buku::find($detail->first()->id_buku);
        // $buku->stok = $buku->stok + 1;
        // $buku->jml_pinjam = $buku->jml_pinjam - 1;
        // $buku->save();
        Peminjaman::where('invoice', $id)->update($credential);
        return redirect('/dashboard/peminjaman')->with('success', 'Pengembalian selesai');
    }
}
