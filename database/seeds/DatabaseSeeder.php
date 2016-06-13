<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CharacterTableSeeder::class);
        $this->call(ProfessionTableSeeder::class);
        $this->call(LikeDislikeTableSeeder::class);
        $this->call(OneItemTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(PlayerCharacterTableSeeder::class);
    }
}
