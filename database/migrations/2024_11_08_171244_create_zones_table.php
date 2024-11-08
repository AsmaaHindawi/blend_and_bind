<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// 6. Create ZONES Table
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id('zone_id');
            $table->unsignedBigInteger('game_id');
            $table->string('name');
            $table->string('description');
            $table->float('reserve_duration');
            $table->integer('capacity');
            $table->foreign('game_id')->references('game_id')->on('games')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
