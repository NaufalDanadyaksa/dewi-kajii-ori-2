<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraksi extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', ];
    protected $table='atraksi';
    public function images()
    {
        return $this->hasMany(AtraksiImage::class);
    }
}
