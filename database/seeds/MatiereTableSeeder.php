<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([

            ['id' => '1', 'filiere' => 'Informatique'],
            ['id' => '2', 'filiere' => 'Géni électrique'],
            ['id' => '3', 'filiere' => 'Medecine'],
            ['id' => '4', 'filiere' => 'Anglais'],
            ['id' => '5', 'filiere' => 'SVT'],
            ['id' => '6', 'filiere' => 'Maths'],
            ['id' => '7', 'filiere' => 'Physique'],
            ['id' => '8', 'filiere' => 'Chimie'],
            ['id' => '9', 'filiere' => 'Economie'],
            ['id' => '10', 'filiere' =>'socio'],
            
        ]);
    }
}
