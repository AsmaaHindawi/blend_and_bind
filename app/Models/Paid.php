<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    use HasFactory;

    protected $table = 'paid'; // Your table name

    protected $fillable = [
        'user_id',
        'book_id',
        'item_id',
        'purchased_date',
        'total_payment',
        'payment_method',
        'address',
    ];
}
