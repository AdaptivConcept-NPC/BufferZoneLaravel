@extends('layouts.app')

@section('page_title', 'Buffer Zone EMS - About')

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <p class="section-label mb-4">Who We Are</p>
            <h1 class="text-5xl font-bold mb-6" style="color: #213340;">About Us</h1>
            <p class="text-xl text-gray-600 max-w-2xl">Excellence in Emergency Medical Services with a commitment to Gauteng's safety.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="text-3xl font-bold mb-6" style="color: #213340;">Our Mission</h2>
                <p class="text-lg text-gray-700 mb-6">At Buffer Zone EMS, we believe that 'Time Saves Lives'. Our mission is to provide rapid, professional, and reliable emergency medical support when every second counts.</p>

                <div class="info-card">
                    <h3 class="text-xl font-bold mb-3" style="color: #213340;">Integrity & Excellence</h3>
                    <p class="text-gray-700">We uphold the highest standards of medical care and ethical service, ensuring that every patient receives the best possible treatment.</p>
                </div>

                <div class="info-card">
                    <h3 class="text-xl font-bold mb-3" style="color: #213340;">B-BBEE Status & Directors Experience</h3>
                    <p class="text-gray-700">We are a Level 1 B-BBEE Contributor Directors experience in EMS: 3 decades of combined experience in EMS, Former HPCSA board membership, former Department of Health Licensing and Inspectorate Authority inspector.</p>
                </div>
            </div>
            <div>
                <div class="bg-soft-grey rounded-lg h-80 flex items-center justify-center">
                    <p class="text-gray-500">Professional Team Shot Placeholder</p>

                </div>
                <h5>Hi, I am [Director Name]</h5>
                <p class="text-gray-700">[Director Title]</p>
                <p class="text-gray-700">[Director Story]</p>
            </div>
        </div>
    </div>
</section>
@endsection