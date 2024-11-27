<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contents')->insert([
            [
                'title' => 'Contact Page',
                'body' => 'Navigate to the Contact Us page',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Book',
                'body' => 'Visit the Books section to explore a wide collection',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Menu',
                'body' => 'View the menu of our Coffee Shop',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'About Page',
                'body' => 'Learn more about us',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Games',
                'body' => 'Explore our games section',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
