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
            ['equipo_id' => 1, 'partido_id' => 1, 'ganador' => true],
            ['equipo_id' => 2, 'partido_id' => 1, 'ganador' => false],
        
            // Partido 2: Old Trafford
            ['equipo_id' => 2, 'partido_id' => 2, 'ganador' => true],
            ['equipo_id' => 3, 'partido_id' => 2, 'ganador' => false],
        
            // Partido 3: Camp Nou
            ['equipo_id' => 3, 'partido_id' => 3, 'ganador' => true],
            ['equipo_id' => 1, 'partido_id' => 3, 'ganador' => false],
        
            // Partido 4: Wembley Stadium
            ['equipo_id' => 1, 'partido_id' => 4,'ganador' => true],
            ['equipo_id' => 3, 'partido_id' => 4,'ganador' => false],
        
            // Partido 5: Santiago Bernabéu
            ['equipo_id' => 2, 'partido_id' => 5, 'ganador' => true],
            ['equipo_id' => 1, 'partido_id' => 5, 'ganador' => false],
        
            // Partido 6: MetLife Stadium
            ['equipo_id' => 4, 'partido_id' => 6, 'ganador' => true],
            ['equipo_id' => 5, 'partido_id' => 6, 'ganador' => false],
        
            // Partido 7: Lambeau Field
            ['equipo_id' => 5, 'partido_id' => 7, 'ganador' => true],
            ['equipo_id' => 6, 'partido_id' => 7, 'ganador' => false],
        
            // Partido 8: Anfield
            ['equipo_id' => 6, 'partido_id' => 8, 'ganador' => true],
            ['equipo_id' => 4, 'partido_id' => 8, 'ganador' => false],
        
            // Partido 9: Sant Jordi Club
            ['equipo_id' => 4, 'partido_id' => 9, 'ganador' => true],
            ['equipo_id' => 6, 'partido_id' => 9, 'ganador' => false],
        
            // Partido 10: Estadio Azteca
            ['equipo_id' => 5, 'partido_id' => 10, 'ganador' => true],
            ['equipo_id' => 4, 'partido_id' => 10, 'ganador' => false],
        
            // Partido 11: Staples Center
            ['equipo_id' => 7, 'partido_id' => 11, 'ganador' => true],
            ['equipo_id' => 8, 'partido_id' => 11, 'ganador' => false],
        
            // Partido 12: Madison Square Garden
            ['equipo_id' => 8, 'partido_id' => 12, 'ganador' => true],
            ['equipo_id' => 9, 'partido_id' => 12, 'ganador' => false],
            // Partido 13: Rogers Arena
            ['equipo_id' => 9, 'partido_id' => 13, 'ganador' => true],
            ['equipo_id' => 7, 'partido_id' => 13, 'ganador' => false],

            // Partido 14: KeyArena
            ['equipo_id' => 7, 'partido_id' => 14, 'ganador' => true],
            ['equipo_id' => 8, 'partido_id' => 14, 'ganador' => false],

            // Partido 15: Mercedes-Benz Arena
            ['equipo_id' => 8, 'partido_id' => 15, 'ganador' => true],
            ['equipo_id' => 9, 'partido_id' => 15, 'ganador' => false],
        ]);
    }
    
}
