<?php
namespace Database\Factories;

use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatSessionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? Customer::factory(),
            'seller_id' => Seller::inRandomOrder()->first()?->seller_id ?? Seller::factory(),
            'started_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
