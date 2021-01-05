<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invitation_status')->insert([
            'status' => 'Send',
        ]);

        DB::table('invitation_status')->insert([
            'status' => 'Accepted',
        ]);

        DB::table('invitation_status')->insert([
            'status' => 'Declined',
        ]);
    }
}
