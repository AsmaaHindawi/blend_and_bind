<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = [
        'zone_id',
        'name',
        'email',
        'reservation_date',
        'reservation_time',
        'capacity',
        'type',
    ];
}