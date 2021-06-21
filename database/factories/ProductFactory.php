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
        $productName = $this->faker->word; 
        $hpp = $this->faker->numberBetween(4000, 6000);

        return [
            'name' => $productName,
            'slug' => $slugify->slugify($productName),
            'hpp' => $hpp,
            'selling_price' => $hpp + $this->faker->numberBetween(4000, 6000),
            'photo' => $this->faker->image()
        ];
    }
}
