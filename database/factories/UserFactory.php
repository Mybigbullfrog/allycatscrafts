<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make(env('USER_PASS')), // password
            'phone' => fake()->phoneNumber(),
            'remember_token' => Str::random(10),

            // Stripe
            'address_1' => fake()->streetAddress,
            'address_2' => fake()->secondaryAddress,
            'city' => fake()->city,
            'country' => fake()->country,
            'postal_code' => fake()->postcode,
            'description' => fake()->paragraph,
            'currency' => fake()->currencyCode,
            'default_source' => fake()->creditCardType,
            'delinquent' => false,
            'livemode' => false
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
