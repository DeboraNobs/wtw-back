<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinoNacionalidadRequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinoNacionalidades = DB::table('destino_nacionalidad')->get();

        $requisitosPorCombinacion = [
            // Alemania (destino_id: 1)
            '1-1' => [1, 2, 3, 4, 5, 6], // Alemania-Argentina
            '1-4' => [1, 2, 3],     // Alemania-España

            // Andorra (destino_id: 2)
            '2-4' => [1, 2, 3],           // Andorra-España:

            // Australia (destino_id: 3)
            '3-1' => [1, 2, 3, 4, 5, 6, 7, 8, 9], // Australia-Argentina
            '3-2' => [1, 2, 3, 4],       // Australia-Chile

            // Austria (destino_id: 4)
            '4-4' => [1, 4, 5, 6],        // Austria-España:

            // Canadá (destino_id: 5)
            '5-1' => [1, 2, 3, 4, 5, 6, 7, 8], // Canadá-Argentina
            '5-4' => [1, 2, 3, 4, 5, 6],       // Canadá-España:

            // España (destino_id: 6)
            '6-2' => [1, 2, 8, 9],        // España-Chile:
            '6-3' => [1, 2, 3, 9],        // España-Uruguay

            // Francia (destino_id: 7)
            '7-1' => [2, 3, 4, 6, 7],     // Francia-Argentina
            '7-2' => [2, 3, 6, 8],        // Francia-Chile
            '7-4' => [2, 6, 7],           // Francia-España

            // Japón (destino_id: 8)
            '8-1' => [1, 2, 3, 4, 5, 6, 7, 8, 9], // Japón-Argentina
            '8-2' => [1, 2, 3, 4],    // Japón-Chile
            '8-3' => [1, 2],       // Japón-Uruguay

            // Irlanda (destino_id: 9)
            '9-2' => [1, 7, 8, 9],        // Irlanda-Chile
            '9-4' => [1, 7, 8],           // Irlanda-España

            // Islandia (destino_id: 10)
            '10-1' => [3, 5, 7, 9],       // Islandia-Argentina
            '10-2' => [3, 5, 9],          // Islandia-Chile
            '10-3' => [3, 9],             // Islandia-Uruguay:

            // Hungría (destino_id: 11)
            '11-2' => [2, 4, 6, 8],       // Hungría-Chile
            '11-4' => [2, 4, 6],          // Hungría-España

            // Luxemburgo (destino_id: 12)
            '12-1' => [1, 3, 5, 7],       // Luxemburgo-Argentina
            '12-4' => [1, 3, 5],          // Luxemburgo-España

            // Nueva Zelanda (destino_id: 13)
            '13-1' => [1, 2, 3, 4, 5, 6, 7, 8, 9], // Nueva Zelanda-Argentina
            '13-4' => [1, 2, 3, 4, 5, 6, 7, 8],    // Nueva Zelanda-España

            // Polonia (destino_id: 14)
            '14-1' => [4, 6, 7, 9],       // Polonia-Argentina
            '14-4' => [4, 7, 9],          // Polonia-España

            // Portugal (destino_id: 15)
            '15-1' => [1, 2, 3, 4, 5, 6, 7, 8], // Portugal-Argentina
            '15-2' => [1, 2, 3, 4, 5, 6],       // Portugal-Chile
            '15-3' => [1, 2, 3, 4, 5],          // Portugal-Uruguay
            '15-4' => [1, 2, 3],                // Portugal-España

            // República Checa (destino_id: 16)
            '16-1' => [2, 5, 7, 8, 9],    // República Checa-Argentina
            '16-2' => [2, 5, 8, 9],       // República Checa-Chile
            '16-3' => [2, 5, 9],          // República Checa-Uruguay
            '16-4' => [2, 5, 8],          // República Checa-España

            // Suecia (destino_id: 17)
            '17-1' => [1, 2, 3, 4, 5, 6, 7, 8], // Suecia-Argentina
            '17-2' => [1, 2, 3, 4, 5, 6, 7],    // Suecia-Chile
            '17-3' => [1, 2, 3, 4, 5, 6],       // Suecia-Uruguay
            '17-4' => [1, 2, 3, 4, 5],          // Suecia-España
        ];

        // Insertar los requisitos para cada combinación
        foreach ($destinoNacionalidades as $relacion) {
            $clave = $relacion->destino_id . '-' . $relacion->nacionalidad_id;

            if (isset($requisitosPorCombinacion[$clave])) {
                foreach ($requisitosPorCombinacion[$clave] as $requisitoId) {
                    DB::table('destino_nacionalidad_requisitos')->insert([
                        'destino_nacionalidad_id' => $relacion->id,
                        'requisito_id' => $requisitoId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
