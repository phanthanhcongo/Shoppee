<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::where('role', 'customer')->inRandomOrder()->first()?->id ?? User::factory(),
            'joined_at' => now()->subDays(rand(1, 365)),
        ];
    }
}
