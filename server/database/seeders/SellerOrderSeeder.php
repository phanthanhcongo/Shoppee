<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\SellerOrder;

class SellerOrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();

        foreach ($orders as $order) {
            SellerOrder::factory()->create([
                'order_id' => $order->id,
            ]);
        }
    }
}

