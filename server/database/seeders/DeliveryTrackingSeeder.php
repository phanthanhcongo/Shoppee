<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Delivery;
use App\Models\DeliveryTracking;

class DeliveryTrackingSeeder extends Seeder
{
    public function run(): void
    {
        $deliveries = Delivery::all();

        foreach ($deliveries as $delivery) {
    DeliveryTracking::factory()
        ->count(rand(1, 3))
        ->create([
            'delivery_id' => $delivery->id, // nếu bạn dùng $table->id() trong migration
        ]);
}

    }
}
