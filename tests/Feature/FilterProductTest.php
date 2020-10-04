<?php

namespace Tests\Feature;

use App\Models\Products;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMatrixFilter()
    {
        $productTN = Products::factory()->create([
            'matrix' => 'TN',
        ]);
        $productIPS = Products::factory()->create([
            'matrix' => 'IPS',
        ]);
        $productAHIPS = Products::factory()->create([
            'matrix' => 'AH-IPS',
        ]);

        $response = $this->get('/products?matrix[]=TN');
        $response->assertSee($productTN->serial);
        $response->assertDontSee($productIPS->serial);
        $response->assertDontSee($productAHIPS->serial);
        
    }
}
