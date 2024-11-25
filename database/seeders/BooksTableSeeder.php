<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        // Insert multiple rows into the 'books' table
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'price' => 10.99,
                'author' => 'F. Scott Fitzgerald',
                'genre' => 'Classic',
                'publication_year' => 1925,
                'image' => 'the-great-gatsby.jpg', // Image file in the public/book_images directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'price' => 12.99,
                'author' => 'Harper Lee',
                'genre' => 'Fiction',
                'publication_year' => 1960,
                'image' => 'to-kill-a-mockingbird.jpg', // Image file in the public/book_images directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'price' => 14.99,
                'author' => 'George Orwell',
                'genre' => 'Dystopian',
                'publication_year' => 1949,
                'image' => '1984.jpg', // Image file in the public/book_images directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Catcher in the Rye',
                'price' => 11.99,
                'author' => 'J.D. Salinger',
                'genre' => 'Fiction',
                'publication_year' => 1951,
                'image' => 'the-catcher-in-the-rye.jpg', // Image file in the public/book_images directory
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
