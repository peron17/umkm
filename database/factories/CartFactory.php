<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Member;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomElement([10000, 20000, 50000, 100000, 500000]),
            'qty' => $this->faker->numberBetween(1, 5),
            'total_price' => function($att) {
                return $att['price'] * $att['qty'];
            },
            'product_id' => Product::inRandomOrder()->first(),
            'member_id' => Member::inRandomOrder()->first()
        ];
    }
}
