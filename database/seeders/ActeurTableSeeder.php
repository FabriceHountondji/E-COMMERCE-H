<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acteurs')->insert([
            [
                'firstname' => 'Fabrice',
                'lastname' => 'HOUNTONDJI',
                'phone' =>'96100999',
                'birthday' => '1999/11/05',
                'sexe' => 'Masculin',
                'address' => 'Sos Calavi',
                'email' => 'fab@gmail.com',
                'fonction_id' => '1',
                'user_id' => '1',
            ],[
                'firstname' => 'Oscar',
                'lastname' => 'GBADOU',
                'phone' =>'67910910',
                'birthday' => '1977/05/03',
                'sex' => 'Masculin',
                'address' => 'Arconville',
                'email' => 'oscar@gmail.com',
                'fonction_id' => '2',
                'user_id' => '2',
            ],

        ]);
    }
}
