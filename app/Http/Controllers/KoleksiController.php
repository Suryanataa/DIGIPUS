<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function index(Request $request)
    {
        $koleksi = koleksi::with('buku')->where('id_user', auth()->user()->id)->get();
        return view('landing.koleksi', compact('koleksi'));
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'id_buku' => 'required',
        ]);

        $credentials['id_user'] = auth()->user()->id;

        Koleksi::create($credentials);
        return redirect()->back()->with('success', 'Buku di koleksi');
    }
    public function destroy(string $id)
    {
        Koleksi::destroy($id);
        return redirect()->back()->with('success', 'koleksi dihapus');
    }
}
