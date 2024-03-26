<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogIkanImage extends Model
{
    use HasFactory;
    protected $fillable = ['url','katalog_ikan_id'];
    protected $table = 'katalog_ikan_image';
    public function katalog_ikan()
    {   
        return $this->belongsTo(KatalogIkan::class);
    }
}
