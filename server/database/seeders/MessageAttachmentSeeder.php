<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\MessageAttachment;

class MessageAttachmentSeeder extends Seeder
{
    public function run(): void
    {
        $messages = Message::all();

        foreach ($messages as $message) {
            if (rand(0, 1)) {
                MessageAttachment::factory()->create([
                    'message_id' => $message->id,
                ]);
            }
        }
    }
}
