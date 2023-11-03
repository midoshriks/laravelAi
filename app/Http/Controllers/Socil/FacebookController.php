<?php

namespace App\Http\Controllers\Socil;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookcallback()
    {
        try {
            $user = Socialite::driver('facebook')->user(); // Error
            // $user = Socialite::driver('facebook')->user();
            // dd($user->avatar_original,$user->name || $user->email);

            $finduser = User::where('facebook_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('ai/home');
            } else {
                if (!$user->email) {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->name,
                        'facebook_id' => $user->id,
                        'avatar' => $user->avatar_original,
                        'type_id' => '2', //user
                        'password' => bcrypt('12345678'),
                    ]);
                } else {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'facebook_id' => $user->id,
                        'avatar' => $user->avatar_original,
                        'type_id' => '2', //user
                        'password' => bcrypt('12345678'),
                    ]);
                }

                Auth::login($newUser);
                return redirect()->intended('ai/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage(), 'Mido developer');
        }
    }
}
