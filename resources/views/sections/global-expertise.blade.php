{{--
    ============================================================
    Section  : Global Expertise
    File     : resources/views/sections/global-expertise.blade.php
    CSS      : resources/css/section.css  (ge- prefix)
    Image    : public/images/Meeting-Spaces-Hero.jpg
    ============================================================
--}}

<section
    class="ge-section"
    style="background-image: url('{{ asset('images/Meeting-Spaces-Hero.jpg') }}');"
>
    {{-- Dark overlay --}}
    <div class="ge-overlay"></div>

    <div class="container ge-container">

        {{-- ── Eyebrow ──────────────────────────────────────── --}}
        <p class="ge-eyebrow">Global Expertise · Local Execution</p>

        {{-- ── Main Heading ────────────────────────────────── --}}
        <h2 class="ge-heading">
            European precision meets<br>
            <span class="ge-heading-highlight">Indian engineering excellence</span>
        </h2>

        {{-- ── Description ─────────────────────────────────── --}}
        <p class="ge-desc">
            Our unique management structure combines
            <strong>European organizational rigor and project governance</strong>
            with <strong>world-class Indian technical expertise in BIM,
            CAD, and structural engineering</strong> to deliver sophisticated
            solutions that meet the highest international standards.
        </p>

        {{-- ── CTA Button ───────────────────────────────────── --}}
        <div class="ge-btn-wrap">
            <a href="#" class="ge-btn">
                Learn More About Us
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="none" stroke="currentColor" stroke-width="2.5"
                     viewBox="0 0 24 24">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>

        {{-- ── Counter Cards ─────────────────────────────────
             HOW TO EDIT A COUNTER:
               data-start  = number to count from (e.g. 0)
               data-end    = number to count to   (e.g. 200)
               data-speed  = total duration in ms  (e.g. 2000)
               data-suffix = symbol after number   (e.g. +, %, "yrs")
        ──────────────────────────────────────────────────── --}}
        <div class="row g-3 ge-stats-row">

            @php
                $stats = [
                    [
                        'start'  => 0,
                        'end'    => 15,
                        'speed'  => 2000,
                        'suffix' => '+',
                        'label'  => 'Years of International Leadership',
                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
                    ],
                    [
                        'start'  => 0,
                        'end'    => 200,
                        'speed'  => 2000,
                        'suffix' => '+',
                        'label'  => 'Certified Engineers Worldwide',
                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 1 0-16 0"/><polyline points="9 11 12 14 22 4"/></svg>',
                    ],
                    [
                        'start'  => 0,
                        'end'    => 98,
                        'speed'  => 2000,
                        'suffix' => '%',
                        'label'  => 'Client Satisfaction Rate',
                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
                    ],
                    [
                        'start'  => 0,
                        'end'    => 95,
                        'speed'  => 2000,
                        'suffix' => '%',
                        'label'  => 'On-Time Delivery',
                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline points="22 7 13.5 15.5 8.5 10.5 1 18"/><polyline points="16 7 22 7 22 13"/></svg>',
                    ],
                ];
            @endphp

            @foreach($stats as $stat)
                {{-- col-6 = 2 columns on mobile, col-lg-3 = 4 columns on desktop --}}
                <div class="col-6 col-lg-3">
                    <div
                        class="ge-stat-card"
                        data-start="{{ $stat['start'] }}"
                        data-end="{{ $stat['end'] }}"
                        data-speed="{{ $stat['speed'] }}"
                        data-suffix="{{ $stat['suffix'] }}"
                    >
                        {{-- Icon --}}
                        <div class="ge-stat-icon">{!! $stat['icon'] !!}</div>

                        {{-- Counter number --}}
                        <div class="ge-stat-number">
                            <span class="ge-counter">{{ $stat['start'] }}</span>{{ $stat['suffix'] }}
                        </div>

                        {{-- Label --}}
                        <p class="ge-stat-label">{{ $stat['label'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>{{-- /row --}}
    </div>{{-- /container --}}
</section>


{{-- ── Counter Animation Script ───────────────────────────────── --}}
<script>
(function () {
    'use strict';

    /**
     * Animate a single counter from start → end over `speed` ms.
     * @param {HTMLElement} el   - The <span class="ge-counter"> element
     * @param {number} start     - Starting number
     * @param {number} end       - Ending number
     * @param {number} speed     - Duration in milliseconds
     */
    function animateCounter(el, start, end, speed) {
        var startTime = null;
        var range = end - start;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / speed, 1);
            /* easeOutQuad — fast start, slow finish */
            var eased = 1 - (1 - progress) * (1 - progress);
            el.textContent = Math.floor(start + range * eased);
            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = end;   /* ensure exact end value */
            }
        }

        requestAnimationFrame(step);
    }

    /**
     * Use IntersectionObserver so counters only fire
     * when the cards scroll into view.
     */
    var cards = document.querySelectorAll('.ge-stat-card');

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var card   = entry.target;
                var el     = card.querySelector('.ge-counter');
                var start  = parseInt(card.dataset.start,  10);
                var end    = parseInt(card.dataset.end,    10);
                var speed  = parseInt(card.dataset.speed,  10);

                animateCounter(el, start, end, speed);
                observer.unobserve(card);   /* run only once */
            }
        });
    }, { threshold: 0.3 });

    cards.forEach(function (card) { observer.observe(card); });
})();
</script>