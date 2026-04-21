<?php

namespace Database\Factories;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'scoring' => [
                fake()->word() => fake()->numberBetween(1, 10),
                fake()->word() => fake()->numberBetween(1, 10),
                fake()->word() => fake()->numberBetween(1, 10),
            ],
        ];
    }
}
