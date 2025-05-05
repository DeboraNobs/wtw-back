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
                'estado' => 'Pendiente',
                'quiere_postulacion' => true,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => false,
                'usuario_id' => 1,
                'nacionalidad_id' => 1,
                'destino_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Consulta sobre proceso de Working Holiday en Nueva Zelanda',
                'fecha_solicitud' => now(),
                'estado' => 'Pagada',
                'quiere_postulacion' => false,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => true,
                'usuario_id' => 2,
                'nacionalidad_id' => 2,
                'destino_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Asesoría sobre seguro médico para Australia',
                'fecha_solicitud' => now(),
                'estado' => 'Confirmada',
                'quiere_postulacion' => false,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => false,
                'usuario_id' => 3,
                'nacionalidad_id' => 3,
                'destino_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Asesoría sobre seguro médico para Noruega',
                'fecha_solicitud' => now(),
                'estado' => 'Cancelada',
                'quiere_postulacion' => false,
                'quiere_seguro' => true,
                'quiere_asistencia_ilimitada' => false,
                'usuario_id' => 3,
                'nacionalidad_id' => 3,
                'destino_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


