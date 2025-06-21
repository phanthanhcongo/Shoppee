<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminLogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'admin_id' => User::where('role', 'admin')->inRandomOrder()->first()?->id ?? User::factory(),
            'action' => fake()->sentence(),
            'created_at' => now()->subDays(rand(1, 90)),
        ];
    }
}
