<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Register extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth.register");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $credential = $request->validate([
            "nama" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed|min:8",
            "jk" => "required",
            "tgl_lahir" => "required",
            "telp" => "required",
            "alamat" => "required",
        ]);

        $credential["password"] = bcrypt($credential["password"]);
        $credential["slug"] = str()->slug($credential['nama']);

        User::create($credential);

        return redirect("/login")->with("success", "Registrasi Berhasil!");
    }
}
