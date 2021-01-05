<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friend_status')->insert([
            'status' => 'Pending',
        ]);
        DB::table('friend_status')->insert([
            'status' => 'Accepted',
        ]);
        DB::table('friend_status')->insert([
            'status' => 'Declined',
        ]);
        DB::table('friend_status')->insert([
            'status' => 'Blocked',
        ]);
    }
}
