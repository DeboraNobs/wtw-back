<?php

namespace Database\Seeders;
use App\Models\Destino;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagenes = [
            'alemania.jpeg',
            'andorra.jpg',
            'australia.avif',
            'austria.jpg',
            'canada.jpeg',
            'espana.webp',
            'francia.jpg',
            'japon.webp',
            'irlanda.jpg',
            'islandia.webp',
            'hungria.jpg',
            'luxemburgo.jpg',
            'nueva_zelanda.webp',
            'polonia.jpg',
            'portugal.jpg',
            'republica_checa.jpeg',
            'suecia.jpeg',
        ];

        foreach ($imagenes as $imagen) {
            $rutaOrigen = storage_path("app/public/destinos/{$imagen}");

            if (file_exists($rutaOrigen)) {
                $rutaDestino = "destinos/{$imagen}";
                Storage::disk('local')->put($rutaDestino, file_get_contents($rutaOrigen));
            } else {
                echo "El archivo {$imagen} no existe en la ruta especificada: {$rutaOrigen}\n";
            }
        }

        // Crear los destinos con las imágenes
        $destino1 = new Destino();
        $destino1->nombre = 'Alemania';
        $destino1->moneda = 'Euro';
        $destino1->salario_minimo = 1981;
        $destino1->salario_promedio = 3500;
        $destino1->costo_vida_promedio = 1600;
        $destino1->dificultad_visa = 3;
        $destino1->aplica_exterior = true;
        $destino1->requiere_estudios = false;
        $destino1->requiere_idiomas = true;
        $destino1->esta_disponible = true;
        $destino1->imagen = 'destinos/alemania.jpeg';
        $destino1->save();

        $destino2 = new Destino();
        $destino2->nombre = 'Andorra';
        $destino2->moneda = 'Euro';
        $destino2->salario_minimo = 1322;
        $destino2->salario_promedio = 2500;
        $destino2->costo_vida_promedio = 1400;
        $destino2->dificultad_visa = 3;
        $destino2->aplica_exterior = false;
        $destino2->requiere_estudios = false;
        $destino2->requiere_idiomas = false;
        $destino2->esta_disponible = true;
        $destino2->imagen = 'destinos/andorra.jpg';
        $destino2->save();

        $destino3 = new Destino();
        $destino3->nombre = 'Australia';
        $destino3->moneda = 'Dólar australiano';
        $destino3->salario_minimo = 23.23 * 160;
        $destino3->salario_promedio = 5200;
        $destino3->costo_vida_promedio = 2800;
        $destino3->dificultad_visa = 4;
        $destino3->aplica_exterior = true;
        $destino3->requiere_estudios = false;
        $destino3->requiere_idiomas = true;
        $destino3->esta_disponible = true;
        $destino3->imagen = 'destinos/australia.avif';
        $destino3->save();

        $destino4 = new Destino();
        $destino4->nombre = 'Austria';
        $destino4->moneda = 'Euro';
        $destino4->salario_minimo = 3700;
        $destino4->salario_promedio = 3700;
        $destino4->costo_vida_promedio = 1700;
        $destino4->dificultad_visa = 3;
        $destino4->aplica_exterior = true;
        $destino4->requiere_estudios = false;
        $destino4->requiere_idiomas = true;
        $destino4->esta_disponible = true;
        $destino4->imagen = 'destinos/austria.jpg';
        $destino4->save();

        $destino5 = new Destino();
        $destino5->nombre = 'Canadá';
        $destino5->moneda = 'Dólar canadiense';
        $destino5->salario_minimo = 2500;
        $destino5->salario_promedio = 4500;
        $destino5->costo_vida_promedio = 2200;
        $destino5->dificultad_visa = 4;
        $destino5->aplica_exterior = true;
        $destino5->requiere_estudios = false;
        $destino5->requiere_idiomas = true;
        $destino5->esta_disponible = true;
        $destino5->imagen = 'destinos/canada.jpeg';
        $destino5->save();

        $destino6 = new Destino();
        $destino6->nombre = 'España';
        $destino6->moneda = 'Euro';
        $destino6->salario_minimo = 1260;
        $destino6->salario_promedio = 2600;
        $destino6->costo_vida_promedio = 1200;
        $destino6->dificultad_visa = 2;
        $destino6->aplica_exterior = true;
        $destino6->requiere_estudios = false;
        $destino6->requiere_idiomas = false;
        $destino6->esta_disponible = true;
        $destino6->imagen = 'destinos/espana.webp';
        $destino6->save();

        $destino7 = new Destino();
        $destino7->nombre = 'Francia';
        $destino7->moneda = 'Euro';
        $destino7->salario_minimo = 1747;
        $destino7->salario_promedio = 3400;
        $destino7->costo_vida_promedio = 1500;
        $destino7->dificultad_visa = 3;
        $destino7->aplica_exterior = true;
        $destino7->requiere_estudios = false;
        $destino7->requiere_idiomas = true;
        $destino7->esta_disponible = true;
        $destino7->imagen = 'destinos/francia.jpg';
        $destino7->save();

        $destino8 = new Destino();
        $destino8->nombre = 'Japón';
        $destino8->moneda = 'Yen japonés';
        $destino8->salario_minimo = 1200 * 160;
        $destino8->salario_promedio = 3500;
        $destino8->costo_vida_promedio = 1700;
        $destino8->dificultad_visa = 4;
        $destino8->aplica_exterior = true;
        $destino8->requiere_estudios = false;
        $destino8->requiere_idiomas = true;
        $destino8->esta_disponible = true;
        $destino8->imagen = 'destinos/japon.webp';
        $destino8->save();

        $destino9 = new Destino();
        $destino9->nombre = 'Irlanda';
        $destino9->moneda = 'Euro';
        $destino9->salario_minimo = 1910;
        $destino9->salario_promedio = 3500;
        $destino9->costo_vida_promedio = 2000;
        $destino9->dificultad_visa = 3;
        $destino9->aplica_exterior = true;
        $destino9->requiere_estudios = false;
        $destino9->requiere_idiomas = true;
        $destino9->esta_disponible = true;
        $destino9->imagen = 'destinos/irlanda.jpg';
        $destino9->save();

        $destino10 = new Destino();
        $destino10->nombre = 'Islandia';
        $destino10->moneda = 'Corona islandesa';
        $destino10->salario_minimo = 2830;
        $destino10->salario_promedio = 3500;
        $destino10->costo_vida_promedio = 2200;
        $destino10->dificultad_visa = 3;
        $destino10->aplica_exterior = true;
        $destino10->requiere_estudios = false;
        $destino10->requiere_idiomas = true;
        $destino10->esta_disponible = true;
        $destino10->imagen = 'destinos/islandia.webp';
        $destino10->save();

        $destino11 = new Destino();
        $destino11->nombre = 'Hungría';
        $destino11->moneda = 'Forinto húngaro';
        $destino11->salario_minimo = 560;
        $destino11->salario_promedio = 980;
        $destino11->costo_vida_promedio = 600;
        $destino11->dificultad_visa = 3;
        $destino11->aplica_exterior = true;
        $destino11->requiere_estudios = false;
        $destino11->requiere_idiomas = true;
        $destino11->esta_disponible = true;
        $destino11->imagen = 'destinos/hungria.jpg';
        $destino11->save();

        $destino12 = new Destino();
        $destino12->nombre = 'Luxemburgo';
        $destino12->moneda = 'Euro';
        $destino12->salario_minimo = 2570;
        $destino12->salario_promedio = 6118;
        $destino12->costo_vida_promedio = 2500;
        $destino12->dificultad_visa = 3;
        $destino12->aplica_exterior = true;
        $destino12->requiere_estudios = false;
        $destino12->requiere_idiomas = true;
        $destino12->esta_disponible = true;
        $destino12->imagen = 'destinos/luxemburgo.jpg';
        $destino12->save();

        $destino13 = new Destino();
        $destino13->nombre = 'Nueva Zelanda';
        $destino13->moneda = 'Dólar neozelandés';
        $destino13->salario_minimo = 3704;
        $destino13->salario_promedio = 5200;
        $destino13->costo_vida_promedio = 2800;
        $destino13->dificultad_visa = 4;
        $destino13->aplica_exterior = true;
        $destino13->requiere_estudios = false;
        $destino13->requiere_idiomas = true;
        $destino13->esta_disponible = true;
        $destino13->imagen = 'destinos/nueva_zelanda.webp';
        $destino13->save();

        $destino14 = new Destino();
        $destino14->nombre = 'Polonia';
        $destino14->moneda = 'Zloty polaco';
        $destino14->salario_minimo = 770;
        $destino14->salario_promedio = 1300;
        $destino14->costo_vida_promedio = 800;
        $destino14->dificultad_visa = 3;
        $destino14->aplica_exterior = true;
        $destino14->requiere_estudios = false;
        $destino14->requiere_idiomas = true;
        $destino14->esta_disponible = true;
        $destino14->imagen = 'destinos/polonia.jpg';
        $destino14->save();

        $destino15 = new Destino();
        $destino15->nombre = 'Portugal';
        $destino15->moneda = 'Euro';
        $destino15->salario_minimo = 760;
        $destino15->salario_promedio = 1300;
        $destino15->costo_vida_promedio = 1000;
        $destino15->dificultad_visa = 2;
        $destino15->aplica_exterior = true;
        $destino15->requiere_estudios = false;
        $destino15->requiere_idiomas = false;
        $destino15->esta_disponible = true;
        $destino15->imagen = 'destinos/portugal.jpg';
        $destino15->save();

        $destino16 = new Destino();
        $destino16->nombre = 'República Checa';
        $destino16->moneda = 'Corona checa';
        $destino16->salario_minimo = 700;
        $destino16->salario_promedio = 1400;
        $destino16->costo_vida_promedio = 900;
        $destino16->dificultad_visa = 3;
        $destino16->aplica_exterior = true;
        $destino16->requiere_estudios = false;
        $destino16->requiere_idiomas = true;
        $destino16->esta_disponible = true;
        $destino16->imagen = 'destinos/republica_checa.jpeg';
        $destino16->save();

        $destino17 = new Destino();
        $destino17->nombre = 'Suecia';
        $destino17->moneda = 'Corona sueca';
        $destino17->salario_minimo = 1685;
        $destino17->salario_promedio = 2900;
        $destino17->costo_vida_promedio = 1500;
        $destino17->dificultad_visa = 3;
        $destino17->aplica_exterior = true;
        $destino17->requiere_estudios = false;
        $destino17->requiere_idiomas = true;
        $destino17->esta_disponible = true;
        $destino17->imagen = 'destinos/suecia.jpeg';
        $destino17->save();
    }
}
