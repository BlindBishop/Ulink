<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'james@dukes.jmu.edu',
            'password' => 'jmu',
            'first' => 'James',
            'last' => 'Madison',
            'bio' => 'James Madison University is the place!',
            'gradYr' => '2017-06-01',
            'professor' => 0,
            'Uname' => 'James Madison University',
            'Uabb' => 'JMU',
        ]);
        DB::table('users')->insert([
            'email' => 'smith@dukes.jmu.edu',
            'password' => 'jmu',
            'first' => 'John',
            'last' => 'Smith',
            'bio' => 'James Madison University is the bomb!',
            'gradYr' => '2017-06-01',
            'professor' => 0,
            'Uname' => 'James Madison University',
            'Uabb' => 'JMU',
        ]);
        DB::table('users')->insert([
            'email' => 'moon@dukes.jmu.edu',
            'password' => 'jmu',
            'first' => 'Arnold',
            'last' => 'Moon',
            'bio' => 'go dukes!',
            'gradYr' => '2017-06-01',
            'professor' => 0,
            'Uname' => 'James Madison University',
            'Uabb' => 'JMU',
        ]);
        DB::table('users')->insert([
            'email' => 'tom@uva.edu',
            'password' => 'uva',
            'first' => 'Thomas',
            'last' => 'Jefferson',
            'bio' => 'UVA is the place!',
            'gradYr' => '2019-06-01',
            'professor' => 0,
            'Uname' => 'University of Virginia',
            'Uabb' => 'UVA',
        ]);
        DB::table('users')->insert([
            'email' => 'jim@vtech.edu',
            'password' => 'tech',
            'first' => 'Jimmy',
            'last' => 'Tech',
            'bio' => 'VTech is the place!',
            'gradYr' => '2017-06-01',
            'professor' => 0,
            'Uname' => 'Virginia Tech',
            'Uabb' => 'VT',
        ]);
    }
}
