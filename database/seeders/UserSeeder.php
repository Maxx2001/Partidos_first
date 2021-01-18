<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


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
            'name' => 'Max Felis',
            'username' => 'Chantal',
            'phonenumber' => '0623705203',
            'email' => "max.felis11@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('1234'),
            'remember_token' => NULL,
            'created_at' => '2008-02-22',
            'updated_at' => NULL,
        ]);

        DB::table('users')->insert([
            'name' => 'Livai ',
            'username' => 'Snow',
            'phonenumber' => '0623775203',
            'email' => "Livai@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('1234'),
            'remember_token' => NULL,
            'created_at' => '2020-11-2',
            'updated_at' => NULL,
        ]);

        DB::table('users')->insert([
            'name' => 'Guy ',
            'username' => 'Guy',
            'phonenumber' => '0625705203',
            'email' => "Guy@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('1234'),
            'remember_token' => NULL,
            'created_at' => '2019-6-8',
            'updated_at' => NULL,
        ]);

        DB::table('users')->insert([
            'name' => 'Eveline ',
            'username' => 'Eef',
            'phonenumber' => '0623795203',
            'email' => "Eveline@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('1234'),
            'remember_token' => NULL,
            'created_at' => '2018-4-2',
            'updated_at' => NULL,
        ]);

        DB::table('users')->insert([
            'name' => 'Daan ',
            'username' => 'Danos',
            'phonenumber' => '0623745203',
            'email' => "Daan@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('1234'),
            'remember_token' => NULL,
            'created_at' => '2015-4-2',
            'updated_at' => NULL,
        ]);

    }
}
