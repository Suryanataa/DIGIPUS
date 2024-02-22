<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

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
        $ulasan = Ulasan::all();
        return view('landing.detail', compact('buku', 'ulasan'));
    }

    public function kategori(string $id)
    {
        $kategori = Kategori::all();
        $buku = Buku::where('id_kategori', $id)->Paginate(8);
        return view('landing.kategori', compact('buku', 'kategori'));
    }
}
