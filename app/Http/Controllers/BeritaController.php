<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Faker\Core\File;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'article' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('posts/berita'), $imageName);
        $imagePath = 'posts/berita/' . $imageName;

        $data = [
            'title' => $request->title,
            'image' => $imagePath,
            'article' => $request->article,
        ];

        Berita::create($data);
        return redirect()->route('berita.index')->with('success', 'Berita beserta gambar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function showBerita(string $id){
        $berita=Berita::findOrFail($id);


        return view('berita.detail', compact('berita'));}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'article' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $berita = Berita::findOrFail($id);
    
        // Hapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            if (file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('posts/berita'), $imageName);
            $imagePath = 'posts/berita/' . $imageName;
    
            $berita->image = $imagePath;
        }
    
        $berita->title = $request->title;
        $berita->article = $request->article;
        $berita->save();
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $berita = Berita::findOrFail($id);


        if (file_exists(public_path($berita->image))) {
            unlink(public_path($berita->image));
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
