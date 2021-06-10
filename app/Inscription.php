<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'nom', 'prenoms','matricule','email','password',
    ];
}
