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
    public function showHomestay(string $id)
    {
        $homestay = Homestay::with('images')->findOrFail($id);

        return view('homestay.detail', compact('homestay'));
    }
    public function showAtraksi(string $id)
    {
        $atraksi = Atraksi::with('images')->findOrFail($id);

        return view('atraksi.detail', compact('atraksi'));
    }
<<<<<<< HEAD
    public function showSejarah(string $id)
    {
        $sejarah = Sejarah::with('images')->findOrFail($id);

        return view('sejarah.detail', compact('sejarah'));
=======

    public function showSejarah()
    {
        $id="1";
        $sejarah = Sejarah::findOrFail($id);

        return view('sejarah.profile', compact('sejarah'));

>>>>>>> 244149bf8a937c910291faac80e6619ea8d8cff0
    }
    public function showBerita(string $id)
    {
        $berita = Berita::with('images')->findOrFail($id);

        return view('berita.detail', compact('berita'));
    }
}
