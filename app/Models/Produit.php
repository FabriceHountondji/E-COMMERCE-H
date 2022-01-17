<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $fillable = ['name','description','prix','categorie_id','fournisseur_id'];

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }

    public function acteur(){
        return $this->belongsTo('App\Models\Acteur');
    }

    public function images(){
        return $this->belongsToMany('App\Models\Image');
    }
}
