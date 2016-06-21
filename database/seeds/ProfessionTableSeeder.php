<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('professions')->insert([
        'education_level' => 'High', 'profession' => 'Lawyer',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'High', 'profession' => 'Pediatric Surgeon',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'High', 'profession' => 'Structural Engineer',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Middle', 'profession' => 'Interior Designer',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Middle', 'profession' => 'Teacher',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Middle', 'profession' => 'Restaurant Owner',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Low', 'profession' => 'Janitor',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Low', 'profession' => 'Parking Lot Attendant',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('professions')->insert([
        'education_level' => 'Low', 'profession' => 'Construction Laborer',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
