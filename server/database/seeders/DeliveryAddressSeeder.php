<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\DeliveryAddress;

class DeliveryAddressSeeder extends Seeder
{
    public function run(): void
    {
        $customers = Customer::all();

        foreach ($customers as $customer) {
            DeliveryAddress::factory()->count(rand(1, 2))->create([
                'customer_id' => $customer->id,
            ]);
        }
    }
}
