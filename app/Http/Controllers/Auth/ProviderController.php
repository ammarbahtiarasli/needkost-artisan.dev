<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $SocialUser = Socialite::driver($provider)->user();
            $user = User::where('email', $SocialUser->email)->first();
            if ($user) {
                Auth::login($user);
                return to_route('dashboard')->with('success', 'Login berhasil.');
            }
            $user = User::updateOrCreate([
                'provider_id' => $SocialUser->id,
                'provider' => $provider,
            ], [
                'name' => $SocialUser->name,
                'username' => User::generateUsername($SocialUser->nickname),
                'email' => $SocialUser->email,
                'password' => 12345678,
                'provider' => $provider,
                'provider_id' => $SocialUser->id,
                'provider_token' => $SocialUser->token,
                'email_verified_at' => now()
            ]);
            Auth::login($user);
            return to_route('dashboard')->with('success', 'Login berhasil, silahkan lengkapi data diri anda.');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login gagal, silahkan coba lagi.');
        }
    }
}
