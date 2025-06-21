<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();
        $productIds = Product::pluck('id')->toArray(); // lấy tất cả product_id

        foreach ($orders as $order) {
            $selectedProductIds = collect($productIds)->shuffle()->take(rand(1, 3)); // chọn ngẫu nhiên 1-3 sản phẩm

            foreach ($selectedProductIds as $productId) {
                OrderItem::factory()->create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                ]);
            }
        }
    }
}
