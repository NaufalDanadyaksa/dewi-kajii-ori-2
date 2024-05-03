<?php

namespace App\Http\Controllers;

use App\Models\Atraksi;
use App\Models\Berita;
use App\Models\Homestay;
use App\Models\KatalogIkan;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function createUlasan(){

        return view('ulasan.create');
    }

    public function toIkan(){
        $ikan = KatalogIkan::with('images')->get();

        return view('katalog_ikan.page_ikan', compact('ikan'));
    }
    
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

    public function showHomestay(string $id){
        $homestay=Homestay::findOrFail($id);


        return view('homestay.detail', compact('homestay'));
    }
}
