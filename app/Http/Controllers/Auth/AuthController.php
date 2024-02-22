<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth.login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $credential = $request->validate([
            "email" => "email|required",
            "password" => "required"
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            if (Auth::user()->role == "admin" || Auth::user()->role == "petugas") {
                return redirect()->intended("/dashboard")->with("success", "login berhasil");
            }else{
                return redirect()->intended("/")->with("success", "login berhasil");
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with("success", "logout berhasil");
    }
}
