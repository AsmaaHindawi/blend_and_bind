<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('books')->insert([
            [
                'title' => 'فقه السنة',
                'price' => 20.99,
                'author' => 'Islamic Authors',
                'genre' => 'Islamic Books',
                'publication_year' => 1945,
                'image' => 'fekehsunnah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'تدبر و عمل ',
                'price' => 20.99,
                'author' => 'Islamic Authors',
                'genre' => 'Islamic Books',
                'publication_year' => 2015,
                'image' => 'quran.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'البسي واسع',
                'price' => 10.99,
                'author' => 'Islamic Authors',
                'genre' => 'Islamic Books',
                'publication_year' => 2022,
                'image' => 'wear-wase3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'رسائل من القرآن',
                'price' => 13.00,
                'author' => 'Islamic Authors',
                'genre' => 'Islamic Books',
                'publication_year' => 2021,
                'image' => 'messages-from-quran.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'No one But You',
                'price' => 15.00,
                'author' => 'Brenda Novak',
                'genre' => 'Novel',
                'publication_year' => 2017,
                'image' => 'No-One-But-You.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Finding Our Forever',
                'price' => 13.00,
                'author' => 'Brenda Novak',
                'genre' => 'Novel',
                'publication_year' => 2021,
                'image' => 'Finding-Our-Forever.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'صغّر عقلك',
                'price' => 15.00,
                'author' => 'Arabian Authors',
                'genre' => 'Arabic Books',
                'publication_year' => 2019,
                'image' => 'sagher.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'الاربعون',
                'price' => 13.00,
                'author' => 'Arabian Authors',
                'genre' => 'Arabic Books',
                'publication_year' => 2021,
                'image' => '40.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'استخارة- أحكام ومسائل',
                'price' => 10.99,
                'author' => 'Islamic Authors',
                'genre' => 'Islamic Books',
                'publication_year' => 2000,
                'image' => 'Islamic.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'price' => 12.99,
                'author' => 'Harper Lee',
                'genre' => 'Fiction',
                'publication_year' => 1960,
                'image' => 'to-kill-a-mockingbird.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'price' => 14.99,
                'author' => 'George Orwell',
                'genre' => 'Dystopian',
                'publication_year' => 1949,
                'image' => '1984.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Catcher in the Rye',
                'price' => 11.99,
                'author' => 'J.D. Salinger',
                'genre' => 'Fiction',
                'publication_year' => 1951,
                'image' => 'the-catcher-in-the-rye.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
