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
        <div class="space-y-6">
            <!-- Upload Section -->
            <div class="p-8 rounded-2xl border border-[#D3111140] bg-[#D3111105] border-dashed">
                <div class="flex flex-col items-center justify-center text-center">
                    <div class="w-12 h-12 rounded-full bg-[#111F2C] border border-[#1E3040] flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D31111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
                    </div>
                    <h4 class="text-sm font-bold text-white mb-1">Add New Image</h4>
                    <p class="text-xs text-[#4A6070] mb-6">PNG, JPG or WEBP (Max 10MB)</p>
                    
                    <div class="w-full max-w-md space-y-4">
                        <input type="file" wire:model="newGalleryImage" class="hidden" id="gallery-upload">
                        <label for="gallery-upload" class="cursor-pointer block w-full p-4 rounded-xl border border-[#1E3040] bg-[#0D1B22] text-[#8BA4B4] text-sm hover:border-[#D31111] transition-all">
                            {{ $newGalleryImage ? $newGalleryImage->getClientOriginalName() : 'Click to select image' }}
                        </label>
                        
                        <input type="text" wire:model="galleryCaption" placeholder="Add a caption (optional)" class="w-full bg-[#0D1B22] border border-[#1E3040] rounded-xl p-3 text-sm text-white focus:border-[#D31111] outline-none">
                        
                        <button wire:click="uploadGalleryImage" wire:loading.attr="disabled" class="w-full bg-[#D31111] text-white py-3 rounded-xl font-bold shadow-lg hover:bg-[#B00E0E] transition-all disabled:opacity-50">
                            <span wire:loading.remove>Upload Image</span>
                            <span wire:loading>Processing...</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @foreach($gallery as $item)
                    <div class="group relative aspect-square rounded-xl overflow-hidden bg-[#111F2C] border border-[#1E3040] hover:border-[#D31111] transition-all">
                        <img src="{{ asset('assets/images/' . $item->filename) }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all">
                            <p class="text-[0.6rem] text-white font-bold truncate mb-3">{{ $item->caption ?: 'No caption' }}</p>
                            <button 
                                wire:click="deleteGalleryImage({{ $item->id }})" 
                                wire:confirm="Are you sure you want to delete this image?"
                                class="w-full py-1.5 rounded-lg bg-red-600/20 text-red-500 text-[0.65rem] font-black uppercase hover:bg-red-600 hover:text-white transition-all"
                            >
                                Delete
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
