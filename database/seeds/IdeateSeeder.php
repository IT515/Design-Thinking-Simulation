<?php

use App\ideate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class IdeateSeeder extends Seeder
{
    public function run()
    {

        DB::table('ideates')->truncate();

        $faker = Faker\Factory::create();

        for ( $i = 0; $i < 15; $i++) {
            ideate::create([
                'userId' => '1',
                'groupId' => '1',
                'projectId' => '1',
                'thought' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'title' => $faker->catchPhrase,
                'image' => $faker->imageUrl($width = 640, $height = 480)
            ]);
        }

        for ( $i = 0; $i < 11; $i++) {
            ideate::create([
                'userId' => '1',
                'groupId' => '1',
                'projectId' => '2',
                'thought' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'title' => $faker->catchPhrase,
                'image' => $faker->imageUrl($width = 640, $height = 480)
            ]);
        }
    }
}