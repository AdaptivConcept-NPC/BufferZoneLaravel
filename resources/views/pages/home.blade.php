@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Home')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative text-white flex items-center" style="background-image: url('{{ asset("assets/images/IMG-20260314-WA0017.jpg") }}'); background-size: cover; background-position: center 30%; height: calc(100vh - 80px); min-height: 600px;">
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(33,51,64,0.88) 50%, rgba(33,51,64,0.4));"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <p class="text-lg mb-4 opacity-90">{!! cms('home_location_label', 'Gauteng, South Africa') !!}</p>
            <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(2.2rem, 5vw, 4rem); line-height: 1.1; margin-bottom: 1.25rem;">{!! cms('home_hero_title', 'Time Saves Lives.<br /><span style="color: #D31111;">Buffer Zone</span> Saves You Both.') !!}</h1>
            <p style="font-size: 1.1rem; line-height: 1.65; opacity: 0.85; margin-bottom: 2.5rem; max-width: 520px;">{!! cms('home_hero_subtitle', 'Professional event medical services tailored to your unique requirements. Qualified Advanced Life Support practitioners on standby — for every event, every time.') !!}</p>
            <div class="flex gap-4 flex-wrap">
                <div class="cta-pulse-wrapper">
                    <a href="tel:+27872655820" class="btn-emergency text-white px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" style="position: relative; font-size: 1rem;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call Now</span>
                    </a>
                </div>
                <div class="cta-pulse-wrapper" style="--pulse-color: rgba(255,255,255,0.7);">
                    <a href="#contact" class="btn-outline-navy flex items-center gap-2 px-7 py-3.5 text-base" style="border-color: rgba(255,255,255,0.7); color: #fff; position: relative;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="m9 16 2 2 4-4"/></svg>
                        Book us for your event
                    </a>
                </div>
            </div>
            <div style="margin-top: 3.5rem; display: flex; flex-wrap: wrap; align-items: center; gap: 1rem 1.5rem;">
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">{!! cms('home_stat_cert', 'ALS Certified') !!}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">{!! cms('home_stat_ecp', 'ECP Practitioners') !!}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">{!! cms('home_stat_care', 'Critical Care') !!}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">{!! cms('home_stat_work', 'Workshops') !!}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll Indicator -->
    <div style="position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%); display: flex; flex-direction: column; align-items: center; gap: 0.25rem; opacity: 0.5; animation: bounce 2s infinite;">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
</section>

<style>
    @keyframes bounce {
        0%, 100% { transform: translateX(-50%) translateY(0); }
        50% { transform: translateX(-50%) translateY(0.5rem); }
    }
</style>

