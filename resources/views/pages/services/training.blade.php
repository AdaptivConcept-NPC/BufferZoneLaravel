@extends('layouts.app')

@section('page_title', 'Training & Workshops - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Our Services</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Training & Workshops</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Equipping the next generation of responders with life-saving skills.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="info-card">
                <div class="text-3xl font-bold mb-2" style="color: #D31111;">1 Day</div>
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Basic Life Support (BLS)</h3>
                <p class="text-gray-700 mb-6">CPR and first aid essentials for everyone.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-4 py-2 rounded inline-block" style="position: relative;">Enroll Now</a>
                </div>
            </div>

            <div class="info-card">
                <div class="text-3xl font-bold mb-2" style="color: #D31111;">3 Days</div>
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Advanced Life Support (ALS)</h3>
                <p class="text-gray-700 mb-6">Advanced emergency care for medical professionals.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-4 py-2 rounded inline-block" style="position: relative;">Enroll Now</a>
                </div>
            </div>

            <div class="info-card">
                <div class="text-3xl font-bold mb-2" style="color: #D31111;">2 Days</div>
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">First Aid Level 1 & 2</h3>
                <p class="text-gray-700 mb-6">Certified first aid training for corporate teams.</p>
                <div class="cta-pulse-wrapper">
                    <a href="/#contact" class="btn-emergency text-white px-4 py-2 rounded inline-block" style="position: relative;">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center mt-20">
            <div class="img-container h-80">
                <img src="{{ asset('assets/images/stock/medical_training.png') }}" alt="Medical Training Session" class="img-stock">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Hands-On Excellence</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">Our workshops are designed to be immersive and practical. We use high-fidelity mannikins and real-world scenarios to ensure all participants walk away with the confidence to act in an emergency.</p>
                <div class="flex items-center gap-4 text-[#D31111] font-bold">
                    <span class="w-8 h-1 bg-[#D31111] rounded-full"></span>
                    Certified Instructors
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
