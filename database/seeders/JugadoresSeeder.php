<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        // Jugadores para el Campeonato de Clash Royale
        DB::table('jugadores')->insert([
            [
                'rut' => '35027918-6',
                'nombre' => 'Juan',
                'apellido' => 'Gómez',
                'numero_camiseta' => 1,
                'posicion' => 'Atacante',
                'equipo_id' => 1, // Royale Knights
            ],
            [
                'rut' => '63847192-1',
                'nombre' => 'Luis',
                'apellido' => 'Martínez',
                'numero_camiseta' => 2,
                'posicion' => 'Defensor',
                'equipo_id' => 1, // Royale Knights
            ],

            [
                'rut' => '92518403-2',
                'nombre' => 'Pedro',
                'apellido' => 'Cabrera',
                'numero_camiseta' => 5,
                'posicion' => 'Atacante',
                'equipo_id' => 2, // Goblin Gang
            ],
            [
                'rut' => '21673094-8',
                'nombre' => 'Roberto',
                'apellido' => 'Meneses',
                'numero_camiseta' => 4,
                'posicion' => 'Defensor',
                'equipo_id' => 2, // Goblin Gang
            ],

            [
                'rut' => '39481527-0',
                'nombre' => 'Diego',
                'apellido' => 'Leon',
                'numero_camiseta' => 6,
                'posicion' => 'Atacante',
                'equipo_id' => 3, // Fireball Masters
            ],
            [
                'rut' => '80716293-6',
                'nombre' => 'Pedro',
                'apellido' => 'Villegas',
                'numero_camiseta' => 7,
                'posicion' => 'Defensor',
                'equipo_id' => 3, // Fireball Masters
            ],
        ]);

        // Jugadores para el Campeonato de FIFA
        DB::table('jugadores')->insert([
            [
                'rut' => '69025381-7',
                'nombre' => 'Cristiano',
                'apellido' => 'Ronaldo',
                'numero_camiseta' => 7,
                'posicion' => 'Delantero',
                'equipo_id' => 4, // Real Madrid FC
            ],
            [
                'rut' => '47103628-5',
                'nombre' => 'Lionel',
                'apellido' => 'Messi',
                'numero_camiseta' => 10,
                'posicion' => 'Mediocampista',
                'equipo_id' => 4, // Real Madrid FC
            ],

            [
                'rut' => '58271039-4',
                'nombre' => 'Neymar',
                'apellido' => 'Jr.',
                'numero_camiseta' => 11,
                'posicion' => 'Delantero',
                'equipo_id' => 5, // Barcelona FC
            ],
            [
                'rut' => '86420915-6',
                'nombre' => 'Andrés',
                'apellido' => 'Iniesta',
                'numero_camiseta' => 8,
                'posicion' => 'Centrocampista',
                'equipo_id' => 5, // Barcelona FC
            ],

            [
                'rut' => '95135782-4',
                'nombre' => 'Mohamed',
                'apellido' => 'Salah',
                'numero_camiseta' => 11,
                'posicion' => 'Delantero',
                'equipo_id' => 6, // Liverpool FC
            ],
            [
                'rut' => '36925814-5',
                'nombre' => 'Virgil',
                'apellido' => 'van Dijk',
                'numero_camiseta' => 4,
                'posicion' => 'Defensa',
                'equipo_id' => 6, // Liverpool FC
            ],

        ]);

        // Jugadores para el Campeonato de Dota 2
        DB::table('jugadores')->insert([
            [
                'rut' => '24681357-3',
                'nombre' => 'Alex',
                'apellido' => 'Johnson',
                'numero_camiseta' => 5,
                'posicion' => 'Support',
                'equipo_id' => 7, // Radiant Rulers
            ],
            [
                'rut' => '13579246-8',
                'nombre' => 'Emma',
                'apellido' => 'Smith',
                'numero_camiseta' => 3,
                'posicion' => 'Carry',
                'equipo_id' => 7, // Radiant Rulers
            ],

            [
                'rut' => '54321678-2',
                'nombre' => 'Michael',
                'apellido' => 'Brown',
                'numero_camiseta' => 2,
                'posicion' => 'Offlaner',
                'equipo_id' => 8, // Dire Destroyers
            ],
            [
                'rut' => '87654321-0',
                'nombre' => 'Sophia',
                'apellido' => 'Davis',
                'numero_camiseta' => 4,
                'posicion' => 'Midlaner',
                'equipo_id' => 8, // Dire Destroyers
            ],

            [
                'rut' => '98765432-1',
                'nombre' => 'Thor',
                'apellido' => 'Odinson',
                'numero_camiseta' => 1,
                'posicion' => 'Carry',
                'equipo_id' => 9, // Ancient Avengers
            ],
            [
                'rut' => '12345678-9',
                'nombre' => 'Loki',
                'apellido' => 'Laufeyson',
                'numero_camiseta' => 2,
                'posicion' => 'Midlaner',
                'equipo_id' => 9, // Ancient Avengers
            ],
        ]);   
    }
}
