<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cadastrousuario extends Model
{
    protected $fillable = [
        'nome', 'email', 'password','timestamps'
    ];
}
