<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductvariantFactory extends Factory
{
    public function definition(): array
    {
        $price = fake()->randomFloat(2, 50, 1000);
        return [
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? Product::factory(),
            'variant_name' => fake()->colorName(),
            'original_price' => $price,
            'final_price' => $price - fake()->randomFloat(2, 5, 30),
            'stock_quantity' => fake()->numberBetween(10, 500),
        ];
    }
}
