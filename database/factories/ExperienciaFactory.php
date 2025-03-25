<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_publicacion' => now(),
            'titulo' => $this->faker->sentence(6),
            'subtitulo' => $this->faker->sentence(10),
            'contenido' => $this->faker->paragraphs(3, true),
            'destino_id' => $this->faker->numberBetween(1, 17),
            'autor' => $this->faker->name(), 
        ];
    }
}
