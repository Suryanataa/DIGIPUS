<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Buku | Dashboard";
        $buku = Buku::all();

        confirmDelete("Yakin mau hapus buku?", "data akan hilang permanen!!");
        return view('dashboard.buku.index', compact('title', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Buku | Dashboard";
        $kategori = Kategori::all();
        return view('dashboard.buku.create', compact('title', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            "judul" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "thn_terbit" => "required",
            "deskripsi" => "required",
            "gambar" => "required|image|mimes:jpg,png,jpeg,svg|max:2048",
            "stok" => "required",
            "id_kategori" => "required",
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move("gambar/", $filename);
            $credential['gambar'] = $filename;
        }

        $credential['slug'] = str()->slug($credential['judul']);

        Buku::create($credential);
        return redirect('/dashboard/buku')->with("success", "Buku Berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Buku | Dashboard";
        $buku = Buku::with('kategori')->find($id);

        return view('dashboard.buku.show', compact('title', 'buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Buku | Dashboard";
        $buku = Buku::find($id);
        $kategori = Kategori::all();
        return view('dashboard.buku.edit', compact('title', 'buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            "judul" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "thn_terbit" => "required",
            "deskripsi" => "required",
            "gambar" => "image|mimes:jpg,png,jpeg,svg|max:2048",
            "stok" => "required",
            "id_kategori" => "required",
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move("gambar/", $filename);
            $credential['gambar'] = $filename;
        }

        $credential['slug'] = str()->slug($credential['judul']);

        Buku::find($id)->update($credential);
        return redirect('/dashboard/buku')->with("success", "Buku Berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::destroy($id);
        return redirect('/dashboard/buku')->with("success", "Buku Berhasil di hapus");
    }
}
