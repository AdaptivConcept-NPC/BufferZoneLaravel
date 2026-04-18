<div>
    <section id="events" class="section-py" style="background: #F4F4F4;">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <span class="section-label">Events Gallery</span>
                <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.75rem); color: #213340; margin-top: 0.5rem; line-height: 1.15;">
                    A Track Record of Safety
                </h2>
                <div class="mx-auto" style="margin-top: 0.75rem; width: 48px; height: 4px; background: #D31111; border-radius: 2px;"></div>
                <p style="color: #6B7280; max-width: 520px; margin: 1rem auto 0; font-size: 1rem; line-height: 1.65;">
                    From the heat of the race to the buzz of the concert, BufferZone EMS has been there — keeping teams, artists, and communities safe.
                </p>
            </div>

            <!-- Event Type Pills -->
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                @php
                    $eventTypes = [
                        'Sports & Athletics', 'Film & TV Shoots', 'Concerts & Festivals',
                        'Church Events', 'Corporate Events', 'Private Functions',
                        'Fetes & Markets', 'School Events', 'Community Events', 'Races'
                    ];
                @endphp
                @foreach($eventTypes as $type)
                    <span style="background: #fff; border: 1px solid #E5E7EB; color: #213340; font-family: 'Inter', sans-serif; font-weight: 600; font-size: 0.78rem; padding: 0.35rem 0.9rem; border-radius: 50px;">
                        {{ $type }}
                    </span>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                @if(count($items) > 0)
                    {{-- Load from DB --}}
                    @foreach($items as $item)
                    <div 
                        class="overflow-hidden rounded-xl cursor-pointer" 
                        wire:click="$set('lightbox', '{{ $item['filename'] }}')"
                        style="box-shadow: 0 2px 8px rgba(0,0,0,0.08);"
                    >
                        <img 
                            src="{{ asset('assets/images/gallery/' . $item['filename']) }}" 
                            alt="{{ $item['caption'] ?? 'BufferZone EMS event' }}" 
                            class="gallery-img"
                        />
                    </div>
                    @endforeach
                @else
                    {{-- Fallback to hardcoded list --}}
                    @php
                        $images = [
                            'IMG-20260314-WA0001.jpg', 'IMG-20260314-WA0003.jpg', 'IMG-20260314-WA0004.jpg', 
                            'IMG-20260314-WA0005.jpg', 'IMG-20260314-WA0006.jpg', 'IMG-20260314-WA0007.jpg', 
                            'IMG-20260314-WA0008.jpg', 'IMG-20260314-WA0009.jpg', 'IMG-20260314-WA0010.jpg', 
                            'IMG-20260314-WA0011.jpg', 'IMG-20260314-WA0012.jpg', 'IMG-20260314-WA0013.jpg', 
                            'IMG-20260314-WA0014.jpg', 'IMG-20260314-WA0015.jpg', 'IMG-20260314-WA0016.jpg', 
                            'IMG-20260314-WA0019.jpg'
                        ];
                    @endphp
                    
                    @foreach($images as $img)
                    <div 
                        class="overflow-hidden rounded-xl cursor-pointer" 
                        wire:click="$set('lightbox', '{{ $img }}')"
                        style="box-shadow: 0 2px 8px rgba(0,0,0,0.08);"
                    >
                        <img 
                            src="{{ asset('assets/images/' . $img) }}" 
                            alt="BufferZone EMS event" 
                            class="gallery-img"
                        />
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Lightbox -->
        @if($lightbox)
        <div 
            class="fixed inset-0 z-50 flex items-center justify-center p-4" 
            style="background: rgba(0,0,0,0.88);"
            wire:click="$set('lightbox', null)"
        >
            <img 
                src="{{ asset('assets/images/gallery/' . $lightbox) }}" 
                alt="Gallery full view" 
                class="max-w-full max-h-[90vh] rounded-2xl" 
                style="box-shadow: 0 20px 60px rgba(0,0,0,0.5); object-fit: contain;"
            />
            <button 
                class="absolute top-6 right-6 text-white text-3xl font-bold" 
                wire:click="$set('lightbox', null)"
                style="line-height: 1;"
            >
                &times;
            </button>
        </div>
        @endif
    </section>
</div>
