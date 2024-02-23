<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingBuku extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $buku = Buku::Paginate(8);
        return view('landing.buku', compact('buku', 'kategori'));
    }

    public function detail(string $slug)
    {
        $buku = Buku::where('slug', $slug)->first();
        $avgRating = Ulasan::where('id_buku', $buku->id)->avg('rate');
        $ulasan = Ulasan::with('user')->where('id_buku', $buku->id)->get();
        $isKoleksi = Koleksi::where('id_user', Auth::user()->id)->where('id_buku', $buku->id)->exists();
        $isUlas = Ulasan::where('id_user', Auth::user()->id)->where('id_buku', $buku->id)->exists();
        return view('landing.detail', compact('buku', 'ulasan', 'isKoleksi', 'isUlas', 'avgRating'));
    }

    public function kategori(string $id)
    {
        $kategori = Kategori::all();
        $buku = Buku::where('id_kategori', $id)->Paginate(8);
        return view('landing.kategori', compact('buku', 'kategori'));
    }
}
