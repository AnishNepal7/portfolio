<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function loginForm()
    {
        // If already logged in, redirect to messages
        if (Auth::check()) {
            return redirect()->route('messages');
        }
        
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            return redirect()->route('messages')->with('success', 'Successfully logged in!');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login')->with('success', 'Successfully logged out!');
    }
}
