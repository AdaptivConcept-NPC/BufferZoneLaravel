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

        $adminUsername = env('ADMIN_USERNAME');
        $adminPasswordHash = env('ADMIN_PASSWORD_HASH');

        // Validate credentials
        if ($validated['username'] !== $adminUsername) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        // Check password
        if (!Hash::check($validated['password'], $adminPasswordHash)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        // Create session
        $request->session()->put('admin_authenticated', true);
        $request->session()->put('admin_username', $adminUsername);

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
        ]);
    }

    /**
     * Verify if session is still valid
     */
    public function verify(Request $request)
    {
        $isAuthenticated = $request->session()->get('admin_authenticated', false);

        return response()->json([
            'valid' => $isAuthenticated,
        ]);
    }

    /**
     * Admin logout
     */
    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        $request->session()->forget('admin_username');

        return response()->json([
            'success' => true,
            'message' => 'Logout successful',
        ]);
    }
}
