<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friends')->insert([
            'user_id' => 1,
            'friend_id' => 2,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 1,
            'friend_id' => 4,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 2,
            'friend_id' => 1,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 4,
            'friend_id' => 1,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 1,
            'friend_id' => 3,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 3,
            'friend_id' => 1,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 3,
            'friend_id' => 5,
            'status' => 2,
        ]);

        DB::table('friends')->insert([
            'user_id' => 5,
            'friend_id' => 3,
            'status' => 2,
        ]);
    }
}
