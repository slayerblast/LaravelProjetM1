<?php
namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;
use Database\Factories\FormationFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::factory()->count(20)->create();
    }
}
