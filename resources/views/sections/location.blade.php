{{-- ============================================================
     Location Section — Global Offices
     Performance: Cached, optimized for <5s load
     Security: XSS safe, secure image loading
     ============================================================ --}}

@php
    // Security: Define location data server-side
    $locations = [
        [
            'country' => 'INDIA',
            'address' => '10 Residency Road, Bangalore, 560025',
            'image' => 'images/location-india.jpg',
            'flag' => '🇮🇳',
            'color_class' => 'plm-location-india'
        ],
        [
            'country' => 'IRELAND',
            'address' => '13 Adelaide Road, Dublin 2, D02 P950',
            'image' => 'images/location-ireland.jpg',
            'flag' => '🇮🇪',
            'color_class' => 'plm-location-ireland'
        ],
        [
            'country' => 'UK',
            'address' => '30 Churchill Place, London, E14 5RE',
            'image' => 'images/location-uk.jpg',
            'flag' => '🇬🇧',
            'color_class' => 'plm-location-uk'
        ]
    ];
@endphp

{{-- Cache section for 24 hours (1440 minutes) --}}


<section class="plm-location-section" id="plmLocationSection" aria-label="Our Global Locations">
    
    {{-- Location Cards Container --}}
    <div class="plm-location-container">
        <div class="plm-location-wrapper">
            
            @foreach($locations as $index => $location)
            
            {{-- Location Card with Diagonal Design --}}
            <div class="plm-location-card {{ $location['color_class'] }}" 
                 data-location="{{ $location['country'] }}"
                 role="article"
                 aria-label="{{ $location['country'] }} office location">
                
                {{-- Background Diagonal Shape --}}
                <div class="plm-location-bg" aria-hidden="true">
                    <svg class="plm-diagonal-shape" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="0,0 100,0 100,100 30,100" fill="currentColor"/>
                    </svg>
                </div>

                {{-- Content --}}
                <div class="plm-location-content">
                    
                    {{-- Left: Image --}}
                    <div class="plm-location-image-wrapper">
                        <div class="plm-location-image-container">
                            <img 
                                src="{{ asset($location['image']) }}" 
                                alt="{{ $location['country'] }} office"
                                class="plm-location-image"
                                loading="lazy"
                                width="150"
                                height="150"
                                onerror="this.src='{{ asset('images/placeholder-office.jpg') }}'">
                            {{-- Decorative circle border --}}
                            <div class="plm-image-border" aria-hidden="true"></div>
                        </div>
                    </div>

                    {{-- Right: Location Info --}}
                    <div class="plm-location-info">
                        <h3 class="plm-location-country">
                            <span class="plm-location-flag" aria-hidden="true">{{ $location['flag'] }}</span>
                            {{ $location['country'] }}
                        </h3>
                        <p class="plm-location-address">
                            <svg class="plm-address-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            {{ $location['address'] }}
                        </p>
                        
                        {{-- Call to Action --}}
                        <a href="https://maps.google.com/?q={{ urlencode($location['address']) }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="plm-location-btn"
                           aria-label="View {{ $location['country'] }} office on Google Maps">
                            <span>View on Map</span>
                            <svg class="plm-btn-arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 16 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 12l4-4-4-4"/>
                            </svg>
                        </a>
                    </div>

                </div>

                {{-- Hover Overlay Effect --}}
                <div class="plm-location-overlay" aria-hidden="true"></div>

            </div>

            @endforeach

        </div>
    </div>

</section>

@ecs_hmlt
{{-- Performance: Preload critical location images --}}
@push('styles')
@foreach($locations as $location)
<link rel="preload" as="image" href="{{ asset($location['image']) }}">
@endforeach
@endpush