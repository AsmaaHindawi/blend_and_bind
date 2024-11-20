<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'price', 'availability'];

    public function paid()
    {
        return $this->hasMany(Paid::class, 'item_id');
    }
}
