<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h3 class="text-sm font-black uppercase tracking-widest text-[#4A6070] flex items-center gap-3">
                <span class="w-1.5 h-6 bg-[#D31111] rounded-full"></span>
                User Management Registry
            </h3>
            <p class="text-xs text-[#8BA4B4] mt-1 font-medium italic">Command Level Authorization & RBAC Management</p>
        </div>
        
        <button wire:click="openModal" class="flex items-center gap-2 bg-[#D31111] text-white px-5 py-2.5 rounded-xl text-sm font-bold shadow-lg hover:bg-[#B00E0E] transition-all transform hover:-translate-y-0.5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
            Add New Operative
        </button>
    </div>

    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="bg-[#10B98120] text-[#10B981] px-4 py-3 rounded-xl text-xs font-bold border border-[#10B98140] flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <span class="w-2 h-2 rounded-full bg-[#10B981] animate-pulse"></span>
                {{ session('success') }}
            </div>
            <button @click="show = false">&times;</button>
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" class="bg-[#D3111120] text-[#D31111] px-4 py-3 rounded-xl text-xs font-bold border border-[#D3111140] flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <span class="w-2 h-2 rounded-full bg-[#D31111] animate-pulse"></span>
                {{ session('error') }}
            </div>
            <button @click="show = false">&times;</button>
        </div>
    @endif

    <!-- Search Bar -->
    <div class="relative group max-w-md">
        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-[#4A6070]">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        </div>
        <input 
            type="text" 
            wire:model.live.debounce.300ms="search"
            placeholder="Search operative by username or email..." 
            class="w-full bg-[#111F2C] border border-[#1E3040] rounded-xl pl-12 pr-4 py-3 text-sm text-white focus:border-[#D31111] outline-none transition-all placeholder-[#4A6070]"
        >
    </div>

    <!-- User Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-2">
        @foreach($users as $user)
            <div class="p-6 rounded-2xl border border-[#1E3040] bg-[#111F2C] hover:border-[#D3111160] transition-all group relative overflow-hidden">
                <!-- Background Accent -->
                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br {{ $user->isSuperAdmin() ? 'from-[#D3111115] to-transparent' : 'from-[#4A607015] to-transparent' }} opacity-50"></div>
                
                <div class="flex items-start gap-5 relative">
                    <div class="w-14 h-14 rounded-2xl {{ $user->isSuperAdmin() ? 'bg-[#D3111120] text-[#D31111]' : 'bg-[#1E3040] text-[#8BA4B4]' }} flex items-center justify-center text-xl font-black shadow-inner border border-white/5 uppercase">
                        {{ substr($user->username, 0, 2) }}
                    </div>
                    
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="font-bold text-white truncate text-base">{{ $user->username }}</h4>
                            @if($user->id === auth()->id())
                                <span class="bg-[#10B98120] text-[#10B981] text-[0.6rem] px-2 py-0.5 rounded-full font-black uppercase tracking-wider">You</span>
                            @endif
                        </div>
                        <p class="text-xs text-[#8BA4B4] mb-3 truncate opacity-60 font-mono">{{ $user->email }}</p>
                        
                        <div class="flex items-center gap-3">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-[0.65rem] font-bold uppercase tracking-widest {{ $user->isSuperAdmin() ? 'bg-[#D3111120] text-[#D31111]' : 'bg-[#1E3040] text-[#8BA4B4]' }}">
                                <span class="w-1 h-1 rounded-full {{ $user->isSuperAdmin() ? 'bg-[#D31111]' : 'bg-[#4A6070]' }} animate-pulse"></span>
                                {{ $user->role }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-5 border-t border-[#1E3040] flex items-center justify-between">
                    <span class="text-[0.6rem] text-[#4A6070] font-bold uppercase tracking-widest">ID: {{ $user->id }}</span>
                    <div class="flex gap-2">
                        <button 
                            wire:click="editUser({{ $user->id }})"
                            class="p-2 rounded-lg bg-[#1E3040] text-white hover:bg-[#D31111] transition-all"
                            title="Edit Operative"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22h6-6Z"/><path d="M17 5l3 3-9 9-4 1 1-4 9-9Z"/></svg>
                        </button>
                        <button 
                            wire:click="deleteUser({{ $user->id }})"
                            wire:confirm="Critical Action: Purge system operative '{{ $user->username }}'?"
                            class="p-2 rounded-lg bg-[#1E3040] text-[#4A6070] hover:bg-red-600 hover:text-white transition-all {{ $user->id === auth()->id() ? 'opacity-20 cursor-not-allowed' : '' }}"
                            {{ $user->id === auth()->id() ? 'disabled' : '' }}
                            title="Purge Operative"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $users->links() }}
    </div>

    <!-- Management Modal -->
    @if($isModalOpen)
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
            <div class="w-full max-w-lg bg-[#111F2C] border border-[#1E3040] rounded-3xl overflow-hidden shadow-2xl">
                <div class="p-6 border-b border-[#1E3040] flex items-center justify-between bg-[#152533]">
                    <h4 class="font-black uppercase tracking-widest text-sm text-white">
                        {{ $isEditMode ? 'Update Operative Profile' : 'Register New Operative' }}
                    </h4>
                    <button wire:click="closeModal" class="text-[#4A6070] hover:text-white transition-colors text-2xl font-black">&times;</button>
                </div>

                <div class="p-8 space-y-6">
                    <form wire:submit.prevent="saveUser" class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest block mb-2">Username</label>
                                <input type="text" wire:model="username" class="w-full bg-[#0D1B22] border @error('username') border-red-500 @else border-[#1E3040] @enderror rounded-xl p-3.5 text-sm text-white focus:border-[#D31111] outline-none transition-all">
                                @error('username') <span class="text-[0.6rem] text-red-500 font-bold mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest block mb-2">Access Role</label>
                                <select wire:model="role" class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-3.5 text-sm text-white focus:border-[#D31111] outline-none transition-all appearance-none cursor-pointer">
                                    <option value="super-admin">Super Admin</option>
                                    <option value="view-only-admin">View Only Admin</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest block mb-2">Email Registry</label>
                            <input type="email" wire:model="email" class="w-full bg-[#0D1B22] border @error('email') border-red-500 @else border-[#1E3040] @enderror rounded-xl p-3.5 text-sm text-white focus:border-[#D31111] outline-none transition-all">
                            @error('email') <span class="text-[0.6rem] text-red-500 font-bold mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest block mb-2">
                                {{ $isEditMode ? 'Update Security Key (Leave blank to keep current)' : 'Security Access Key' }}
                            </label>
                            <input type="password" wire:model="password" class="w-full bg-[#0D1B22] border @error('password') border-red-500 @else border-[#1E3040] @enderror rounded-xl p-3.5 text-sm text-white focus:border-[#D31111] outline-none transition-all">
                            @error('password') <span class="text-[0.6rem] text-red-500 font-bold mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-[#D31111] text-white py-4 rounded-xl font-black uppercase tracking-widest text-sm shadow-lg hover:bg-[#B00E0E] transition-all flex items-center justify-center gap-3">
                                <span>{{ $isEditMode ? 'Apply Updates' : 'Confirm Registration' }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
