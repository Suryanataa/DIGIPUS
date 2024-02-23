<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            "id_buku" => "required",
            "ulasan" => "required",
            "rate" => "required",
        ]);
        $credential['id_user'] = auth()->user()->id;
        Ulasan::create($credential);
        return redirect()->back()->with('success', 'Ulasan ditambahkan');
    }
}
