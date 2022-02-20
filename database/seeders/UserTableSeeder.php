<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'fab@gmail.com',
                'password' => Hash::make('admin'),
                'role_id' => '1',
            ],[
                'email' => 'oscar@gmail.com',
                'password' => Hash::make('client1'),
                'role_id' => '2',
            ],[
                'email' => 'auri@gmail.com',
                'password' => Hash::make('admin2'),
                'role_id' => '1',
            ],

        ]);
    }
}
