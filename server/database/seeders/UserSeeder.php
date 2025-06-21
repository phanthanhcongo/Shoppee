<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1 Admin - kiểm tra trước khi tạo
        if (!User::where('username', 'admin')->exists()) {
            User::create([
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'google_id' => null,
                'facebook_id' => null,
                'avatar_url' => 'https://i.pravatar.cc/200?u=admin', // random avatar
                'remember_token' => Str::random(10),
            ]);
        }

        // Tạo các nhóm role
        $this->createUsersByRole('shipper', 10);
        $this->createUsersByRole('seller', 10);
        $this->createUsersByRole('customer', 10);
    }

    private function createUsersByRole(string $role, int $count): void
    {
        for ($i = 1; $i <= $count; $i++) {
            $username = "{$role}_{$i}";
            $email = "{$role}{$i}@example.com";

            if (User::where('username', $username)->orWhere('email', $email)->exists()) {
                continue;
            }

            User::create([
                'name' => ucfirst($role) . " $i",
                'username' => $username,
                'email' => $email,
                'password' => Hash::make('Thanhcong123@'),
                'role' => $role,
                'email_verified_at' => now(),
                'google_id' => null,
                'facebook_id' => null,
                'avatar_url' => 'https://i.pravatar.cc/200?u=' . $username, // random avatar theo user
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
