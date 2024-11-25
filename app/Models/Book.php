<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // Table name in your database

    protected $primaryKey = 'book_id'; // Primary key column

    public $timestamps = true; // Enable timestamps if your table has 'created_at' and 'updated_at'

    protected $fillable = [
        'title', 
        'price', 
        'author', 
        'genre', 
        'publication_year', 
        'created_at', 
        'updated_at',
    ]; // Allow mass assignment for these columns
}
