<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username', 
        'email',
        'password',
        'role', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',

    ];


    /**
     * Relationship with Contact Messages
     */
    public function contactMessages()
    {
        return $this->hasMany(ContactMessage::class, 'user_id', 'id');
    }

    /**
     * Relationship with Paid table
     */
    public function paid()
    {
        return $this->hasMany(Paid::class, 'user_id', 'id');
    }
}
