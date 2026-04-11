<?php

namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class AuditLogger
{
    /**
     * Log an administrative action
     */
    public static function log(string $action, string $details = null): void
    {
        $userId = auth()->id();
        $ip = Request::ip();
        $timestamp = now()->toDateTimeString();
        $username = auth()->user()->username ?? 'system';

        // 1. Database Persistence
        try {
            AuditLog::create([
                'user_id' => $userId,
                'action' => $action,
                'details' => $details,
                'ip_address' => $ip,
            ]);
        } catch (\Exception $e) {
            Log::error("Failed to write to audit_logs table: " . $e->getMessage());
        }

        // 2. File Persistence (Extra Redundancy)
        $logMessage = "[{$timestamp}] USER: {$username} | IP: {$ip} | ACTION: {$action}";
        if ($details) {
            $logMessage .= " | DETAILS: {$details}";
        }

        Log::channel('audit')->info($logMessage);
    }
}
