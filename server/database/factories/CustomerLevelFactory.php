<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerLevelFactory extends Factory
{
    public function definition(): array
    {
        $levels = ['Bronze', 'Silver', 'Gold', 'Platinum'];

        return [
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? 1,
            'level_name' => $this->faker->randomElement($levels),
        ];
    }
}
