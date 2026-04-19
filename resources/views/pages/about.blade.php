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
            <!-- CEO's profile -->
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
            <div class="space-y-6">
                <div class="relative">
                    <div class="img-container h-80 rounded-2xl overflow-hidden border border-[#1E3040]">
                        <img src="{{ asset('assets/images/stock/ems_team_shot.png') }}" alt="Founder of Buffer Zone EMS" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="pt-2">
                    <h5 class="text-2xl font-black mb-2" style="color: #213340; font-family: 'Montserrat', sans-serif;">
                        Mr. Tshepiso Mokoena
                    </h5>
                    <p class="text-[0.65rem] font-bold text-[#D31111] uppercase tracking-widest mb-6">Founder & CEO, Registered Paramedic</p>
                    
                    <div class="relative pl-6 border-l-4 border-[#E5E7EB]">
                        <p class="text-gray-600 leading-relaxed italic">
                            "I am a registered Paramedic with over 15 years of experience in the Emergency Medical Services industry. I have worked in various settings, including private ambulance services, hospital emergency departments, and event medical cover. I am passionate about providing quality emergency medical care to the community and believe that everyone deserves access to timely and professional medical attention."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- staff contingent -->
        <div class="mt-24 mb-32">
            <div class="text-center mb-16">
                <span class="section-label">Our Leadership</span>
                <h2 class="text-4xl font-black mt-4" style="color: #213340;">Senior Personnel & Management</h2>
                <p class="text-[#8BA4B4] mt-2 font-medium">The experts behind Gauteng's most reliable medical buffer zone.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @php
                    $staff = [
                        ['name' => 'Kwesi Mensah', 'title' => 'Operations Director', 'img' => 'kwesi.png'],
                        ['name' => 'Amara Okafor', 'title' => 'Head of Clinical Nursing', 'img' => 'amara.png'],
                        ['name' => 'Jumaane Zulu', 'title' => 'Lead Paramedic (ILS)', 'img' => 'jumaane.png'],
                        ['name' => 'Nia Tembo', 'title' => 'Quality & Compliance', 'img' => 'nia.png'],
                        ['name' => 'Zola Mbeki', 'title' => 'Logistics & Fleet', 'img' => 'zola.png'],
                    ];
                @endphp

                @foreach($staff as $person)
                <div class="group">
                    <div class="relative overflow-hidden rounded-3xl bg-[#0D1B22] border border-[#1E3040] hover:border-[#D31111] transition-all duration-500 aspect-[4/5] mb-4">
                        <img src="{{ asset('assets/images/staff/' . $person['img']) }}" alt="{{ $person['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#0D1B22] to-transparent p-6 translate-y-2 group-hover:translate-y-0 transition-all">
                            <h4 class="text-white font-bold text-lg leading-tight">{{ $person['name'] }}</h4>
                            <p class="text-[#D31111] text-[0.65rem] font-bold uppercase tracking-widest mt-1">{{ $person['title'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <p class="text-gray-700 text-center col-span-full mt-8">🚩This is a placeholder for the staff contingent. We will update this section with the actual staff contingent information as soon as possible.</p>
            </div>
        </div>
    </div>
</section>
@endsection