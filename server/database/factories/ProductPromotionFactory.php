<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPromotionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? 1,
            'promotion_id' => Promotion::inRandomOrder()->first()?->promotion_id ?? 1,
        ];
    }
}
