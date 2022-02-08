<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'name' => 'chemise deux tons',
                'description' => 'chemise avec couleur rouge et verte',
                'prix' => '6000',
                'categorie_id' => '1',
            ],[
                'name' => 'Baskets nike',
                'description' => 'chaussures de grande marque',
                'prix' => '15000',
                'categorie_id' => '2',
            ],

        ]);
    }
}
