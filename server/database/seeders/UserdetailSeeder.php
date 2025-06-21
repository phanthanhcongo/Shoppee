<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Database\Seeder;

class UserdetailSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Userdetail::create([
                'user_id' => $user->id,
                'full_name' => fake()->name(),
                'phone_number' => fake()->phoneNumber(),
                'gender' => fake()->randomElement(['male', 'female', 'other']),
                'birth_date' => fake()->date('Y-m-d', '-18 years'),
                'address' => fake()->address(),
            ]);
        }
    }
}
