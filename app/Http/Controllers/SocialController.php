<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function googleRedirect() 
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle() 
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);

                return redirect('/dashboard');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('user'),
                ]);

                Auth::login($createUser);

                return redirect('/dashboard');
            }

            } catch (Exception $exception) {
                dd($exception->getMessage());
            }
        }
    }