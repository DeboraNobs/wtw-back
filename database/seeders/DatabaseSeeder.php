<?php

namespace Database\Seeders;

use App\Models\Destino;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            NacionalidadesSeeder::class,
            UsuariosSeeder::class,
            DestinosSeeder::class,
            DestinosNacionalidadesSeeder::class,
            ExperienciasSeeder::class,
            CategoriasSeeder::class,
            ArticulosSeeder::class,
            ArticulosCategoriasSeeder::class,
            SeccionesSeeder::class,
            SeccionesDestinosSeeder::class,
            AsesoriasSeeder::class,
            RequisitosSeeder::class,
            DestinoNacionalidadRequisitosSeeder::class
        ]);


    }
}
