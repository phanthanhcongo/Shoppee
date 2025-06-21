<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Shipper;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->first()?->order_id ?? Order::factory(),
            'shipper_id' => Shipper::inRandomOrder()->first()?->shipper_id ?? Shipper::factory(),
            'delivery_status' => $this->faker->randomElement(['Pending', 'In Transit', 'Delivered']),
            'assigned_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
