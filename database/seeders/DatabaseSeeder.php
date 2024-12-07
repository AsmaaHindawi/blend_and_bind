<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ContactMessage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create();

        ContactMessage::factory()->count(20)->create();

        $this->call([
            BooksTableSeeder::class,       
            MenuItemsSeeder::class,        
            UserTableSeeder::class,        
            GamesTableSeeder::class,       
            ContentSeeder::class,         
        ]);
    }
}
