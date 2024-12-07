<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menu_items'; 

    protected $primaryKey = 'item_id'; 

    public $incrementing = true; 

    protected $keyType = 'int'; 

    protected $fillable = ['name', 'category', 'price', 'availability', 'image'];
}