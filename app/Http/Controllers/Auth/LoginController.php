<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\photo;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function redirectTo()
    {
        

        if(Auth::user()->status==1){
            Session::flash('message', 'Bienvenue admin'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/Espace_admin';
        }
        
        if(Auth::user()->status==2){
            Session::flash('message', 'Bienvenue admin'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/departement';
        }


        if(Auth::user()->status==3){
            Session::flash('message', 'Bienvenue Eleves'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/Professeurs/dashboard';
        }

        
        
        if(Auth::user()->status==4){
            Session::flash('message', 'Bienvenue Eleves'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/Espace_agent';
        }

        if(Auth::user()->status==5){
            Session::flash('message', 'Bienvenue Etudiants'); 
            Session::flash('alert-class', 'alert-primary text-center'); 
            return '/Espace_etudiant';
        }

        else{
             
            Session::flash('message', 'Vous ne pouvez pas vous connectez!'); 
            Session::flash('alert-class', 'alert-danger text-center'); 
            return '/espace';
        }

    } 
}