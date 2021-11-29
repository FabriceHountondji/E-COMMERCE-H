<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $fillable = ['label','prix','categorie_id'];

    public function categorie(){

        return $this->belongsTo('App\Models\Categorie');

    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function images(){
        return $this->belongsToMany('App\Models\Image');
    }
}
