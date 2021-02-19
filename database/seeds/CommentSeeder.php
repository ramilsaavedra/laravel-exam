<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => 1,
            'body' => 'Test comment 1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'body' => 'Test comment 2',
            'created_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 1,
            'body' => 'Test comment 3',
            'created_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'body' => 'Test comment 1',
            'created_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'body' => 'Test comment 2',
            'created_at' => Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'user_id' => 2,
            'body' => 'Test comment 3',
            'created_at' => Carbon::now(),
        ]);
    }
}
