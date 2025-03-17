<?php

namespace Database\Seeders;

use App\Models\Experiencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experienciasEstaticas = [
            [
                'fecha_publicacion' => now(),
                'titulo' => 'Mi experiencia en Alemania con la Working Holiday',
                'subtitulo' => 'Todo lo que necesitas saber para aplicar a la visa',
                'contenido' => 'Alemania es un destino increíble para la Working Holiday. El proceso de visa fue sencillo, y el país ofrece muchas oportunidades de trabajo y viaje. Recomiendo aprender algo de alemán antes de llegar.',
                'destino_id' => 1, // Alemania
            ],
            [
                'fecha_publicacion' => now(),
                'titulo' => 'Viviendo el sueño australiano',
                'subtitulo' => 'Consejos para trabajar y viajar en Australia',
                'contenido' => 'Australia es un país maravilloso para la Working Holiday. El proceso de visa es rápido, y hay muchas oportunidades en agricultura y hostelería. No olvides visitar la Gran Barrera de Coral.',
                'destino_id' => 3, // Australia
            ],
            [
                'fecha_publicacion' => now(),
                'titulo' => 'Mi aventura en Nueva Zelanda',
                'subtitulo' => 'Cómo aprovechar al máximo la Working Holiday',
                'contenido' => 'Nueva Zelanda es un paraíso para los amantes de la naturaleza. La visa es fácil de obtener, y hay muchas oportunidades en turismo y agricultura. ¡No te pierdas los fiordos!',
                'destino_id' => 13, // Nueva Zelanda
            ],
            [
                'fecha_publicacion' => now(),
                'titulo' => 'Trabajando y viajando en Canadá',
                'subtitulo' => 'Guía completa para la Working Holiday',
                'contenido' => 'Canadá es un destino increíble para la Working Holiday. El proceso de visa es un poco más largo, pero vale la pena. Las montañas rocosas son impresionantes.',
                'destino_id' => 5, // Canadá
            ],
            [
                'fecha_publicacion' => now(),
                'titulo' => 'Mi experiencia en Japón',
                'subtitulo' => 'Consejos para la visa Working Holiday',
                'contenido' => 'Japón es un país fascinante para la Working Holiday. La visa es un poco más complicada, pero la experiencia cultural es única. Aprende algo de japonés antes de viajar.',
                'destino_id' => 8, // Japón
            ],
        ];

        foreach ($experienciasEstaticas as $experiencia) {
            Experiencia::create($experiencia);
        }

        Experiencia::factory(10)->create();
    }
}
