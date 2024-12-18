<?php

namespace Database\Seeders;

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
        $contents = [
            [
                'title' => 'Contact Page',
                'body' => 'Navigate to the Contact Us page for inquiries, feedback, or assistance.',
            ],
            [
                'title' => 'Book',
                'body' => 'Visit the Books section to explore our vast collection of literary works.',
            ],
            [
                'title' => 'Menu',
                'body' => 'View the menu of our Coffee Shop, featuring beverages and delicious meals.',
            ],
            [
                'title' => 'About Page',
                'body' => 'Learn more about our mission, values, and the story behind our Coffee Shop.',
            ],
            [
                'title' => 'Games',
                'body' => 'Explore the Games section to find a variety of board, card, and video games.',
            ],
            [
                'title' => 'Reservations',
                'body' => 'Book your own private zone and enjoy tranquility or games with friends.',
            ],
            [
                'title' => 'Add to Cart',
                'body' => 'Manage your items in the cart and proceed to checkout.',
            ],
            [
                'title' => 'Checkout',
                'body' => 'Finalize your purchase with secure payment options.',
            ],
        ];

        foreach ($contents as $content) {
            $exists = DB::table('contents')->where('title', $content['title'])->exists();

            if (!$exists) {
                DB::table('contents')->insert([
                    'title' => $content['title'],
                    'body' => $content['body'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
