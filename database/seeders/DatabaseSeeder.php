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
        $this->call([
            UserSeeder::class
        ]);
        $this->call([
            FormationSeeder::class
        ]);
        $this->call([
            ChapitreSeeder::class
        ]);
        $this->call([
            CategorieSeeder::class
        ]);
        $this->call([
            TypeSeeder::class
        ]);
        $this->call([
            LienTypeSeeder::class
        ]);
        $this->call([
            LienCategorieSeeder::class
        ]);
    }
}
