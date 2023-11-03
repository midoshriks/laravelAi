<?php

namespace App\Http\Controllers\Socil;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function google()
    {
        return Socialite::driver('google')->stateless()->redirect();
        // return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user(); // Error
            // $user = Socialite::driver('google')->user();
            // dd($user,$user->avatar);

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('ai/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'type_id' => '2', //user
                    'password' => bcrypt('12345678'),
                ]);

                Auth::login($newUser);
                return redirect()->intended('ai/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage(), 'Mido developer');
        }
    }






    // public function handleGoogleCallback()
    // {

    //     try {

    //         $user = Socialite::driver('google')->stateless()->user();

    //         $finduser = User::where('google_id', $user->id)->first();

    //         if ($finduser) {

    //             Auth::login($finduser);

    //             return redirect('/home');
    //         } else {

    //             $newUser = User::create([

    //                 'name' => $user->name,

    //                 'email' => $user->email,

    //                 'google_id' => $user->id

    //             ]);

    //             Auth::login($newUser);

    //             return redirect()->back();
    //         }
    //     } catch (Exception $e) {

    //         return redirect('auth/google');
    //     }
    // }

}
