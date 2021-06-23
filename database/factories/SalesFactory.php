<?php

namespace Database\Factories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => date('Y-m-') . $this->faker->numberBetween(1, 30),
            // 'product_id' => \App\Models\Product::factory(),
            // 'price' => function(array $attributes) {
            //     return \App\Models\Product::find($attributes['product_id'])->price;
            // },
            'qty' => $this->faker->numberBetween(1, 5),
            'discount' => 0,
            // 'total_price' => function(array $attributes) {
            //     return $attributes['price'] * $attributes['qty'];
            // }
        ];
    }
}
