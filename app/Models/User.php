<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['name','phone','birthday','sex','address','avatar','email','password','role_id'];


    public function factures(){
        return $this->belongsToMany('App\Models\Facture');
    }

    public function role(){
        return $this->belongsTo('App\Models\Commande');
    }

    public function produits(){
        return $this->belongsToMany('App\Models\Produit');
    }
}
