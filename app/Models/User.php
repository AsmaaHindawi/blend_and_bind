<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id'; // Specify the correct primary key column name

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The data type of the primary key.
     *
     * @var string
     */
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', // Replace 'name' with 'username'
        'email',
        'password',
        'role', // Add the 'role' field
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship with Contact Messages.
     * Each user may have multiple contact messages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMessages()
    {
        return $this->hasMany(ContactMessage::class, 'user_id', 'user_id'); // Updated foreign key and local key to match the actual schema
    }

    /**
     * Relationship with Paid table.
     * Each user may have multiple paid records.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paid()
    {
        return $this->hasMany(Paid::class, 'user_id', 'user_id'); // Updated foreign key and local key to match the actual schema
    }
}
