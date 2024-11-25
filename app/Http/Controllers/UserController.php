<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     // Display the registration form
     public function create()
     {
         return view('home/signup');  // Make sure 'signup' view exists
     }
     
     // Store the user data 
     public function store(Request $request)
     {
         // Validate the incoming request data
         $request->validate([
             'name' => 'required|string|max:255',
             'phone' => 'required|string|max:15',
             'email' => 'required|email|unique:users,email',
             'gender' => 'required|string',
             'bday' => 'required|date',
             'address' => 'required|string|max:255',
             'password' => 'required|string|min:8|confirmed',  // Ensure the 'password_confirmation' field exists in the form
         ]);
 
         // Create the user record
         $user = User   ::create([
             'name' => $request->name,  
             'phone' => $request->phone,
             'email' => $request->email,
             'gender' => $request->gender,
             'bday' => $request->bday,
             'address' => $request->address,
             'password' => Hash::make($request->password),  // Hash the password
         ]);
 
         // Redirect to a specific page after successful registration, for example:
         return redirect()->route('dashboard')->with('success', 'Account created successfully!');
     }  
}
