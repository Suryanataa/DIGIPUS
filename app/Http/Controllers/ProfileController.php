<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.profile.index');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $credential = $request->validate([
            "nama" => "required",
            "email" => "required|email|unique:users,email," . $id,
            "jk" => "required",
            "tgl_lahir" => "required",
            "telp" => "required",
            "alamat" => "required",
        ]);

        $credential["slug"] = str()->slug($credential['nama']);
        User::find($id)->update($credential);
        return redirect()->back()->with("success", "Edit profile berhasil!");
    }
}
