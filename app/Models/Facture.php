<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public $fillable = ['solde'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
