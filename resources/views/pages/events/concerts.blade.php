@extends('layouts.app')

@section('page_title', 'Concerts & Festivals - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Event Types</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Concerts & Festivals</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Comprehensive medical logistics for large-scale outdoor events and music festivals.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Managing Mass Gatherings</h2>
                <p class="text-lg text-gray-700 mb-8">Our festival medical protocols are designed for efficiency in high-pressure environments, managing hydration stations, trauma tents, and rapid extraction.</p>
                
                <div class="info-card">
                    <h3 class="text-lg font-bold mb-3" style="color: #213340;">Rapid Response</h3>
                    <p class="text-gray-700">We employ golf-cart ambulances and motorcycle medics to navigate crowded festival grounds quickly during emergencies.</p>
                </div>

                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-6 py-3 rounded mt-8 inline-block" style="position: relative;">Book Festival Coverage</a>
                </div>
            </div>
            <div class="img-container h-80">
                <img src="{{ asset('assets/images/stock/festival_medical.png') }}" alt="Festival Medical Tent" class="img-stock">
            </div>
        </div>
    </div>
</section>
@endsection
