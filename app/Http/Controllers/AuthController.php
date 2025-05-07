<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\UserSpecialty;
use App\Services\GoogleSheet\StudentsSheet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->scopes([
            'openid',
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
            'https://www.googleapis.com/auth/user.birthday.read',
            'https://www.googleapis.com/auth/user.phonenumbers.read',
        ])->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $socialiteUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        // Перевірка, чи користувач має email з домену dspu.edu.ua
        if (!str_ends_with($socialiteUser->getEmail(), '@dspu.edu.ua')) {
            return redirect('/login')->withErrors([
                'email' => 'Увійти можуть лише користувачі з корпоративної електронної адреси dspu.edu.ua.'
            ]);
        }

        $user = User::where([
            'provider' => 'google',
            'provider_id' => $socialiteUser->getId()
        ])->first();

        if (!$user) {
            $validator = Validator::make(
                ['email' => $socialiteUser->getEmail()],
                ['email' => ['unique:users,email']],
                ['email.unique' => 'Couldn\'t log in. Maybe you used a different login method?']
            );

            if ($validator->fails()) {
                return redirect('/login');
            }

            $user = new User();
            $user->name = $socialiteUser->getName();
            $user->email = $socialiteUser->getEmail();
            $user->provider = 'google';
            $user->provider_id = $socialiteUser->getId();
            $user->permissions = [
                "platform.index" => true,
                "platform.systems.roles" => true,
                "platform.systems.users" => true,
                "platform.systems.attachment" => true,
            ];
            $user->save();

        }
         if( $user->id){
             $sheets = new StudentsSheet();

             $students = $sheets->getStudentByEmail($socialiteUser->getEmail());

             foreach ( $students as $student){
                 $existingUser = UserSpecialty::where('user_id', $user->id)->where('group', $student['group'])->first();
                 if(!$existingUser){
                     $student['user_id'] = $user->id;
                     $student['birth_date'] = Carbon::createFromFormat('d.m.Y', $student['birth_date'])->toDateString();
                     UserSpecialty::create($student);
                 }

             }
         }


        Auth::login($user);
        return redirect('/');
    }
}
