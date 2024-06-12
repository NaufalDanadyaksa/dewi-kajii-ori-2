<?php

namespace App\Http\Controllers;

use App\Models\Atraksi;
use App\Models\AtraksiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AtraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atraksi = Atraksi::with('images')->get();
        return view('atraksi.atraksi', compact('atraksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atraksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $product = new Atraksi();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        $imageUrls = [];
        $image = $request->file('image');
        $name= $image->getClientOriginalName();
                $image->move(public_path('posts/atraksi'), $name);

                $productImage = new AtraksiImage();
                $productImage->atraksi_id = $product->id;
                $productImage->url = $name;
                $productImage->save();

                $imageUrls[] = $name;

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                
            }
        }

        
        return redirect()->route('atraksi.index')->with('success', 'Atraksi beserta gambar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $atraksi = Atraksi::with('images')->find($id);

        return view('atraksi.show', compact('atraksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $atraksi = Atraksi::with('images')->find($id);
        return view('atraksi.edit', compact('atraksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif',
    ]);

    $atraksi = Atraksi::findOrFail($id);
    $atraksi->name = $request->name;
    $atraksi->description = $request->description;
    $atraksi->save();

    if ($request->has('delete_image')) {
        $deleteImageIds = $request->delete_image;
        AtraksiImage::whereIn('id', $deleteImageIds)->delete();
    }

    // Update contents
    if ($request->has('contents')) {
        // First, delete existing contents
        $atraksi->contents()->delete();

        // Then, save new contents if provided
        foreach ($request->contents as $content) {
            if (!empty($content)) { // Only create content if not empty
                $paketContent = new AtraksiImage();
                $paketContent->paket_wisata_id = $atraksi->id;
                $paketContent->content = $content;
                $paketContent->save();
            }
        }
    }

    // Unggah gambar baru (hanya satu)
    if ($request->hasFile('new_image')) {
        // Hapus gambar lama jika ada
        $existingImages = $atraksi->images;
        foreach ($existingImages as $image) {
            $imagePath = public_path('posts/atraksi/'.$image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }

        // Unggah gambar baru
        $image = $request->file('new_image');
        $name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('posts/atraksi'), $name);

        $productImage = new AtraksiImage();
        $productImage->atraksi_id = $atraksi->id;
        $productImage->url = $name;
        $productImage->save();
    }


    return redirect()->route('atraksi.index')->with('success', 'Atraksi berhasil diperbarui.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    
    $atraksi = Atraksi::findOrFail($id);

   
    $images = $atraksi->images;

    
    foreach ($images as $image) {
       
        $imagePath = public_path('posts/atraksi/' . $image->url);
        if (file_exists($imagePath)) {
            unlink($imagePath); 
        }

       
        $image->delete();
    }

    
    $atraksi->delete();

    return redirect()->route('atraksi.index')->with('success', 'Atraksi beserta gambar berhasil dihapus.');
}


    
}
