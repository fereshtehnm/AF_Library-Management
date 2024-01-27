<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
