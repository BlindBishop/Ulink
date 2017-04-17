<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            'major' => 'Accounting'
        ]);
        DB::table('majors')->insert([
            'major' => 'Finance'
        ]);
        DB::table('majors')->insert([
            'major' => 'History'
        ]);
        DB::table('majors')->insert([
            'major' => 'Computer Science'
        ]);
    }
}
