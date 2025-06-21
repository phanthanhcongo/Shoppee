<?php

namespace Database\Factories;

use App\Models\ReportType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->user_id ?? 1,
            'report_type_id' => ReportType::inRandomOrder()->first()?->report_type_id ?? 1,
            'description' => $this->faker->realText(100),
            'created_at' => $this->faker->dateTimeBetween('-2 months', 'now'),
        ];
    }
}
