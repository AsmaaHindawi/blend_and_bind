<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'name', 'description', 'reserve_duration', 'capacity'];

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function paid()
    {
        return $this->hasMany(Paid::class, 'zone_id');
    }
}
