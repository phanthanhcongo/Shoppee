<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlashSaleFactory extends Factory
{
    public function definition(): array
    {
        $start = now()->addDays(rand(1, 3));
        return [
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? Product::factory(),
            'discount_price' => $this->faker->randomFloat(2, 100, 500),
            'start_time' => $start,
            'end_time' => $start->copy()->addHours(12),
        ];
    }
}
