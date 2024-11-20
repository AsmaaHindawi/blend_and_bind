<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'min_players', 'max_players'];

    public function zones()
    {
        return $this->hasMany(Zone::class, 'game_id');
    }

    public function paid()
    {
        return $this->hasMany(Paid::class, 'game_id');
    }
}
