<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    #[ArrayShape([
        'title' => "string",
        'image_url' => "string",
        'pages_count' => "int",
        'price' => "string",
        'description' => "string"])]
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'image_url' => fake()->imageUrl(900, 1200, true, 'cats'),
            'pages_count' => fake()->randomNumber(3),
            'price' => fake()->randomNumber(2) . '.99',
            'description' => fake()->paragraph,
        ];
    }
}
