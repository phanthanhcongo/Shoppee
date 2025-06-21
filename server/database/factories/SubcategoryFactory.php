<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()?->category_id ?? Category::factory(),
            'subcategory_name' => ucfirst(fake()->unique()->words(2, true)),
        ];
    }
}
