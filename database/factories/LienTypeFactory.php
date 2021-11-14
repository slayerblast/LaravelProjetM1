<?php

namespace Database\Factories;

use App\Models\LienType;
use Illuminate\Database\Eloquent\Factories\Factory;

class LienTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LienType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_formation'=>$this->faker->numberBetween(1,50),
            'id_type'=>$this->faker->numberBetween(1,8)
        ];
    }
}
