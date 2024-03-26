<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomestayImage extends Model
{
    use HasFactory;
    protected $fillable = ['url','homestay_id'];
    protected $table = 'homestay_image';

    public function homestay()
    {
        return $this->belongsTo(Homestay::class);
    }
}
