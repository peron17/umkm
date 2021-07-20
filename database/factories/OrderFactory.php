<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number' => 'INV' . str_pad($this->faker->unique()->randomNumber, 7, '0', STR_PAD_LEFT),
            'member_id' => Member::inRandomOrder()->first(),
        ];
    }
}
