<?php

namespace Database\Seeders;

use App\Models\Chapitre;
use Illuminate\Database\Seeder;
use Database\Factories\ChapitreFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChapitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chapitre::factory()->count(50)->create();
    }
}
