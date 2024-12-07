<?php

namespace Database\Factories;

use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactMessageFactory extends Factory
{
    protected $model = ContactMessage::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),  
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'subject' => $this->faker->sentence(5),
            'message' => $this->faker->paragraph,
            'submitted_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
