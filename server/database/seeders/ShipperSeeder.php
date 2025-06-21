<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Shipper;

class ShipperSeeder extends Seeder
{
    public function run(): void
    {
        $shippers = User::where('role', 'shipper')->get();

        foreach ($shippers as $user) {
            Shipper::create([
                'user_id' => $user->id,
                'company_name' => 'Công ty vận chuyển ' . $user->username,
            ]);
        }
    }
}
