<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'seller_id' => Seller::inRandomOrder()->first()?->seller_id ?? Seller::factory(),
            'subcategory_id' => Subcategory::inRandomOrder()->first()?->subcategory_id ?? Subcategory::factory(),
            'product_name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 500),
        ];
    }
}
