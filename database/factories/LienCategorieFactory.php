<?php

namespace Database\Factories;

use App\Models\LienCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class LienCategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LienCategorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_formation'=>$this->faker->numberBetween(1,50),
            'id_categorie'=>$this->faker->numberBetween(1,5)
        ];
    }
}
