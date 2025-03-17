<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['id' => 1, 'titulo' => 'Novedades sobre WH']);
        Categoria::create(['id' => 2, 'titulo' => 'Tips de viaje']);
        Categoria::create(['id' => 3, 'titulo' => 'Experiencias']);
        Categoria::create(['id' => 4, 'titulo' => 'Turismo']);
        Categoria::create(['id' => 5, 'titulo' => 'Último sobre estudios/cursos en el exterior']);
    }
}
