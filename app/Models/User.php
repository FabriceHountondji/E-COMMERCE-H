<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $fillable = ['email','password','role_id'];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function acteurs(){
        return $this->belongsToMany(Acteur::class);
    }
}
