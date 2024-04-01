<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use App\Models\PaketWisataContent;
use App\Models\PaketWisataImage;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = PaketWisata::with('images', 'content')->get();
        return view('paket_wisata.paket_wisata', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket_wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
        ]);

        $paketWisata = new PaketWisata();
        $paketWisata->name = $request->name;
        $paketWisata->price = $request->price;
        $paketWisata->save();

        // Save contents
        foreach ($request->contents as $content) {
            $paketContent = new PaketWisataContent();
            $paketContent->paket_wisata_id = $paketWisata->id;
            $paketContent->content = $content;
            $paketContent->save();
        }

        // Save images
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('posts/paket_wisata'), $imageName);

            $paketImage = new PaketWisataImage();
            $paketImage->paket_wisata_id = $paketWisata->id;
            $paketImage->url = $imageName;
            $paketImage->save();
        }

        return redirect()->route('wisata.index')->with('success', 'Paket Wisata berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $wisata = PaketWisata::with('images', 'content')->find($id);
        return view('paket_wisata.show', compact('wisata'));
    }

    public function edit(string $id)
    {
        $wisata = PaketWisata::with('images', 'content')->find($id);
        return view('paket_wisata.edit', compact('wisata'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
            'contents.*' => 'string',
        ]);
    
        $wisata = PaketWisata::findOrFail($id);
        $wisata->name = $request->name;
        $wisata->price = $request->price;
        $wisata->save();
    
        // Hapus gambar yang akan dihapus
        if ($request->has('delete_image')) {
            $deleteImageIds = $request->delete_image;
            PaketWisataImage::whereIn('id', $deleteImageIds)->delete();
        }

        // update contents
        if ($request->has('contents')) {
            $wisata->content()->delete();
            foreach ($request->contents as $content) {
                $wisataContent = new PaketWisataContent();
                $wisataContent->paket_wisata_id = $wisata->id;
                $wisataContent->content = $content;
                $wisataContent->save();
            }
        }
    
        // Unggah gambar baru
        if ($request->hasFile('new_image')) {
            foreach ($request->file('new_image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path('posts/paket_wisata'), $name);
    
                $productImage = new PaketWisataImage();
                $productImage->paket_wisata_id = $wisata->id;
                $productImage->url = $name;
                $productImage->save();
            }
        }
    
        return redirect()->route('wisata.index')->with('success', 'wisata berhasil diperbarui.');
    }
    
    public function destroy(string $id)
    {
        $wisata = PaketWisata::findOrFail($id);

   
        $images = $wisata->images;
        $wisata->content()->delete();
        
        foreach ($images as $image) {
           
            $imagePath = public_path('posts/paket_wisata/' . $image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
    
           
            $image->delete();
        }
        
    
        
        $wisata->delete();
    
        return redirect()->route('wisata.index')->with('success', 'wisata beserta gambar berhasil dihapus.');
    }
    
}
