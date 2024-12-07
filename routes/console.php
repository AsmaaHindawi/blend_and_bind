<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('fix:hash-passwords', function () {
    $users = User::all();
    foreach ($users as $user) {
        if (Hash::needsRehash($user->password)) {

            $user->password = Hash::make($user->password);
            $user->updated_at = now();  
            $user->save();
        }
    }
    $this->info('Passwords hashed successfully.');
})->describe('Hash plain-text passwords for existing users to ensure security');
