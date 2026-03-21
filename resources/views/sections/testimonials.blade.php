{{--
    ============================================================
    Section  : Client Testimonials
    File     : resources/views/sections/testimonials.blade.php
    CSS      : resources/css/costome.css  (client-testimonials- prefix)
    Images   : public/images/testimonials-images1.jpg  etc.
    ============================================================
--}}

<section class="client-testimonials-section">
    <div class="container">

        {{-- ── Heading ──────────────────────────────────────── --}}
        <div class="client-testimonials-header">
            <h2 class="client-testimonials-heading">
                <span class="client-testimonials-highlight">Happy</span> Clients
            </h2>
            <p class="client-testimonials-subtext">
                Don't just take our word for it. Hear what our clients have to say
                about their experience working with us.
            </p>
        </div>

        {{-- ── Slider Wrapper ───────────────────────────────── --}}
        <div class="client-testimonials-slider-wrap">
            <div class="client-testimonials-track" id="ctTrack">

                @php
                    /*
                    |--------------------------------------------------
                    | HOW TO ADD / EDIT A TESTIMONIAL:
                    |   'quote'    => testimonial text
                    |   'name'     => client full name
                    |   'role'     => job title, company
                    |   'image'    => path from public/ folder
                    |   'featured' => true = dark card (first card style)
                    |--------------------------------------------------
                    */
                    $testimonials = [
                        [
                            'quote'    => '"Their BIM coordination reduced our clash detection issues by 94% and saved us over $2.3M in rework costs. Outstanding attention to detail."',
                            'name'     => 'Lynette Matthews',
                            'role'     => 'President, Sigura Constructions',
                            'image'    => 'images/testimonials-image1.jpg',
                            'featured' => true,
                        ],
                        [
                            'quote'    => '"Exceptional work. Their BIM coordination helped us deliver Mumbai metro station 3 months ahead of schedule with zero safety incidents."',
                            'name'     => 'Rajesh kumar',
                            'role'     => 'Project Director, L&T Construction',
                            'image'    => 'images/testimonials-image2.jpg',
                            'featured' => false,
                        ],
                        [
                            'quote'    => '"Outstanding communication and results. Their structural steel detailing delivered 100% shop-ready drawings on first submission. Seamless collaboration."',
                            'name'     => 'James Walton',
                            'role'     => 'VP Engineering, Bechtel Corp',
                            'image'    => 'images/testimonials-image3.jpg',
                            'featured' => false,
                        ],
                        [
                            'quote'    => '"Remarkable turnaround time and quality. Their MEP coordination team resolved over 300 clashes before construction even began. Highly recommended."',
                            'name'     => 'Sarah Mitchell',
                            'role'     => 'Senior PM, Turner Construction',
                            'image'    => 'images/testimonials-image1.jpg',
                            'featured' => false,
                        ],
                        [
                            'quote'    => '"Their team integrated with ours seamlessly. The Revit models were delivered to LOD 400 with zero errors and ahead of every milestone."',
                            'name'     => 'David Chen',
                            'role'     => 'BIM Manager, Skanska Group',
                            'image'    => 'images/testimonials-image2.jpg',
                            'featured' => false,
                        ],
                        [
                            'quote'    => '"From design development to construction documentation, their architectural team delivered precision work that exceeded our expectations every time."',
                            'name'     => 'Emma Clarke',
                            'role'     => 'Design Director, Arup',
                            'image'    => 'images/testimonials-image3.jpg',
                            'featured' => false,
                        ],
                    ];
                @endphp

                @foreach($testimonials as $t)
                    <div class="client-testimonials-slide">
                        <div class="client-testimonials-card {{ $t['featured'] ? 'client-testimonials-card--dark' : '' }}">

                            {{-- Quote icon --}}
                            <div class="client-testimonials-quote-icon">
                                <svg width="36" height="28" viewBox="0 0 36 28" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 28V17.2C0 14.1333 0.6 11.3333 1.8 8.8C3.06667 6.26667
                                             4.8 4.13333 7 2.4C9.26667 0.666667 11.8667 -0.133333 14.8 0V4.8
                                             C12.5333 5.06667 10.6 6 9 7.6C7.4 9.2 6.53333 11.0667 6.4 13.2H12.8V28H0Z
                                             M20 28V17.2C20 14.1333 20.6 11.3333 21.8 8.8C23.0667 6.26667
                                             24.8 4.13333 27 2.4C29.2667 0.666667 31.8667 -0.133333 34.8 0V4.8
                                             C32.5333 5.06667 30.6 6 29 7.6C27.4 9.2 26.5333 11.0667 26.4 13.2H32.8V28H20Z"
                                          fill="var(--plm-primary)"/>
                                </svg>
                            </div>

                            {{-- Quote text --}}
                            <p class="client-testimonials-text">{{ $t['quote'] }}</p>

                            {{-- Divider --}}
                            <hr class="client-testimonials-divider">

                            {{-- Author --}}
                            <div class="client-testimonials-author">
                                <img
                                    src="{{ asset($t['image']) }}"
                                    alt="{{ $t['name'] }}"
                                    class="client-testimonials-avatar"
                                    loading="lazy"
                                >
                                <div>
                                    <p class="client-testimonials-name">{{ $t['name'] }}</p>
                                    <p class="client-testimonials-role">{{ $t['role'] }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>{{-- /track --}}
        </div>{{-- /slider-wrap --}}


        {{-- ── Footer: showing label + dots + nav buttons ─────── --}}
        <div class="client-testimonials-footer">

            {{-- Showing X–Y of Z --}}
            <p class="client-testimonials-showing">
                SHOWING
                <strong id="ctFrom">1</strong>–<strong id="ctTo">3</strong>
                OF <strong>{{ count($testimonials) }}</strong>
            </p>

            {{-- Dot / line indicators --}}
            <div class="client-testimonials-dots" id="ctDots"></div>

            {{-- Prev / Next buttons --}}
            <div class="client-testimonials-nav">
                <button class="client-testimonials-nav-btn" id="ctPrev" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         viewBox="0 0 24 24">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>
                </button>
                <button class="client-testimonials-nav-btn client-testimonials-nav-btn--next" id="ctNext" aria-label="Next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         viewBox="0 0 24 24">
                        <polyline points="9 18 15 12 9 6"/>
                    </svg>
                </button>
            </div>

        </div>{{-- /footer --}}

    </div>{{-- /container --}}
</section>


{{-- ── Slider JavaScript ──────────────────────────────────────── --}}
<script>
(function () {
    'use strict';

    /* ============================================================
       SLIDER CONFIG — change these values to customise behaviour
       ============================================================
       slidesPerView   : cards visible at once on DESKTOP
       slidesPerViewMd : cards visible on TABLET  (≤991px)
       slidesPerViewSm : cards visible on MOBILE  (≤575px)
       slidesPerClick  : how many slides advance per button click
                         set to 1 = one at a time
                         set to 3 = jump a full page at a time
       gap             : space (px) between cards — must match CSS
       ============================================================ */
    var CONFIG = {
        slidesPerView  : 3,
        slidesPerViewMd: 2,
        slidesPerViewSm: 1,
        slidesPerClick : 1,
        gap            : 20,
    };

    /* DOM references */
    var track   = document.getElementById('ctTrack');
    var prevBtn = document.getElementById('ctPrev');
    var nextBtn = document.getElementById('ctNext');
    var dotsWrap= document.getElementById('ctDots');
    var fromEl  = document.getElementById('ctFrom');
    var toEl    = document.getElementById('ctTo');
    var slides  = track.querySelectorAll('.client-testimonials-slide');
    var total   = slides.length;
    var current = 0;   /* active slide index (0-based) */

    /* Returns visible slide count for current screen width */
    function perView() {
        if (window.innerWidth <= 575) return CONFIG.slidesPerViewSm;
        if (window.innerWidth <= 991) return CONFIG.slidesPerViewMd;
        return CONFIG.slidesPerView;
    }

    /* Build dot/line indicators */
    function buildDots() {
        dotsWrap.innerHTML = '';
        var pages = Math.ceil(total / perView());
        for (var i = 0; i < pages; i++) {
            var dot = document.createElement('span');
            dot.className   = 'client-testimonials-dot';
            dot.dataset.page = i;
            (function(page){
                dot.addEventListener('click', function () {
                    goTo(page * perView());
                });
            })(i);
            dotsWrap.appendChild(dot);
        }
    }

    /* Move slider to a specific index */
    function goTo(index) {
        var pv       = perView();
        var maxIndex = Math.max(0, total - pv);
        current      = Math.max(0, Math.min(index, maxIndex));

        /* slide width = card width + gap */
        var slideW = slides[0].offsetWidth + CONFIG.gap;
        track.style.transform = 'translateX(-' + (current * slideW) + 'px)';

        /* update "showing" label */
        fromEl.textContent = current + 1;
        toEl.textContent   = Math.min(current + pv, total);

        /* update dots */
        var activePage = Math.floor(current / pv);
        dotsWrap.querySelectorAll('.client-testimonials-dot').forEach(function (d, i) {
            d.classList.toggle('client-testimonials-dot--active', i === activePage);
        });

        /* disable prev at start */
        prevBtn.disabled = (current === 0);
        prevBtn.classList.toggle('client-testimonials-nav-btn--disabled', current === 0);
    }

    /* Button events */
    prevBtn.addEventListener('click', function () { goTo(current - CONFIG.slidesPerClick); });
    nextBtn.addEventListener('click', function () { goTo(current + CONFIG.slidesPerClick); });

    /* Rebuild on resize */
    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            buildDots();
            goTo(current);
        }, 150);
    });

    /* Init */
    buildDots();
    goTo(0);

})();
</script>