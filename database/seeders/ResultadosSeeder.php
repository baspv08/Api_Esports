<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultados')->insert([
            ['partido_id' => 1, 'equipo_id' => 1, 'goles' => 2, 'es_local' => true],
            ['partido_id' => 1, 'equipo_id' => 2, 'goles' => 1, 'es_local' => false],
            ['partido_id' => 2, 'equipo_id' => 3, 'goles' => 3, 'es_local' => true],
            ['partido_id' => 2, 'equipo_id' => 1, 'goles' => 1, 'es_local' => false],
            ['partido_id' => 3, 'equipo_id' => 3, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 3, 'equipo_id' => 2, 'goles' => 0, 'es_local' => false],
            ['partido_id' => 4, 'equipo_id' => 1, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 4, 'equipo_id' => 2, 'goles' => 0, 'es_local' => false],
            ['partido_id' => 5, 'equipo_id' => 4, 'goles' => 2, 'es_local' => true],
            ['partido_id' => 5, 'equipo_id' => 5, 'goles' => 1, 'es_local' => false],
            ['partido_id' => 6, 'equipo_id' => 6, 'goles' => 3, 'es_local' => true],
            ['partido_id' => 6, 'equipo_id' => 4, 'goles' => 1, 'es_local' => false],
            ['partido_id' => 7, 'equipo_id' => 5, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 7, 'equipo_id' => 6, 'goles' => 0, 'es_local' => false],
            ['partido_id' => 8, 'equipo_id' => 4, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 8, 'equipo_id' => 5, 'goles' => 0, 'es_local' => false],
            ['partido_id' => 9, 'equipo_id' => 7, 'goles' => 3, 'es_local' => true],
            ['partido_id' => 9, 'equipo_id' => 8, 'goles' => 2, 'es_local' => false],
            ['partido_id' => 10, 'equipo_id' => 9, 'goles' => 2, 'es_local' => true],
            ['partido_id' => 10, 'equipo_id' => 7, 'goles' => 1, 'es_local' => false],
            ['partido_id' => 11, 'equipo_id' => 8, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 11, 'equipo_id' => 9, 'goles' => 0, 'es_local' => false],
            ['partido_id' => 12, 'equipo_id' => 7, 'goles' => 0, 'es_local' => true],
            ['partido_id' => 12, 'equipo_id' => 8, 'goles' => 0, 'es_local' => false],
        ]);
    
    }
}
