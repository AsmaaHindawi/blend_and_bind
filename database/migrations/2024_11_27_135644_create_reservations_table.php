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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zone_id'); // Zone ID to identify the reservation type (e.g., table, coffee place, study room)
            $table->string('name'); // Name of the person reserving
            $table->string('email'); // Email of the person reserving
            $table->date('reservation_date'); // Reservation date
            $table->time('reservation_time'); // Reservation time
            $table->integer('capacity'); // Number of people
            $table->string('type'); // 'table', 'coffee place', or 'study room'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};