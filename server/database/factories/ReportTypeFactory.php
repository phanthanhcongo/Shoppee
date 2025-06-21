<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type_name' => $this->faker->randomElement([
                'Spam',
                'Nội dung phản cảm',
                'Hành vi gian lận',
                'Sản phẩm không đúng mô tả',
                'Ngôn từ kích động'
            ]),
        ];
    }
}
