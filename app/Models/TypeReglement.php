<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReglement extends Model
{
    public $fillable = ['name','description'];

    public function reglement(){
        return $this->belongsTo('App\Models\Reglement');
    }
}
