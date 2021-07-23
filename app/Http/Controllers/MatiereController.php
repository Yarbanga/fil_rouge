<?php

namespace App\Http\Controllers;

use App\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function choixFiliere()
    {
        return view('choix_filiere');
    }
    public function filiere_store(Request $request)
    {
        $data=request()->validate([
            'matiere'=>['required','string','max:20'],
        ]);
        Matiere::create([
            'matiere'=>$data['matiere'],
        ]);
        return redirect()->route('message_ufr');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listematiere(){
        $matieres=Matiere::all();
        //$ufrs=Ufr::where('id', '=', $ufr)->get();
        
        return view('filiere', compact('matieres' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        //
    }
}
