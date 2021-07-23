<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UfrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ufrs')->insert([

            ['id' => '1', 'ufr' => 'SEG'],
            ['id' => '2', 'ufr' => 'SEA'],
            ['id' => '3', 'ufr' => 'SVT'],
            ['id' => '4', 'ufr' => 'SDS'],
            ['id' => '5', 'ufr' => 'LACS'],
            ['id' => '6', 'ufr' => 'MPI'],
            ['id' => '7', 'ufr' => 'SJP'],
            ['id' => '8', 'ufr' => 'ST'],
            ['id' => '9', 'ufr' => 'INSSA'],
        ]);
    }
}
