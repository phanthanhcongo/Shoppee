<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    public function run(): void
    {
        $sellers = User::where('role', 'seller')->get();

        foreach ($sellers as $user) {
            Seller::create([
                'user_id' => $user->id,
                'shop_name' => 'Shop of ' . $user->username,
                'shop_description' => 'Mô tả về shop của người bán ' . $user->username,
            ]);
        }
    }
}
