<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ufr extends Model
{
    protected $fillable = [
        'ufr','filiere',
    ];

    public function users()
	{
		return $this->hasMany('App\User');
	} 

     

	public function matieres()
	{
		return $this->hasMany('App\Matiere');
	} 
}
