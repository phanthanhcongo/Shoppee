<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistSeeder extends Seeder
{
    public function run(): void
    {
        $customers = Customer::all();
        $productIds = Product::pluck('id')->toArray();

        foreach ($customers as $customer) {
            // Lấy ngẫu nhiên 1–2 sản phẩm không trùng nhau
            $selectedProductIds = collect($productIds)->shuffle()->take(rand(1, 2));

            foreach ($selectedProductIds as $productId) {
                Wishlist::factory()->create([
                    'customer_id' => $customer->id,
                    'product_id' => $productId,
                ]);
            }
        }
    }
}
