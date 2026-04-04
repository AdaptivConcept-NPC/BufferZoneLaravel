@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - Team')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Meet Them</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Our Team</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Meet the elite professionals behind Buffer Zone EMS.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="info-card text-center">
                <div class="w-24 h-24 mx-auto mb-4 bg-soft-grey rounded-full flex items-center justify-center">
                    <span class="text-gray-400">Photo</span>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: #213340;">Dr. Sarah Johnson</h3>
                <p class="text-red-600 font-semibold mb-3">Medical Director</p>
                <p class="text-gray-700">Expert in trauma care with 15 years experience.</p>
            </div>

            <div class="info-card text-center">
                <div class="w-24 h-24 mx-auto mb-4 bg-soft-grey rounded-full flex items-center justify-center">
                    <span class="text-gray-400">Photo</span>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: #213340;">Marcus Smith</h3>
                <p class="text-red-600 font-semibold mb-3">Operations Manager</p>
                <p class="text-gray-700">Former Paramedic, managing field operations.</p>
            </div>

            <div class="info-card text-center">
                <div class="w-24 h-24 mx-auto mb-4 bg-soft-grey rounded-full flex items-center justify-center">
                    <span class="text-gray-400">Photo</span>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color: #213340;">Lerato Modise</h3>
                <p class="text-red-600 font-semibold mb-3">Lead Instructor</p>
                <p class="text-gray-700">Certified trainer for ILS and ALS courses.</p>
            </div>
        </div>
    </div>
</section>
@endsection
