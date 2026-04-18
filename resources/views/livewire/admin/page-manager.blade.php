<div class="space-y-6">
    <!-- Header with Tabs -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex gap-4 p-1 bg-[#111F2C] border border-[#1E3040] rounded-xl">
            <button wire:click="setTab('content')" class="px-6 py-2 rounded-lg text-sm font-bold transition-all {{ $activeTab === 'content' ? 'bg-[#D31111] text-white shadow-lg' : 'text-[#4A6070] hover:text-[#8BA4B4]' }}">
                Site Content
            </button>
            <button wire:click="setTab('gallery')" class="px-6 py-2 rounded-lg text-sm font-bold transition-all {{ $activeTab === 'gallery' ? 'bg-[#D31111] text-white shadow-lg' : 'text-[#4A6070] hover:text-[#8BA4B4]' }}">
                Image Gallery
            </button>
        </div>

        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="bg-[#10B98120] text-[#10B981] px-4 py-2 rounded-lg text-xs font-bold border border-[#10B98140]">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Content Tab -->
    @if($activeTab === 'content')
        <div class="grid grid-cols-1 gap-6">
            @foreach(collect($contents)->groupBy('section') as $section => $items)
                <div class="p-8 rounded-2xl border border-[#1E3040] bg-[#111F2C]">
                    <h3 class="text-sm font-black uppercase tracking-widest text-[#4A6070] mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-[#D31111] rounded-full"></span>
                        {{ ucfirst($section) }} Section
                    </h3>
                    
                    <div class="space-y-6">
                        @foreach($items as $index => $item)
                            @php
                                $actualIndex = collect($contents)->search(fn($c) => $c['id'] == $item['id']);
                            @endphp
                            <div class="space-y-4 p-4 rounded-xl bg-[#0D1B22]/50 border border-[#1E3040]">
                                <label class="text-xs font-bold text-[#8BA4B4]">{{ $item['label'] }}</label>
                                
                                @if($item['type'] === 'image')
                                    <div class="flex items-start gap-6">
                                        <div class="w-32 h-32 rounded-lg overflow-hidden border border-[#1E3040] bg-black/20 flex-shrink-0">
                                            @if(isset($imageUploads[$actualIndex]))
                                                <img src="{{ $imageUploads[$actualIndex]->temporaryUrl() }}" class="w-full h-full object-cover">
                                            @else
                                                <img src="{{ asset($item['value']) }}" class="w-full h-full object-cover">
                                            @endif
                                        </div>
                                        <div class="pt-2">
                                            <input type="file" wire:model="imageUploads.{{ $actualIndex }}" class="hidden" id="img-{{ $item['id'] }}">
                                            <label for="img-{{ $item['id'] }}" class="cursor-pointer bg-[#1E3040] text-white px-4 py-2 rounded-lg text-xs font-bold hover:bg-[#D31111] transition-all">
                                                Change Image
                                            </label>
                                            <p class="text-[0.6rem] text-[#4A6070] mt-3">Path: {{ $item['value'] }}</p>
                                        </div>
                                    </div>
                                @elseif($item['type'] === 'longtext')
                                    <textarea 
                                        wire:model="contents.{{ $actualIndex }}.value"
                                        class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-4 text-sm text-white focus:border-[#D31111] outline-none transition-all min-h-[120px]"
                                    ></textarea>
                                @elseif($item['type'] === 'toggle')
                                    <div class="flex items-center gap-4 py-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" wire:model="contents.{{ $actualIndex }}.value" class="sr-only peer">
                                            <div class="w-11 h-6 bg-[#111F2C] border border-[#1E3040] peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-[#4A6070] after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#D31111] peer-checked:after:bg-white"></div>
                                        </label>
                                        <span class="text-xs font-bold text-[#8BA4B4]">
                                            {{ $item['value'] == '1' ? 'Active' : 'Hidden' }}
                                        </span>
                                    </div>
                                @elseif($item['type'] === 'json')
                                    <div class="space-y-2">
                                        <textarea 
                                            wire:model="contents.{{ $actualIndex }}.value"
                                            class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-4 text-xs text-white font-mono focus:border-[#D31111] outline-none transition-all min-h-[150px]"
                                        ></textarea>
                                        <p class="text-[0.6rem] text-[#4A6070]">Important: Value must be a valid JSON array of objects with "label" and "value" keys.</p>
                                    </div>
                                @else
                                    <input 
                                        type="text" 
                                        wire:model="contents.{{ $actualIndex }}.value"
                                        class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-4 text-sm text-white focus:border-[#D31111] outline-none transition-all"
                                    >
                                @endif
                                <div class="flex items-center justify-between">
                                    <p class="text-[0.6rem] text-[#4A6070] font-mono">key: {{ $item['key'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="flex justify-end pt-4">
                <div wire:loading wire:target="saveContent" class="mr-4 text-xs font-bold text-[#8BA4B4] mt-3">Saving...</div>
                <button wire:click="saveContent" class="bg-[#D31111] text-white px-8 py-3 rounded-xl font-bold shadow-lg hover:bg-[#B00E0E] transition-all transform hover:-translate-y-1">
                    Save Changes
                </button>
            </div>
        </div>
    @endif

    <!-- Gallery Tab -->
    @if($activeTab === 'gallery')
        <div x-data="{ 
            uploadModal: false, 
            lightbox: false, 
            activeImage: '',
            activeCaption: ''
        }" class="space-y-6">
            
            <!-- Gallery Actions -->
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-black uppercase tracking-widest text-[#4A6070] flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-[#D31111] rounded-full"></span>
                        Image Gallery
                    </h3>
                </div>
                <button @click="uploadModal = true" class="flex items-center gap-2 bg-[#D31111] text-white px-5 py-2.5 rounded-xl text-sm font-bold shadow-lg hover:bg-[#B00E0E] transition-all transform hover:-translate-y-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Add New Image
                </button>
            </div>

            <!-- Upload Modal -->
            <div x-show="uploadModal" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
                 style="display: none;">
                
                <div @click.away="uploadModal = false" class="w-full max-w-xl bg-[#111F2C] border border-[#1E3040] rounded-3xl overflow-hidden shadow-2xl">
                    <div class="p-6 border-b border-[#1E3040] flex items-center justify-between bg-[#152533]">
                        <h4 class="font-black uppercase tracking-widest text-sm text-white">Upload New Asset</h4>
                        <button @click="uploadModal = false" class="text-[#4A6070] hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                        </button>
                    </div>

                    <div class="p-8 space-y-6">
                        <div class="p-8 rounded-2xl border border-dashed border-[#D3111140] bg-[#D3111105] text-center">
                            <input type="file" wire:model="newGalleryImage" class="hidden" id="gallery-upload">
                            <label for="gallery-upload" class="cursor-pointer block">
                                <div class="w-16 h-16 rounded-full bg-[#111F2C] border border-[#1E3040] flex items-center justify-center mx-auto mb-4 group-hover:border-[#D31111] transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D31111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                                </div>
                                <span class="text-sm font-bold text-white block mb-1">
                                    {{ $newGalleryImage ? $newGalleryImage->getClientOriginalName() : 'Click to select image' }}
                                </span>
                                <span class="text-xs text-[#4A6070]">PNG, JPG or WEBP (Max 10MB)</span>
                            </label>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="text-[0.65rem] font-bold text-[#4A6070] uppercase tracking-widest block mb-2">Image Caption</label>
                                <input type="text" wire:model="galleryCaption" placeholder="What is this encounter about?" class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-4 text-sm text-white focus:border-[#D31111] outline-none transition-all">
                            </div>

                            <button wire:click="uploadGalleryImage" @click="if(!$wire.newGalleryImage) return; uploadModal = false" wire:loading.attr="disabled" class="w-full bg-[#D31111] text-white py-4 rounded-xl font-bold shadow-lg hover:bg-[#B00E0E] transition-all disabled:opacity-50 flex items-center justify-center gap-3">
                                <span wire:loading.remove>Commit to Gallery</span>
                                <span wire:loading>Optimizing Asset...</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lightbox -->
            <div x-show="lightbox" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-[110] flex items-center justify-center p-8 bg-black/95 backdrop-blur-md"
                 style="display: none;"
                 @keydown.escape.window="lightbox = false">
                
                <button @click="lightbox = false" class="absolute top-8 right-8 text-white/50 hover:text-white transition-colors z-[120]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>

                <div class="max-w-5xl w-full flex flex-col items-center gap-6">
                    <img :src="activeImage" class="max-w-full max-h-[75vh] rounded-2xl shadow-2xl border border-white/10 object-contain">
                    <div class="text-center">
                        <p x-text="activeCaption" class="text-lg font-bold text-white mb-2"></p>
                        <p class="text-xs text-[#4A6070] font-mono tracking-widest uppercase">Buffer Zone Asset Registry</p>
                    </div>
                </div>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                @foreach($gallery as $item)
                    <div class="group relative aspect-square rounded-2xl overflow-hidden bg-[#111F2C] border border-[#1E3040] hover:border-[#D31111] transition-all shadow-lg">
                        <img src="{{ asset('assets/images/' . $item->filename) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-60 group-hover:opacity-100">
                        
                        <!-- Overlay Actions -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent flex flex-col justify-end p-5 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <p class="text-[0.65rem] text-white font-bold truncate mb-4">{{ $item->caption ?: 'Untagged Asset' }}</p>
                            
                            <div class="flex gap-2">
                                <button 
                                    @click="lightbox = true; activeImage = '{{ asset('assets/images/' . $item->filename) }}'; activeCaption = '{{ $item->caption ?: 'Untagged Asset' }}'"
                                    class="flex-1 py-2.5 rounded-xl bg-white/10 text-white text-[0.6rem] font-black uppercase hover:bg-white hover:text-black transition-all flex items-center justify-center gap-2"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0z"/><circle cx="12" cy="12" r="3"/></svg>
                                    View
                                </button>
                                <button 
                                    wire:click="deleteGalleryImage({{ $item->id }})" 
                                    wire:confirm="Permanent Deletion: Are you sure?"
                                    class="w-10 h-10 rounded-xl bg-red-600/20 text-red-500 hover:bg-red-600 hover:text-white transition-all flex items-center justify-center"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
