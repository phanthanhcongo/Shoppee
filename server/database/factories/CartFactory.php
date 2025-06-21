<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'created_at' => now()->subDays(rand(1, 30)),
        ];
    }
}
