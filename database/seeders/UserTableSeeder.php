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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([
            [
                'username' => 'Ashraf',
                'email' => 'ashrafdassouki@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), 
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user', 
            ],
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), 
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'admin', 
            ],
            [
                'username' => 'ziad',
                'email' => 'ziad@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('ziad12345'), 
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'role' => 'user', 
            ],
        ]);
    }
}
