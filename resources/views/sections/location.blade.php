

<style>
.locations-content {
    width: 100%;
    max-width: 1050px;
    margin: 0 auto;
}

.loc-heading {
    text-align: center;
    margin-bottom: 40px;
}

.loc-row {
    width: 100%;
    justify-content: center !important;
}

.loc-row > div {
    display: flex;
    justify-content: center;
}

.loc-card {
    display: flex;
    align-items: center;
    gap: 18px;
    text-align: left;
}


.loc-section {
    width: 100%;
}

.loc-container {
    text-align: center;
}

.loc-heading {
    text-align: center;
    margin: 0 0 40px;
}

.loc-row {
    justify-content: center !important;
    align-items: center;
}

.loc-row > div {
    display: flex;
    justify-content: center;
}

.loc-card {
    display: flex;
    align-items: center;
    gap: 18px;
    text-align: left;
}

/* =========================================
   TABLET
   ========================================= */

@media (min-width: 768px) and (max-width: 834px) {
    #mi-og-30-22 {
        width: 30%;
    }
}

/* =========================================
   TABLET / SMALL DESKTOP
   ========================================= */

@media (min-width: 835px) and (max-width: 1024px) {
    #mi-og-30-22 {
        width: 30%;
    }
}

.loc-row > .col-lg-3:not(:last-child) .loc-card:after {
    display: none;
}


/* =========================================
   MOBILE LAYOUT
   3 LOCATIONS IN ONE ROW
   ========================================= */

@media (max-width: 767px) {

    /* Keep all 3 location columns in one row */
    .loc-row {
        display: flex !important;
        flex-wrap: nowrap !important;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        justify-content: space-between !important;
        align-items: flex-start !important;
    }

    /* Each location takes exactly 1/3 width */
    .loc-row > #mi-og-30-22 {
        width: 33.333333% !important;
        max-width: 33.333333% !important;
        flex: 0 0 33.333333% !important;
        padding-left: 4px;
        padding-right: 4px;
    }

    /* Center each location */
    .loc-row > div {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    /* Location card */
    .loc-card {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 7px;
        text-align: center;
    }

    /* =========================================
       PERFECT CIRCLE IMAGE
       ========================================= */

    .loc-card__img-wrap {
        width: 70px;
        height: 70px;
        min-width: 70px;
        min-height: 70px;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loc-card__img {
        width: 70px !important;
        height: 70px !important;
        max-width: none !important;
        min-width: 70px;
        min-height: 70px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
    }

    /* Location text */
    .loc-card__body {
        width: 100%;
        text-align: center;
    }

    .loc-card__country {
        display: block;
        font-size: 12px;
        line-height: 1.2;
    }

    .loc-card__city {
        margin: 2px 0 0;
        font-size: 14px;
        line-height: 1.2;
    }

    .loc-card__address {
        margin: 3px 0 0;
        font-size: 11px;
        line-height: 1.3;
    }

    /* Heading */
    .loc-heading {
        margin: 0 0 25px;
    }
}
</style>
<section class="loc-section" id="locations-section" aria-labelledby="loc-heading">
    <div class="container loc-container">

        <div class="locations-content">

            <p class="loc-heading" id="loc-heading">Our Locations:</p>

            <div class="row g-4 loc-row justify-content-center">

                @php
                    $locations = [
                        [
                            'country' => 'India',
                            'city'    => 'Thane',
                            'address' => "",
                            'image'   => 'images/plm-home-locationsthane.jpg',
                            'alt'     => 'Thane office location',
                            'title'   => 'Thane'
                        ],
                        [
                            'country' => 'USA',
                            'city'    => 'Dover',
                            'address' => "",
                            'image'   => 'images/plm-home-locationsUsa.jpg',
                            'alt'     => 'Dover office location',
                            'title'   => 'Dover'
                        ],
                        [
                            'country' => 'UK',
                            'city'    => 'Reading',
                            'address' => "",
                            'image'   => 'images/plm-home-locationsuk.jpg',
                            'alt'     => 'Reading office location',
                            'title'   => 'Reading'
                        ],
                    ];
                @endphp

                @foreach ($locations as $loc)

                    <div class="col-12 col-sm-6 col-lg-3" id="mi-og-30-22">

                        <div class="loc-card">

                            <div class="loc-card__img-wrap" aria-hidden="true">
                                <img
                                    src="{{ asset($loc['image']) }}"
                                    alt="{{ e($loc['alt']) }}"
                                    class="loc-card__img"
                                    loading="lazy"
                                >
                            </div>

                            <div class="loc-card__body">

                                <span class="loc-card__country">
                                    {{ e($loc['country']) }}
                                </span>

                                <h3 class="loc-card__city">
                                    {{ e($loc['city']) }}
                                </h3>

                                <address class="loc-card__address">
                                    {!! nl2br(e($loc['address'])) !!}
                                </address>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>
</section>