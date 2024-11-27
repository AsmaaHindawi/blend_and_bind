<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('users')->insert([
        [
            'username' => 'Ashraf',
            'email' => 'ashrafdassouki@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345', // Plain text password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'user', // Add the role
        ],
        [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '54321', // Plain text password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin', // Add the role
        ],
        [
            'username' => 'ziad',
            'email' => 'ziad@gmail.com',
            'email_verified_at' => null,
            'password' => 'ziad12345', // Plain text password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'user', // Add the role
        ],
    ]);
}

}
