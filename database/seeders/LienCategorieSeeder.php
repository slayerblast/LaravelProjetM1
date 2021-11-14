<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LienCategorie;
use Database\Factories\LienCategorieFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LienCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LienCategorie::factory()->count(70)->create();
    }
}
