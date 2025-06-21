<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()?->product_id ?? 1,
            'image_url' => $this->faker->imageUrl(640, 640, 'products', true),
            'is_thumbnail' => $this->faker->boolean(20),
        ];
    }
}
