<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatSession;

class ChatSessionSeeder extends Seeder
{
    public function run(): void
    {
        ChatSession::factory()->count(50)->create();
    }
}
