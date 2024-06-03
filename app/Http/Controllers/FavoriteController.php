<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Auth::user()->favorites()->with('artikel')->get();
        return view('favorites.index', compact('favorites'));
    }

    public function store($artikelId)
    {
        $favorite = new Favorite();
        $favorite->user_id = Auth::id();
        $favorite->artikel_id = $artikelId;
        $favorite->save();

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan ke favorit.');
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus dari favorit.');
    }
}
