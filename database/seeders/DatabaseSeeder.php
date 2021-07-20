<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Member;
use App\Models\Product;
use App\Models\ProductCategory;
use Cocur\Slugify\Slugify;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // Category::factory()->count(5)->create();
        // Product::factory(20)->create();
        $path = ".db/region.sql";
        DB::unprepared(file_get_contents($path));
        $this->command->info('Region populated!');

        ProductCategory::factory(20)->create();

        Member::factory(20)->create();

        Cart::factory(30)->create();
        // Cart::factory(30)->make()->each(function($cart){
        //     $cart->product()->associate(Product::inRandomOrder()->first());
        //     $cart->member()->associate(Member::inRandomOrder()->first());
        //     $cart->save();
        // });

        // foreach(Brand::BRANDS as $brand) {
        //     Brand::create([
        //         'name' => $brand,
        //         'slug' => $this->slugify->slugify($brand)
        //     ]);
        // }

        // if(Category::CATEGORIES) {
        //     foreach(Category::CATEGORIES as $category) {
        //         Category::create([
        //             'name' => $category,
        //             'slug' => $this->slugify->slugify($category)
        //         ]);
        //     }
        // }

        // $products = \App\Models\Product::factory(6)
        // ->make()
        // ->each(function($product) {
        //     $product->brand()->associate(Brand::inRandomOrder()->first());
        //     $product->category()->associate(Category::inRandomOrder()->first());
        //     $product->save();
        // });

        // foreach($products as $product) {
        //     $faker = Factory::create();
            
        //     for($i=0; $i < 3; $i++) {
        //         $qty = $faker->numberBetween(1, 5);
        //         $date = date('Y-m-') . $faker->numberBetween(1, 30);

        //         \App\Models\Sales::create([
        //             'date' => $date,
        //             'product_id' => $product->id,
        //             'price' => $product->selling_price,
        //             'qty' => $qty,
        //             'discount' => 0,
        //             'total_price' => $product->selling_price * $qty
        //         ]);
        //     }
        // }

        // $sales = \App\Models\Sales::factory()
        //         ->count(2)
        //         ->for($product)
        //         ->create();

        // $product = \App\Models\Product::factory(6)->has(
        //     \App\Models\Sales::factory(1)->state(function($attributes, \App\Models\Product $product) {
        //         $faker = Factory::create();
        //         return [
        //             'date' => date('Y-m-') . $this->faker->numberBetween(1, 30),
        //             'product_id' => $product->id,
        //             'price' => $product->price,
        //             'qty' => $faker->numberBetween(1, 4),
        //             'discount' => 0,
        //             'total_price' => function($attributes) {
        //                 return $attributes['qty'] * $attributes['price'];
        //             }
        //         ];
        //     }
        // ))
        // ->make()
        // ->each(function($product) {
        //     $product->brand()->associate(Brand::inRandomOrder()->first());
        //     $product->category()->associate(Category::inRandomOrder()->first());
        //     $product->save();
        // });

        // \App\Models\Product::factory(6)->make()->each(function($product) {
        //     $product->brand()->associate(Brand::inRandomOrder()->first());
        //     $product->category()->associate(Category::inRandomOrder()->first());
        //     $product->save();
        //     $product->sales()->save(\App\Models\Sales::factory()->make(2)->each(function($sales) {
        //         $sales->product()->associate(Product::inRandomOrder()->first());
        //     }));
        // });

        // \App\Models\Sales::factory(40)->make()->each(function($sales) {
        //     $sales->product()->associate(Product::inRandomOrder()->first());
        //     $sales->product()->associate();
        //     $sales->save();
        // });
    }
}
