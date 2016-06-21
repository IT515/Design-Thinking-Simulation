<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Public Speaking',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Logical Thinking',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Technical Writing',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Persuasiveness',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Medicine/First Aid',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Good with your hands',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Learning Foreign Languages',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Decision making under stress',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => '3D design/prototyping',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Computer Literacy',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Mathematical Calculation',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Leadership',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Bilingual',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Organizing Space',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Computer-aided Design',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Knowledge of many materials',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Interpersonal Skills',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Organizing People',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Technology Literacy',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Motivating People',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Risk management',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Customer Service',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Catering/Event Planning',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Inventory Management',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Articulate',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Multitasking',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Attention to Details',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Self-Motivated',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Sociable',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Good with numbers',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Good Driver',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Record Keeping',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('skills')->insert([
        'skill' => 'Handyman',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Schedule Management',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Collaboration',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
      DB::table('skills')->insert([
        'skill' => 'Word Processing',
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
      ]);
    }
}
