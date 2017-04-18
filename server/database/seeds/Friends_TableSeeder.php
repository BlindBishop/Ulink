<?php

use Illuminate\Database\Seeder;

class Friends_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friends')->insert([
            'primeUser' => 'james@dukes.jmu.edu',
            'foreignUser' => 'smith@dukes.jmu.edu',
            'relationship' => null,
            'status' => 'active',
        ]);
        DB::table('friends')->insert([
            'primeUser' => 'smith@dukes.jmu.edu',
            'foreignUser' => 'james@dukes.jmu.edu',
            'relationship' => null,
            'status' => 'active',
        ]);
        DB::table('friends')->insert([
            'primeUser' => 'moon@dukes.jmu.edu',
            'foreignUser' => 'james@dukes.jmu.edu',
            'relationship' => null,
            'status' => 'active',
        ]);
        DB::table('friends')->insert([
            'primeUser' => 'james@dukes.jmu.edu',
            'foreignUser' => 'moon@dukes.jmu.edu',
            'relationship' => null,
            'status' => 'active',
        ]);
        DB::table('friends')->insert([
            'primeUser' => 'smith@dukes.jmu.edu',
            'foreignUser' => 'moon@dukes.jmu.edu',
            'relationship' => null,
            'status' => 'pending',
        ]);
    }
}
