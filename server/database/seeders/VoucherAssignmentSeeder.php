<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VoucherAssignment;

class VoucherAssignmentSeeder extends Seeder
{
    public function run(): void
    {
        VoucherAssignment::factory()->count(100)->create();
    }
}
