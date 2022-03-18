<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(FonctionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ActeurTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(ProduitTableSeeder::class);

    }
}
