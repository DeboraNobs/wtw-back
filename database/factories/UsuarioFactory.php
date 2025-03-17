<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('admin'),
            'fecha_registro' => now(),
            'fecha_nacimiento' => fake()->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'rol' => fake()->randomElement(['admin', 'user']),
            'nacionalidad_id' =>  1
        ];
    }
}
