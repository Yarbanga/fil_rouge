<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $fillable = [
        'semestre', 'filiere','matiere','reclamation',
    ];
}
