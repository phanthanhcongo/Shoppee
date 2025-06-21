<?php
namespace Database\Factories;

use App\Models\ChatSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    public function definition(): array
    {
        $session = ChatSession::inRandomOrder()->first();

        return [
            'session_id' => $session?->session_id ?? ChatSession::factory(),
            'sender_id' => $session ? $this->faker->randomElement([$session->customer_id, $session->seller_id]) : 1,
            'content' => $this->faker->sentence(),
            'sent_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
