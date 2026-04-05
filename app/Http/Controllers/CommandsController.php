<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    /**
     * Show commands dashboard
     */
    public function dashboard()
    {
        return view('admin.commands');
    }

    /**
     * Execute artisan command
     */
    public function execute(Request $request)
    {
        $validated = $request->validate([
            'command' => 'required|string|in:config:cache,cache:clear,migrate,storage:link,view:cache,route:cache',
        ]);

        try {
            $command = $validated['command'];

            if ($command === 'migrate') {
                Artisan::call('migrate', ['--force' => true]);
            } else {
                Artisan::call($command);
            }

            $output = Artisan::output();

            return response()->json([
                'success' => true,
                'command' => $command,
                'output' => $output ?: 'Command executed successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'command' => $validated['command'] ?? 'unknown',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get system info
     */
    public function info()
    {
        return response()->json([
            'success' => true,
            'data' => [
                'environment' => env('APP_ENV'),
                'debug' => env('APP_DEBUG', false),
                'laravel_version' => app()->version(),
                'php_version' => phpversion(),
                'database' => env('DB_DATABASE'),
                'app_url' => env('APP_URL'),
            ],
        ]);
    }
}