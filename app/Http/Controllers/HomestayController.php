<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use App\Models\HomestayImage;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homestay = Homestay::with('images')->get();
        return view('homestay.homestay', compact('homestay'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homestay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $product = new Homestay();
        $product->name = $request->name;
        $product->location = $request->location;
        $product->description = $request->description;
        $product->save();

        $imageUrls = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name= $image->getClientOriginalName();
                $image->move(public_path('posts/homestay'), $name);

                $productImage = new HomestayImage();
                $productImage->homestay_id = $product->id;
                $productImage->url = $name;
                $productImage->save();

                $imageUrls[] = $name;
            }
        }

        
        return redirect()->route('homestay.index')->with('success', 'homestay beserta gambar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $homestay=Homestay::findOrFail($id);


        return view('homestay.detail', compact('homestay'));}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $homestay = Homestay::with('images')->find($id);
        return view('homestay.edit', compact('homestay'));
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
    
        $homestay = Homestay::findOrFail($id);
        $homestay->name = $request->name;
        $homestay->description = $request->description;
        $homestay->save();
    
        // Hapus gambar yang akan dihapus
        if ($request->has('delete_image')) {
            $deleteImageIds = $request->delete_image;
            HomestayImage::whereIn('id', $deleteImageIds)->delete();
        }
    
        // Unggah gambar baru
        if ($request->hasFile('new_image')) {
            foreach ($request->file('new_image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path('posts/homestay'), $name);
    
                $productImage = new HomestayImage();
                $productImage->homestay_id = $homestay->id;
                $productImage->url = $name;
                $productImage->save();
            }
        }
    
        return redirect()->route('homestay.index')->with('success', 'homestay berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $homestay = Homestay::findOrFail($id);

   
        $images = $homestay->images;
    
        
        foreach ($images as $image) {
           
            $imagePath = public_path('posts/homestay/' . $image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
    
           
            $image->delete();
        }
    
        
        $homestay->delete();
    
        return redirect()->route('homestay.index')->with('success', 'homestay beserta gambar berhasil dihapus.');
    
        }   
    }

