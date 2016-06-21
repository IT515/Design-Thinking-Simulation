<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('characters')->insert([
        'name' => 'Thoms Kodály',
        'age' => 34,
        'marital_status' => 'Single',
        'gender' => 'male',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Elis Rummo',
        'age' => 60,
        'marital_status' => 'Married',
        'gender' => 'male',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Annika Looke',
        'age' => 21,
        'marital_status' => 'Single',
        'gender' => 'female',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Tivona Yadin',
        'age' => 60,
        'marital_status' => 'Widowed',
        'gender' => 'female',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Maila Levandi',
        'age' => 43,
        'marital_status' => 'Single',
        'gender' => 'female',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Marko Mannik',
        'age' => 29,
        'marital_status' => 'Married',
        'gender' => 'male',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Habioro Koskela',
        'age' => 46,
        'marital_status' => 'Married',
        'gender' => 'male',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Lola A. Cushman',
        'age' => 27,
        'marital_status' => 'Single',
        'gender' => 'female',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Artur Vesik',
        'age' => 37,
        'marital_status' => 'Divorced',
        'gender' => 'male',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
      DB::table('characters')->insert([
        'name' => 'Hanna Harma',
        'age' => 74,
        'marital_status' => 'Married',
        'gender' => 'female',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
    }
}
