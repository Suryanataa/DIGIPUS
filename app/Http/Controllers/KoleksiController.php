<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'id_buku' => 'required',
        ]);

        $credentials['id_user'] = auth()->user()->id;

        Koleksi::create($credentials);
        return redirect()->back()->with('success', 'Buku di koleksi');
    }
}
