<?php

use App\group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GroupSeeder extends Seeder
{
    public function run()
    {

        DB::table('groups')->truncate();

        group::create([
            'groupName' => 'Group1'
        ]);

        group::create([
            'groupName' => 'Group2'
        ]);

        group::create([
            'groupName' => 'Group3'
        ]);

    }
}