<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FacebookAuthController extends Controller
{
    // Bước 1: React gọi API này để lấy URL Facebook OAuth
    public function getFacebookUrl()
    {
        $url = Socialite::driver('facebook')
                ->stateless()
                ->redirect()
                ->getTargetUrl();

        return response()->json(['url' => $url]);
    }

    // Bước 2: Facebook gọi lại sau khi user login thành công
    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        $user = User::firstOrCreate(
            ['email' => $facebookUser->getEmail()],
            [
                'name' => $facebookUser->getName(),
                'password' => Hash::make(uniqid())  // random password tạm
            ]
        );

        $token = $user->createToken('api-token')->plainTextToken;

        // Redirect về frontend React với token
        return redirect()->away("http://localhost:3000/oauth-callback?token=$token");
    }
}
