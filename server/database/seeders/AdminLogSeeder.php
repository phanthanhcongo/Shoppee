<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AdminLog;

class AdminLogSeeder extends Seeder
{
    public function run(): void
    {
        $admins = User::where('role', 'admin')->get();

        foreach ($admins as $admin) {
            AdminLog::factory()->count(10)->create([
                'admin_id' => $admin->id,
            ]);
        }
    }
}
