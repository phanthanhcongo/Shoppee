<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? Product::factory(),
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(),
            'created_at' => now()->subDays(rand(1, 30)),
        ];
    }
}
