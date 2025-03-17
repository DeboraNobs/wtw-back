<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeccionesDestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seccion_destino')->insert([
            // Alemania
            ['destino_id' => 1, 'seccion_id' => 1],
            ['destino_id' => 1, 'seccion_id' => 2],
            ['destino_id' => 1, 'seccion_id' => 3],
            ['destino_id' => 1, 'seccion_id' => 4],
            ['destino_id' => 1, 'seccion_id' => 5],
            ['destino_id' => 1, 'seccion_id' => 6],

            // Andorra
            ['destino_id' => 2, 'seccion_id' => 1],
            ['destino_id' => 2, 'seccion_id' => 2],
            ['destino_id' => 2, 'seccion_id' => 3],

            // Australia
            ['destino_id' => 3, 'seccion_id' => 1],
            ['destino_id' => 3, 'seccion_id' => 2],
            ['destino_id' => 3, 'seccion_id' => 3],
            ['destino_id' => 3, 'seccion_id' => 4],
            ['destino_id' => 3, 'seccion_id' => 5],

            // Austria
            ['destino_id' => 4, 'seccion_id' => 1],
            ['destino_id' => 4, 'seccion_id' => 2],
            ['destino_id' => 4, 'seccion_id' => 3],
            ['destino_id' => 4, 'seccion_id' => 4],
            ['destino_id' => 4, 'seccion_id' => 5],

            // Canada
            ['destino_id' => 5, 'seccion_id' => 1],
            ['destino_id' => 5, 'seccion_id' => 2],
            ['destino_id' => 5, 'seccion_id' => 5],

            // Espania
            ['destino_id' => 6, 'seccion_id' => 1],
            ['destino_id' => 6, 'seccion_id' => 2],
            ['destino_id' => 6, 'seccion_id' => 3],
            ['destino_id' => 6, 'seccion_id' => 4],
            ['destino_id' => 6, 'seccion_id' => 5],


            // Francia
            ['destino_id' => 7, 'seccion_id' => 1],
            ['destino_id' => 7, 'seccion_id' => 2],
            ['destino_id' => 7, 'seccion_id' => 3],
            ['destino_id' => 7, 'seccion_id' => 4],
            ['destino_id' => 7, 'seccion_id' => 5],

            // Japón
            ['destino_id' => 8, 'seccion_id' => 1],
            ['destino_id' => 8, 'seccion_id' => 2],
            ['destino_id' => 8, 'seccion_id' => 3],

            // Irlanda
            ['destino_id' => 9, 'seccion_id' => 1],
            ['destino_id' => 9, 'seccion_id' => 2],
            ['destino_id' => 9, 'seccion_id' => 3],
            ['destino_id' => 9, 'seccion_id' => 4],
            ['destino_id' => 9, 'seccion_id' => 5],

            // Islanda
            ['destino_id' => 10, 'seccion_id' => 1],
            ['destino_id' => 10, 'seccion_id' => 2],
            ['destino_id' => 10, 'seccion_id' => 3],

            // Hungria
            ['destino_id' => 11, 'seccion_id' => 1],
            ['destino_id' => 11, 'seccion_id' => 2],
            ['destino_id' => 11, 'seccion_id' => 3],

            // Luxemburgo
            ['destino_id' => 12, 'seccion_id' => 1],
            ['destino_id' => 12, 'seccion_id' => 2],
            ['destino_id' => 12, 'seccion_id' => 3],

            // Nueva Zelanda
            ['destino_id' => 13, 'seccion_id' => 1],
            ['destino_id' => 13, 'seccion_id' => 2],
            ['destino_id' => 13, 'seccion_id' => 3],
            ['destino_id' => 13, 'seccion_id' => 4],
            ['destino_id' => 13, 'seccion_id' => 5],

            // Polonia
            ['destino_id' => 14, 'seccion_id' => 1],
            ['destino_id' => 14, 'seccion_id' => 2],
            ['destino_id' => 14, 'seccion_id' => 3],

            // Portugal
            ['destino_id' => 15, 'seccion_id' => 1],
            ['destino_id' => 15, 'seccion_id' => 2],
            ['destino_id' => 15, 'seccion_id' => 3],
            ['destino_id' => 15, 'seccion_id' => 5],

            // Republica Checa
            ['destino_id' => 16, 'seccion_id' => 1],
            ['destino_id' => 16, 'seccion_id' => 2],
            ['destino_id' => 16, 'seccion_id' => 3],
            ['destino_id' => 16, 'seccion_id' => 5],

            // Suecia
            ['destino_id' => 17, 'seccion_id' => 1],
            ['destino_id' => 17, 'seccion_id' => 2],
            ['destino_id' => 17, 'seccion_id' => 3],
            ['destino_id' => 17, 'seccion_id' => 4],
            ['destino_id' => 17, 'seccion_id' => 5],
        ]);
    }
}
