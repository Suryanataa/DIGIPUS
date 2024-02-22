<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Kategori | Dashboard";
        $kategori = Kategori::all();

        confirmDelete("Yakin mau hapus kategori?", "data akan hilang permanen!");
        return view("dashboard.kategori.index", compact("title", "kategori"));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Kategori | Dashboard";

        return view("dashboard.kategori.create", compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            'kategori' => 'required',
        ]);

        Kategori::create($credential);
        return redirect('/dashboard/kategori')->with('success', 'Kategori Berhasil Ditambah!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Kategori | Dashboard";
        $kategori = Kategori::find($id);
        return view("dashboard.kategori.edit", compact('title', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            'kategori' => 'required',
        ]);

        Kategori::find($id)->update($credential);
        return redirect('/dashboard/kategori')->with('success', 'Kategori Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
        return redirect('/dashboard/kategori')->with('success', 'Kategori Berhasil Dihapus!');
    }
}
