<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GoolgeAuthController extends Controller
{
    // 1. React gọi API này để lấy URL Google OAuth
    public function getGoogleUrl()
    {
        $url = Socialite::driver('google')
                ->stateless()
                ->redirect()
                ->getTargetUrl();

        return response()->json(['url' => $url]);
    }

    // 2. Google gọi lại sau khi user login thành công
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'password' => Hash::make(uniqid())
            ]
        );

        // Tạo Sanctum token
        $token = $user->createToken('api-token')->plainTextToken;

        // Redirect về frontend (React)
        return redirect()->away("http://localhost:3000/oauth-callback?token=$token");
    }
}
