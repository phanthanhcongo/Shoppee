<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipperFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::where('role', 'shipper')->inRandomOrder()->first()?->id ?? User::factory(),
            'company_name' => fake()->company(),
        ];
    }
}
