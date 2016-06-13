<?php

use App\projects;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectsSeeder extends Seeder
{
    public function run()
    {

        DB::table('projects')->truncate();

        projects::create([
            'groupId' => '1',
            'projectName' => 'Project1'
        ]);

        projects::create([
            'groupId' => '1',
            'projectName' => 'Project2'
        ]);

        projects::create([
            'groupId' => '2',
            'projectName' => 'Group2Project'
        ]);

    }
}