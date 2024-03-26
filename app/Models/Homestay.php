<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'description', 
      'location',
    ];
    
    protected $table = 'homestay';
    public function images()
    {
        return $this->hasMany(HomestayImage::class);
    }
}
