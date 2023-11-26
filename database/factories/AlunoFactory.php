<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nome' => fake()->name(),
            'descricao' => fake()->text(100),
            'formado' => fake()->numberBetween(0, 1),
            'contratado' => fake()->numberBetween(0, 1),
            'imagem' => fake()->imageUrl(640, 480),
            'cursos_id' => fake()->numberBetween(1, 5)
        ];
    }
}
