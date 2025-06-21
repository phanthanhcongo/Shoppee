<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        // Lấy toàn bộ user
        $users = User::all();

        foreach ($users as $user) {
            // Tạo 3 notification cho mỗi user
            Notification::factory()->count(3)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
