<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; 

    protected $primaryKey = 'book_id'; 
    public $timestamps = true; 

    protected $fillable = [
        'title', 
        'price', 
        'author', 
        'genre', 
        'publication_year', 
        'created_at', 
        'updated_at',
    ]; 
}
