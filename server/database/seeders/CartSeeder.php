<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        $customers = Customer::all();

        foreach ($customers as $customer) {
            Cart::factory()->create([
                'customer_id' => $customer->id,
            ]);
        }
    }
}
