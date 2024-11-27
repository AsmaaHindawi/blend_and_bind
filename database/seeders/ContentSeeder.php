<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contents')->insert([
            [
                'title' => 'Contact Page',
                'body' => 'Navigate to the Contact Us page for inquiries, feedback, or assistance.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Book',
                'body' => 'Visit the Books section to explore our vast collection of literary works.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Menu',
                'body' => 'View the menu of our Coffee Shop, featuring beverages and delicious meals.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'About Page',
                'body' => 'Learn more about our mission, values, and the story behind our Coffee Shop.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Games',
                'body' => 'Explore the Games section to find a variety of board, card, and video games.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
