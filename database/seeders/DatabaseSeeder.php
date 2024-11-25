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

        $this->call(BooksTableSeeder::class);

        $this->call(MenuItemsSeeder::class);
       
    }
   
   
}
