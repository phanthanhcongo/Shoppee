<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\RewardTransaction;

class RewardTransactionSeeder extends Seeder
{
    public function run(): void
    {
        $customers = Customer::all();
        foreach ($customers as $customer) {
            RewardTransaction::factory()->count(3)->create([
                'customer_id' => $customer->id,
            ]);
        }
    }
}
