<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $fillable = ['firstname','lastname','phone','birthday','sexe','address','avatar','email','user_id','fonction_id'];

    public function factures(){
        return $this->belongsToMany(Facture::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
