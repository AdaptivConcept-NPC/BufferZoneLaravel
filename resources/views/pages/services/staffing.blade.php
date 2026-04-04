@extends('layouts.app')

@section('page_title', 'Staff Contingent - Buffer Zone EMS')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Our Services</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">Staff Contingent</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Providing high-end medical professionals for temporary assignments and large-scale operations.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="info-card border-t-4" style="border-top-color: #D31111;">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">ALS Paramedics</h3>
                <p class="text-gray-700 mb-6">Experienced advanced life support providers for critical care.</p>
                <a href="/#contact" class="btn-outline-navy px-4 py-2 rounded text-sm font-semibold">Request Staff</a>
            </div>

            <div class="info-card border-t-4" style="border-top-color: #D31111;">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">BLS Medics</h3>
                <p class="text-gray-700 mb-6">Basic life support personnel for event monitoring.</p>
                <a href="/#contact" class="btn-outline-navy px-4 py-2 rounded text-sm font-semibold">Request Staff</a>
            </div>

            <div class="info-card border-t-4" style="border-top-color: #D31111;">
                <h3 class="text-2xl font-bold mb-4" style="color: #213340;">Trauma Nurses</h3>
                <p class="text-gray-700 mb-6">Skilled clinical nurses for on-site medical tents.</p>
                <a href="/#contact" class="btn-outline-navy px-4 py-2 rounded text-sm font-semibold">Request Staff</a>
            </div>
        </div>
    </div>
</section>
@endsection
