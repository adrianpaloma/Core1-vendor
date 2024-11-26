<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('home.logins');
        // Adjust to match the correct view location
    }

    // Process login
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Set session or token if successful (simple session-based login)
            session(['user_id' => $user->id]);  
            return redirect()->route('/'); // Redirect to a dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials.']); // If login fails
    }

    // Handle logout
    public function logout()
    {
        session()->forget('user_id'); // Clear session data
        return redirect()->route('login'); // Redirect to login page
    }
}


// view('home.admin.dashboard');