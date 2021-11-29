<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $fillable = ['label'];

    public function produit(){
        return $this->belongsToMany('App\Models\Produit');
    }
}
