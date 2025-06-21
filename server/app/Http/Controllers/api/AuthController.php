<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'login' => 'required', // có thể là email hoặc username
            'password' => 'required'
        ]);

        $login = $validated['login'];
        $password = $validated['password'];

        // Tìm user theo email hoặc username
        $user = User::where('email', $login)
                    ->orWhere('username', $login)
                    ->first();

        if (!$user || !Hash::check($password, $user->password)) {
            return response()->json([
                'message' => 'Tài khoản hoặc mật khẩu không đúng'
            ], 401);
        }

        // Tạo token
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'Đăng nhập thành công',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'username' => $user->username,
                'role' => $user->role
            ]
        ]);
    }
}
