<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = User::where('role', 'customer')->get();

        foreach ($customers as $user) {
            Customer::create([
                'user_id' => $user->id,
                'joined_at' => now()->subDays(rand(10, 365)),
            ]);
        }
    }
}
