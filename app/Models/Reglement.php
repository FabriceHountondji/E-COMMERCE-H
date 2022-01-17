<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    public $fillable = ['solde','dateReglement','facture_id'];

    public function typeReglement(){
        return $this->belongsTo('App\Models\TypeReglement');
    }

    public function facture(){
        return $this->belongsTo('App\Models\Facture');
    }
}
