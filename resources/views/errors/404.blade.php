@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-[#0A141A] pt-40 pb-24 flex items-center justify-center relative overflow-hidden">
    <!-- Abstract Design Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 right-0 w-96 h-96 bg-[#D31111]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 left-1/4 w-96 h-96 bg-[#10B981]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 style="font-family: 'Montserrat', sans-serif;" class="text-[10rem] md:text-[14rem] font-black text-transparent bg-clip-text bg-gradient-to-b from-[#1E3040] to-[#0A141A] leading-none mb-0 drop-shadow-2xl">404</h1>
            
            <div class="-mt-16 md:-mt-24 mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-[#EE2A2A] to-[#D31111] rounded-2xl flex items-center justify-center mx-auto shadow-[0_10px_30px_rgba(211,17,17,0.3)] transform rotate-12 mb-8 border border-white/20">
                    <i class="fas fa-exclamation-triangle text-white text-3xl drop-shadow-md"></i>
                </div>
            </div>

            <h2 class="text-3xl md:text-5xl font-black text-white mb-6 uppercase tracking-tight">Mission Abort. <br/><span class="text-[#8BA4B4]">Page Not Found.</span></h2>
            
            <p class="text-[#8BA4B4] text-lg mb-10 leading-relaxed font-medium">The medical resource or page you are looking for has been moved, removed, or is currently out of operation zone.</p>
            
            <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-3 bg-[#D31111] text-white px-10 py-5 rounded-xl font-bold uppercase tracking-widest text-sm hover:bg-[#EE2A2A] transition-all hover:-translate-y-1 shadow-[0_10px_30px_rgba(211,17,17,0.3)] group border border-red-400/30">
                <i class="fas fa-home group-hover:-translate-x-1 transition-transform"></i> Return to Base Station
            </a>
        </div>
    </div>
</main>
@endsection
