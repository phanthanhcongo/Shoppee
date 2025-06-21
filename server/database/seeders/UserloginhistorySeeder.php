<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userloginhistory;
use App\Models\User;
use Carbon\Carbon;

class UserloginhistorySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            for ($i = 0; $i < 2; $i++) {
                Userloginhistory::create([
                    'user_id' => $user->id,
                    'login_time' => Carbon::now()->subDays(rand(1, 30))->subHours(rand(0, 23))->subMinutes(rand(0, 59)),
                    'ip_address' => fake()->ipv4(),
                ]);
            }
        }
    }
}
