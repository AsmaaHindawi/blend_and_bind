<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id('item_id');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('category');
            $table->integer('stock')->nullable(); // Added stock column
            $table->boolean('availability')->default(1); // Available by default
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
