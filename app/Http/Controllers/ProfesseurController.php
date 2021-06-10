<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfesseurController extends Controller
{
    public function store(){
    	 $data=request()->validate([
        'name' => ['required', 'string', 'max:15'],
        'prenoms' => ['required', 'string', 'max:30'],
        'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
        'naissance' => ['required', 'string'],
        'numero' => ['required', 'string', 'max:15'],
        'matricule'=>['required', 'string','max:10','unique:users'],
        'password' => ['required', 'string', 'min:6'],
      ]); 
        User::create([
        'name' => $data['name'],
        'prenoms' => $data['prenoms'],
        'email' => $data['email'],
        'naissance' => $data['naissance'],
        'numero' => $data['numero'],
        'matricule' => $data['matricule'],
        'password' => Hash::make($data['password']),
        'status'=>3,
      ]);
        Session::flash('message', 'vous ajoutez avec succes!'); 
        Session::flash('alert-class', 'alert-success text-center'); 
    }    
}
