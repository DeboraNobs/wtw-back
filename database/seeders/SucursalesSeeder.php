<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sucursales = [
            [
                'nombre' => 'Sucursal Centro',
                'direccion' => 'Av. Siempre Viva 123, Buenos Aires',
                'latitud' => -34.603722,
                'longitud' => -58.381592,
                'email' => 'centro@empresa.com',
                'anio_apertura' => 2005,
            ],
            [
                'nombre' => 'Sucursal Norte',
                'direccion' => 'Calle Falsa 456, Córdoba',
                'latitud' => -31.4166680,
                'longitud' => -64.1833340,
                'email' => 'norte@empresa.com',
                'anio_apertura' => 2010,
            ],
            [
                'nombre' => 'Sucursal Sur',
                'direccion' => 'Ruta 3 Km 45, Santa Cruz',
                'latitud' => -51.6226110,
                'longitud' => -69.2181270,
                'email' => 'sur@empresa.com',
                'anio_apertura' => 2012,
            ],
            [
                'nombre' => 'Sucursal Oeste',
                'direccion' => 'Av. Los Incas 789, Mendoza',
                'latitud' => -32.8908400,
                'longitud' => -68.8271700,
                'email' => 'oeste@empresa.com',
                'anio_apertura' => 2018,
            ],
            [
                'nombre' => 'Sucursal Este',
                'direccion' => 'Bv. del Sol 1000, San Luis',
                'latitud' => -33.2950100,
                'longitud' => -66.3356300,
                'email' => 'este@empresa.com',
                'anio_apertura' => 2020,
            ],
        ];

        foreach ($sucursales as $sucursal) {
            Sucursal::create($sucursal);
        }
    }

}
