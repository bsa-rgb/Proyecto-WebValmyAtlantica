<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'password' => static::$password ??= Hash::make('password'),
            'name' => fake()->firstName(),
            'surname1' => fake()->lastName(),
            'surname2' => fake()->lastName(),
            'birthdate' => fake()->dateTimeBetween('-100 years', '-18 years')->format('Y-m-d'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'phone' => fake()->regexify('6[0-9]{8}'),
            
            'role' => fake()->randomElement(['admin', 'employee', 'client']),
            'companyID' => \App\Models\Company::factory(),

            'is_main_contact' => fake()->boolean(20),

            'remember_token' => Str::random(10),
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
