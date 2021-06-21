<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $slugify;

    public function __construct()
    {
        $this->slugify = new Slugify();
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(Brand::BRANDS) {
            foreach(Brand::BRANDS as $brand) {
                Brand::create([
                    'name' => $brand,
                    'slug' => $this->slugify->slugify($brand)
                ]);
            }
        }

        if(Category::CATEGORIES) {
            foreach(Category::CATEGORIES as $category) {
                Category::create([
                    'name' => $category,
                    'slug' => $this->slugify->slugify($category)
                ]);
            }
        }

        \App\Models\Product::factory(20)->make()->each(function($product) {
            $product->brand()->associate(Brand::inRandomOrder()->first());
            $product->category()->associate(Category::inRandomOrder()->first());
            $product->save();
        });
    }
}
