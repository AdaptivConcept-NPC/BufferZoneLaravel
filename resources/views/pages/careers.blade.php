@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Careers')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Join Our Team</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Careers</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Join our dedicated team of lifesavers. Excellence deserves excellence.</p>
        </div>

        <div class="grid md:grid-cols-1 gap-6">
            <div class="info-card border-l-4" style="border-left-color: #D31111;">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="inline-block px-3 py-1 bg-soft-grey rounded-full text-sm font-semibold" style="color: #213340;">Full-time</span>
                        <h3 class="text-2xl font-bold mt-4 mb-2" style="color: #213340;">Registered ALS Paramedic</h3>
                        <p class="text-gray-600 mb-4">Gauteng-based</p>
                    </div>
                    <a href="/#contact" class="btn-emergency text-white px-6 py-2 rounded whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="info-card border-l-4" style="border-left-color: #D31111;">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="inline-block px-3 py-1 bg-soft-grey rounded-full text-sm font-semibold" style="color: #213340;">Part-time</span>
                        <h3 class="text-2xl font-bold mt-4 mb-2" style="color: #213340;">Medical Training Instructor</h3>
                        <p class="text-gray-600 mb-4">Corporate/Field</p>
                    </div>
                    <a href="/#contact" class="btn-emergency text-white px-6 py-2 rounded whitespace-nowrap">Apply Now</a>
                </div>
            </div>

            <div class="info-card border-l-4" style="border-left-color: #D31111;">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="inline-block px-3 py-1 bg-soft-grey rounded-full text-sm font-semibold" style="color: #213340;">Operations</span>
                        <h3 class="text-2xl font-bold mt-4 mb-2" style="color: #213340;">Shift Coordinator</h3>
                        <p class="text-gray-600 mb-4">Head Office</p>
                    </div>
                    <a href="/#contact" class="btn-emergency text-white px-6 py-2 rounded whitespace-nowrap">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
