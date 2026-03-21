{{--
    ============================================================
    Section  : Our Global Locations
    File     : resources/views/sections/locations.blade.php
    CSS      : resources/css/custom.css  (locations-four-cards- prefix)
    ============================================================
--}}

<section class="locations-four-cards-section">
    <div class="container">

        {{-- Eyebrow --}}
        <p class="locations-four-cards-eyebrow">Our Global Locations</p>

        {{-- Cards Row --}}
        <div class="row g-3">

            @php
                /*
                |----------------------------------------------
                | HOW TO UPDATE:
                | 'image'   → public/images/your-file.jpg
                | 'country' → Country label (top of card)
                | 'city'    → Main city heading
                | 'address' → Address shown on hover
                |----------------------------------------------
                */
                $locations = [
                    [
                        'image'   => 'images/plm-home-locations1.jpg',
                        'country' => 'India',
                        'city'    => 'Bangalore',
                        'address' => '123 MG Road, Bangalore',
                    ],
                    [
                        'image'   => 'images/plm-home-locations2.jpg',
                        'country' => 'Ireland',
                        'city'    => 'Dublin',
                        'address' => '17 Adelaide Road, Dublin',
                    ],
                    [
                        'image'   => 'images/plm-home-locations3.jpg',
                        'country' => 'UK',
                        'city'    => 'London',
                        'address' => '25 King Street, London',
                    ],
                    [
                        'image'   => 'images/plm-home-locations4.jpg',
                        'country' => 'Australia',
                        'city'    => 'Sydney',
                        'address' => '10 Harbour Bridge Rd, Sydney',
                    ],
                ];
            @endphp

            @foreach($locations as $location)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="locations-four-cards-card">

                        {{-- Background Image --}}
                        <img
                            src="{{ asset($location['image']) }}"
                            alt="{{ $location['city'] }}"
                            class="locations-four-cards-img"
                            loading="lazy"
                        >

                        {{-- Gradient Overlay --}}
                        <div class="locations-four-cards-gradient"></div>

                        {{-- Card Content --}}
                        <div class="locations-four-cards-body">
                            <span class="locations-four-cards-country">
                                {{ $location['country'] }}
                            </span>
                            <h3 class="locations-four-cards-city">
                                {{ $location['city'] }}
                            </h3>
                            <p class="locations-four-cards-address">
                                {{ $location['address'] }}
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>{{-- /row --}}
    </div>{{-- /container --}}
</section>