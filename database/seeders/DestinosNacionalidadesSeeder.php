<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destino;
class DestinosNacionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $relaciones = [
            // Destino: Alemania (ID 1)
            1 => [
                1 => ['num_cupos' => 500], // Argentina
                4 => ['num_cupos' => 1000], // España
            ],

            // Destino: Andorra (ID 2)
            2 => [
                4 => ['num_cupos' => 500], // España
            ],

            // Destino: Australia (ID 3)
            3 => [
                1 => ['num_cupos' => 1000], // Argentina
                2 => ['num_cupos' => 800], // Chile
            ],

            // Destino: Austria (ID 4)
            4 => [
                4 => ['num_cupos' => 800], // España
            ],

            // Destino: Canadá (ID 5)
            5 => [
                1 => ['num_cupos' => 1500], // Argentina
                4 => ['num_cupos' => 2000], // España
            ],

            // Destino: España (ID 6)
            6 => [
                2 => ['num_cupos' => 1500], // Chile
                3 => ['num_cupos' => 1000], // Uruguay
            ],

            // Destino: Francia (ID 7)
            7 => [
                1 => ['num_cupos' => 800], // Argentina
                2 => ['num_cupos' => 600], // Chile
                4 => ['num_cupos' => 1000], // España
            ],

            // Destino: Japón (ID 8)
            8 => [
                1 => ['num_cupos' => 500], // Argentina
                2 => ['num_cupos' => 400], // Chile
                3 => ['num_cupos' => 300], // Uruguay
            ],

            // Destino: Irlanda (ID 9)
            9 => [
                2 => ['num_cupos' => 500], // Chile
                4 => ['num_cupos' => 900], // España
            ],

            // Destino: Islandia (ID 10)
            10 => [
                1 => ['num_cupos' => 300], // Argentina
                2 => ['num_cupos' => 200], // Chile
                3 => ['num_cupos' => 100], // Uruguay
            ],

            // Destino: Hungría (ID 11)
            11 => [
                2 => ['num_cupos' => 300], // Chile
                4 => ['num_cupos' => 500], // España
            ],

            // Destino: Luxemburgo (ID 12)
            12 => [
                1 => ['num_cupos' => 200], // Argentina
                4 => ['num_cupos' => 300], // España
            ],

            // Destino: Nueva Zelanda (ID 13)
            13 => [
                1 => ['num_cupos' => 1000], // Argentina
                4 => ['num_cupos' => 1200], // España
            ],

            // Destino: Polonia (ID 14)
            14 => [
                1 => ['num_cupos' => 600], // Argentina
                4 => ['num_cupos' => 700], // España
            ],

            // Destino: Portugal (ID 15)
            15 => [
                1 => ['num_cupos' => 800], // Argentina
                2 => ['num_cupos' => 600], // Chile
                3 => ['num_cupos' => 400], // Uruguay
                4 => ['num_cupos' => 1000], // España
            ],

            // Destino: República Checa (ID 16)
            16 => [
                1 => ['num_cupos' => 500], // Argentina
                2 => ['num_cupos' => 400], // Chile
                3 => ['num_cupos' => 300], // Uruguay
                4 => ['num_cupos' => 600], // España
            ],

            // Destino: Suecia (ID 17)
            17 => [
                1 => ['num_cupos' => 700], // Argentina
                2 => ['num_cupos' => 500], // Chile
                3 => ['num_cupos' => 300], // Uruguay
                4 => ['num_cupos' => 900], // España
            ],
        ];

        // Insertar las relaciones en la tabla pivote
        foreach ($relaciones as $destinoId => $nacionalidades) {
            $destino = Destino::find($destinoId);
            $destino->nacionalidades()->attach($nacionalidades);
        }

    }
}
