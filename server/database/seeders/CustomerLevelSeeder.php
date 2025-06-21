<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerLevel;

class CustomerLevelSeeder extends Seeder
{
    public function run(): void
    {
        CustomerLevel::factory()->count(50)->create();
    }
}
