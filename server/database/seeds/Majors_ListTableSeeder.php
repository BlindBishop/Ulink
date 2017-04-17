<?php

use Illuminate\Database\Seeder;

class Majors_ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors_list')->insert([
            'major' => 'Computer Science',
            'userEmail' => 'james@dukes.jmu.edu',
            'minor' => 1
        ]);
        DB::table('majors_list')->insert([
            'major' => 'Finance',
            'userEmail' => 'james@dukes.jmu.edu',
            'minor' => 0
        ]);
        DB::table('majors_list')->insert([
            'major' => 'Accounting',
            'userEmail' => 'smith@dukes.jmu.edu',
            'minor' => 0
        ]);
        DB::table('majors_list')->insert([
            'major' => 'History',
            'userEmail' => 'moon@dukes.jmu.edu',
            'minor' => 0
        ]);
        DB::table('majors_list')->insert([
            'major' => 'Computer Science',
            'userEmail' => 'tom@uva.edu',
            'minor' => 0
        ]);
        DB::table('majors_list')->insert([
            'major' => 'Accounting',
            'userEmail' => 'jim@vtech.edu',
            'minor' => 0
        ]);
    }
}