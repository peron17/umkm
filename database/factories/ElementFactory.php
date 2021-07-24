<?php

namespace Database\Factories;

use App\Models\Element;
use App\Models\ElementPosition;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Element::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'element_position_id' => ElementPosition::inRandomOrder()->first(),
            'type' => $this->faker->randomElement(['text', 'file', 'url']),
            'value' => function($att){
                if($att['type'] == 'text')
                    return $this->faker->sentence();
                elseif($att['type'] == 'file')
                    return $this->faker->imageUrl();
                else
                    return $this->faker->url;
            }
        ];
    }
}
