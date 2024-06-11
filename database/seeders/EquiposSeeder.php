<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Campeonato 1: Clash Royale LATAM
        DB::table('equipos')->insert([
            [
                'nombre' => 'Royale Knights',
                'juegos' => 'Clash Royale',
                'campeonato_id' => 1,
            ],
            [
                'nombre' => 'Goblin Gang',
                'juegos' => 'Clash Royale',
                'campeonato_id' => 1,
            ],
            [
                'nombre' => 'Fireball Masters',
                'juegos' => 'Clash Royale',
                'campeonato_id' => 1,
            ],
        ]);

        // Campeonato 2: FIFA LATAM
        DB::table('equipos')->insert([
            [
                'nombre' => 'Real Madrid FC',
                'juegos' => 'FIFA 22',
                'campeonato_id' => 2,
            ],
            [
                'nombre' => 'Barcelona FC',
                'juegos' => 'FIFA 22',
                'campeonato_id' => 2,
            ],
            [
                'nombre' => 'Liverpool FC',
                'juegos' => 'FIFA 22',
                'campeonato_id' => 2,
            ],
        ]);

        // Campeonato 3: Dota 2 LATAM
        DB::table('equipos')->insert([
            [
                'nombre' => 'Radiant Rulers',
                'juegos' => 'Dota 2',
                'campeonato_id' => 3,
            ],
            [
                'nombre' => 'Dire Destroyers',
                'juegos' => 'Dota 2',
                'campeonato_id' => 3,
            ],
            [
                'nombre' => 'Ancient Avengers',
                'juegos' => 'Dota 2',
                'campeonato_id' => 3,
            ],
        ]);
    }
}
