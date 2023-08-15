<?php

namespace App\Http\Controllers\Auth;

// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

// class SocialAuthController extends Controller
// {
//     public function redirect($provider)
//     {
//         return Socialite::driver($provider)->redirect();
//     }
//     public function callback($provider)
//     {
//         try {
//             $socialUser = Socialite::driver($provider)->user();

//             $user = User::where('provider_id', $socialUser->id)->first();

//             if ($user) {
//                 $user->update([
//                     'provider_token' => $socialUser->token,
//                 ]);
//             } else {
//                 $user = User::create([
//                     'name' => $socialUser->getName(),
//                     'email' => $socialUser->getEmail(),
//                     'provider' => $provider,
//                     'provider_id' => $socialUser->getId(),
//                     'provider_token' => $socialUser->token,
//                     'email_verified_at' => now()
//                 ]);
//             }
//             Auth::login($user);
//             return redirect()->route('index');
//         } catch (\Exception $e) {
//             return redirect('/');
//         }


//     }
// }
