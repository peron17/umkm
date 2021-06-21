<?php

namespace Database\Factories;

use App\Models\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word;
        $slugify = new Slugify();

        return [
            'name' => $name,
            'slug' => $slugify->slugify($name)    
        ];
    }
}
