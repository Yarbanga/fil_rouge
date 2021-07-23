<?php

namespace App\Http\Controllers;

use App\Reclamation;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
        	'semestre'=>['required','string'],
        	'filiere'=>['required','string'],
        	'matiere'=> ['required', 'string'],
            'photo'=>['required','string'],
            'reclamation'=>['required','string'],
        ]);
       Reclamation::create([
            'semestre' =>$data['semestre'],
            'filiere'=>$data['filiere'],
            'matiere' => $data['matiere'],
	        'reclamation' => $data['reclamation'],
            'photo'=>$data['photo'],
	    ]);
	        Session::flash('message', 'Votre demande sera traiter!'); 
	        Session::flash('alert-class', 'alert-success text-center');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamation $reclamation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        //
    }
}
