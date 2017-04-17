<?php

use Illuminate\Database\Seeder;

class universities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'Uname' => 'James Madison University',
            'Uabb' => 'JMU',
        ]);
        DB::table('universities')->insert([
            'Uname' => 'Virginia Tech',
            'Uabb' => 'VT',
        ]);
        DB::table('universities')->insert([
            'Uname' => 'University of Virginia',
            'Uabb' => 'UVA',
        ]);
    }
}
