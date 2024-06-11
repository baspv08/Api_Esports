<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Equipo_PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipo_partido')->insert([
            // Partido 1: Estadio Santiago Bernabéu
            ['equipo_id' => 1, 'partido_id' => 1, 'goles' => 2, 'es_local' => true],
            ['equipo_id' => 2, 'partido_id' => 1, 'goles' => 1, 'es_local' => false],
        
            // Partido 2: Old Trafford
            ['equipo_id' => 2, 'partido_id' => 2, 'goles' => 0, 'es_local' => true],
            ['equipo_id' => 3, 'partido_id' => 2, 'goles' => 3, 'es_local' => false],
        
            // Partido 3: Camp Nou
            ['equipo_id' => 3, 'partido_id' => 3, 'goles' => 1, 'es_local' => true],
            ['equipo_id' => 1, 'partido_id' => 3, 'goles' => 1, 'es_local' => false],
        
            // Partido 4: Wembley Stadium
            ['equipo_id' => 1, 'partido_id' => 4, 'goles' => 2, 'es_local' => true],
            ['equipo_id' => 3, 'partido_id' => 4, 'goles' => 2, 'es_local' => false],
        
            // Partido 5: Santiago Bernabéu
            ['equipo_id' => 2, 'partido_id' => 5, 'goles' => 1, 'es_local' => true],
            ['equipo_id' => 1, 'partido_id' => 5, 'goles' => 2, 'es_local' => false],
        
            // Partido 6: MetLife Stadium
            ['equipo_id' => 4, 'partido_id' => 6, 'goles' => 3, 'es_local' => true],
            ['equipo_id' => 5, 'partido_id' => 6, 'goles' => 1, 'es_local' => false],
        
            // Partido 7: Lambeau Field
            ['equipo_id' => 5, 'partido_id' => 7, 'goles' => 0, 'es_local' => true],
            ['equipo_id' => 6, 'partido_id' => 7, 'goles' => 2, 'es_local' => false],
        
            // Partido 8: Anfield
            ['equipo_id' => 6, 'partido_id' => 8, 'goles' => 1, 'es_local' => true],
            ['equipo_id' => 4, 'partido_id' => 8, 'goles' => 3, 'es_local' => false],
        
            // Partido 9: Sant Jordi Club
            ['equipo_id' => 4, 'partido_id' => 9, 'goles' => 2, 'es_local' => true],
            ['equipo_id' => 6, 'partido_id' => 9, 'goles' => 1, 'es_local' => false],
        
            // Partido 10: Estadio Azteca
            ['equipo_id' => 5, 'partido_id' => 10, 'goles' => 2, 'es_local' => true],
            ['equipo_id' => 4, 'partido_id' => 10, 'goles' => 1, 'es_local' => false],
        
            // Partido 11: Staples Center
            ['equipo_id' => 7, 'partido_id' => 11, 'goles' => 3, 'es_local' => true],
            ['equipo_id' => 8, 'partido_id' => 11, 'goles' => 2, 'es_local' => false],
        
            // Partido 12: Madison Square Garden
            ['equipo_id' => 8, 'partido_id' => 12, 'goles' => 1, 'es_local' => true],
            ['equipo_id' => 9, 'partido_id' => 12, 'goles' => 2, 'es_local' => false],
            // Partido 13: Rogers Arena
            ['equipo_id' => 9, 'partido_id' => 13, 'goles' => 2, 'es_local' => true],
            ['equipo_id' => 7, 'partido_id' => 13, 'goles' => 1, 'es_local' => false],

            // Partido 14: KeyArena
            ['equipo_id' => 7, 'partido_id' => 14, 'goles' => 0, 'es_local' => true],
            ['equipo_id' => 8, 'partido_id' => 14, 'goles' => 2, 'es_local' => false],

            // Partido 15: Mercedes-Benz Arena
            ['equipo_id' => 8, 'partido_id' => 15, 'goles' => 1, 'es_local' => true],
            ['equipo_id' => 9, 'partido_id' => 15, 'goles' => 1, 'es_local' => false],
        ]);
    }
    
}
