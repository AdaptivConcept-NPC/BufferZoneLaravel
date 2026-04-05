@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold" style="color: #213340;">Admin Panel</h1>
                    <p class="text-gray-600">Commands & System Info</p>
                </div>
                <a href="/admin/dashboard" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- System Info -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-xl font-bold mb-4" style="color: #213340;">System Information</h2>
            <div id="system-info" class="grid grid-cols-2 gap-4 text-sm">
                <div class="loading">Loading...</div>
            </div>
        </div>

        <!-- Commands Section -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-xl font-bold mb-6" style="color: #213340;">Available Commands</h2>
            
            <div class="space-y-4">
                <!-- Config Cache -->
                <div class="border-l-4 border-blue-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Config Cache</h3>
                            <p class="text-sm text-gray-600">Cache all configuration files for faster loading</p>
                        </div>
                        <button onclick="executeCommand('config:cache')" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Execute
                        </button>
                    </div>
                </div>

                <!-- Cache Clear -->
                <div class="border-l-4 border-yellow-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Clear Cache</h3>
                            <p class="text-sm text-gray-600">Clear all cached data</p>
                        </div>
                        <button onclick="executeCommand('cache:clear')" class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">
                            Execute
                        </button>
                    </div>
                </div>

                <!-- Migrate -->
                <div class="border-l-4 border-green-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Run Migrations</h3>
                            <p class="text-sm text-gray-600">Execute database migrations (--force)</p>
                        </div>
                        <button onclick="executeCommand('migrate')" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            Execute
                        </button>
                    </div>
                </div>

                <!-- View Cache -->
                <div class="border-l-4 border-purple-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">View Cache</h3>
                            <p class="text-sm text-gray-600">Cache all Blade templates</p>
                        </div>
                        <button onclick="executeCommand('view:cache')" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
                            Execute
                        </button>
                    </div>
                </div>

                <!-- Route Cache -->
                <div class="border-l-4 border-indigo-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Route Cache</h3>
                            <p class="text-sm text-gray-600">Cache all application routes</p>
                        </div>
                        <button onclick="executeCommand('route:cache')" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                            Execute
                        </button>
                    </div>
                </div>

                <!-- Storage Link -->
                <div class="border-l-4 border-red-500 pl-4 py-2">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold">Create Storage Link</h3>
                            <p class="text-sm text-gray-600">Create symbolic link for storage directory (if needed)</p>
                        </div>
                        <button onclick="executeCommand('storage:link')" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                            Execute
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Output -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold mb-4" style="color: #213340;">Output</h2>
            <div id="output" class="bg-gray-900 text-green-400 p-4 rounded font-mono text-sm h-64 overflow-y-auto" style="white-space: pre-wrap; word-wrap: break-word;">
                Ready to execute commands...
            </div>
        </div>
    </div>
</div>

<script>
    // Load system info on page load
    document.addEventListener('DOMContentLoaded', () => {
        loadSystemInfo();
    });

    function loadSystemInfo() {
        fetch('/api/admin/commands/info')
            .then(r => r.json())
            .then(data => {
                if (data.success && data.data) {
                    const info = data.data;
                    document.getElementById('system-info').innerHTML = `
                        <div><strong>Environment:</strong> <span class="font-mono">${info.environment}</span></div>
                        <div><strong>Debug Mode:</strong> <span class="font-mono">${info.debug ? 'ON' : 'OFF'}</span></div>
                        <div><strong>PHP Version:</strong> <span class="font-mono">${info.php_version}</span></div>
                        <div><strong>Laravel Version:</strong> <span class="font-mono">${info.laravel_version}</span></div>
                        <div><strong>Database:</strong> <span class="font-mono">${info.database}</span></div>
                        <div><strong>App URL:</strong> <span class="font-mono text-xs">${info.app_url}</span></div>
                    `;
                }
            })
            .catch(e => console.error('Error loading system info:', e));
    }

    function executeCommand(command) {
        const outputDiv = document.getElementById('output');
        outputDiv.textContent = `Executing: ${command}...\n`;

        fetch('/api/admin/commands/execute', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({ command })
        })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                outputDiv.textContent = `✓ Command: ${data.command}\n\n${data.output}`;
                outputDiv.style.color = '#22c55e'; // green
            } else {
                outputDiv.textContent = `✗ Error: ${data.error}`;
                outputDiv.style.color = '#ef4444'; // red
            }
        })
        .catch(e => {
            outputDiv.textContent = `✗ Error: ${e.message}`;
            outputDiv.style.color = '#ef4444';
        });
    }
</script>
@endsection