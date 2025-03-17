<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seccion::create(['id' => 1, 'titulo' => 'Primeros pasos', 'contenido' => 'Llegada al país', 'orden' => 1]);
        Seccion::create(['id' => 2, 'titulo' => 'Requisitos', 'contenido' => 'Requisitos Visa Working Holiday', 'orden' => 2]);
        Seccion::create(['id' => 3, 'titulo' => 'Turismo', 'contenido' => 'Lugares para visitar', 'orden' => 3]);
        Seccion::create(['id' => 4, 'titulo' => 'Estudiar', 'contenido' => 'Estudiar o realizar cursos', 'orden' => 4]);
        Seccion::create(['id' => 5, 'titulo' => 'Trabajo', 'contenido' => 'Trámites para comenzar a trabajar', 'orden' => 5]);
        Seccion::create(['id' => 6, 'titulo' => 'Experiencias', 'contenido' => 'Experiencias Working Holiday', 'orden' => 6]);
    }
}
