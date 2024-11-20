<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');  // Custom named primary key
            $table->string('username');  // Username for users
            $table->string('email')->unique();  // Email field, must be unique
            $table->timestamp('email_verified_at')->nullable();  // Verification timestamp
            $table->string('password');  // Password field
            $table->rememberToken();  // Remember token for session purposes
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
