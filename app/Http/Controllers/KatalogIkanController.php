<?php

namespace App\Http\Controllers;

use App\Models\KatalogIkan;
use App\Models\KatalogIkanImage;
use Illuminate\Http\Request;

class KatalogIkanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ikan = KatalogIkan::with('images')->get();
        return view('katalog_ikan.katalog_ikan', compact('ikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('katalog_ikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $product = new KatalogIkan();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        $imageUrls = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name= $image->getClientOriginalName();
                $image->move(public_path('posts/katalog_ikan'), $name);

                $productImage = new KatalogIkanImage();
                $productImage->katalog_ikan_id = $product->id;
                $productImage->url = $name;
                $productImage->save();

                $imageUrls[] = $name;
            }
        }

        
        return redirect()->route('ikan.index')->with('success', 'Katalog Ikan beserta gambar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ikan = KatalogIkan::with('images')->find($id);
        return view('katalog_ikan.show', compact('ikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $ikan = KatalogIkan::with('images')->find($id);
        return view('katalog_ikan.edit', compact('ikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $ikan = KatalogIkan::findOrFail($id);
        $ikan->name = $request->name;
        $ikan->price = $request->price;
        $ikan->save();
    
        // Hapus gambar yang akan dihapus
        if ($request->has('delete_image')) {
            $deleteImageIds = $request->delete_image;
            KatalogIkanImage::whereIn('id', $deleteImageIds)->delete();
        }
    
        // Unggah gambar baru
        if ($request->hasFile('new_image')) {
            foreach ($request->file('new_image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path('posts/katalog_ikan/'), $name);
    
                $productImage = new KatalogIkanImage();
                $productImage->katalog_ikan_id = $ikan->id;
                $productImage->url = $name;
                $productImage->save();
            }
        }
    
        return redirect()->route('ikan.index')->with('success', 'Katalog Ikan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ikan = KatalogIkan::findOrFail($id);

   
        $images = $ikan->images;
    
        
        foreach ($images as $image) {
           
            $imagePath = public_path('posts/katalog_ikan/' . $image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
    
           
            $image->delete();
        }
    
        
        $ikan->delete();
    
        return redirect()->route('ikan.index')->with('success', 'Katalog Ikan beserta gambar berhasil dihapus.');
    }
}
