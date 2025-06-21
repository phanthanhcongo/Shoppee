<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageAttachmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'message_id' => Message::inRandomOrder()->first()?->message_id ?? Message::factory(),
            'file_url' => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
