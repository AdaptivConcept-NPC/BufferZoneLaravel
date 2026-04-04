@extends('layouts.app')

@section('page_title', 'Community Events - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Event Types</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Community Events</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Ensuring safety at school fairs, markets, and local gatherings across Gauteng.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Safety for the Whole Family</h2>
                <p class="text-lg text-gray-700 mb-8">We are deeply involved in our local communities, providing medical standby for neighborhood events and community markets.</p>
                
                <div class="info-card">
                    <h3 class="text-lg font-bold mb-3" style="color: #213340;">Accessibility</h3>
                    <p class="text-gray-700">We focus on making medical help easily accessible for all attendees, from small children to the elderly.</p>
                </div>

                <a href="/#contact" class="btn-emergency text-white px-6 py-3 rounded mt-8 inline-block">Book Community Coverage</a>
            </div>
            <div class="bg-soft-grey rounded-lg h-80 flex items-center justify-center">
                <p class="text-gray-500">Community Fair Medical Placeholder</p>
            </div>
        </div>
    </div>
</section>
@endsection
