

<style>

@media (min-width: 768px) and (max-width: 834px) {
  #mi-og-30-22 {
      width: 30%;
  }
}

@media (min-width: 835px) and (max-width: 1024px) {
#mi-og-30-22 {
      width: 30%;
  }
}
</style>


<section class="loc-section" id="locations-section" aria-labelledby="loc-heading">
    <div class="container loc-container">

        {{-- Section heading --}}
        <p class="loc-heading" id="loc-heading">Our locations:</p>

        {{-- Locations row --}}
        <div class="row g-4 loc-row justify-content-center">

            @php
                $locations = [
                    [
                        'country' => 'India',
                        'city'    => 'Thane',
                        'address' => "",
                        'image'   => 'images/plm-home-locationsthane.jpg',
                        'alt'     => 'Bangalore city skyline',
                    ],
                    [
                        'country' => 'USA',
                        'city'    => 'Dover',
                        'address' => "",
                        'image'   => 'images/plm-home-locationsUsa.jpg',
                        'alt'     => '8 The Green #20190',
                    ],
                    [
                        'country' => 'UK',
                        'city'    => 'Reading',
                        'address' => "",
                        'image'   => 'images/plm-home-locationsuk.jpg',
                        'alt'     => 'London aerial view',
                    ],
                   
                ];
            @endphp

            @foreach ($locations as $loc)
                <div class="col-12 col-sm-6 col-lg-3" id="mi-og-30-22">
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