<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Userloginhistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserloginhistoryFactory extends Factory
{
    protected $model = Userloginhistory::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'login_time' => $this->faker->dateTimeBetween('-1 month'),
            'ip_address' => $this->faker->ipv4(),
        ];
    }
}
