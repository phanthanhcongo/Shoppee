<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::where('role', 'seller')->inRandomOrder()->first()?->id ?? User::factory(),
            'shop_name' => fake()->company(),
            'shop_description' => fake()->paragraph(),
        ];
    }
}
