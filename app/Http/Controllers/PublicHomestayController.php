<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use Illuminate\Http\Request;

class PublicHomestayController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function publicShow(string $id)
    {
        $homestay = Homestay::with('images')->find($id);
        return view('homestay.homestay_detail', compact('homestay'));
    }
}
