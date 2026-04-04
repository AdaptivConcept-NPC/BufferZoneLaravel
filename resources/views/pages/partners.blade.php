@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Partners')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <p class="section-label mb-4">Our Partners</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Strategic Partners</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Working together to provide a safer community for all.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(['Netcare 911', 'Life Healthcare', 'ER24', 'Gauteng Health', 'Dis-Chem Pharmacy', 'Discovery Health'] as $partner)
                <div class="info-card flex items-center justify-center h-32 text-center">
                    <p class="text-lg font-semibold" style="color: #213340;">{{ $partner }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
