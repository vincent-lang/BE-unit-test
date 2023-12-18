<?php

namespace Tests\Feature;

use App\Models\product;
use App\Models\shop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_site(): void
    {
        $response = $this->put(route('product.create'));
        $response = $this->put(route('product.store'));
        $response = $this->put(route('shop.create'));
        $response = $this->put(route('shop.store'));

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create(): void
    {
        $response = $this->put(route('product.store'), [
            'shop_id' => 1,
            'product_name' => 'test',
            'artikel_nr' => 'test',
        ]);
        $response = $this->put(route('shop.store'), [
            'shop_name' => 'test',
            'location' => 'test',
        ]);

        $response->assertStatus(405);
    }

    // public function test_edit(): void
    // {
    //     $response = $this->put(route('product.store'), [
    //         'shop_id' => 1,
    //         'product_name' => 'test',
    //         'artikel_nr' => 'test',
    //     ]);
    //     $response = $this->put(route('shop.store'), [
    //         'shop_name' => 'test',
    //         'location' => 'test',
    //     ]);

    //     $response->assertStatus(405);
    // }
}
