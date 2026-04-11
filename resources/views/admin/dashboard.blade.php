@extends('layouts.admin')

@section('heading', 'Command Center')

@section('content')
<div class="space-y-8">
    <!-- Top Stats Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Site Traffic Mockup -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">Live Traffic</span>
                <span class="flex h-2 w-2 rounded-full bg-[#10B981] animate-pulse"></span>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">1,284</h3>
                <span class="text-[0.65rem] text-[#10B981] font-bold mb-1">+12%</span>
            </div>
            <p class="text-[0.6rem] text-[#4A6070] mt-1 uppercase font-bold tracking-tighter">Unique Visitors / 24h</p>
        </div>

        <!-- Enquiries -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">Active Enquiries</span>
                <div class="p-1 px-2 rounded bg-[#D3111120] text-[#D31111] text-[0.6rem] font-black">NEW</div>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">{{ $unread ?? 4 }}</h3>
                <span class="text-[0.65rem] text-[#8BA4B4] font-bold mb-1">Total: 42</span>
            </div>
            <p class="text-[0.6rem] text-[#4A6070] mt-1 uppercase font-bold tracking-tighter">Unread Messages in Inbox</p>
        </div>

        <!-- System Health -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">System Health</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">99.9%</h3>
                <span class="text-[0.65rem] text-[#10B981] font-bold mb-1">OPTIMIZED</span>
            </div>
            <p class="text-[0.6rem] text-[#4A6070] mt-1 uppercase font-bold tracking-tighter">Server Latency: < 45ms</p>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Operations Column -->
        <div class="md:col-span-2 p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
            <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; border-bottom: 2px solid #D31111; display: inline-block; padding-bottom: 0.5rem; margin-bottom: 1.5rem;">System Core Operations</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @if(auth()->user()->isSuperAdmin())
                <a href="/admin/commands" class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                    <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3 group-hover:text-[#D31111] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
                    </div>
                    <h4 class="font-bold text-sm mb-1 text-white">Terminal</h4>
                    <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Run Artisan</p>
                </a>
                @else
                <div class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] opacity-50 cursor-not-allowed">
                    <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <h4 class="font-bold text-sm mb-1 text-white">Terminal</h4>
                    <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">SuperAdmin Restricted</p>
                </div>
                @endif
                
                <a href="http://localhost:5172/admin" target="_blank" class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                    <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3 group-hover:text-[#D31111] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4Z"/></svg>
                    </div>
                    <h4 class="font-bold text-sm mb-1 text-white">Open Portal</h4>
                    <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Professional CMS</p>
                </a>

                <div class="p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] opacity-50 cursor-not-allowed">
                    <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                    </div>
                    <h4 class="font-bold text-sm mb-1 text-white">Backup</h4>
                    <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-wider">Storage Sync</p>
                </div>
            </div>

            <!-- Recent Alerts -->
            <div class="mt-12">
                <h4 class="text-xs font-black text-[#4A6070] uppercase tracking-widest mb-4">Security Audits</h4>
                <div class="space-y-3">
                    <div class="p-4 rounded-xl border border-[#1E3040] bg-[#0D1B22] flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 rounded-full bg-[#D31111]"></div>
                            <span class="text-xs text-white">Super-Admin identity registered: <strong>admin-tmp</strong></span>
                        </div>
                        <span class="text-[0.6rem] text-[#4A6070] font-bold uppercase">Just Now</span>
                    </div>
                    <div class="p-4 rounded-xl border border-[#1E3040] bg-[#0D1B22] flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 rounded-full bg-[#10B981]"></div>
                            <span class="text-xs text-white">Database schema enhancement completed successfully.</span>
                        </div>
                        <span class="text-[0.6rem] text-[#4A6070] font-bold uppercase">5 mins ago</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Stats Column -->
        <div class="space-y-8">
            <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
                <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1rem; margin-bottom: 1.5rem;">Quick Settings</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 rounded-lg bg-[#0D1B22] border border-[#1E3040]">
                        <span class="text-xs font-bold text-[#8BA4B4]">Maintenance Mode</span>
                        <div class="w-8 h-4 bg-[#1E3040] rounded-full relative">
                            <div class="absolute left-1 top-1 w-2 h-2 bg-gray-500 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 rounded-lg bg-[#0D1B22] border border-[#1E3040]">
                        <span class="text-xs font-bold text-[#8BA4B4]">Debug Logging</span>
                        <div class="w-8 h-4 bg-[#D3111120] rounded-full relative">
                            <div class="absolute right-1 top-1 w-2 h-2 bg-[#D31111] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 rounded-2xl bg-gradient-to-br from-[#D31111] to-[#8E0B0B] text-white">
                <h4 class="font-black text-xs uppercase tracking-widest mb-2 opacity-80">Security Status</h4>
                <p class="text-sm font-bold mb-4">RBAC is ACTIVE. Your session is protected by a hardware-accelerated Bcrypt algorithm.</p>
                <div class="text-[0.6rem] font-black uppercase bg-black bg-opacity-20 inline-block px-2 py-1 rounded">LEVEL: SUPER-ADMIN</div>
            </div>
        </div>
    </div>
</div>
@endsection
