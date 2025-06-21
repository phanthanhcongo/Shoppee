<?php
namespace Database\Factories;

use App\Models\Userdetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserdetailFactory extends Factory
{
    protected $model = Userdetail::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // hoặc truyền ID nếu có sẵn users
            'full_name' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
        ];
    }
}

