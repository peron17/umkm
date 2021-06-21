<?php

namespace Database\Factories;

use App\Models\Brand;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $slugify = new Slugify();
        $name = $this->faker->state;

        if(Brand::BRANDS) {
            foreach(Brand::BRANDS as $brand) {
                
            }
        }

        return [
            'name' => $name,
            'slug' => $slugify->slugify($name),
            'photo' => $this->faker->image()
        ];
    }
}
