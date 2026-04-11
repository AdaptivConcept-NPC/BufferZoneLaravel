@extends('layouts.app')

@section('page_title', 'Command Center - Buffer Zone EMS')

@section('content')
<div class="min-h-screen pb-20" style="background: #0D1B22; color: #F5F5F5;">
    <!-- Top System Bar -->
    <div class="border-b border-[#1E3040] bg-[#111F2C] sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: rgba(211,17,17,0.1); border: 1.5px solid rgba(211,17,17,0.4);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D31111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
                </div>
                <div>
                    <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.25rem; letter-spacing: -0.01em;">Command <span style="color: #D31111;">Center</span></h1>
                    <p style="color: #4A6070; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">System Operational</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                <span class="hidden md:block text-xs font-bold px-3 py-1 rounded-full border border-[#1E3040]" style="color: #8BA4B4;">v5.0.1 Stable</span>
                <form action="/api/auth/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-xs font-bold px-4 py-2 rounded-lg transition-all hover:bg-[#D31111] hover:text-white" style="border: 1px solid #1E3040; color: #8BA4B4;">
                        Terminal Exit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <!-- Primary Action: CMS Launch -->
        <div class="mb-12">
            <div class="relative rounded-3xl overflow-hidden p-8 md:p-12 shadow-2xl" style="background: linear-gradient(135deg, #111F2C 0%, #0D1B22 100%); border: 1px solid rgba(211,17,17,0.2);">
                <div class="absolute top-0 right-0 w-64 h-64 bg-[#D31111] opacity-[0.03] rounded-full -mr-20 -mt-20 blur-3xl"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-xl text-center md:text-left">
                        <span class="text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-lg mb-4 inline-block" style="background: rgba(211,17,17,0.1); color: #D31111;">Professional Portal</span>
                        <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 2.25rem; line-height: 1.1; margin-bottom: 1rem;">Launch Content <br><span style="color: #D31111;">Management System</span></h2>
                        <p style="color: #8BA4B4; font-size: 1.05rem; line-height: 1.6;">Access the advanced React-based dashboard to manage site gallery, verify contact submissions, and update business metadata.</p>
                    </div>
                    <a href="http://localhost:5173/admin" target="_blank" class="group flex items-center gap-3 px-10 py-5 rounded-2xl font-bold text-white transition-all transform hover:scale-[1.05] shadow-xl" style="background: #D31111; font-size: 1.1rem;">
                        <span>Open Portal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- System Stats -->
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Stat 1 -->
                <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111]/30 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-[#0D1B22] text-[#D31111]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3 class="font-bold text-sm text-[#8BA4B4] uppercase tracking-wider">Submissions</h3>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-black italic tracking-tight">24</span>
                        <span class="text-xs font-bold text-green-500 bg-green-500/10 px-2 py-1 rounded">+3 Today</span>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111]/30 transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-[#0D1B22] text-[#D31111]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                        </div>
                        <h3 class="font-bold text-sm text-[#8BA4B4] uppercase tracking-wider">Gallery Load</h3>
                    </div>
                    <div class="flex items-end justify-between">
                        <span class="text-4xl font-black italic tracking-tight">168</span>
                        <span class="text-xs font-bold text-[#8BA4B4]">Active Assets</span>
                    </div>
                </div>

                <!-- System Core Section -->
                <div class="md:col-span-2 p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
                    <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; border-bottom: 2px solid #D31111; display: inline-block; padding-bottom: 0.5rem; margin-bottom: 1.5rem;">System Core Operations</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <a href="/admin/commands" class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                            <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3 group-hover:text-[#D31111] transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
                            </div>
                            <h4 class="font-bold text-sm mb-1">Terminal</h4>
                            <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Run Artisan</p>
                        </a>
                        
                        <div class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] opacity-50 cursor-not-allowed">
                            <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v-6M6 20V10M18 20V4"/></svg>
                            </div>
                            <h4 class="font-bold text-sm mb-1">Analytics</h4>
                            <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Internal Only</p>
                        </div>

                        <div class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] opacity-50 cursor-not-allowed">
                            <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.72V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.17a2 2 0 0 1 1-1.74l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.1a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                            </div>
                            <h4 class="font-bold text-sm mb-1">Config</h4>
                            <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Restricted</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Feed: Inbox -->
            <div class="rounded-2xl border border-[#1E3040] bg-[#111F2C] flex flex-col h-full">
                <div class="p-6 border-b border-[#1E3040] flex items-center justify-between">
                    <h3 class="font-bold text-[#8BA4B4] uppercase tracking-wider text-sm flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#D31111] animate-pulse"></span>
                        Recent Inbox
                    </h3>
                    <a href="#" class="text-[0.65rem] font-black uppercase text-[#D31111] hover:underline">View All</a>
                </div>
                <div class="flex-grow p-4 space-y-4">
                    <div class="flex items-center gap-4 text-center py-20">
                        <p class="w-full text-[#4A6070] text-sm italic">Synchronizing with Node API...</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
