<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Cocur\Slugify\Slugify;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $slugify = new Slugify();

        return [
            'sku' => $this->faker->swiftBicNumber(),
            'name' => $this->faker->unique()->words(3, true),
            'slug' => function($att) use ($slugify) {
                return $slugify->slugify($att['name']);
            },
            'photo' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(50000, 1000000),
            'discount' => $this->faker->numberBetween(0, 5)
        ];
    }
}
