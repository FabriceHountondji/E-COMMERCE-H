<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    public $fillable = ['firstname','lastname','phone','birthday','sexe','address','avatar','email','user_id','fonction_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }

    public function produits(){
        return $this->belongsToMany(Produit::class);
    }


}
