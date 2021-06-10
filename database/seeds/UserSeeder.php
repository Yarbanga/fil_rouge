<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\photo;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->truncate();
        $admin=User::create([
            'name'=>'admin', 
            'prenoms'=>'gerant', 
            'matricule'=>'145769E',   
            'email'=>'admin@admin.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'sexe'=>'sexe',
            'password'=> Hash::make('password'),
            'role'=>1,
            'status'=>true,
            'naissance'=>'naissance',
            'annee'=>'annee',
            'numero'=>'numero',
        ]);   
        $chef_departement=User::create([
           'name'=>'yaya', 
            'prenoms'=>'yaya', 
            'matricule'=>'25874E',    
            'email'=>'yaya@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'sexe'=>'sexe',
            'naissance'=>'naissance',
            'role'=>2,
            'status'=>2,
            'annee'=>'annee',
             'numero'=>'numero',

        ]);


        $professeur=User::create([
           'name'=>'professeur', 
            'prenoms'=>'prof', 
            'matricule'=>'258745C',
            'ufr'=>'ufr',
            'filiere'=>'filiere',    
            'email'=>'professeur@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'matiere'=>'matiere',
            'sexe'=>'sexe',
            'naissance'=>'naissance',
            'role'=>3,
            'status'=>3,
            'annee'=>'annee',
            'numero'=>'numero',

        ]);
        $agent=User::create([
           'name'=>'agent', 
            'prenoms'=>'agent', 
            'matricule'=>'258768H',    
            'email'=>'agent@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'password'=> Hash::make('password'),
            'matiere'=>'matiere',
            'sexe'=>'sexe',
            'naissance'=>'naissance',
            'role'=>4,
            'status'=>4,
            'annee'=>'annee',
            'numero'=>'numero',

        ]);

        $etudiant=User::create([
           'name'=>'etudiant', 
            'prenoms'=>'apprenant', 
            'matricule'=>'15872M',
            'ufr'=>'a determiner',
            'filiere'=>'a determiner',  
            'email'=>'etudiant@gmail.com',
            'photo'=>'LOCDE-analyse-effets-Covid-19-leducation-2020-09-08-1201112897',
            'matiere'=>'matiere',
            'password'=> Hash::make('password'),
            'role'=>0,
            'status'=>5,
            'naissance'=>'naissance',
            'sexe'=>'sexe',
            'annee'=>'annee',
            'numero'=>'numero',

        ]);            
    }
}
