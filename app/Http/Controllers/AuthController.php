<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Admin login - validates credentials and returns session token
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt login
        if (!\Illuminate\Support\Facades\Auth::attempt($validated)) {
            \App\Services\AuditLogger::log('login_failed', "Failed login attempt for username: " . $validated['username']);
            
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = \Illuminate\Support\Facades\Auth::user();
        \App\Services\AuditLogger::log('login_success', "User logged in: " . $user->username);

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'role' => $user->role,
        ]);
    }

    /**
     * Verify if session is still valid
     */
    public function verify(Request $request)
    {
        return response()->json([
            'valid' => \Illuminate\Support\Facades\Auth::check(),
            'user' => \Illuminate\Support\Facades\Auth::user() ? [
                'username' => \Illuminate\Support\Facades\Auth::user()->username,
                'role' => \Illuminate\Support\Facades\Auth::user()->role,
            ] : null,
        ]);
    }

    /**
     * Admin logout
     */
    public function logout(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user) {
            \App\Services\AuditLogger::log('logout', "User logged out: " . $user->username);
        }

        \Illuminate\Support\Facades\Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if (!$request->expectsJson()) {
            return redirect('/admin/login');
        }

        return response()->json([
            'success' => true,
            'message' => 'Logout successful',
        ]);
    }
}
