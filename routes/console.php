<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Existing command for inspiration
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Command to hash existing plain text passwords for users
Artisan::command('fix:hash-passwords', function () {
    $users = User::all();
    foreach ($users as $user) {
        if (Hash::needsRehash($user->password)) {
            // Correct the primary key to match the actual column name (likely `user_id` instead of `id`)
            $user->password = Hash::make($user->password);
            $user->updated_at = now();  // Update the timestamp manually
            $user->save();
        }
    }
    $this->info('Passwords hashed successfully.');
})->describe('Hash plain-text passwords for existing users to ensure security');
