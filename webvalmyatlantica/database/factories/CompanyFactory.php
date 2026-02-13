<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nif' => fake()->unique()->bothify('#########'),
            'name' => fake()->company(),

            // 'phone' => fake()->bothify('#########')
            'phone' => fake()->regexify('6[0-9]{8}'),
            'email' => fake()->unique()->safeEmail(),

            'address_type' => fake()->randomElement(['Calle', 'Avenida', 'Plaza', 'Vía', 'Carretera']),
            'address_name' => fake()->streetName(),
            'address_number' => fake()->buildingNumber(),
            'city' => fake()->city(),
            'postal_code' => fake()->postCode(),
            'province' => fake()->state(),
        ];
    }
}
