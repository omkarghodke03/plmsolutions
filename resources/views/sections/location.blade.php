{{--
    =====================================================
    LOCATIONS SECTION
    resources/views/sections/locations.blade.php
    Usage: @include('sections.locations')
    =====================================================
--}}

<section class="loc-section" id="locations-section" aria-labelledby="loc-heading">
    <div class="container loc-container">

        {{-- Section heading --}}
        <p class="loc-heading" id="loc-heading">Our locations:</p>

        {{-- Locations row --}}
        <div class="row g-4 loc-row">

            @php
                $locations = [
                    [
                        'country' => 'India',
                        'city'    => 'Thane',
                        'address' => "202 Siddhashram CHS, Gokhale Road",
                        'image'   => 'images/plm-home-locations1.jpg',
                        'alt'     => 'Bangalore city skyline',
                    ],
                    [
                        'country' => 'USA',
                        'city'    => 'Dover',
                        'address' => "8 The Green #20190",
                        'image'   => 'images/plm-home-locations2.jpg',
                        'alt'     => '8 The Green #20190',
                    ],
                    [
                        'country' => 'UK',
                        'city'    => 'Reading',
                        'address' => "Davidson House, Forbury Square",
                        'image'   => 'images/plm-home-locations3.jpg',
                        'alt'     => 'London aerial view',
                    ],
                   
                ];
            @endphp

            @foreach ($locations as $loc)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="loc-card">

                        {{-- Circle image --}}
                        <div class="loc-card__img-wrap" aria-hidden="true">
                            <img
                                src="{{ asset($loc['image']) }}"
                                alt="{{ e($loc['alt']) }}"
                                class="loc-card__img"
                                loading="lazy"
                            >
                        </div>

                        {{-- Text --}}
                        <div class="loc-card__body">
                            <span class="loc-card__country">{{ e($loc['country']) }}</span>
                            <h3 class="loc-card__city">{{ e($loc['city']) }}</h3>
                            <address class="loc-card__address">
                                {!! nl2br(e($loc['address'])) !!}
                            </address>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>{{-- /.row --}}

    </div>{{-- /.container --}}
</section>