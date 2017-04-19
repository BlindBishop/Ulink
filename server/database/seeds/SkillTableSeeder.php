<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'userEmail' => 'james@dukes.jmu.edu',
            'skill_name' => 'python',
            'rating' => 1,
        ]);
        DB::table('skills')->insert([
            'userEmail' => 'james@dukes.jmu.edu',
            'skill_name' => 'java',
            'rating' => 5,
        ]);
        DB::table('skills')->insert([
            'userEmail' => 'james@dukes.jmu.edu',
            'skill_name' => 'php',
            'rating' => 3,
        ]);
    }
}
