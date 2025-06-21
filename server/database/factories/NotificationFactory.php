<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => null, // sẽ gán thủ công trong Seeder
            'content' => fake()->sentence(),
            'read_status' => fake()->boolean(30), // 30% đã đọc
            'created_at' => now(),
        ];
    }
}
