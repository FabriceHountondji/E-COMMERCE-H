<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    public $fillable = ['solde','dateReglement','facture_id','typeReglement_id'];

    public function typeReglement(){
        return $this->belongsTo(TypeReglement::class);
    }

    public function facture(){
        return $this->belongsTo(Facture::class);
    }
}
