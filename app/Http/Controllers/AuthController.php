<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ function login(Request $request)
    {
        // dd("Masuk");
        // Validate the request data
        $request->validate([
            'name' => 'required|String',
            'password' => 'required|min:6',
        ]);
        $user = User::where('name', $request->name)->first();

        // Attempt to log the user in
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->regenerate();
            // Redirect to the intended page or dashboard
            return redirect()->intended('dashboard');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }
    //
}
