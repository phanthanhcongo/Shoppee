<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishlistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? Product::factory(),
        ];
    }
}
