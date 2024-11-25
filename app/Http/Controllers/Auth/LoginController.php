<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
      // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // This will return the login page view
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            // If authentication is successful, redirect to the dashboard or home page
            return redirect()->intended('/dashboard'); // Or wherever you'd like to redirect
        }

        // If authentication fails, redirect back with an error
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
