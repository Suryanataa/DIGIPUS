<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Ulasan | Dashboard";
        $ulasan = Ulasan::with('user')->with('buku')->get();
        return view('dashboard.ulasan.index', compact('title', 'ulasan'));
    }
}
