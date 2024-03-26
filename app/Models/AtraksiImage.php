<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtraksiImage extends Model
{
    use HasFactory;
    protected $fillable = ['url','atraksi_id'];
    protected $table = 'atraksi_image';
    public function atraksi()
    {   
        return $this->belongsTo(Atraksi::class);
    }
}
