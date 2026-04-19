@extends('layouts.admin')

@section('heading', 'Dashboard Overview')

@section('page_title', 'Dashboard | Buffer Zone EMS')

@section('content')
<div class="space-y-8 max-w-7xl">
    
    <!-- Welcome Header -->
    <div class="p-8 rounded-3xl bg-gradient-to-br from-[#111F2C] to-[#0D1B22] border border-[#1E3040]">
        <div class="flex items-start justify-between">
            <div>
                <h2 class="text-2xl font-black text-white mb-2" style="font-family: 'Montserrat', sans-serif;">Welcome back, <span class="text-[#D31111]">{{ auth()->user()->username }}</span></h2>
                <p class="text-[#8BA4B4] text-sm max-w-lg leading-relaxed">Here's a high-level overview of the Buffer Zone EMS platform performance and system metrics for today.</p>
            </div>
            <div class="hidden sm:flex items-center justify-center w-16 h-16 rounded-2xl bg-[#D31111]/10 border border-[#D31111]/20">
                <i class="fas fa-chart-line text-[#D31111] text-2xl"></i>
            </div>
        </div>
    </div>

    <!-- KPIs Row -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Total Enquiries -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D31111] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">Enquiries</span>
                <div class="w-8 h-8 rounded-lg bg-[#D31111]/10 flex items-center justify-center text-[#D31111]">
                    <i class="fas fa-solid fa-envelope text-sm"></i>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">124</h3>
            </div>
            <p class="text-[0.6rem] text-[#10B981] mt-2 uppercase font-bold tracking-tighter flex items-center gap-1">
                <i class="fas fa-arrow-up"></i> 14% vs last month
            </p>
        </div>

        <!-- Site Traffic -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#22c55e] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">Site Traffic</span>
                <div class="w-8 h-8 rounded-lg bg-[#22c55e]/10 flex items-center justify-center text-[#22c55e]">
                    <i class="fas fa-users text-sm"></i>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">4.2k</h3>
            </div>
            <p class="text-[0.6rem] text-[#10B981] mt-2 uppercase font-bold tracking-tighter flex items-center gap-1">
                <i class="fas fa-arrow-up"></i> 8% vs last week
            </p>
        </div>

        <!-- Total Pages -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#3b82f6] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">CMS Pages</span>
                <div class="w-8 h-8 rounded-lg bg-[#3b82f6]/10 flex items-center justify-center text-[#3b82f6]">
                    <i class="fas fa-file-alt text-sm"></i>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">12</h3>
            </div>
            <p class="text-[0.6rem] text-[#4A6070] mt-2 uppercase font-bold tracking-tighter flex items-center gap-1">
                2 Drafted / 10 Published
            </p>
        </div>

        <!-- Active Coverage -->
        <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#eab308] transition-all group">
            <div class="flex items-center justify-between mb-4">
                <span class="text-[0.65rem] font-bold uppercase tracking-widest text-[#4A6070]">Active Coverages</span>
                <div class="w-8 h-8 rounded-lg bg-[#eab308]/10 flex items-center justify-center text-[#eab308]">
                    <i class="fas fa-ambulance text-sm"></i>
                </div>
            </div>
            <div class="flex items-end gap-2">
                <h3 class="text-3xl font-black text-white">3</h3>
            </div>
            <p class="text-[0.6rem] text-[#4A6070] mt-2 uppercase font-bold tracking-tighter flex items-center gap-1">
                Events currently active
            </p>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="p-8 rounded-3xl border border-[#1E3040] bg-[#111F2C]">
        <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; border-bottom: 2px solid #D31111; display: inline-block; padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Quick Access</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            
            <a href="/admin/contacts" class="flex gap-4 p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex shrink-0 items-center justify-center group-hover:text-[#D31111] transition-colors">
                    <i class="fas fa-inbox text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm mb-1 text-white">View Inbox</h4>
                    <p class="text-[0.65rem] text-[#4A6070] leading-tight">Review new communication and enquiries.</p>
                </div>
            </a>
            
            <a href="/admin/pages" class="flex gap-4 p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex shrink-0 items-center justify-center group-hover:text-[#D31111] transition-colors">
                    <i class="fas fa-edit text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm mb-1 text-white">Edit Pages</h4>
                    <p class="text-[0.65rem] text-[#4A6070] leading-tight">Update contents via the Page Manager.</p>
                </div>
            </a>

            <a href="/" target="_blank" class="flex gap-4 p-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all group">
                <div class="w-10 h-10 rounded-lg bg-[#111F2C] flex shrink-0 items-center justify-center group-hover:text-[#D31111] transition-colors">
                    <i class="fas fa-external-link-alt text-lg"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm mb-1 text-white">Live Preview</h4>
                    <p class="text-[0.65rem] text-[#4A6070] leading-tight">Open the live customer facing website.</p>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection
