<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'        => fake()->unique()->words(4, true),
            'cover'        => fake()->optional(0.9)->md5(),
            'presentation' => fake()->paragraph(4),
            'about'        => fake()->paragraphs(4, true),
            'release'      => fake()->date(),
            'author'       => fake()->name(),
            'publisher_id' => Publisher::inRandomOrder()->first()->id ?? Publisher::factory()->count(30),
            'category_id'  => Category::inRandomOrder()->first()->id ?? Category::factory()->count(20),
        ];
    }
}
