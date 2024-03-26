<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;
    protected $table = 'paket_wisata';
    protected $fillable =['name', 'price'];

    public function images()
    {
        return $this->hasMany(PaketWisataImage::class);
    }
    public function content(){
        return $this->hasMany(PaketWisataContent::class);
    }
}
