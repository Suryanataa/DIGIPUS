<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        confirmDelete("Yakin mau hapus akun user?", "data akan dihapus permanen!");
        $title = "User | Dashboard";
        $user = User::where('email', '!=', Auth::user()->email)->get();
        return view('dashboard.user.index', compact('title', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "User | Dashboard";
        return view('dashboard.user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credential = $request->validate([
            "nama" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed|min:8",
            "jk" => "required",
            "tgl_lahir" => "required",
            "telp" => "required",
            "alamat" => "required",
            "role" => "required",
        ]);

        $credential["password"] = bcrypt($credential["password"]);
        $credential["slug"] = str()->slug($credential['nama']);

        User::create($credential);
        return redirect("/dashboard/user")->with("success", "Registrasi Berhasil!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "User | Dashboard";
        $user = User::find($id);
        return view('dashboard.user.show', compact('title', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "User | Dashboard";
        $user = User::find($id);
        return view('dashboard.user.edit', compact('title', 'user'));
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
            "role" => "required",
        ]);

        $credential["slug"] = str()->slug($credential['nama']);
        User::find($id)->update($credential);
        return redirect("/dashboard/user")->with("success", "User Diedit!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect("/dashboard/user")->with("success", "User dihapus!");
    }
}
