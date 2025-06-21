<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatSession;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $sessions = ChatSession::all();

        foreach ($sessions as $session) {
            Message::factory()->count(rand(2, 5))->create([
                'session_id' => $session->id,
                'sender_id' => fake()->randomElement([$session->id, $session->id]),
            ]);
        }
    }
}
