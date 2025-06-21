<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();
        foreach ($products as $product) {
            ProductImage::factory()->count(3)->create([
                'product_id' => $product->id,
            ]);
        }
    }
}
