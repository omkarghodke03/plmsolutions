{{--
    =====================================================
    CASE STUDY SECTION
    resources/views/sections/case-study.blade.php
    Usage: @include('sections.case-study')
    =====================================================
--}}

<section class="cs-section" id="case-study-section" aria-labelledby="cs-heading">
    <div class="container-xl cs-container">

        {{-- ── TOP ROW: Title + Controls ─────────────────── --}}
        <div class="cs-header">

            {{-- Left: eyebrow + heading + sub --}}
            <div class="cs-header__left">
                <p class="cs-eyebrow">
                    <span class="cs-eyebrow__line" aria-hidden="true"></span>
                    Case Studies
                </p>
                <h2 class="cs-heading" id="cs-heading">
                    Work That <span class="cs-heading__accent">Speaks</span>
                </h2>
                <p class="cs-subhead">
                    Real projects, measurable outcomes. See how we deliver precision engineering for the world's most complex builds.
                </p>
            </div>

            {{-- Right: counter + dots + arrows --}}
            <div class="cs-header__right">
                <span class="cs-counter" id="cs-counter" aria-live="polite">
                    <span class="cs-counter__current">01</span>
                    <span class="cs-counter__sep"> / </span>
                    <span class="cs-counter__total">03</span>
                </span>

                <div class="cs-dots" id="cs-dots" role="tablist" aria-label="Slide indicators">
                    {{-- dots injected by JS --}}
                </div>

                <div class="cs-arrows" role="group" aria-label="Slider controls">
                    <button class="cs-arrow cs-arrow--prev" id="cs-prev" aria-label="Previous slide">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"/>
                        </svg>
                    </button>
                    <button class="cs-arrow cs-arrow--next" id="cs-next" aria-label="Next slide">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- ── SLIDER TRACK ────────────────────────────────── --}}
        <div class="cs-slider-wrap" aria-roledescription="carousel">
            <div class="cs-track" id="cs-track">

                @php
                /**
                 * SLIDES — add/edit slides here.
                 * image : path relative to public/ — use asset() below
                 * badge : category label shown bottom-left
                 * stats : up to 3 key metrics shown bottom-right
                 */
                $slides = [
                    [
                        'image'   => 'images/California-Residential-Building-Design-BIMModeling.jpg',
                        'badge'   => 'Residential',
                        'title'   => 'California Residential Building Design & BIM Modeling ',
                        'desc'    => 'Scaled from 4 to 22 engineers in under two weeks for a 48 MW hyperscale data centre, delivering all MEP co-ordination drawings on time.',
                        'link'    => 'https://www.milestonetech.net/works/architectural-design-project/',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => '48 MW',  'label' => 'Facility Capacity'],
                            ['value' => '300+',   'label' => 'Clashes Eliminated'],
                            ['value' => '2 wks',  'label' => 'Team Ramp-Up'],
                        ],
                    ],
                    [
                        'image'   => 'images/Manufacturing-Ready-Assembly-Engineering-UG-NX-Documentation.jpg',
                        'badge'   => 'Infrastructure',
                        'title'   => 'Universal Sheet Metal Fixture Design Delivering 40% Faster Processing',
                        'desc'    => 'Delivered end-to-end structural BIM for a 1.2 km cable-stayed bridge, integrating 14 discipline models with zero RFI backlog at handover.',
                        'link'    => ' https://www.milestonetech.net/works/welding-fixture-design-2/',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => '1.2 km', 'label' => 'Bridge Span'],
                            ['value' => '14',     'label' => 'Disciplines'],
                            ['value' => '0 RFI',  'label' => 'At Handover'],
                        ],
                    ],
                    [
                        'image'   => 'images/Universal-Sheet-Metal-Fixture-Design-Delivering.jpg',
                        'badge'   => 'Commercial',
                        'title'   => 'Manufacturing-Ready Assembly Engineering & UG-NX Documentation',
                        'desc'    => 'Produced full construction documentation for a 42-floor mixed-use tower, cutting drawing revision cycles by 60% through federated model reviews.',
                        'link'    => ' https://www.milestonetech.net/works/dfma-support-structure',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => '42',    'label' => 'Floors'],
                            ['value' => '60%',   'label' => 'Fewer Revisions'],
                            ['value' => '8 wks', 'label' => 'Delivered In'],
                        ],
                    ],
                ];
                @endphp

                @foreach ($slides as $i => $slide)
                    <div
                        class="cs-slide {{ $i === 0 ? 'cs-slide--active' : '' }}"
                        role="group"
                        aria-roledescription="slide"
                        aria-label="Slide {{ $i + 1 }} of {{ count($slides) }}"
                        aria-hidden="{{ $i === 0 ? 'false' : 'true' }}"
                    >
                        {{-- Background image --}}
                        <div class="cs-slide__bg"
                             style="background-image:url('{{ asset($slide['image']) }}')"
                             role="img"
                             aria-label="{{ e($slide['title']) }}">
                        </div>

                        {{-- Gradient overlay --}}
                        <div class="cs-slide__overlay" aria-hidden="true"></div>

                        {{-- Slide content --}}
                        <div class="cs-slide__content">

                            {{-- Badge --}}
                            <span class="cs-slide__badge">{{ e($slide['badge']) }}</span>

                            {{-- Title --}}
                            <h3 class="cs-slide__title">{{ e($slide['title']) }}</h3>

                            {{-- Description --}}
                            <p class="cs-slide__desc">{{ e($slide['desc']) }}</p>

                            {{-- Read link --}}
                            <a href="{{ e($slide['link']) }}"
                               class="cs-slide__link"
                               aria-label="{{ e($slide['link_label']) }} — {{ e($slide['title']) }}">
                                {{ e($slide['link_label']) }}
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>

                            {{-- Stats --}}
                            @if (!empty($slide['stats']))
                                <div class="cs-slide__stats" aria-label="Key statistics">
                                    @foreach ($slide['stats'] as $stat)
                                        <div class="cs-slide__stat">
                                            <span class="cs-slide__stat-value">{{ e($stat['value']) }}</span>
                                            <span class="cs-slide__stat-label">{{ e($stat['label']) }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach

            </div>{{-- /.cs-track --}}

            {{-- Side arrows (visible on hover over slider, mobile-friendly) --}}
            <button class="cs-side-arrow cs-side-arrow--left" aria-label="Previous slide" tabindex="-1">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"/>
                </svg>
            </button>
            <button class="cs-side-arrow cs-side-arrow--right" aria-label="Next slide" tabindex="-1">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>

        </div>{{-- /.cs-slider-wrap --}}

    </div>{{-- /.container-xl --}}
</section>