<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisataContent extends Model
{
    use HasFactory;
    protected $fillable = ['url','paket_wisata_id'];
    protected $table = 'paket_wisata_content';
    public function paket_wisata()
    {   
        return $this->belongsTo(PaketWisata::class);
    }
}
