<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'firstname' => 'Fabrice',
                'lastname' => 'HOUNTONDJI',
                'phone' =>'96100999',
                'birthday' => '1999/11/05',
                'sexe' => 'Masculin',
                'photo' => 'storage/IMGS/imgs_photos/1.png',
                'address' => 'Sos Calavi',
                'user_id' => '1',
            ],[
                'firstname' => 'Oscar',
                'lastname' => 'GBADOU',
                'phone' =>'67910910',
                'birthday' => '1977/05/03',
                'sexe' => 'Masculin',
                'photo' => 'storage/IMGS/imgs_photos/1.png',
                'address' => 'Arconville',
                'user_id' => '2',
            ],

        ]);
    }
}
