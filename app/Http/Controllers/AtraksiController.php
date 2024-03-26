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
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $product = new Atraksi();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        $imageUrls = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name= $image->getClientOriginalName();
                $image->move(public_path('posts/atraksi'), $name);

                $productImage = new AtraksiImage();
                $productImage->atraksi_id = $product->id;
                $productImage->url = $name;
                $productImage->save();

                $imageUrls[] = $name;
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

    // Hapus gambar yang akan dihapus
    if ($request->has('delete_image')) {
        $deleteImageIds = $request->delete_image;
        AtraksiImage::whereIn('id', $deleteImageIds)->delete();
    }

    // Unggah gambar baru
    if ($request->hasFile('new_image')) {
        foreach ($request->file('new_image') as $image) {
            $name = $image->getClientOriginalName();
            $image->move(public_path('posts/atraksi'), $name);

            $productImage = new AtraksiImage();
            $productImage->atraksi_id = $atraksi->id;
            $productImage->url = $name;
            $productImage->save();
        }
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
