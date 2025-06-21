<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\FlashSale;

class FlashSaleSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::inRandomOrder()->limit(20)->get();

        foreach ($products as $product) {
            FlashSale::factory()->create([
                'product_id' => $product->id,
            ]);
        }
    }
}
