@extends('layouts.app')

@section('page_title', 'Admin Access - Buffer Zone EMS')

@section('content')
<section class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: #0D1B22;">
    <div class="max-w-md w-full">
        <!-- Brand / Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl mb-4" style="background: rgba(211,17,17,0.1); border: 2px solid rgba(211,17,17,0.3);">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#D31111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
            </div>
            <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 2.2rem; color: #FFFFFF; letter-spacing: -0.02em;">Command <span style="color: #D31111;">Center</span></h1>
            <p style="color: #8BA4B4; font-size: 0.95rem; margin-top: 0.5rem; font-weight: 500;">Authorized Personnel Only</p>
        </div>

        <!-- Auth Card -->
        <div class="rounded-2xl shadow-2xl overflow-hidden" style="background: #111F2C; border: 1px solid rgba(139, 164, 180, 0.15);">
            <div class="p-8">
                <form id="loginForm" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="username" class="block text-xs font-bold uppercase tracking-widest mb-2" style="color: #8BA4B4;">Username</label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            required 
                            autofocus
                            placeholder="admin"
                            class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-[#D31111] transition-all"
                            style="font-family: 'Inter', sans-serif;"
                        >
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-bold uppercase tracking-widest mb-2" style="color: #8BA4B4;">Password</label>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required 
                                placeholder="••••••••"
                                class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl px-4 py-3.5 text-white focus:outline-none focus:border-[#D31111] transition-all"
                            >
                        </div>
                    </div>

                    <div id="errorMessage" class="hidden animate-pulse">
                        <div class="p-4 rounded-xl border flex items-center gap-3" style="background: rgba(211,17,17,0.1); border-color: rgba(211,17,17,0.3); color: #FF6B6B;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                            <p id="errorText" class="text-sm font-semibold"></p>
                        </div>
                    </div>

                    <button 
                        type="submit" 
                        id="submitBtn"
                        class="w-full py-4 rounded-xl font-bold text-white transition-all transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-2"
                        style="background: #D31111; box-shadow: 0 4px 15px rgba(211, 17, 17, 0.4);"
                    >
                        <span>Access Dashboard</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- System Footer -->
        <p class="text-center mt-8 text-xs font-medium" style="color: #4A6070;">
            SECURE ACCESS PROTOCOL 5.0.1 <br>
            &copy; {{ date('Y') }} Buffer Zone EMS
        </p>
    </div>
</section>

<script>
document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('submitBtn');
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorDiv = document.getElementById('errorMessage');
    const errorText = document.getElementById('errorText');
    
    // UI Loading state
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerHTML = 'Validating...';
    errorDiv.classList.add('hidden');
    
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
            submitBtn.innerHTML = 'Redirecting...';
            window.location.href = '/admin/dashboard';
        } else {
            errorText.textContent = data.message || 'Verification failed';
            errorDiv.classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            submitBtn.innerHTML = '<span>Access Dashboard</span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';
        }
    } catch (error) {
        errorText.textContent = 'Server connection failed';
        errorDiv.classList.remove('hidden');
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = 'Access Dashboard';
    }
});
</script>
@endsection
