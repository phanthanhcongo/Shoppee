<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        Subcategory::factory()->count(20)->create();
    }
}
