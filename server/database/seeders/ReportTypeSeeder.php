<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReportType;

class ReportTypeSeeder extends Seeder
{
    public function run(): void
    {
        ReportType::factory()->count(5)->create();
    }
}
