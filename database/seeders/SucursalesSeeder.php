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
                'direccion' => 'Av. Olivos 4109, B1667 KQU, Tortuguitas, Buenos Aires, Argentina',
                'latitud' => -34.45453597866896,
                'longitud' => -58.72170837285529,
                'email' => 'centro@empresa.com',
                'anio_apertura' => 2005,
            ],
            [
                'nombre' => 'Sucursal Norte',
                'direccion' => 'Asunción 94, N3334 Puerto Rico, Misiones, Argentina',
                'latitud' => -26.81296744465512,
                'longitud' => -55.023770519297926,
                'email' => 'norte@empresa.com',
                'anio_apertura' => 2010,
            ],
            [
                'nombre' => 'Sucursal Sur',
                'direccion' => 'Pl. del Emperador Carlos V, Arganzuela, 28045 Madrid',
                'latitud' => 40.40829092103923,
                'longitud' =>  -3.692882360948006,
                'email' => 'sur@empresa.com',
                'anio_apertura' => 2012,
            ],
            [
                'nombre' => 'Sucursal Oeste',
                'direccion' => 'Cerrito 628, C1010 Cdad. Autónoma de Buenos Aires, Argentina',
                'latitud' => -34.600869305434585,
                'longitud' => -58.38324735730874,
                'email' => 'oeste@empresa.com',
                'anio_apertura' => 2018,
            ],
            [
                'nombre' => 'Sucursal Este',
                'direccion' => 'Avinguda País Valencià, 9, Local 4, 03509 Finestrat, Alicante',
                'latitud' => 38.53979638626908,
                'longitud' => -0.1769708321466457,
                'email' => 'este@empresa.com',
                'anio_apertura' => 2020,
            ],
        ];

        foreach ($sucursales as $sucursal) {
            Sucursal::create($sucursal);
        }
    }

}
