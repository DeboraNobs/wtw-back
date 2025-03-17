<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArticulosCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulo_categoria')->insert([
            // Novedades sobre WH
            ['articulo_id' => 1, 'categoria_id' => 1],
            ['articulo_id' => 2, 'categoria_id' => 1],

            // Tips de viaje
            ['articulo_id' => 3, 'categoria_id' => 2],
            ['articulo_id' => 4, 'categoria_id' => 2],

            // Experiencias
            ['articulo_id' => 5, 'categoria_id' => 3],
            ['articulo_id' => 6, 'categoria_id' => 3],

            // Turismo
            ['articulo_id' => 7, 'categoria_id' => 4],
            ['articulo_id' => 8, 'categoria_id' => 4],

            // Estudios/Cursos en el exterior
            ['articulo_id' => 9, 'categoria_id' => 5],
            ['articulo_id' => 10, 'categoria_id' => 5],
        ]);
    }
}
