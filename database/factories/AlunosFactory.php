<?php

namespace Database\Factories;

use App\Models\Alunos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alunos>
 */
class AlunosFactory extends Factory
{
    protected $model = Alunos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'matricula' => $this->faker->numerify('######'),
        ];
    }
}
