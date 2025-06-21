<?php

namespace Database\Factories;

use App\Models\SellerOrder;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'seller_order_id' => SellerOrder::inRandomOrder()->first()?->seller_order_id ?? SellerOrder::factory(),
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->sentence(),
            'created_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
