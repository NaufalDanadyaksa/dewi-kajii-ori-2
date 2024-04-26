<?php

namespace App\Http\Controllers;

use App\Models\Atraksi;
use App\Models\Berita;
use App\Models\Homestay;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     */
    
    public function showAtraksi(string $id)
    {
        $atraksi = Atraksi::with('images')->findOrFail($id);

        return view('atraksi.detail', compact('atraksi'));
    }

    public function showSejarah()
    {
        $id="1";
        $sejarah = Sejarah::findOrFail($id);

        return view('sejarah.profile', compact('sejarah'));

    }
    public function showBerita(string $id)
    {
        $berita = Berita::findOrFail($id);

        return view('berita.detail', compact('berita'));
    }
}
