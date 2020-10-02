<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Socialite;
use Str;
use App\Models\User;

class FacebookController extends Controller
{
    public function facebook()
    {
        // Send the user's request to Facebook
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect()
    {
        // Get oauth request back from Facebook to authentificate the user
        $user = Socialite::driver('facebook')->stateless()->user();

        // If this user doesn't exists, add him
        // If he does, get the model
        // either way, authentificate the user into the application and redirect afterwards

        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name' => $user->name,
            'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);

        return redirect('/dashboard');
    }
}
