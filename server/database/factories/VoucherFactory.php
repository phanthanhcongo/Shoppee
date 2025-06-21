<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->unique()->bothify('SALE###')),
            'discount_percent' => $this->faker->randomFloat(2, 5, 50),
            'start_date' => now(),
            'end_date' => now()->addDays(rand(10, 60)),
        ];
    }
}
