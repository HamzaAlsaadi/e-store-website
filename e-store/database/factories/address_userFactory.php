<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class address_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_the_city' => $this->faker()->country(),
            'name_of_the_street' => $this->faker()->number_format(1, 99),
            'name_of_the_building' => $this->faker()->number_format(1, 200),
        ];
    }
}
