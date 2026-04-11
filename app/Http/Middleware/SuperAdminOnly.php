<?php

namespace App\Http\Middleware;

use App\Services\AuditLogger;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminOnly
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if (!$user || $user->role !== \App\Models\User::ROLE_SUPER_ADMIN) {
            
            // Log the unauthorized attempt
            AuditLogger::log('unauthorized_access', "Attempted destructive action on: " . $request->path());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Super-Admin privileges required for this action.',
                ], 403);
            }

            return redirect('/admin/dashboard')->with('error', 'Unauthorized action.');
        }

        return $next($request);
    }
}
