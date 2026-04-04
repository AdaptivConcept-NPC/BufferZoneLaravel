@extends('layouts.app')

@section('page_title', 'Sports & Athletics Events - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Event Types</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Sports & Athletics</h1>
            <p class="text-xl text-gray-600 max-w-2xl">High-intensity medical support for Gauteng's toughest competitions.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Ready for Every Sprint</h2>
                <p class="text-lg text-gray-700 mb-8">From local marathons to professional rugby matches, we provide specialized sports medics trained in rapid assessment and field stabilization.</p>
                
                <div class="info-card">
                    <h3 class="text-lg font-bold mb-3" style="color: #213340;">Our Sports Protocol</h3>
                    <p class="text-gray-700">We focus on head injury assessment (HIA), heat exhaustion management, and trauma response to ensure athlete safety is never compromised.</p>
                </div>

                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-6 py-3 rounded mt-8 inline-block" style="position: relative;">Book Sports Coverage</a>
                </div>
            </div>
            <div class="bg-soft-grey rounded-lg h-80 flex items-center justify-center">
                <p class="text-gray-500">Sports Event Medical Placeholder</p>
            </div>
        </div>
    </div>
</section>
@endsection
