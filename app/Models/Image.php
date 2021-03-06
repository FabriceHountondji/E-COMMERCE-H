<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable = ['url','produit_id'];

    public function produit(){
        return $this->belongsTo('App\Models\Produit');
    }
}
