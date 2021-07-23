<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class DepartementController extends Controller
{
    public function store(Request $request){
        $data=request()->validate([
        	'name'=>['required','string','max:15'],
        	'prenoms'=>['required','string'],
        	'email'=> ['required', 'string', 'email','unique:users'],
            'naissance'=>['required','string'],
            'numero'=>['required','string','unique:users'],
            'matricule'=>['required','string','unique:users'],
            'password'=>['required','string','min:6','unique:users'],
        ]);
       User::create([
            'name' =>$data['name'],
            'prenoms'=>$data['prenoms'],
            'email' => $data['email'],
	        'naissance' => $data['naissance'],
	        'numero' => $data['numero'],
	        'matricule' => $data['matricule'],
	        'password' => Hash::make($data['password']),
	        'status'=>2,
	    ]);
	        Session::flash('message', 'vous ajoutez avec succes!'); 
	        Session::flash('alert-class', 'alert-success text-center');
            return redirect()->route('message'); 
    }
}