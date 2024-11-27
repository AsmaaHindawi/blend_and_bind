<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ContactMessage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Users Table
        User::factory()->count(10)->create();

        // Seed Contact Messages Table
        ContactMessage::factory()->count(20)->create();

        // Call all necessary seeders
        $this->call([
            BooksTableSeeder::class,
            MenuItemsSeeder::class,
            GamesTableSeeder::class,      // Include Games Table Seeder
            ContentsTableSeeder::class,  // Include Contents Table Seeder
        ]);
    }
}
