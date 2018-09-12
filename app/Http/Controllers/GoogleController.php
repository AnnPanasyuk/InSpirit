<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesRegistersUsers;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    public function redirectToProvider_google() {

        return Socialite::driver('google')->redirect();
    }

    public function handleToProviderCallback_google() {

        $user = Socialite::driver('google')->user();

        //отримання інформації від соц мережі
        $data = [
            'google_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $hashed_random_password = Hash::make(str_random(8))
        ];

        //отримання користувача з таким facebook_id
        $user = User::where('google_id', $data['google_id'])->first();

        //якщо користувача з таким facebook_id немає
        if(is_null($user)) {

            //створити нового користувача
            $user = new User($data);
            $user->save();
        }

        //вхід на сайт
        Auth::login($user, true);

        //перенаправлення
        return redirect('/');

    }
}
