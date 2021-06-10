<?php

namespace App\Http\Controllers;

use App\Authentification;
use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Accueil');
    }

    public function dashbord(){
        return view('layouts.master');
    }
    public function profes(){
        return view('layouts.professeur');
    }

    public function chef_departement(){
        return view('layouts.chef_departement');
    }
    public function agent(){
        return view('agent');
    }
    public function professeur(){
        return view ('Professeurs.dashboard');
    }
    public function general(){
        return view('Professeurs.general');
    }
    public function login(){
        return view('Professeurs.login');
    }
    public function content(){
        return view('Professeurs/portials.content');
    }
     public function footer(){
        return view('Professeurs/portials.footer');
    }
     public function headerdesktop(){
        return view('Professeurs/portials.headerdesktop');
    }

    public function sidebar(){
        return view('Professeurs/portials.sidebar');
    }
    public function temp(){
        return view('layouts.temp');
    }
    public function etudiant(){
        return view('layouts.etudiant');
    }
    public function redirection(){
        return view('Etudiant.retour');
    }
    public function emploi(){
        return view('Emploi_temps');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retourprof');
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
     * @param  \App\Authentification  $authentification
     * @return \Illuminate\Http\Response
     */
    public function show(Authentification $authentification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authentification  $authentification
     * @return \Illuminate\Http\Response
     */
    public function edit(Authentification $authentification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authentification  $authentification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authentification $authentification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authentification  $authentification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authentification $authentification)
    {
        //
    }
}
