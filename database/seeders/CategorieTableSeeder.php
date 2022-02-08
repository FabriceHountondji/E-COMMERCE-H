<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'électronique',
                'description' => 'C\'est l\'électronique'
            ],[
                'name' => 'lingerie fine',
                'description' => 'C\'est la lingerie fine'
            ],[
                'name' => 'baskets',
                'description' => 'C\'est des baskets'
            ],[
                'name' => 'casquette',
                'description' => 'C\'est une casquette'
            ],[
                'name' => 'Chemise',
                'description' => 'C\'est une chemise'
            ],[
                'name' => 'jupe',
                'description' => 'C\'est une jupe'
            ],
        ]);
    }
}
