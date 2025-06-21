<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class RewardTransactionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? 1,
            'points' => $this->faker->numberBetween(-100, 200),
            'description' => $this->faker->sentence(),
            'created_at' => $this->faker->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
