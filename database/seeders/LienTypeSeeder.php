<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LienType;
use Database\Factories\LienTypeFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LienTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LienType::factory()->count(85)->create();
    }
}
