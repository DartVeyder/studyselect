<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    try {
        $socialiteUser = Socialite::driver('google')->user();
    }catch (\Exception $e){
        return redirect('/login');
    }

    // Перевірка, чи користувач має email з домену dspu.edu.ua
    if (!str_ends_with($socialiteUser->getEmail(), '@dspu.edu.ua')) {
        return redirect('/login')->withErrors(['email' => 'Увійти можуть лише користувачі з корпоративної електроннї адреси dspu.edu.ua.']);
    }

    $user = User::where([
        'provider' => 'google',
        'provider_id' => $socialiteUser->getId()
    ])->first();

    If(!$user){
        $validator = Validator::make(
            ['email' => $socialiteUser->getEmail()],
            ['email' => ['unique:users,email']],
            ['email.unique' => 'Couldn\'t log in. Maybe you used a different login methods?']
        );

        if($validator->fails()){
            return redirect('/login');
        }

        $user = new User();

        $user->name = $socialiteUser->getName();
        $user->email = $socialiteUser->getEmail();
        $user->provider = 'google';
        $user->provider_id = $socialiteUser->getId();
        $user->permissions =  [
            "platform.index" => true,
            "platform.systems.roles" => true,
            "platform.systems.users" => true,
            "platform.systems.attachment" => true,
        ];

// Зберігаємо користувача в базу
        $user->save();
    }

     Auth::login($user);

    return redirect('/');
});
