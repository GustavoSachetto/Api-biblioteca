<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            PublisherSeeder::class,
            CategorySeeder::class,
            BookSeeder::class,
            ReservationSeeder::class,
        ]);

        // User::factory()->count(15)->create();
        // Publisher::factory()->count(20)->create();
        // Category::factory()->count(16)->create();
        // Book::factory()->count(80)->create();
        // Reservation::factory()->count(20)->create();
    }
}
