<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'     => fake()->unique()->words(3, true),
            'website'  => fake()->optional(0.8)->url(),
            'email'    => fake()->optional(0.8)->companyEmail(),
            'zip_code' => fake()->optional(0.8)->randomNumber(8, true),
            'phone'    => fake('pt_BR')->optional(0.8)->cellphoneNumber(false),
        ];
    }
}
