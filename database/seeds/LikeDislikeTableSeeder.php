<?php

use Illuminate\Database\Seeder;

class LikeDislikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
        'like' => 'Winning',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
        'like' => 'Helping People',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Lawyer')->select('id')->first()->id,
        'like' => 'Losing',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
        'like' => 'Kids',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
        'like' => 'Helping People',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Pediatric Surgeon')->select('id')->first()->id,
        'like' => 'Doing Nothing',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
        'like' => 'Family',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
        'like' => 'Solving Problems',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Structural Engineer')->select('id')->first()->id,
        'like' => 'Being treated as an inferior',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
        'like' => 'Traveling',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
        'like' => 'Making Friends',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Interior Designer')->select('id')->first()->id,
        'like' => 'Being Alone',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
        'like' => 'Teaching',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
        'like' => 'Parties',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Teacher')->select('id')->first()->id,
        'like' => 'Being Lazy',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
        'like' => 'Food',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
        'like' => 'Being Creative',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Restaurant Owner')->select('id')->first()->id,
        'like' => 'Being Tired',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
        'like' => 'Playing Soccer',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
        'like' => 'Camping',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Janitor')->select('id')->first()->id,
        'like' => 'Judgemental People',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
        'like' => 'Fishing',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
        'like' => 'Grilling',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Parking Lot Attendant')->select('id')->first()->id,
        'like' => 'Violence',
        'like_dislike' => 'dislike',
      ]);
      // ------------------------------------------------------------------------------------------------------------
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
        'like' => 'Hiking',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
        'like' => 'Drawing',
        'like_dislike' => 'like',
      ]);
      DB::table('like_dislike')->insert([
        'profession_id' => DB::table('professions')->where('profession', '=', 'Construction Laborer')->select('id')->first()->id,
        'like' => 'Traffic',
        'like_dislike' => 'dislike',
      ]);
    }
}
