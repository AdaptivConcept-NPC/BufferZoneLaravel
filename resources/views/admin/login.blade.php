@extends('layouts.app')

@section('page_title', 'Admin Login - Buffer Zone EMS')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold mb-6 text-center" style="color: #213340;">Admin Login</h2>

        <form id="loginForm" class="space-y-6">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            <div id="errorMessage" class="hidden p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <p id="errorText"></p>
            </div>

            <button 
                type="submit" 
                class="btn-navy text-white w-full px-4 py-2 rounded font-medium"
            >
                Sign In
            </button>
        </form>
    </div>
</section>

<script>
document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorDiv = document.getElementById('errorMessage');
    const errorText = document.getElementById('errorText');
    
    try {
        const response = await fetch('/api/auth/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            },
            body: JSON.stringify({ username, password })
        });
        
        const data = await response.json();
        
        if (data.success) {
            window.location.href = '/admin/dashboard';
        } else {
            errorText.textContent = data.message || 'Invalid credentials';
            errorDiv.classList.remove('hidden');
        }
    } catch (error) {
        errorText.textContent = 'An error occurred. Please try again.';
        errorDiv.classList.remove('hidden');
    }
});
</script>
@endsection
