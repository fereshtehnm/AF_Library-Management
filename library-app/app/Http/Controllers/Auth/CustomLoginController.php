<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Attempt to log in the user using 'staff' and 'manager' guards
        if (Auth::guard('staff')->attempt($this->credentials($request), $request->filled('remember'))) {
            return $this->sendLoginResponse($request);
        } elseif (Auth::guard('manager')->attempt($this->credentials($request), $request->filled('remember'))) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    // The rest of the methods from AuthenticatesUsers trait...

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function attemptLogin(Request $request)
    {
        // This method is part of the AuthenticatesUsers trait.
        // You don't need to override it unless you have specific customizations.
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
}
