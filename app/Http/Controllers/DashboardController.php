<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $artikels = Artikel::inRandomOrder()->limit(10)->get();
        return view('dashboard', [
            'title' => 'Beranda',
            'artikels' => $artikels,
        ]);
    }

    public function indexGuest()
    {
        $artikels = Artikel::inRandomOrder()->limit(10)->get();
        return view('home', [
            'title' => 'Beranda',
            'artikels' => $artikels,
        ]);
    }
}
