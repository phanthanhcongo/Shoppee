<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryTrackingFactory extends Factory
{
    public function definition(): array
    {
        return [
            // delivery_id được gán từ Seeder — nên không set ở đây
            'status' => $this->faker->randomElement([
                'Picked up', 'In Transit', 'Out for Delivery', 'Delivered'
            ]),
           'timestamp' => $this->faker->dateTimeBetween('-7 days', 'now'),

        ];
    }
}
