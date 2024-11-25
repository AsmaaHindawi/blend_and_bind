<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;


class GamesTableSeeder extends Seeder
{
    public function run(): void
    {
        Game::create([
            'name' => 'Chess',
            'type' => 'Board',
            'min_players' => 2,
            'max_players' => 2,
            'image' => 'chess.jpg', 
        ]);

        Game::create([
            'name' => 'Monopoly',
            'type' => 'Board',
            'min_players' => 2,
            'max_players' => 6,
            'image' => 'monopoly.jpg', 
        ]);

        Game::create([
            'name' => 'Scrabble',
            'type' => 'Board',
            'min_players' => 2,
            'max_players' => 4,
            'image' => 'scrabble.jpg', 
        ]);

        Game::create([
            'name' => 'Risk',
            'type' => 'Board',
            'min_players' => 2,
            'max_players' => 6,
            'image' => 'risk.webp', 
        ]);

        Game::create([
            'name' => 'Settlers of Catan',
            'type' => 'Board',
            'min_players' => 3,
            'max_players' => 4,
            'image' => 'catan.jpg', 
        ]);


        Game::create([
            'name' => 'truth or Dare',
            'type' => 'Card',
            'min_players' => 2,
            'max_players' => 6,
            'image' => 'td.webp', 
        ]);

        Game::create([
            'name' => 'Uno',
            'type' => 'Card',
            'min_players' => 2,
            'max_players' => 10,
            'image' => 'uno.jpg', 
        ]);

        Game::create([
            'name' => 'Al Jalsa',
            'type' => 'Card',
            'min_players' => 2,
            'max_players' => 6,
            'image' => 'jalsa.webp', 
        ]);

        Game::create([
            'name' => 'Lebanese Card Game',
            'type' => 'Card',
            'min_players' => 2,
            'max_players' => 7,
            'image' => 'lebanese.jpg', 
        ]);

        Game::create([
            'name' => 'Super Mario Bros',
            'type' => 'Video',
            'min_players' => 1,
            'max_players' => 2,
            'image' => 'super_mario.webp', 
        ]);

        Game::create([
            'name' => 'Street Fighter',
            'type' => 'Video',
            'min_players' => 1,
            'max_players' => 2,
            'image' => 'street_fighter.jpg', 
        ]);

        Game::create([
            'name' => 'FIFA 21',
            'type' => 'Video',
            'min_players' => 1,
            'max_players' => 4,
            'image' => 'fifa_21.jpg', 
        ]);

        Game::create([
            'name' => 'Call of Duty',
            'type' => 'Video',
            'min_players' => 1,
            'max_players' => 100,
            'image' => 'call_of_duty.jpg', 
        ]);

        Game::create([
            'name' => 'Among Us',
            'type' => 'Video',
            'min_players' => 4,
            'max_players' => 10,
            'image' => 'among_us.jpg', 
        ]);

        Game::create([
            'name' => 'PUBG',
            'type' => 'Video',
            'min_players' => 4,
            'max_players' => 10,
            'image' => 'pubg.jpg', 
        ]);

        Game::create([
            'name' => 'Roblox',
            'type' => 'Video',
            'min_players' => 4,
            'max_players' => 10,
            'image' => 'roblox.png', 
        ]);
    }
}

