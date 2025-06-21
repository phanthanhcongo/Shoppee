<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Delivery;
use App\Models\ShipperFeedback;

class ShipperFeedbackSeeder extends Seeder
{
    public function run(): void
    {
        $deliveries = Delivery::all();

        foreach ($deliveries as $delivery) {
            ShipperFeedback::factory()->create([
                'delivery_id' => $delivery->id,
            ]);
        }
    }
}
