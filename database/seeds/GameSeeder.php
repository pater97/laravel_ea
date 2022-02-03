<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games =[

            [
                
                'title' => 'Battlefield 2042',
                'thumb' =>  'battlefield-2042.svg',
                'logo' => 'battlefield-2042-logo.svg',
                'video' => 'https://www.youtube.com/embed/ASzOzrB-a9E',
            ],
            [
                
                'title' => 'Need for Speed Hot Pursuit',
                'thumb' =>  'nfs.jpg',
                'logo' => 'nfs-logo.png',
                'video' => 'https://www.youtube.com/embed/D6ouHWP0KrY',
               
    
            ],
            [
                
                'title' => 'Mass Effect',
                'thumb' =>  'masseffect.jpg',
                'logo' => 'masseffect-logo.svg',
                'video' => 'https://www.youtube.com/embed/Lg-Ctg6k_Ao',
                
            ],
            [
                
                'title' => 'star wars',
                'thumb' =>  'starwars.jpg',
                'logo' => 'starwars-logo.svg',
                'video' => 'https://www.youtube.com/embed/0GLbwkfhYZk',
                
            ],
            [
                
                'title' => 'Lost in Random',
                'thumb' =>  'lir.jpg',
                'logo' => 'lir-logo.png',
                'video' => 'https://www.youtube.com/embed/QdM8pFtjtcI',
                
            ],
            [
                
                'title' => 'Dead Space',
                'thumb' =>  'dead.jpg',
                'logo' => 'dead-space-logo.png',
                'video' => 'https://www.youtube.com/embed/S7VvKGlVZu8',
                
            ]
            ];

        foreach($games as $game){
            $_game = new Game();
            $_game->title = $game['title'];
            $_game->thumb = $game['thumb'];
            $_game->logo = $game['logo'];
            $_game->video = $game['video'];
            $_game->save();
        }
    }
}
