<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nacionalidad::create(['id' => 1, 'nacionalidad' => 'Argentina']);
        Nacionalidad::create(['id' => 2, 'nacionalidad' => 'Chilena']);
        Nacionalidad::create(['id' => 3, 'nacionalidad' => 'Uruguaya']);
        Nacionalidad::create(['id' => 4, 'nacionalidad' => 'Española']);
    }
}
