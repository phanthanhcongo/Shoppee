<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerOrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'seller_id' => Seller::inRandomOrder()->first()?->seller_id ?? Seller::factory(),
            'order_id' => Order::inRandomOrder()->first()?->order_id ?? Order::factory(),
            'status' => $this->faker->randomElement(['Pending', 'Confirmed', 'Shipped']),
            'assigned_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
