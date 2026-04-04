@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Home')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative py-32 text-white" style="background-image: url('/images/IMG-20260314-WA0017.jpg'); background-size: cover; background-position: center; min-height: 600px;">
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(33,51,64,0.88) 50%, rgba(33,51,64,0.4));"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center" style="min-height: 600px;">
        <div class="max-w-2xl">
            <p class="text-lg mb-4 opacity-90">Gauteng, South Africa</p>
            <h1 class="text-6xl font-bold mb-6 leading-tight">Time Saves Lives.<br /><span style="color: #D31111;">Buffer Zone</span> Saves You Both.</h1>
            <p class="text-xl mb-8 opacity-95 leading-relaxed">Professional event medical services tailored to your unique requirements. Qualified Advanced Life Support practitioners on standby — for every event, every time.</p>
            <div class="flex gap-4 flex-wrap">
                <div class="cta-pulse-wrapper">
                    <a href="tel:+27872655820" class="btn-emergency text-white px-8 py-3 rounded font-semibold" style="position: relative;">Call Now</a>
                </div>
                <a href="#contact" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded font-semibold hover:bg-white hover:text-gray-900 transition">Book us for your event</a>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <p class="text-sm opacity-75">CERTIFIED</p>
                    <p class="font-bold">ALS Certified</p>
                </div>
                <div>
                    <p class="text-sm opacity-75">PROFESSIONALS</p>
                    <p class="font-bold">ECP Practitioners</p>
                </div>
                <div>
                    <p class="text-sm opacity-75">TRANSPORT</p>
                    <p class="font-bold">Critical Care</p>
                </div>
                <div>
                    <p class="text-sm opacity-75">TRAINING</p>
                    <p class="font-bold">Workshops</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <p class="section-label mb-4">What We Do</p>
            <h2 class="text-5xl font-bold mb-6" style="color: #213340;">Comprehensive Medical Solutions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Whether it's a rugby match, a corporate gala, or a community market — we have the qualified team and equipment to keep your event safe.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="info-card">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Event Medical Services</h3>
                <p class="text-gray-700 mb-6">Full-scale medical support for events of any size — from community fetes to large-scale concerts and sports fixtures. We provide on-site medical tents, mobile response units, and dedicated triage areas.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/services/medical-cover" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                </div>
            </div>

            <div class="info-card">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Training & Workshops</h3>
                <p class="text-gray-700 mb-6">Empowering communities and corporates with life-saving skills. Certified First Aid, CPR, and AED training tailored to your team, in a format that works for you.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/services/training" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                </div>
            </div>

            <div class="info-card">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Staff Contingent</h3>
                <p class="text-gray-700 mb-6">Highly qualified medical personnel available for standby duties. We supply ALS, CCA, Dip.EMC, ECT, and ECP practitioners for film sets, long-term site placements, and corporate events.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/services/staffing" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-soft-grey">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="section-label mb-4">Who We Are</p>
            <h2 class="text-5xl font-bold mb-6" style="color: #213340;">Excellence in Emergency Care</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-lg text-gray-700 mb-8">At BufferZone EMS, we believe every event deserves a safety net of the highest caliber. Our team bridges the gap between high-stakes medical needs and the dynamic environments of live events — providing a professional, clinical, and human-centric medical "buffer zone."</p>
                
                <div class="mb-8">
                    <h3 class="font-bold mb-4" style="color: #213340;">Our Qualifications</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-3">
                            <span class="text-red-600 font-bold">✓</span>
                            <span class="text-gray-700">Advanced Life Support (ALS)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-red-600 font-bold">✓</span>
                            <span class="text-gray-700">Critical Care Assistance (CCA)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-red-600 font-bold">✓</span>
                            <span class="text-gray-700">Diploma in Emergency Medical Care (Dip.EMC)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-red-600 font-bold">✓</span>
                            <span class="text-gray-700">Emergency Care Technicians (ECT)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-red-600 font-bold">✓</span>
                            <span class="text-gray-700">Emergency Care Practitioners (ECP)</span>
                        </li>
                    </ul>
                </div>

                <a href="/about" class="btn-navy text-white px-8 py-3 rounded font-semibold inline-block">Learn More About Us</a>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="info-card text-center">
                    <p class="text-4xl font-bold" style="color: #D31111;">5+</p>
                    <p class="text-gray-700 font-semibold">Years Active</p>
                </div>
                <div class="info-card text-center">
                    <p class="text-4xl font-bold" style="color: #D31111;">200+</p>
                    <p class="text-gray-700 font-semibold">Events Covered</p>
                </div>
                <div class="info-card text-center">
                    <p class="text-4xl font-bold" style="color: #D31111;">20+</p>
                    <p class="text-gray-700 font-semibold">Qualified Staff</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Component -->
<section id="gallery">
    @livewire('gallery')
</section>

<!-- Contact Form Component -->
<section id="contact">
    @livewire('contact-form')
</section>
@endsection
