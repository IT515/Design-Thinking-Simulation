<?php

use Illuminate\Database\Seeder;

class PlayerCharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('player_character')->insert([
        'user_id' => DB::table('users')->where('email', '=', 'dwchristofferson@gmail.com')->select('id')->first()->id,
        'character_id' => DB::table('characters')->where('name', '=', 'Thoms Kodály')->select('id')->first()->id,
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
        // 'skill_1_id' => DB::table('skills')->where('skill', '=', 'Technology Literacy')->select('id')->first()->id,
        // 'skill_2_id' => DB::table('skills')->where('skill', '=', 'Motivating People')->select('id')->first()->id,
        // 'one_items_id' => DB::table('one_items')->where('item', '=', 'Photo of my first class')->select('id')->first()->id,
        // 'like' => 'Surfing',
        // 'dislike' => 'Sand',
        // 'item_reason' => 'I like being sentimental',
        // 'reason_for_profession' => 'I have always like helping people learn new things.',
        // 'biggest_camp_concern' => 'Enough food and resources',
        // 'biggest_concern' => 'Becoming employable',
        // 'five_year_plan' => 'Rule the world!',
        // 'quote' => 'I pity the fool',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
