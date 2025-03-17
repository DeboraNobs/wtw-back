<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsesoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asesorias')->insert([
            [
                'descripcion' => 'Asesoría para visa Working Holiday en Canadá',
                'fecha_solicitud' => now(),
                'destino' => 'Canadá',
                'estado' => 'Pendiente',
                'quiere_postulacion' => true,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => false,
                'usuario_id' => 1,
                'destino_nacionalidad_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Consulta sobre proceso de Working Holiday en Nueva Zelanda',
                'fecha_solicitud' => now(),
                'destino' => 'Nueva Zelanda',
                'estado' => 'En proceso',
                'quiere_postulacion' => false,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => true,
                'usuario_id' => 2,
                'destino_nacionalidad_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Asesoría sobre seguro médico para Australia',
                'fecha_solicitud' => now(),
                'destino' => 'Australia',
                'estado' => 'Finalizado',
                'quiere_postulacion' => false,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => false,
                'usuario_id' => 3,
                'destino_nacionalidad_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
