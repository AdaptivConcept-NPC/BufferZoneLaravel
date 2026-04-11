<footer style="background: #213340; color: #fff;">
    <!-- Top CTA Banner -->
    <div style="background: #D31111; padding: 1.5rem 2rem;">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 1.1rem; margin: 0;">
                Need Medical Cover for Your Event?
            </p>
            <div class="cta-pulse-wrapper" style="--pulse-color: rgba(255,255,255,0.8);">
                <a href="/#contact" style="background: #fff; color: #D31111; font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 0.85rem; padding: 0.6rem 1.6rem; border-radius: 50px; text-decoration: none; white-space: nowrap; position: relative; display: inline-block;">
                    Book a Consultation
                </a>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Brand Col -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <a href="/" class="flex items-center gap-2 no-underline">
                        <img src="{{ asset('assets/icon-tr.png') }}" alt="Buffer Zone EMS" style="height: 2.5rem; width: auto;" />
                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.2rem; letter-spacing: -0.02em; color: #fff; line-height: 1.2;">Buffer Zone EMS</div>
                            <div style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 0.4rem; letter-spacing: 0.25em; color: #D31111; line-height: 1;">PARAMEDICS | EVENTS | TRAINING</div>
                        </div>
                    </a>
                </div>
                <p style="color: rgba(255,255,255,0.6); font-size: 0.875rem; line-height: 1.7; margin-bottom: 1.25rem;">
                    Time saves lives. BufferZone saves you both. Professional event medical services across Gauteng and beyond.
                </p>
                <!-- Social -->
                <div class="flex gap-3">
                    <a href="#" style="width: 2.2rem; height: 2.2rem; border-radius: 50%; border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); transition: all 0.2s;" onmouseover="this.style.color='#fff'; this.style.borderColor='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" style="width: 2.2rem; height: 2.2rem; border-radius: 50%; border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); transition: all 0.2s;" onmouseover="this.style.color='#fff'; this.style.borderColor='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <a href="#" style="width: 2.2rem; height: 2.2rem; border-radius: 50%; border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); transition: all 0.2s;" onmouseover="this.style.color='#fff'; this.style.borderColor='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'; this.style.borderColor='rgba(255,255,255,0.15)'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Link Columns -->
            @php
                $footerLinks = [
                    'Company' => [
                        ['label' => 'About Us', 'path' => '/about'],
                        ['label' => 'Our Team', 'path' => '/team'],
                        ['label' => 'Careers', 'path' => '/careers'],
                        ['label' => 'Partners', 'path' => '/partners'],
                    ],
                    'Services' => [
                        ['label' => 'Event Medical Coverage', 'path' => '/services/medical-cover'],
                        ['label' => 'Training & Workshops', 'path' => '/services/training'],
                        ['label' => 'Staff Contingent', 'path' => '/services/staffing'],
                        ['label' => 'Corporate Packages', 'path' => '/services/corporate'],
                    ],
                    'Events' => [
                        ['label' => 'Sports & Athletics', 'path' => '/events/sports'],
                        ['label' => 'Concerts & Festivals', 'path' => '/events/concerts'],
                        ['label' => 'Corporate Events', 'path' => '/events/corporate'],
                        ['label' => 'Community Events', 'path' => '/events/community'],
                    ]
                ];
            @endphp

            @foreach($footerLinks as $heading => $links)
            <div>
                <h4 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 0.82rem; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 1rem; margin-top: 0;">
                    {{ $heading }}
                </h4>
                <ul class="flex flex-col gap-2.5 p-0 m-0" style="list-style-type: none;">
                    @foreach($links as $link)
                    <li>
                        <a href="{{ url($link['path']) }}" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;" onmouseover="this.style.color='#D31111'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3" style="border-top: 1px solid rgba(255,255,255,0.08);">
            <p style="color: rgba(255,255,255,0.35); font-size: 0.8rem; margin: 0;">
                &copy; {{ date('Y') }} BufferZone EMS. All rights reserved.
            </p>
            <div class="flex gap-5">
                @foreach(['Privacy Policy', 'Terms of Service'] as $t)
                <a href="#" style="color: rgba(255,255,255,0.35); font-size: 0.8rem; text-decoration: none;">{{ $t }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
