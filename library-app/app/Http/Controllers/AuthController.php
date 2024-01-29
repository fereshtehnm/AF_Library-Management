<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showStaffRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->assignRole('user');
        // Login the user

        return redirect()->route('login');
    }

    public function showStaffLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in for users
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended('/');
        }

        // Attempt to log in for staff
        if (Auth::guard('staff')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended('/dashboard/staff');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
