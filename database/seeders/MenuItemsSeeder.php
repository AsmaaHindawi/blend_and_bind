<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([

            [
                'name' => 'Cappuccino',
                'category' => 'Hot Drinks',
                'price' => 3.50,
                'availability' => 1,
                'image' => 'cappuccino.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coffee',
                'category' => 'Hot Drinks',
                'price' => 2.00,
                'availability' => 1,
                'image' => 'coffee.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Spring Rolls',
                'category' => 'Appetizers',
                'price' => 5.50,
                'availability' => 1,
                'image' => 'spring_rolls.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mozzarella Sticks',
                'category' => 'Appetizers',
                'price' => 6.00,
                'availability' => 1,
                'image' => 'mozzarella_sticks.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garlic Bread',
                'category' => 'Appetizers',
                'price' => 4.00,
                'availability' => 1,
                'image' => 'garlic_bread.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'Iced Latte',
                'category' => 'Cold Drinks',
                'price' => 4.50,
                'availability' => 1,
                'image' => 'latte.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smoothie',
                'category' => 'Cold Drinks',
                'price' => 5.00,
                'availability' => 1,
                'image' => 'smoothie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mate',
                'category' => 'Hot Drinks',
                'price' => 0.00,
                'availability' => 1,
                'image' => 'Mate.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Chocolate Cake',
                'category' => 'Desserts',
                'price' => 7.00,
                'availability' => 1,
                'image' => 'chocolate_cake.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ice Cream Sundae',
                'category' => 'Desserts',
                'price' => 6.50,
                'availability' => 1,
                'image' => 'ice_cream_sundae.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cheesecake',
                'category' => 'Desserts',
                'price' => 7.50,
                'availability' => 1,
                'image' => 'cheesecake.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Tabouleh',
                'category' => 'Appetizers',
                'price' => 4.00,
                'availability' => 1,
                'image' => 'tabouleh.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Curly Fries',
                'category' => 'Appetizers',
                'price' => 5.00,
                'availability' => 1,
                'image' => 'curlyfries.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Warak Enab',
                'category' => 'Appetizers',
                'price' => 5.50,
                'availability' => 1,
                'image' => 'warakenab.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatoush',
                'category' => 'Appetizers',
                'price' => 4.50,
                'availability' => 1,
                'image' => 'fatoush.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'Chicken Caesar Salad',
                'category' => 'Salads',
                'price' => 8.00,
                'availability' => 1,
                'image' => 'ceasar.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Greek Salad',
                'category' => 'Salads',
                'price' => 7.50,
                'availability' => 1,
                'image' => 'greek.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crab Salad',
                'category' => 'Salads',
                'price' => 9.00,
                'availability' => 1,
                'image' => 'crab.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Berry Cake',
                'category' => 'Desserts',
                'price' => 6.50,
                'availability' => 1,
                'image' => 'berrycake.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Swiss Roll',
                'category' => 'Desserts',
                'price' => 5.50,
                'availability' => 1,
                'image' => 'swissroll.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
