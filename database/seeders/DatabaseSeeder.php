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
            BooksTableSeeder::class,       // Seeder for Books
            MenuItemsSeeder::class,        // Seeder for Menu Items
            UserTableSeeder::class,        // Update to UserTableSeeder
            GamesTableSeeder::class,       // Seeder for Games
            ContentSeeder::class,          // Seeder for Content
        ]);
    }
}
