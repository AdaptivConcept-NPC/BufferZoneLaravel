<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'Admin Panel | Buffer Zone EMS')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0D1B22; color: #F5F5F5; }
        .sidebar { background: #0D1B22; border-right: 1px solid #1E3040; min-height: 100vh; position: fixed; width: 260px; z-index: 50; }
        .main-content { margin-left: 260px; min-height: 100vh; display: flex; flex-direction: column; }
        .top-navbar { height: 64px; background: #0D1B22; border-bottom: 1px solid #1E3040; display: flex; align-items: center; padding: 0 2rem; position: sticky; top: 0; z-index: 40; }
        .nav-link { color: #8BA4B4; text-decoration: none; display: flex; align-items: center; gap: 0.75rem; padding: 0.8rem 1.25rem; border-radius: 12px; transition: all 0.2s; font-weight: 500; font-size: 0.9rem; }
        .nav-link:hover { background: #111F2C; color: #F5F5F5; }
        .nav-link.active { background: #D31111; color: #fff; font-weight: 700; }
        .badge-count { background: #D31111; color: white; padding: 2px 8px; border-radius: 100px; font-size: 0.7rem; font-weight: 800; }
    </style>
</head>
<body class="antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="sidebar hidden md:flex flex-col">
            <div class="p-8 pb-4">
                <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 900; color: #fff; letter-spacing: 1px; font-size: 1.2rem;">
                    BUFFER <span style="color: #D31111;">ZONE</span>
                </h1>
                <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-[2px] mt-1">Command Suite</p>
            </div>

            <nav class="flex-1 px-4 py-8 space-y-2">
                <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>
                    Dashboard
                </a>

                @if(auth()->user()->isSuperAdmin())
                <a href="/admin/commands" class="nav-link {{ request()->is('admin/commands') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" x2="20" y1="19" y2="19"/></svg>
                    Terminal
                </a>
                @endif

                <a href="/admin/pages" class="nav-link {{ request()->is('admin/pages') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4Z"/></svg>
                    Page Manager
                </a>

                <a href="/admin/contacts" class="nav-link {{ request()->is('admin/contacts') ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    Contact Inbox
                    @php $unread = \App\Models\ContactSubmission::where('is_read', false)->count(); @endphp
                    @if($unread > 0)
                        <span class="badge-count ml-auto">{{ $unread }}</span>
                    @endif
                </a>

                <div class="pt-8 text-[0.6rem] px-4 font-bold text-[#4A6070] uppercase tracking-widest mb-2">Support</div>
                
                <a href="/" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Live Site
                </a>
            </nav>

            <div class="p-6 border-t border-[#1E3040]">
                <form action="/admin/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full nav-link text-red-400 hover:text-red-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="main-content flex flex-col flex-1 overflow-y-auto">
            <!-- Navbar -->
            <header class="top-navbar">
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <span class="text-xs font-bold px-2 py-1 rounded bg-[#D3111120] text-[#D31111] uppercase tracking-tighter">
                            {{ auth()->user()->role }}
                        </span>
                        <h2 class="text-sm font-semibold text-[#8BA4B4]">@yield('heading', 'Dashboard')</h2>
                    </div>
                    
                    <div class="flex items-center gap-6">
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold">{{ auth()->user()->username }}</span>
                            <div class="w-8 h-8 rounded-full bg-[#1E3040] flex items-center justify-center text-[0.6rem] font-black uppercase">
                                {{ substr(auth()->user()->username, 0, 2) }}
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
