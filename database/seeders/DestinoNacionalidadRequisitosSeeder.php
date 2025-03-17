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
             // obtengo todas las relaciones entre destinos y nacionalidades
             $destinoNacionalidades = DB::table('destino_nacionalidad')->get();

             $requisitos = DB::table('requisitos')->pluck('id');

             $destinosConTodosRequisitos = [1, 3, 5, 6, 8, 13, 15, 17]; // destinos con todos los requisitos
             $destinosConRequisitosParciales = [
                 2 => [1, 2, 3], // andorra (ID 2) tendrá solo los requisitos 1, 2 y 3
                 4 => [1, 4, 5],
                 7 => [2, 3, 6],
                 9 => [1, 7, 8],
                 10 => [3, 5, 9],
                 11 => [2, 4, 6],
                 12 => [1, 3, 5],
                 14 => [4, 7, 9],
                 16 => [2, 5, 8],
             ];

             foreach ($destinoNacionalidades as $relacion) {
                 $destino_id = $relacion->destino_id;

                 // verifico si el destino tiene todos los requisitos o solo algunos
                 if (in_array($destino_id, $destinosConTodosRequisitos)) {
                     foreach ($requisitos as $requisitoId) {
                         DB::table('destino_nacionalidad_requisitos')->insert([
                             'destino_nacionalidad_id' => $relacion->id,
                             'requisito_id' => $requisitoId,
                             'created_at' => now(),
                             'updated_at' => now(),
                         ]);
                     }
                 } elseif (isset($destinosConRequisitosParciales[$destino_id])) {
                     // Asignar solo los requisitos específicos
                     foreach ($destinosConRequisitosParciales[$destino_id] as $requisitoId) {
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
