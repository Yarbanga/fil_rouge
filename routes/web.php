<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/header2', function () {
    return view('include.header2');
});


//Route pour afficher nos page d'accueil 
Route::get('/','AuthentificationController@index')->name('accueil');



//Route pour afficher le dashbord de l'administrateur avec les different choix
Route::get('/Espace_admin','AuthentificationController@dashbord')->name('dashbord');



//Route pour afficher le dashbord du chef de departement
Route::get('/departement','AuthentificationController@chef_departement')->name('chef_departement');


//Route pour afficher l'espace agent
Route::get('/Espace_agent','AuthentificationController@agent')->name('agent');




//Route::get('/Espace_professeur','AuthentificationController@prof')->name('prof');



//Route pour afficher l'espace prof
Route::get('Professeurs/dashboard', 'AuthentificationController@professeur')->name('professeur.dashboard');


Route::get('Professeurs/general', 'AuthentificationController@general')->name('general');


Route::get('Professeurs/login', 'AuthentificationController@login')->name('login');


Route::get('Professeurs/content', 'AuthentificationController@content')->name('content');



Route::get('Professeurs/footer', 'AuthentificationController@footer')->name('footer');



Route::get('Professeurs/headerdesktop', 'AuthentificationController@headerdesktop')->name('headerdesktop');


Route::get('Professeus/sidebar', 'AuthentificationController@sidebar')->name('sidebar');

Route::get('layouts/prof', 'AuthentificationController@profes')->name('profes');

//Route pour afficher l'emploi de temps
Route::get('Emploi_temps', 'AuthentificationController@emploi')->name('Emploi_temps');


Route::get('layouts/temp', 'AuthentificationController@temp')->name('temp');


//Route pour afficher ma page etudiant
Route::get('Espace_etudiant', 'AuthentificationController@etudiant')->name('etudiant');




//Route pour afficher mon formulaire de connection et d'inscription
Route::get('Inscp_Con', 'InscriptionController@index')->name('inscrp_conn');




Route::post('/inscription', 'InscriptionController@user_store')->name('user.store');

Route::get('/redirecte', 'InscriptionController@apres_inscription')->name('accuse');


Route::get('/espace', 'AuthentificationController@redirection')->name('accuse');



Route::get('/user_list', 'InscriptionController@users_valid')->name('user.list');

Route::get('/user_invalid', 'InscriptionController@users_invalid')->name('user.invalid');

//validations inscrits
Route::get('/validate-inscrit/{id}', 'InscriptionController@validate_inscrit')->name('inscrit.validate');
Route::get('/rejet-inscrit/{id}', 'InscriptionController@rejet_inscrit')->name('inscrit.rejet');



//Les différents routes pour le professeur
Route::post('/prof_store', 'ProfesseurController@store')->name('prof.store');

//Route pour Ajouter un chef de departement
Route::post('/Ajout_chefdepartement','DepartementController@store')->name('Ajout_chdpt');

//Route pour ajouter un étudiant
Route::post('/Ajout_etudiant','EtudiantController@store')->name('etud_store');

//Route pour ajouter un agent
Route::post('/Ajout_agent','AgentController@store')->name('agent_store');

//Route pour ajouter une information
Route::post('/Ajout_infos','InformationController@')->name('info_store');


//Route pour voir la liste des ajouts par L'admin
Route::get('/liste_ajout/{id}','InformationController@create')->name('liste_ajout');


//Route pour montrer un message de validation faire par l' Administrateur
Route::get('/retour','AuthentificationController@create')->name('retour');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
