<?php
namespace Database\Factories;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class PromotionFactory extends Factory
{
    public function definition(): array
    {
        $start = now()->addDays(rand(1, 10));
        return [
            'seller_id' => Seller::inRandomOrder()->first()?->seller_id ?? Seller::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'discount_percent' => $this->faker->randomFloat(2, 5, 50),
            'start_date' => $start,
            'end_date' => $start->copy()->addDays(7),
        ];
    }
}
