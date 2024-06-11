<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            ['fecha' => '2024-06-11', 'lugar' => 'Estadio Santiago Bernabéu', 'campeonato_id' => 1],
            ['fecha' => '2024-06-12', 'lugar' => 'Old Trafford', 'campeonato_id' => 1],
            ['fecha' => '2024-06-15', 'lugar' => 'Camp Nou', 'campeonato_id' => 1],
            ['fecha' => '2024-06-18', 'lugar' => 'Wembley Stadium', 'campeonato_id' => 1],
            ['fecha' => '2024-06-25', 'lugar' => 'Santiago Bernabéu', 'campeonato_id' => 1],
            ['fecha' => '2024-07-02', 'lugar' => 'MetLife Stadium', 'campeonato_id' => 2],
            ['fecha' => '2024-07-05', 'lugar' => 'Lambeau Field', 'campeonato_id' => 2],
            ['fecha' => '2024-06-20', 'lugar' => 'Anfield', 'campeonato_id' => 2],
            ['fecha' => '2024-07-10', 'lugar' => 'Sant Jordi Club', 'campeonato_id' => 2],
            ['fecha' => '2024-07-15', 'lugar' => 'Estadio Azteca', 'campeonato_id' => 2],
            ['fecha' => '2024-08-20', 'lugar' => 'Staples Center', 'campeonato_id' => 3],
            ['fecha' => '2024-08-25', 'lugar' => 'Madison Square Garden', 'campeonato_id' => 3],
            ['fecha' => '2024-09-02', 'lugar' => 'Rogers Arena', 'campeonato_id' => 3],
            ['fecha' => '2024-09-10', 'lugar' => 'KeyArena', 'campeonato_id' => 3],
            ['fecha' => '2024-09-20', 'lugar' => 'Mercedes-Benz Arena', 'campeonato_id' => 3],
        ]);
    }
}
