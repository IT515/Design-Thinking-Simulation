<?php

use Illuminate\Database\Seeder;

class OneItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My Diploma',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Briefcase',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'A gavel given to me when I made partner',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My Diploma',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My First Aid Kit',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'A teddy bear my first patient gave me',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My Diploma',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Calculator',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'A pen and pencil my wife gave me when I graduated',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My portfolio of first drafts',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'List of contacts',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'Picture of my parents',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'Photo of my first class',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'Bag of object lessons',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'Picture of my parents',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'Frying pan from first year open',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'Recipe book',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'A Picture of my parents',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My Identification Documents',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Soccer Ball',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My High School Diploma',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'Stamp Collection',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Transcript from High School',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Birth Certificate',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('one_items')->insert([
        'item' => 'My Personal Diary',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Headphones',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
      DB::table('one_items')->insert([
        'item' => 'My Family Album',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
    }
}
