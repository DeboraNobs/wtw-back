<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requisitos = [
            'Tener pasaporte válido.',
            'Contar con seguro médico internacional.',
            'Demostrar solvencia económica suficiente.',
            'No tener antecedentes penales.',
            'Tener estudios universitarios completos o al menos 2 años completos y aprobados.',
            'Contar con alojamiento asegurado.',
            'Presentar una carta de motivación.',
            'Tener un pasaje de ida y vuelta (o fondos para comprarlo).',
            'Cumplir con los requisitos de edad.',
        ];

        foreach ($requisitos as $requisito) {
            DB::table('requisitos')->insert([
                'requisito' => $requisito,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
