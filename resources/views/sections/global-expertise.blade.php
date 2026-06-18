{{--
    =====================================================
    ABOUT / STATS SECTION — resources/views/sections/about-section.blade.php
    Usage in any blade: @include('sections.about-section')
    =====================================================
--}}

{{-- Bootstrap 5 CSS (add once in your layout <head>) --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}

<section class="as-section" id="about-section" aria-labelledby="as-heading"
         style="background-image: url('{{ asset('images/Meeting-Spaces-Hero1.AVIF') }}')">

    {{-- Dark overlay sits behind content --}}
    <div class="as-overlay" aria-hidden="true"></div>

    <div class="container-xl as-inner">
        <div class="row align-items-center g-0">

            {{-- ── LEFT: Text + CTA ─────────────────────────────── --}}
            <div class="col-12 col-lg-5 as-left">

                <p class="as-eyebrow">
                    <span class="as-eyebrow__line" aria-hidden="true"></span>
                    Global Expertise · Local Execution
                </p>

                <h2 class="as-heading" id="as-heading">
                   Where Global Standards Meet Industry-Leading Expertise
                    <span class="as-heading__accent">Indian engineering excellence</span>
                </h2>

                <p class="as-body">
                    Empowering global clients with multidisciplinary AEC Services and Engineering Design Services, including BIM, CAD drafting, 3D modeling, structural engineering, MEP design, detailing, and project coordination. Our teams deliver accurate, scalable, and high-quality solutions that support every stage of the project lifecycle
                </p>

                <a  class="our-delivery-model-btn" aria-label="Learn more about us">
                    Learn More About Us
                    <span class="our-delivery-model-btn__arrow" aria-hidden="true">→</span>
                </a>

            </div>

            {{-- ── RIGHT: Stats Grid ────────────────────────────── --}}
            <div class="col-12 col-lg-7 as-right">

                <div class="as-grid" role="list" aria-label="Company statistics">

                    @php
                        /**
                         * Stats array — swap these for DB values if needed.
                         * suffix: appended to the animated number (e.g. "+" or "%")
                         * target: the final number the counter animates to
                         */
                        $stats = [
                            [
                                'icon'   => 'globe',
                                'target' => 57,
                                'suffix' => '%',
                                'label'  => 'Cost Reduction',
                            ],
                            [
                                'icon'   => 'users',
                                'target' => 96.4,
                                'suffix' => '%',
                                'label'  => 'Satisfied Clients',
                            ],
                            [
                                'icon'   => 'clock',
                                'target' => 300,
                                'suffix' => '+',
                                'label'  => 'Projects Delivered Every Year',
                            ],
                            [
                                'icon'   => 'chart',
                                'target' => 99.99,
                                'suffix' => '+',
                                'label'  => 'Data Security',
                            ],
                        ];
                    @endphp

                    @foreach ($stats as $stat)
                        <div
                            class="as-card"
                            role="listitem"
                            data-count="{{ (int) $stat['target'] }}"
                            data-suffix="{{ e($stat['suffix']) }}"
                        >
                            {{-- Icon row --}}
                            <div class="as-card__icon-row" aria-hidden="true">
                                @switch($stat['icon'])
                                    @case('globe')
                                        <svg class="as-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                                    @break
                                    @case('users')
                                        <svg class="as-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    @break
                                    @case('clock')
                                        <svg class="as-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    @break
                                    @case('chart')
                                        <svg class="as-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                                    @break
                                @endswitch
                                <span class="as-card__divider"></span>
                            </div>

                            {{-- Animated number --}}
                            <p class="as-card__value" aria-label="{{ $stat['target'] . $stat['suffix'] }} {{ $stat['label'] }}">
                                <span class="as-counter">0</span>{{ e($stat['suffix']) }}
                            </p>

                            <p class="as-card__label">{{ e($stat['label']) }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

</section>
