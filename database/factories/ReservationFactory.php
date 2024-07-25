<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'observation' => fake()->paragraph(5),
            'withdrawal' => fake()->date(),
            'devolution' => fake()->date(),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->count(10),
            'book_id' => Book::inRandomOrder()->first()->id ?? Book::factory()->count(30)
        ];
    }
}
