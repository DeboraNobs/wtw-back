<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articulo;
class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articulo::create([
            'titulo' => 'Nuevas visas Working Holiday disponibles',
            'subtitulo' => 'Países que han actualizado sus requisitos para WH',
            'fecha' => now(),
            'imagen' => 'imagenes/novedades-wh.jpg',
        ]);

        Articulo::create([
            'titulo' => 'Cambios en los cupos de Working Holiday',
            'subtitulo' => 'Nuevas oportunidades y desafíos para 2025',
            'fecha' => now(),
            'imagen' => 'imagenes/cupos-wh.jpg',
        ]);

        // Tips de viaje
        Articulo::create([
            'titulo' => 'Cómo ahorrar dinero mientras viajas',
            'subtitulo' => 'Consejos prácticos para presupuestos ajustados',
            'fecha' => now(),
            'imagen' => 'imagenes/ahorro-viaje.jpg',
        ]);

        Articulo::create([
            'titulo' => 'Qué llevar en tu maleta para una Working Holiday',
            'subtitulo' => 'Los esenciales que no pueden faltar en tu aventura',
            'fecha' => now(),
            'imagen' => 'imagenes/equipaje-wh.jpg',
        ]);

        // Experiencias
        Articulo::create([
            'titulo' => 'Mi primer trabajo en Australia',
            'subtitulo' => 'Cómo encontré empleo en menos de una semana',
            'fecha' => now(),
            'imagen' => 'imagenes/trabajo-australia.jpg',
        ]);

        Articulo::create([
            'titulo' => 'Viviendo un año en Canadá con Working Holiday',
            'subtitulo' => 'Una historia de adaptación y crecimiento',
            'fecha' => now(),
            'imagen' => 'imagenes/experiencia-canada.jpg',
        ]);

        // Turismo
        Articulo::create([
            'titulo' => 'Los mejores destinos para una escapada de fin de semana',
            'subtitulo' => 'Lugares imperdibles para explorar durante tu WH',
            'fecha' => now(),
            'imagen' => 'imagenes/turismo-fin-semana.jpg',
        ]);

        Articulo::create([
            'titulo' => 'Descubriendo Nueva Zelanda en una van',
            'subtitulo' => 'Un road trip inolvidable por la isla sur',
            'fecha' => now(),
            'imagen' => 'imagenes/nueva-zelanda-van.jpg',
        ]);

        // Estudios/Cursos en el exterior
        Articulo::create([
            'titulo' => 'Estudiar inglés mientras trabajas en el extranjero',
            'subtitulo' => 'Programas accesibles para mejorar tu idioma',
            'fecha' => now(),
            'imagen' => 'imagenes/estudio-ingles.jpg',
        ]);

        Articulo::create([
            'titulo' => 'Los mejores cursos para potenciar tu carrera en el exterior',
            'subtitulo' => 'Opciones en Canadá, Australia y más',
            'fecha' => now(),
            'imagen' => 'imagenes/cursos-exterior.jpg',
        ]);
    }
}
