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
            ['partido_id' => 1, 'equipo_ganador_id' => 1, 'equipo_perdedor_id' => 2, 'anotaciones' => 2],
            ['partido_id' => 2, 'equipo_ganador_id' => 2, 'equipo_perdedor_id' => 3, 'anotaciones' => 3],
            ['partido_id' => 3, 'equipo_ganador_id' => 1, 'equipo_perdedor_id' => 3, 'anotaciones' => 2],
            ['partido_id' => 4, 'equipo_ganador_id' => 1, 'equipo_perdedor_id' => 2, 'anotaciones' => 1],
            ['partido_id' => 5, 'equipo_ganador_id' => 4, 'equipo_perdedor_id' => 5, 'anotaciones' => 2],
            ['partido_id' => 6, 'equipo_ganador_id' => 6, 'equipo_perdedor_id' => 4, 'anotaciones' => 3],
            ['partido_id' => 7, 'equipo_ganador_id' => 8, 'equipo_perdedor_id' => 8, 'anotaciones' => 2],
            ['partido_id' => 8, 'equipo_ganador_id' => 7, 'equipo_perdedor_id' => 8, 'anotaciones' => 1],
            ['partido_id' => 9, 'equipo_ganador_id' => 7, 'equipo_perdedor_id' => 8, 'anotaciones' => 3],
            ['partido_id' => 10, 'equipo_ganador_id' => 9, 'equipo_perdedor_id' => 8, 'anotaciones' => 2],
            ['partido_id' => 11, 'equipo_ganador_id' => 9, 'equipo_perdedor_id' => 7, 'anotaciones' => 1],
            ['partido_id' => 12, 'equipo_ganador_id' => 7, 'equipo_perdedor_id' => 9, 'anotaciones' => 1],
            ['partido_id' => 13, 'equipo_ganador_id' => 8, 'equipo_perdedor_id' => 9, 'anotaciones' => 2],
            ['partido_id' => 14, 'equipo_ganador_id' => 9, 'equipo_perdedor_id' => 8, 'anotaciones' => 3],
            ['partido_id' => 15, 'equipo_ganador_id' => 7, 'equipo_perdedor_id' => 8, 'anotaciones' => 1],
        ]);
    }
}
