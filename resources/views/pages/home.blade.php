@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Home')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-4">Professional Event Management & Medical Services</h1>
        <p class="text-xl mb-8">Comprehensive emergency medical coverage and professional staffing for events of all sizes</p>
        <a href="#contact" class="btn-emergency text-white px-8 py-3 rounded-lg font-medium inline-block">Get In Touch</a>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold mb-2 text-center" style="color: #213340;">Our Services</h2>
        <div class="h-1 w-20 bg-red-600 mx-auto mb-12"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold mb-3" style="color: #213340;">Medical Cover</h3>
                <p class="text-gray-600">Professional emergency medical coverage for all event types.</p>
                <a href="/services/medical-cover" class="text-blue-600 font-medium mt-4 inline-block">Learn More →</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold mb-3" style="color: #213340;">Training</h3>
                <p class="text-gray-600">Comprehensive training programs for organizations and individuals.</p>
                <a href="/services/training" class="text-blue-600 font-medium mt-4 inline-block">Learn More →</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold mb-3" style="color: #213340;">Staffing</h3>
                <p class="text-gray-600">Professional staffing solutions for security and event management.</p>
                <a href="/services/staffing" class="text-blue-600 font-medium mt-4 inline-block">Learn More →</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-bold mb-3" style="color: #213340;">Corporate Packages</h3>
                <p class="text-gray-600">Customized packages for corporate events and functions.</p>
                <a href="/services/corporate" class="text-blue-600 font-medium mt-4 inline-block">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold mb-6" style="color: #213340;">About Buffer Zone EMS</h2>
                <p class="text-gray-700 mb-4">
                    Buffer Zone EMS is a professional emergency medical services and event management company specializing in providing comprehensive coverage for events of all sizes.
                </p>
                <p class="text-gray-700 mb-6">
                    With years of experience in the industry, we understand the importance of professionalism, reliability, and rapid response.
                </p>
                <a href="/about" class="btn-navy text-white px-6 py-3 rounded inline-block">Learn More About Us</a>
            </div>
            <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center">
                <p class="text-gray-500">Image placeholder</p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Component -->
@livewire('gallery')

<!-- Contact Form Component -->
@livewire('contact-form')
@endsection
