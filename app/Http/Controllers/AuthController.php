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


class AuthController extends Controller
{
//    use AuthenticatesRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    public function _construct()
    {
        $this->middleware($this->questMiddleware(), ['except' => 'logout']);
    }

    public function redirectToProvider_facebook() {

        return Socialite::driver('facebook')->redirect();

    }

    public function handleProviderCallback_facebook() {

        $socialUser = Socialite::driver('facebook')->user();

        //отримання інформації від соц мережі
        $data = [
          'facebook_id' => $socialUser->id,
          'name' => $socialUser->name,
          'email' => $socialUser->email,
          'password' => $hashed_random_password = Hash::make(str_random(8))

        ];

        //отримання користувача з таким facebook_id
        $user = User::where('facebook_id', $data['facebook_id'])->first();

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
}