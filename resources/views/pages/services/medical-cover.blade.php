@extends('layouts.app')

@section('page_title', 'Event Medical Cover - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Our Services</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Event Medical Cover</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Complete medical solutions for events of all sizes, from private parties to mass gatherings.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Professional Event Coverage</h2>
                <p class="text-lg text-gray-700 mb-8">At Buffer Zone EMS, we provide more than just a presence. We offer a full-scale medical support system tailored to your event's specific risk profile.</p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>Ambulance Standby (ALS/BLS)</strong></p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>First Aid Stations</strong></p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>Mobile Medical Units</strong></p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>Rapid Response Vehicles</strong></p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>Certified Medical Staff</strong></p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-red-600 font-bold text-xl mt-1">✓</span>
                        <p class="text-gray-700"><strong>Compliance & Safety Officers</strong></p>
                    </div>
                </div>

                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-6 py-3 rounded mt-8 inline-block" style="position: relative;">Inquire Now</a>
                </div>
            </div>
            <div class="bg-soft-grey rounded-lg h-80 flex items-center justify-center">
                <p class="text-gray-500">Ambulance Standby Placeholder</p>
            </div>
        </div>
    </div>
</section>
@endsection
