<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'User Test 1',
            'password' => bcrypt('passworduser1'),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'User Test 2',
            'password' => bcrypt('passworduser2'),
            'created_at' => Carbon::now()
        ]);
    }
}
