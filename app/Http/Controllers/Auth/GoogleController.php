<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $email = $googleUser->getEmail();

        if (! $email) {
            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Akun Google tidak menyediakan email.',
                ]);
        }

        // Cari akun yang sebelumnya terhubung dengan Google.
        $user = User::where('google_id', $googleUser->getId())
            ->first();

        if (! $user) {
            // Hubungkan akun lokal yang emailnya sudah terverifikasi Google.
            $existingUser = User::where('email', $email)->first();

            if ($existingUser) {
                if (! ($googleUser->user['verified_email'] ?? false)) {
                    return redirect()->route('login')
                        ->withErrors([
                            'email' => 'Email Google belum terverifikasi.',
                        ]);
                }

                // Jangan menimpa akun Google yang sudah terhubung.
                if (
                    $existingUser->google_id !== null &&
                    $existingUser->google_id !== $googleUser->getId()
                ) {
                    return redirect()->route('login')
                        ->withErrors([
                            'email' => 'Email sudah terhubung ke akun Google lain.',
                        ]);
                }

                $existingUser->google_id = $googleUser->getId();
                $existingUser->save();

                $user = $existingUser;
            } else {
                $user = User::create([
                    'name' => $googleUser->getName()
                        ?: $googleUser->getNickname()
                        ?: 'Pengguna Google',
                    'email' => $email,
                    'google_id' => $googleUser->getId(),
                    'password' => Hash::make(Str::random(40)),
                    'email_verified_at' => ($googleUser->user['verified_email'] ?? false)
                        ? now()
                        : null,
                ]);
            }
        }

        Auth::login($user);

        request()->session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }
}
