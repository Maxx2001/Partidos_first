<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status' => 'Pending',
        ]);
        DB::table('status')->insert([
            'status' => 'Accepted',
        ]);
        DB::table('status')->insert([
            'status' => 'Declined',
        ]);
        DB::table('status')->insert([
            'status' => 'Blocked',
        ]);
    }
}
