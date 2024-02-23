<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(string $id)
    {
        $title = "Profile | Dashboard";
        $user = User::find($id);
        return view('dashboard.profile', compact('title','user'));
    }

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
