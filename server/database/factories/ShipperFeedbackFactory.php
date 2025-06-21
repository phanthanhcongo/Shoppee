<?php
namespace Database\Factories;

use App\Models\Delivery;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipperFeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'delivery_id' => Delivery::inRandomOrder()->first()?->delivery_id ?? Delivery::factory(),
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(),
        ];
    }
}
