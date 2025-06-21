<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Productvariant;

class ProductvariantSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            Productvariant::factory()->count(2)->create([
                'product_id' => $product->id,
            ]);
        }
    }
}
