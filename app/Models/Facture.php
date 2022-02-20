<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public $fillable = ['solde','dateFacture','client_id'];

    public function acteur(){
        return $this->belongsTo(Acteur::class);
    }
}
