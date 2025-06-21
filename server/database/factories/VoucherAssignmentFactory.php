<?php
namespace Database\Factories;

use App\Models\Voucher;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherAssignmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'voucher_id' => Voucher::inRandomOrder()->first()?->voucher_id ?? 1,
            'customer_id' => Customer::inRandomOrder()->first()?->customer_id ?? 1,
        ];
    }
}
