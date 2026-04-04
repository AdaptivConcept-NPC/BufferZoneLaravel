<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold mb-2" style="color: #213340;">Gallery</h2>
        <div class="h-1 w-20 bg-red-600 mb-8"></div>

        @if(count($items) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($items as $item)
                    <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <img 
                            src="{{ asset('storage/images/' . $item['filename']) }}" 
                            alt="{{ $item['caption'] ?? 'Gallery Image' }}"
                            class="w-full h-64 object-cover"
                        >
                        @if($item['caption'])
                            <div class="p-4">
                                <p class="text-gray-700">{{ $item['caption'] }}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">No gallery items available yet.</p>
            </div>
        @endif
    </div>
</section>
