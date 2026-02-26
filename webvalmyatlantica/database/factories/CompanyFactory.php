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
        $faker = \Faker\Factory::create('es_ES');

        return [
            'nif' => $faker->unique()->bothify('#########'),
            'name' => $faker->company,

            // 'phone' => $faker->bothify('#########')
            'phone' => $faker->regexify('6[0-9]{8}'),
            'email' => $faker->unique()->safeEmail(),

            'address_type' => $faker->streetPrefix,
            'address_name' => match (rand (0,2)) {
                0 => $faker->firstName(),
                1 => $faker->lastName(),
                2 => $faker->firstName() . ' ' . $faker->lastName(),
            },
            'address_number' => $faker->buildingNumber,
            'city' => $faker->city,
            // 'postal_code' => $faker->postCode(),
            'postal_code' => $faker->regexify('[0-9]{5}'),
            'province' => $faker->state,
        ];
    }
}
