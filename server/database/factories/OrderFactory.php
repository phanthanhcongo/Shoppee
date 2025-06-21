<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\DeliveryAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        $customer = Customer::inRandomOrder()->first() ?? Customer::factory()->create();

        $address = DeliveryAddress::where('customer_id', $customer->id)->inRandomOrder()->first()
                    ?? DeliveryAddress::factory()->create(['customer_id' => $customer->id]);

        return [
            'customer_id' => $customer->id,
            'address_id' => $address->id,
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['Pending', 'Processing', 'Shipped', 'Delivered']),
            'created_at' => now(),
        ];
    }
}
