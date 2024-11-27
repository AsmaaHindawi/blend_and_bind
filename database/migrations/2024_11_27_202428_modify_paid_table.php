<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('paid', function (Blueprint $table) {
            // Drop foreign key constraints for `zone_id` and `game_id`
            $table->dropForeign(['zone_id']);
            $table->dropForeign(['game_id']);

            // Drop `zone_id` and `game_id` columns
            $table->dropColumn('zone_id');
            $table->dropColumn('game_id');

            // Add `address` and `phone_number` columns
            $table->string('address', 255)->after('updated_at')->nullable();
            $table->integer('phone_number', false, true)->length(50)->after('address');
        });
    }

    public function down(): void
    {
        Schema::table('paid', function (Blueprint $table) {
            // Add back `zone_id` and `game_id` columns
            $table->unsignedBigInteger('zone_id')->nullable();
            $table->unsignedBigInteger('game_id')->nullable();

            // Re-add foreign key constraints
            $table->foreign('zone_id')->references('zone_id')->on('zones')->onDelete('cascade');
            $table->foreign('game_id')->references('game_id')->on('games')->onDelete('cascade');

            // Drop the added `address` and `phone_number` columns
            $table->dropColumn('address');
            $table->dropColumn('phone_number');
        });
    }
};
