<?php

namespace App\Http\Controllers\API\V1\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponseTraits;

class LoginController extends Controller
{
    use ApiResponseTraits;

    public function login(LoginRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return $this->failedCredentials(422, ['Sorry! The credentials do not match.'], null);
        }

        $tokens = auth()->user()->tokens;  
        foreach ($tokens as $token) {
            $token->revoke();
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return $this->respondToken(200, ['Congratulations! Welcome to Library.'], $accessToken);
    }
}
