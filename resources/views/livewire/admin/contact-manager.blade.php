<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- List Column -->
    <div class="lg:col-span-1 space-y-4">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-black uppercase tracking-widest text-[#4A6070]">Inbox</h3>
            @if(session('success'))
                <span class="text-[0.65rem] text-[#10B981] font-bold">{{ session('success') }}</span>
            @endif
        </div>

        <div class="space-y-3 h-[calc(100vh-320px)] overflow-y-auto pr-2 custom-scrollbar">
            @forelse($submissions as $sub)
                <button 
                    wire:click="selectSubmission({{ $sub->id }})"
                    class="w-full text-left p-4 rounded-xl border transition-all {{ $selectedSubmission && $selectedSubmission->id == $sub->id ? 'border-[#D31111] bg-[#111F2C]' : 'border-[#1E3040] bg-[#0D1B22] hover:border-[#8BA4B4]' }}"
                >
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-xs font-bold {{ $sub->is_read ? 'text-[#8BA4B4]' : 'text-white' }}">{{ $sub->full_name }}</span>
                        @if(!$sub->is_read)
                            <span class="w-2 h-2 rounded-full bg-[#D31111]"></span>
                        @endif
                    </div>
                    <p class="text-[0.65rem] text-[#4A6070] truncate">{{ $sub->subject }}</p>
                    <div class="mt-2 text-[0.6rem] text-[#4A6070] font-bold uppercase">{{ $sub->created_at->diffForHumans() }}</div>
                </button>
            @empty
                <div class="text-center py-12 opacity-40">
                    <p class="text-xs font-bold uppercase tracking-widest text-[#4A6070]">No messages yet</p>
                </div>
            @endforelse
        </div>

        <div class="mt-4">
            {{ $submissions->links() }}
        </div>
    </div>

    <!-- Detail Column -->
    <div class="lg:col-span-2">
        @if($selectedSubmission)
            <div class="p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C] sticky top-24">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                             <span class="text-[0.6rem] font-bold uppercase tracking-widest text-[#D31111] border border-[#D3111140] px-2 py-0.5 rounded">Submission #{{ $selectedSubmission->id }}</span>
                             <span class="text-[0.6rem] font-bold text-[#4A6070] uppercase">{{ $selectedSubmission->created_at->format('M d, Y @ H:i') }}</span>
                        </div>
                        <h2 class="text-xl font-black text-white mb-1">{{ $selectedSubmission->subject }}</h2>
                        <p class="text-sm text-[#8BA4B4]">From: <span class="text-white font-semibold">{{ $selectedSubmission->full_name }}</span> <code class="text-[0.7rem] bg-black/30 px-1 rounded">{{ $selectedSubmission->email }}</code></p>
                        @if($selectedSubmission->phone)
                            <p class="text-xs text-[#4A6070] mt-1">Phone: {{ $selectedSubmission->phone }}</p>
                        @endif
                    </div>
                    <button 
                        wire:click="deleteSubmission({{ $selectedSubmission->id }})"
                        wire:confirm="Delete this message forever?"
                        class="p-2 rounded-lg bg-red-600/10 text-red-500 hover:bg-red-600 hover:text-white transition-all group"
                        title="Delete Permanently"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></button>
                    </button>
                </div>

                <div class="bg-[#0D1B22] p-8 rounded-xl border border-[#1E3040] min-h-[250px] text-[#D1D5DB] leading-relaxed whitespace-pre-wrap">
                    {{ $selectedSubmission->message }}
                </div>

                <div class="mt-8 flex gap-4">
                    <a href="mailto:{{ $selectedSubmission->email }}?subject=RE: {{ $selectedSubmission->subject }}" class="bg-[#D31111] text-white px-8 py-3 rounded-xl font-bold shadow-lg hover:bg-[#B00E0E] transition-all transform hover:-translate-y-1">
                        Reply via Email
                    </a>
                </div>
            </div>
        @else
            <div class="h-[calc(100vh-250px)] flex flex-col items-center justify-center text-center p-12 border border-[#1E3040] border-dashed rounded-2xl opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mb-4 text-[#4A6070]"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <p class="text-sm font-bold uppercase tracking-widest text-[#8BA4B4]">Select a message to view details</p>
            </div>
        @endif
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0D1B22; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #1E3040; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #D31111; }
    </style>
</div>
