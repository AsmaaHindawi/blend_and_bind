<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menu_items'; // Table name

    protected $primaryKey = 'item_id'; // Primary key column

    public $incrementing = true; // Auto-incrementing key

    protected $keyType = 'int'; // Primary key type

    protected $fillable = ['name', 'category', 'price', 'availability', 'image'];
}