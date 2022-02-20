<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageassocy extends Model
{
    public $fillable = ['produit_id','image_id'];

    public function produit(){
        return $this->belongsTo(Produit::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }
}
