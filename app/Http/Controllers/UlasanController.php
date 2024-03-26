<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasan= Ulasan::all();
        return view('ulasan.ulasan', compact('ulasan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'ulasan' => 'required',
        ]);
        Ulasan::create($request->all());
        return view('home')->with('success', 'Ulasan Berhasil Dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ulasan = Ulasan::find($id);
        return view('ulasan.show', compact('ulasan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ulasan::where( $id)->delete();
        return view('home')->with('success', 'Ulasan Berhasil Dihapus');
    }
}
