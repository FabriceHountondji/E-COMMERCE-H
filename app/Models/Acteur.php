<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    public $fillable = ['firstname','lastname','phone','birthday','sex','address','avatar','email','user_id','fonction_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function fonction(){
        return $this->belongsTo('App\Models\Fonction');
    }

    public function produits(){
        return $this->belongsToMany('App\Models\Produit');
    }

    public function factures(){
        return $this->belongsToMany('App\Models\Facture');
    }
}
