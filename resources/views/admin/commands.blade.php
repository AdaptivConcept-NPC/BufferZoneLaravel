@extends('layouts.admin')

@section('heading', 'Artisan Terminal')

@section('content')
<div class="space-y-6">
    <!-- Command Input Card -->
    <div class="p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
        <div class="flex items-center gap-4 mb-6">
            <div class="w-10 h-10 rounded-lg bg-[#D3111120] flex items-center justify-center text-[#D31111]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" x2="20" y1="19" y2="19"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-white text-lg">Execute Command</h3>
                <p class="text-[0.65rem] text-[#4A6070] font-bold uppercase tracking-widest">Artisan Interface</p>
            </div>
        </div>

        <form action="/api/admin/commands/execute" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="command" class="block text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest mb-2">Artisan Statement</label>
                <div class="flex gap-2">
                    <span class="flex items-center px-4 rounded-xl bg-[#0D1B22] border border-[#1E3040] text-[#8BA4B4] font-mono text-sm">php artisan</span>
                    <input type="text" name="command" id="command" 
                           class="flex-1 px-4 py-3 rounded-xl bg-[#0D1B22] border border-[#1E3040] text-white font-mono text-sm focus:border-[#D31111] focus:ring-1 focus:ring-[#D31111] transition-all outline-none" 
                           placeholder="migrate:status" required>
                    <button type="submit" class="px-6 py-3 rounded-xl bg-[#D31111] hover:bg-[#B70E0E] text-white font-bold transition-all shadow-lg shadow-[#D3111120]">
                        Run
                    </button>
                </div>
            </div>
        </form>

        <div class="mt-6 flex flex-wrap gap-2">
            <span class="text-[0.6rem] font-bold text-[#4A6070] uppercase mr-2 mt-1">Shortcuts:</span>
            <button onclick="document.getElementById('command').value='migrate:status'" class="px-3 py-1 rounded-md bg-[#0D1B22] border border-[#1E3040] text-[0.65rem] font-bold text-[#8BA4B4] hover:border-[#D31111] transition-all">migrate:status</button>
            <button onclick="document.getElementById('command').value='route:list'" class="px-3 py-1 rounded-md bg-[#0D1B22] border border-[#1E3040] text-[0.65rem] font-bold text-[#8BA4B4] hover:border-[#D31111] transition-all">route:list</button>
            <button onclick="document.getElementById('command').value='cache:clear'" class="px-3 py-1 rounded-md bg-[#0D1B22] border border-[#1E3040] text-[0.65rem] font-bold text-[#8BA4B4] hover:border-[#D31111] transition-all">cache:clear</button>
            <button onclick="document.getElementById('command').value='app:setup-identity'" class="px-3 py-1 rounded-md bg-[#0D1B22] border border-[#1E3040] text-[0.65rem] font-bold text-[#D31111] hover:bg-[#D3111110] transition-all">setup-identity</button>
        </div>
    </div>

    <!-- Output Card -->
    <div class="p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xs font-black text-[#4A6070] uppercase tracking-widest">Execution Result</h3>
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#10B981]"></span>
                <span class="text-[0.65rem] font-bold text-[#10B981] uppercase tracking-tighter">Terminal Ready</span>
            </div>
        </div>
        
        <div class="p-6 rounded-xl bg-[#0D1B22] border border-[#1E3040] font-mono text-sm min-h-[300px] overflow-x-auto">
            @if(session('output'))
                <pre class="text-[#8BA4B4]">{{ session('output') }}</pre>
            @elseif(session('error'))
                <pre class="text-red-400">{{ session('error') }}</pre>
            @else
                <p class="text-[#4A6070] italic">Ready for input...</p>
            @endif
        </div>
    </div>
</div>
@endsection