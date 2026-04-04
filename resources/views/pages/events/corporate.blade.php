@extends('layouts.app')

@section('page_title', 'Corporate Events - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Event Types</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Corporate Events</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Discreet, professional medical presence for your business gatherings and gala dinners.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Professional Excellence</h2>
                <p class="text-lg text-gray-700 mb-8">Our corporate medics are chosen for their professionalism and discretion, ensuring that your guests are safe while maintaining the event's atmosphere.</p>
                
                <div class="info-card">
                    <h3 class="text-lg font-bold mb-3" style="color: #213340;">Corporate Protocols</h3>
                    <p class="text-gray-700">We provide rapid assessment for sudden illness or medical emergencies during high-profile business functions.</p>
                </div>

                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-6 py-3 rounded mt-8 inline-block" style="position: relative;">Book Corporate Coverage</a>
                </div>
            </div>
            <div class="bg-soft-grey rounded-lg h-80 flex items-center justify-center">
                <p class="text-gray-500">Corporate Event Medical Placeholder</p>
            </div>
        </div>
    </div>
</section>
@endsection
