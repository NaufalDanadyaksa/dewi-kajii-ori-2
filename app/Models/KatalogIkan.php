<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogIkan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];

    protected $table='katalog_ikan';

    public function images()
    {
        return $this->hasMany(KatalogIkanImage::class);
    }
}
