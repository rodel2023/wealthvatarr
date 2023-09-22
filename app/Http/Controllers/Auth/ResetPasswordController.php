<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
// use App\Models\UserArchetype;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/notes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function redirectTo()
        // $user = auth()->user();
    {
        if (auth()->user()->role == 1) {
            return route('admin.dashboard');
        } elseif (auth()->user()->role == 2) {
            return route('user.dashboard');
        }
        // Add a default redirect path in case none of the conditions match.
        return RouteServiceProvider::HOME;
    }
}
