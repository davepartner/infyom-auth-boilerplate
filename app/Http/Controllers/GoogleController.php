<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle callback from Google
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            // Check if user already exists
            $finduser = User::where('google_id', $user->id)->first();
            
            if($finduser) {
                // Login existing user
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                // Create new user
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Something went wrong: '.$e->getMessage());
        }
    }
}