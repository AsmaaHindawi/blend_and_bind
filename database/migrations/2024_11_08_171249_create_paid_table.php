<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 7. Create PAID Table
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paid', function (Blueprint $table) {
            $table->id('serial_number');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('zone_id')->nullable();
            $table->unsignedBigInteger('game_id')->nullable();
            $table->timestamp('purchased_date');
            $table->decimal('total_payment', 8, 2);
            $table->string('payment_method');

            $table->foreign('user_id')->references('user_id')->on('userss')->onDelete('cascade');
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('item_id')->references('item_id')->on('menu_items')->onDelete('cascade');
            $table->foreign('zone_id')->references('zone_id')->on('zones')->onDelete('cascade');
            $table->foreign('game_id')->references('game_id')->on('games')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paid');
    }
};
