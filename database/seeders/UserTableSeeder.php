<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Temporarily disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the users table to clear existing data
        DB::table('users')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert users into the 'users' table
        DB::table('users')->insert([
            [
                'username' => 'Ashraf',
                'email' => 'ashrafdassouki@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // Hashed password for security
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user', // Role
            ],
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // Hashed password for security
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'admin', // Role
            ],
            [
                'username' => 'ziad',
                'email' => 'ziad@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('ziad12345'), // Hashed password for security
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user', // Role
            ],
        ]);
    }
}
