<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Couppon>
 */
class CoupponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word(), // Generate a unique word for code
            'discount' => $this->faker->randomFloat(2, 1, 100), // Generate a random discount amount
            'expiration_date' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
        ];
    }
}
