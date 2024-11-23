<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable; // Import the Searchable trait

class Content extends Model
{
    use HasFactory, Searchable; // Add Searchable to the list of traits

    protected $fillable = [
        'title',
        'body',
        // Add any other fields you have in the 'contents' table
    ];
}
