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
                'username' => 'fab@',
                'email' => 'fab@gmail.com',
                'photo' => 'storage/IMGS/imgs_photos/1.png',
                'password' => Hash::make('admin'),
                'role_id' => '1',
            ],[
                'username' => 'oscar@',
                'email' => 'oscar@gmail.com',
                'photo' => 'storage/IMGS/imgs_photos/1.png',
                'password' => Hash::make('client1'),
                'role_id' => '2',
            ],[
                'username' => 'auri@',
                'email' => 'auri@gmail.com',
                'photo' => 'storage/IMGS/imgs_photos/1.png',
                'password' => Hash::make('admin2'),
                'role_id' => '1',
            ],

        ]);
    }
}
