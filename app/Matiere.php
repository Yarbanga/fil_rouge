<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = [
        'matiere', 'ufr_id','filiere'
    ];

    public function ufr()
	{
		return $this->belongsTo('App\Ufr');
    } 
    
}
