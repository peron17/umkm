<?php

namespace Database\Factories;

use App\Models\ElementPosition;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementPositionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ElementPosition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->state,
            'description' => $this->faker->paragraph()
        ];
    }
}
