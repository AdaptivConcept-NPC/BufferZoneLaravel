@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Home')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative text-white flex items-center" style="background-image: url('/images/IMG-20260314-WA0017.jpg'); background-size: cover; background-position: center 30%; height: calc(100vh - 80px); min-height: 600px;">
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(33,51,64,0.88) 50%, rgba(33,51,64,0.4));"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <p class="text-lg mb-4 opacity-90">Gauteng, South Africa</p>
            <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(2.2rem, 5vw, 4rem); line-height: 1.1; margin-bottom: 1.25rem;">Time Saves Lives.<br /><span style="color: #D31111;">Buffer Zone</span> Saves You Both.</h1>
            <p style="font-size: 1.1rem; line-height: 1.65; opacity: 0.85; margin-bottom: 2.5rem; max-width: 520px;">Professional event medical services tailored to your unique requirements. Qualified Advanced Life Support practitioners on standby — for every event, every time.</p>
            <div class="flex gap-4 flex-wrap">
                <div class="cta-pulse-wrapper">
                    <a href="tel:+27872655820" class="btn-emergency text-white px-7 py-3.5 rounded-full font-semibold flex items-center gap-2" style="position: relative; font-size: 1rem;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Call Now</span>
                    </a>
                </div>
                <div class="cta-pulse-wrapper">
                    <a href="#contact" class="btn-outline-navy text-white px-7 py-3.5 rounded-full font-semibold" style="position: relative; font-size: 1rem; border-color: rgba(255,255,255,0.7);">Book us for your event</a>
                </div>
            </div>
            <div style="margin-top: 3.5rem; display: flex; flex-wrap: wrap; align-items: center; gap: 1rem 1.5rem;">
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">ALS Certified</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">ECP Practitioners</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">Critical Care</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <span style="width: 8px; height: 8px; background: #D31111; border-radius: 50%;"></span>
                    <span style="font-size: 0.8rem; font-weight: 600; opacity: 0.8;">Workshops</span>
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
<section id="services" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <p class="section-label mb-4">What We Do</p>
            <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.75rem); color: #213340; margin-bottom: 1.5rem; line-height: 1.15;">Comprehensive Medical Solutions</h2>
            <p style="font-size: 1rem; line-height: 1.65; color: #6B7280; max-width: 540px; margin: 0 auto;">Whether it's a rugby match, a corporate gala, or a community market — we have the qualified team and equipment to keep your event safe.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 mt-12">
            <div class="info-card p-0 overflow-hidden flex flex-col" style="max-width: 380px;">
                <!-- Image -->
                <div style="height: 170px; background: linear-gradient(135deg, #D31111 0%, #A80D0D 100%); position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(255,255,255,0.85) 100%);"></div>
                    <div style="position: relative; z-10; background: rgba(211,17,17,0.18); width: 48px; height: 48px; border-radius: 0.75rem; display: flex; align-items: center; justify-content: center;">
                        <svg class="w-6 h-6" style="color: #D31111;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
                <div style="padding: 1.75rem;">
                    <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Event Medical Services</h3>
                    <p class="text-gray-700 mb-6">Full-scale medical support for events of any size — from community fetes to large-scale concerts and sports fixtures. We provide on-site medical tents, mobile response units, and dedicated triage areas.</p>
                    <div class="cta-pulse-wrapper">
                        <a href="/services/medical-cover" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                    </div>
                </div>
            </div>

            <div class="info-card p-0 overflow-hidden flex flex-col" style="max-width: 380px;">
                <!-- Image -->
                <div style="height: 170px; background: linear-gradient(135deg, #213340 0%, #2e4a5c 100%); position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(255,255,255,0.85) 100%);"></div>
                    <div style="position: relative; z-10; background: rgba(33,51,64,0.18); width: 48px; height: 48px; border-radius: 0.75rem; display: flex; align-items: center; justify-content: center;">
                        <svg class="w-6 h-6" style="color: #213340;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                </div>
                <div style="padding: 1.75rem;">
                    <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Training & Workshops</h3>
                    <p class="text-gray-700 mb-6">Empowering communities and corporates with life-saving skills. Certified First Aid, CPR, and AED training tailored to your team, in a format that works for you.</p>
                    <div class="cta-pulse-wrapper">
                        <a href="/services/training" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                    </div>
                </div>
            </div>

            <div class="info-card p-0 overflow-hidden flex flex-col" style="max-width: 380px;">
                <!-- Image -->
                <div style="height: 170px; background: linear-gradient(135deg, #D31111 0%, #213340 100%); position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 40%, rgba(255,255,255,0.85) 100%);"></div>
                    <div style="position: relative; z-10; background: rgba(211,17,17,0.18); width: 48px; height: 48px; border-radius: 0.75rem; display: flex; align-items: center; justify-content: center;">
                        <svg class="w-6 h-6" style="color: #D31111;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM4 20h5v-2a3 3 0 00-.056-1.487M7 10a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                </div>
                <div style="padding: 1.75rem;">
                    <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Staff Contingent</h3>
                    <p class="text-gray-700 mb-6">Highly qualified medical personnel available for standby duties. We supply ALS, CCA, Dip.EMC, ECT, and ECP practitioners for film sets, long-term site placements, and corporate events.</p>
                    <div class="cta-pulse-wrapper">
                        <a href="/services/staffing" class="btn-emergency text-white px-6 py-2 rounded inline-block" style="position: relative;">Inquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="section-label mb-4">Who We Are</p>
            <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.6rem); color: #213340; margin-bottom: 0.5rem; line-height: 1.15;">Excellence in Emergency Care</h2>
        </div>
        
        <div style="display: flex; flex-direction: column; gap: 3.5rem; align-items: center;" class="lg:flex-row">
            <div style="width: 100%; padding: 0;" class="lg:w-1/2">
                <p style="color: #6B7280; font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem;">At BufferZone EMS, we believe every event deserves a safety net of the highest caliber. Our team bridges the gap between high-stakes medical needs and the dynamic environments of live events — providing a professional, clinical, and human-centric medical "buffer zone."</p>
                
                <div class="mb-8">
                    <h3 class="font-bold mb-4" style="color: #213340;">Our Qualifications</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: #D31111;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></path></svg>
                            <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">Advanced Life Support (ALS)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: #D31111;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></path></svg>
                            <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">Critical Care Assistance (CCA)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: #D31111;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></path></svg>
                            <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">Diploma in Emergency Medical Care (Dip.EMC)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: #D31111;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></path></svg>
                            <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">Emergency Care Technicians (ECT)</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 flex-shrink-0" style="color: #D31111;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></path></svg>
                            <span style="color: #213340; font-weight: 500; font-size: 0.9rem;">Emergency Care Practitioners (ECP)</span>
                        </li>
                    </ul>
                </div>

                <div class="cta-pulse-wrapper">
                    <a href="/about" class="btn-navy text-white px-8 py-3 rounded-full font-semibold inline-block" style="position: relative;">Learn More About Us</a>
                </div>
            </div>
            <div style="position: relative; width: 100%; display: none;" class="lg:block lg:w-1/2 lg:h-auto">
                <div style="width: 100%; height: 420px; border-radius: 1rem; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.12);">
                    <img src="/images/IMG-20260314-WA0017.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="Buffer Zone EMS Team">
                </div>
                <!-- Floating Stats Card -->
                <div style="position: absolute; bottom: -1.5rem; right: -1rem; background: #D31111; color: white; border-radius: 1rem; padding: 1.25rem; z-index: 10; box-shadow: 0 8px 24px rgba(211,17,17,0.35); width: 200px;">
                    <p style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 2.2rem; line-height: 1; margin-bottom: 0.25rem;">200+</p>
                    <p style="font-size: 0.75rem; font-weight: 600; opacity: 0.85;">Events Covered</p>
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
