<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Delivery;

class DeliverySeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();

        foreach ($orders as $order) {
            Delivery::factory()->create([
                'order_id' => $order->id,
            ]);
        }
    }
}

