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
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|size:10000',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'image.required' => 'Gambar produk wajib diunggah.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
            'image.size' => 'Ukuran gambar tidak boleh lebih dari 10MB.'
        ]);
    
        $product = new KatalogIkan();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        $imageUrls = [];
        $image= $request->file('image');
        $name= $image->getClientOriginalName();
        $image->move(public_path('posts/katalog_ikan'), $name);

        $productImage = new KatalogIkanImage();
        $productImage->katalog_ikan_id = $product->id;
        $productImage->url = $name;
        $productImage->save();

        $imageUrls[] = $name;

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
               
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

    // Update contents
    if ($request->has('contents')) {
        // First, delete existing contents
        $ikan->contents()->delete();

        // Then, save new contents if provided
        foreach ($request->contents as $content) {
            if (!empty($content)) { // Only create content if not empty
                $paketContent = new KatalogIkanImage();
                $paketContent->katalog_ikan_id = $ikan->id;
                $paketContent->content = $content;
                $paketContent->save();
            }
        }
    }

    // Unggah gambar baru (hanya satu)
    if ($request->hasFile('new_image')) {
        // Hapus gambar lama jika ada
        $existingImages = $ikan->images;
        foreach ($existingImages as $image) {
            $imagePath = public_path('posts/katalog_ikan/'.$image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }

        // Unggah gambar baru
        $image = $request->file('new_image');
        $name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('posts/katalog_ikan'), $name);

        $productImage = new KatalogIkanImage();
        $productImage->katalog_ikan_id = $ikan->id;
        $productImage->url = $name;
        $productImage->save();
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
