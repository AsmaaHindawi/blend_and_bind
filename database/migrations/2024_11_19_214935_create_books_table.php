<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Create BOOKS Table
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');  // Primary key for books
            $table->string('title');  // Title of the book
            $table->decimal('price', 8, 2);  // Price of the book
            $table->string('author');  // Author name
            $table->string('genre');  // Genre of the book
            $table->integer('publication_year');  // Year of publication
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
