<?php

use App\characterVideo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CharacterVideoSeeder extends Seeder
{
    public function run()
    {

        DB::table('characterVideo')->truncate();

        // CHARACTER 1

        characterVideo::create([
            'charId' => '1',
            'chapter' => '1',
            'video' => 'char1chapt1.mp4',
            'mapCoords' => '92,129,270,626'
        ]);

        characterVideo::create([
            'charId' => '1',
            'chapter' => '2',
            'video' => 'char1chapt2.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '1',
            'chapter' => '3',
            'video' => 'char1chapt3.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '1',
            'chapter' => '4',
            'video' => 'char1chapt4.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '1',
            'chapter' => '5',
            'video' => 'char1chapt5.mp4',
            'mapCoords' => ''
        ]);


        // CHARACTER 2

        characterVideo::create([
            'charId' => '2',
            'chapter' => '1',
            'video' => 'char2chapt1.mp4',
            'mapCoords' => '336,171,454,605'
        ]);

        characterVideo::create([
            'charId' => '2',
            'chapter' => '2',
            'video' => 'char2chapt2.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '2',
            'chapter' => '3',
            'video' => 'char2chapt3.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '2',
            'chapter' => '4',
            'video' => 'char2chapt4.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '2',
            'chapter' => '5',
            'video' => 'char2chapt5.mp4',
            'mapCoords' => ''
        ]);

        // CHARACTER 3

        characterVideo::create([
            'charId' => '3',
            'chapter' => '1',
            'video' => 'char3chapt1.mp4',
            'mapCoords' => '485,331,693,732'
        ]);

        characterVideo::create([
            'charId' => '3',
            'chapter' => '2',
            'video' => 'char3chapt2.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '3',
            'chapter' => '3',
            'video' => 'char3chapt3.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '3',
            'chapter' => '4',
            'video' => 'char3chapt4.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '3',
            'chapter' => '5',
            'video' => 'char3chapt5.mp4',
            'mapCoords' => ''
        ]);

        // CHARACTER 4

        characterVideo::create([
            'charId' => '4',
            'chapter' => '1',
            'video' => 'char4chapt1.mp4',
            'mapCoords' => '700,92,828,434'
        ]);

        characterVideo::create([
            'charId' => '4',
            'chapter' => '2',
            'video' => 'char4chapt2.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '4',
            'chapter' => '3',
            'video' => 'char4chapt3.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '4',
            'chapter' => '4',
            'video' => 'char4chapt4.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '4',
            'chapter' => '5',
            'video' => 'char4chapt5.mp4',
            'mapCoords' => ''
        ]);

        // CHARACTER 5

        characterVideo::create([
            'charId' => '5',
            'chapter' => '1',
            'video' => 'char5chapt1.mp4',
            'mapCoords' => '935,21,1169,763'
        ]);

        characterVideo::create([
            'charId' => '5',
            'chapter' => '2',
            'video' => 'char5chapt2.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '5',
            'chapter' => '3',
            'video' => 'char5chapt3.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '5',
            'chapter' => '4',
            'video' => 'char5chapt4.mp4',
            'mapCoords' => ''
        ]);

        characterVideo::create([
            'charId' => '5',
            'chapter' => '5',
            'video' => 'char5chapt5.mp4',
            'mapCoords' => ''
        ]);
    }
}