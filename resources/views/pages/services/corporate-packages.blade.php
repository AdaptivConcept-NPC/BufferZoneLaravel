@extends('layouts.app')

@section('page_title', 'Corporate Packages - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Our Services</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Corporate Packages</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Tailored medical support and compliance for businesses in Gauteng.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="info-card">
                <h3 class="text-2xl font-bold mb-6" style="color: #213340;">Bronze Package</h3>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">First Aid Kit Service</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Staff Training</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Annual Check-up</span>
                    </li>
                </ul>
                <div class="py-4 border-t">
                    <p class="text-gray-600 text-sm">Price: <span class="font-bold" style="color: #213340;">Contact</span></p>
                </div>
            </div>

            <div class="info-card border-t-4" style="border-top-color: #D31111;">
                <h3 class="text-2xl font-bold mb-6" style="color: #213340;">Silver Package</h3>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Monthly Check-ups</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Emergency Drills</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">On-call Medic</span>
                    </li>
                </ul>
                <div class="py-4 border-t">
                    <p class="text-gray-600 text-sm">Price: <span class="font-bold" style="color: #213340;">Contact</span></p>
                </div>
            </div>

            <div class="info-card">
                <h3 class="text-2xl font-bold mb-6" style="color: #213340;">Gold Package</h3>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">On-site Medic</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Full Compliance</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-600 font-bold">•</span>
                        <span class="text-gray-700">Emergency Kit Supply</span>
                    </li>
                </ul>
                <div class="py-4 border-t">
                    <p class="text-gray-600 text-sm">Price: <span class="font-bold" style="color: #213340;">Contact</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
