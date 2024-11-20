<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Column for storing the title of the content
            $table->text('body'); // Column for storing the body of the content
            $table->timestamps(); // Adds created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents'); // Drop the table if it exists
    }
};

