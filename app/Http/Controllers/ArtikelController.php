<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ArtikelController extends Controller {
    public function selengkapnya() {
        $kategoriFavorit = Cookie::get('kategori_favorit');
        $artikelRekomendasi = collect();
        $artikelLainnya = collect();

        if ($kategoriFavorit) {
            $artikelRekomendasi = Artikel::where('kategori', $kategoriFavorit)->paginate(4, ['*'], 'rekomendasi');
            $artikelLainnya = Artikel::paginate(4);
            // $artikelLainnya = Artikel::where('kategori', '!=', $kategoriFavorit)->paginate(4, ['*'], 'lainnya');
        } else {
            $artikelLainnya = Artikel::paginate(4);
        }

        return view('projectWebsite.selengkapnya', compact('artikelRekomendasi', 'artikelLainnya'), ['title' => '']);
    }

    public function cari(Request $request) {
        $query = $request->input('cari');
        $artikels = Artikel::where('judul', 'like', "%{$query}%")->paginate(4);

        if ($request->ajax()) {
            return response()->json([
                'artikels' => $artikels,
                'pagination' => (string) $artikels->links()
            ]);
        }

        return view('projectWebsite.selengkapnya-cari', compact('artikels'), ['title' => '']);
    }

    public function showDetail($id) {
        $artikel = Artikel::findOrFail($id);
        
        // Menyimpan atau memperbarui kategori artikel dalam cookie
        Cookie::queue('kategori_favorit', $artikel->kategori, 60 * 24 * 30); // menyimpan selama 30 hari

        return view('projectWebsite.detail', compact('artikel'), ['title' => 'Detail']);
    }
}

