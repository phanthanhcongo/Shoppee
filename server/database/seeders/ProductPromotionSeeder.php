<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductPromotion;

class ProductPromotionSeeder extends Seeder
{
    public function run(): void
    {
        ProductPromotion::factory()->count(30)->create();
    }
}
