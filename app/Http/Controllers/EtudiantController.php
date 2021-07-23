<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class EtudiantController extends Controller
{
    public function store(Request $request){
        $data=request()->validate([
            'name'=>['required','string'],
            'prenoms'=>['required','string'],
            'email'=> ['required', 'string', 'email','unique:users'],
            'naissance'=>['required','string'],
            'numero'=>['required','string'],
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
            'status'=>5,
        ]);
            return redirect()->route('message'); 
            Session::flash('message', 'vous ajoutez avec succes!'); 
            Session::flash('alert-class', 'alert-success text-center'); 
    }
    // public function create_note(){       
    //     return view('note');     
    // }
}
