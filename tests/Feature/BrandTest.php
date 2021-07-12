<?php

namespace Tests\Feature;

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    use RefreshDatabase;

    public function __construct()
    {
        parent::__construct();
        
        $this->withExceptionHandling();
    }

    /**
     * Checking brand index url
     */
    public function test_index_url()
    {
        $response = $this->get(route('brand.index'));

        $response->assertStatus(200);
        $response->assertViewHas('data');
    }

    public function test_create_url()
    {
        $response = $this->get(route('brand.create'));
        $response->assertStatus(200);
    }

    public function test_store_new_brand()
    {
        $response = $this->post(route('brand.store'), [
            'name' => 'A New Brand',
            'slug' => 'a-new-brand'
        ]);
        $response->assertCreated();
        $this->assertTrue(count(Brand::all()) > 0);
    }

    public function test_edit_url()
    {
        Brand::factory(1)->create();    
        $model = Brand::get()->first();
        $response = $this->get(route('brand.edit', $model));
        $response->assertStatus(200);
    }

    public function test_update_existing_data()
    {
        Brand::factory(1)->create();
        $model = Brand::get()->first();
        $response = $this->put(route('brand.update', $model), [
            'name' => 'An Edited Brand Data',
            'slug' => 'an-edited-brand-data'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_brand_data()
    {
        Brand::factory(1)->create();
        $model = Brand::get()->first();
        $this->delete(route('brand.destroy'));
        $this->assertDatabaseMissing(route('brand.destroy'), $model);
    }
}
