<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        
        Schema::create('games', function (Blueprint $table) {
            $table->id('game_id');
            $table->string('name');
            $table->string('type');
            $table->integer('min_players');
            $table->integer('max_players');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
