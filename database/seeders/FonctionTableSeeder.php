<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            [
                'name' => 'administrateur',
                'description' => 'C\'est l\'Administrateur'
            ],[
                'name' => 'client',
                'description' => 'C\'est le client'
            ],[
                'name' => 'caissier',
                'description' => 'C\'est un caissier'
            ],[
                'name' => 'livreur',
                'description' => 'C\'est le livreur'
            ],[
                'name' => 'chef',
                'description' => 'C\'est le chef'
            ],[
                'name' => 'fournisseur',
                'description' => 'C\'est un fournisseur'
            ],
        ]);
    }
}
