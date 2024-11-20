<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'item_id',
        'zone_id',
        'game_id',
        'purchased_date',
        'total_payment',
        'payment_method',
    ];

    /**
     * Relationship with User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