<!-- Services Section -->
<section id="services" class="section-py" style="background: #F4F4F4;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14">
            <span class="section-label">What We Do</span>
            <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.75rem); color: #213340; margin-top: 0.5rem; line-height: 1.15;">
                Comprehensive Medical Solutions
            </h2>
            <x-pulse-bar class="mx-auto" />
            <p style="color: #6B7280; max-width: 540px; margin: 1rem auto 0; font-size: 1rem; line-height: 1.65;">
                {!! cms('home_services_subtitle', 'Whether it\'s a rugby match, a corporate gala, or a community market — we have the qualified team and equipment to keep your event safe.') !!}
            </p>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            <!-- Service 1 -->
            <div class="group relative overflow-hidden rounded-3xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all duration-500">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset(cms('home_service_1_image', 'assets/images/IMG-20260314-WA0005.jpg')) }}" alt="Event Medical Services" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                </div>
                <div class="p-8">
                    <div class="w-12 h-12 rounded-xl bg-[#D31111]/10 flex items-center justify-center mb-6">
                        <i class="fas fa-ambulance text-[#D31111] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Event Medical Services</h3>
                    <p class="text-[#8BA4B4] text-sm leading-relaxed mb-6">Full-scale medical support for events of all sizes, from rapid response teams to mobile clinics.</p>
                    <a href="{{ route('services.ems') }}" class="text-[#D31111] text-xs font-bold uppercase tracking-wider flex items-center gap-2 group-hover:gap-4 transition-all">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="group relative overflow-hidden rounded-3xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all duration-500">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset(cms('home_service_2_image', 'assets/images/IMG-20260314-WA0009.jpg')) }}" alt="Advanced Training" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                </div>
                <div class="p-8">
                    <div class="w-12 h-12 rounded-xl bg-[#D31111]/10 flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-[#D31111] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Training & Workshops</h3>
                    <p class="text-[#8BA4B4] text-sm leading-relaxed mb-6">Empowering teams with life-saving skills through accredited first aid and emergency response training.</p>
                    <a href="{{ route('services.training') }}" class="text-[#D31111] text-xs font-bold uppercase tracking-wider flex items-center gap-2 group-hover:gap-4 transition-all">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="group relative overflow-hidden rounded-3xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all duration-500">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset(cms('home_service_3_image', 'assets/images/IMG-20260314-WA0018.jpg')) }}" alt="Professional Staffing" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                </div>
                <div class="p-8">
                    <div class="w-12 h-12 rounded-xl bg-[#D31111]/10 flex items-center justify-center mb-6">
                        <i class="fas fa-user-md text-[#D31111] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Professional Staffing</h3>
                    <p class="text-[#8BA4B4] text-sm leading-relaxed mb-6">Qualified ILS and ALS practitioners available for long-term site placements and critical care standby.</p>
                    <a href="{{ route('services.staffing') }}" class="text-[#D31111] text-xs font-bold uppercase tracking-wider flex items-center gap-2 group-hover:gap-4 transition-all">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-py" style="background: #fff;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-14 items-center">
            <!-- Image side -->
            <div class="w-full lg:w-1/2 relative">
                <div class="rounded-2xl overflow-hidden" style="box-shadow: 0 20px 40px rgba(0,0,0,0.12);">
                    <img src="{{ asset(cms('home_about_image', 'assets/images/IMG-20260314-WA0018.jpg')) }}" alt="BufferZone EMS team in action" class="w-full h-[420px] object-cover" />
                </div>
                <!-- Floating Stat Card -->
                <div class="absolute -bottom-6 -right-4 rounded-2xl p-5 z-10 hidden md:block" style="background: #D31111; color: #fff; box-shadow: 0 8px 24px rgba(211,17,17,0.35);">
                    <p style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 2.2rem; line-height: 1;">5+</p>
                    <p style="font-size: 0.75rem; font-weight: 600; opacity: 0.85; margin-top: 0.25rem;">Years of Experience</p>
                </div>
            </div>

            <!-- Text side -->
            <div class="w-full lg:w-1/2">
                <span class="section-label">Who We Are</span>
                <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.6rem); color: #213340; margin-top: 0.5rem; line-height: 1.15;">
                    {!! cms('home_about_title', 'Excellence in Emergency Care') !!}
                </h2>
                <x-pulse-bar />
                <p style="color: #6B7280; font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem; margin-top: 1rem;">
                    {!! cms('home_about_text', 'At BufferZone EMS, we believe every event deserves a safety net of the highest caliber. Our team bridges the gap between high-stakes medical needs and the dynamic environments of live events — providing a professional, clinical, and human-centric medical "buffer zone."') !!}
                </p>

                <!-- Qualifications -->
                @php
                    $quals = [
                        'Advanced Life Support (ALS)',
                        'Critical Care Assistance (CCA)',
                        'Diploma in Emergency Medical Care (Dip.EMC)',
                        'Emergency Care Technicians (ECT)',
                        'Emergency Care Practitioners (ECP)',
                    ];
                @endphp
                <ul class="space-y-2 mb-8">
                    @foreach($quals as $q)
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 flex-shrink-0" style="color: #D31111;"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2-1 4-2 7-2 2.5 0 4.5 1 6.5 2a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                        <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">{{ $q }}</span>
                    </li>
                    @endforeach
                </ul>

                <!-- Stats row -->
                @php
                    $stats = [
                        ['label' => 'Years Active', 'value' => '5+'],
                        ['label' => 'Events Covered', 'value' => '200+'],
                        ['label' => 'Qualified Staff', 'value' => '20+'],
                    ];
                @endphp
                <div class="flex flex-wrap gap-8 pt-6" style="border-top: 1px solid #E5E7EB;">
                    @foreach($stats as $stat)
                    <div>
                        <p style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 2rem; color: #213340; line-height: 1;">
                            {{ $stat['value'] }}
                        </p>
                        <p style="color: #6B7280; font-size: 0.8rem; font-weight: 600; margin-top: 0.25rem;">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                    @endforeach
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
@livewire('contact-form')
@endsection
