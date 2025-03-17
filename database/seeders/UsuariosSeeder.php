<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Crear 5 usuarios fijos
          $usuariosEstaticos = [
            [
                'nombre' => 'Juan',
                'apellidos' => 'Pérez',
                'email' => 'juan.perez@example.com',
                'password' => bcrypt('admin'),
                'fecha_registro' => now(),
                'fecha_nacimiento' => '1990-05-15',
                'rol' => 'admin',
                'nacionalidad_id' => 1,
            ],
            [
                'nombre' => 'María',
                'apellidos' => 'González',
                'email' => 'maria.gonzalez@example.com',
                'password' => bcrypt('user'),
                'fecha_registro' => now(),
                'fecha_nacimiento' => '1985-08-20',
                'rol' => 'user',
                'nacionalidad_id' => 2,
            ],
            [
                'nombre' => 'Carlos',
                'apellidos' => 'Rodríguez',
                'email' => 'carlos.rodriguez@example.com',
                'password' => bcrypt('admin'),
                'fecha_registro' => now(),
                'fecha_nacimiento' => '1995-03-10',
                'rol' => 'admin',
                'nacionalidad_id' => 3,
            ],
            [
                'nombre' => 'Laura',
                'apellidos' => 'Fernández',
                'email' => 'laura.fernandez@example.com',
                'password' => bcrypt('user'),
                'fecha_registro' => now(),
                'fecha_nacimiento' => '2000-11-25',
                'rol' => 'user',
                'nacionalidad_id' => 4,
            ],
            [
                'nombre' => 'David',
                'apellidos' => 'López',
                'email' => 'david.lopez@example.com',
                'password' => bcrypt('password123'),
                'fecha_registro' => now(),
                'fecha_nacimiento' => '1988-06-30',
                'rol' => 'admin',
                'nacionalidad_id' => 1,
            ],
        ];

        foreach ($usuariosEstaticos as $usuario) {
            Usuario::create($usuario);
        }

        Usuario::factory(10)->create();
    }
}
