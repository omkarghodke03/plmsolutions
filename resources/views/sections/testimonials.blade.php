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
            <p class="our-delivery-model-eyebrow">Client Testimonials</p>
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
            'quote'    => '"Milestone consistently delivers high-quality engineering solutions with excellent communication and adherence to project timelines. Their team has become a trusted extension of our engineering department."',
            'name'     => 'Chris Wonder',
            'role'     => 'Engineering Manager, Leading SPM Manufacturer from UK',
            'image'    => 'images/testimonials-image1.jpg',
            'featured' => true,
        ],

        [
            'quote'    => '"The team at MILESTONE complemented our design team greatly during a large project. Production of working drawings and finalization of the design package played a key part. The support and direction from MILESTONE gave us the confidence to work with them on future projects."',
            'name'     => 'Jeff Falzone',
            'role'     => 'Engineering Director, A leading US company in Sheetmetal domain',
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
            'quote'    => '"The service to us was swift with tool-paths being completed within the required timescale. The service offered was professional, resulting in us utilising the services of MILESTONE again when required."',
            'name'     => 'Brian S.',
            'role'     => 'Engineering Manager, A leading US company in Precision Manufacturing',
            'image'    => 'images/testimonials-image1.jpg',
            'featured' => false,
        ],

        [
            'quote'    => '"Milestone PLM\'s MEP coordination was flawless. We eliminated 300+ clashes before breaking ground — the most disciplined offshore team we\'ve ever worked with."',
            'name'     => 'Rajen Parekh',
            'role'     => 'CEO, Valves Industries, India',
            'image'    => 'images/testimonials-image2.jpg',
            'featured' => false,
        ],

        [
            'quote'    => '"Through our association since 2006, MILESTONE delivered in an accurate and timely manner, helping us manage workload. We see a great partner in Milestone."',
            'name'     => 'Prashant Tillu',
            'role'     => 'Dy. General Manager, Larsen & Toubro Ltd',
            'image'    => 'images/testimonials-image3.jpg',
            'featured' => false,
        ],

        [
            'quote'    => '"Our firm has used MILESTONE services for well over 12 years. Consistent quality CAD services, quality control, and timely responses have made our clients—and therefore us—very satisfied and continued customers."',
            'name'     => 'Yatin Chinchkar',
            'role'     => 'Design Manager, Leading OEM in Consumer Products, India',
            'image'    => 'images/testimonials-image3.jpg',
            'featured' => false,
        ],
    ];
@endphp



                @foreach($testimonials as $t)
                    <div class="client-testimonials-slide">
                        <div class="client-testimonials-card">
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

    var CONFIG = {
        slidesPerView   : 3,
        slidesPerViewMd : 2,
        slidesPerViewSm : 1,
        slidesPerClick  : 1,
        gap             : 24
    };

    var track    = document.getElementById('ctTrack');
    var prevBtn  = document.getElementById('ctPrev');
    var nextBtn  = document.getElementById('ctNext');
    var dotsWrap = document.getElementById('ctDots');
    var fromEl   = document.getElementById('ctFrom');
    var toEl     = document.getElementById('ctTo');

    var slides   = track.querySelectorAll('.client-testimonials-slide');
    var total    = slides.length;
    var current  = 0;

    function perView() {

        if (window.innerWidth <= 575) {
            return CONFIG.slidesPerViewSm;
        }

        if (window.innerWidth <= 991) {
            return CONFIG.slidesPerViewMd;
        }

        return CONFIG.slidesPerView;
    }

    function buildDots() {

        dotsWrap.innerHTML = '';

        var pages = Math.ceil(total / perView());

        for (var i = 0; i < pages; i++) {

            var dot = document.createElement('span');

            dot.className = 'client-testimonials-dot';
            dot.dataset.page = i;

            (function(page){

                dot.addEventListener('click', function(){

                    goTo(page * perView());

                });

            })(i);

            dotsWrap.appendChild(dot);
        }
    }

    function updateCardColors() {

        document.querySelectorAll('.client-testimonials-card').forEach(function(card){

            card.classList.remove(
                'client-testimonials-card--pos1',
                'client-testimonials-card--pos2',
                'client-testimonials-card--pos3'
            );

        });

        var pv = perView();

        for (var i = 0; i < pv; i++) {

            var slide = slides[current + i];

            if (!slide) continue;

            var card = slide.querySelector('.client-testimonials-card');

            if (!card) continue;

            if (i === 0) {

                card.classList.add(
                    'client-testimonials-card--pos1'
                );

            } else if (i === 1) {

                card.classList.add(
                    'client-testimonials-card--pos2'
                );

            } else if (i === 2) {

                card.classList.add(
                    'client-testimonials-card--pos3'
                );
            }
        }
    }

    function goTo(index) {

        var pv = perView();

        var maxIndex = Math.max(
            0,
            total - pv
        );

        current = Math.max(
            0,
            Math.min(index, maxIndex)
        );

        var slideW =
            slides[0].offsetWidth + CONFIG.gap;

        track.style.transform =
            'translateX(-' +
            (current * slideW) +
            'px)';

        fromEl.textContent = current + 1;

        toEl.textContent =
            Math.min(current + pv, total);

        var activePage =
            Math.floor(current / pv);

        dotsWrap
            .querySelectorAll('.client-testimonials-dot')
            .forEach(function(dot, i){

                dot.classList.toggle(
                    'client-testimonials-dot--active',
                    i === activePage
                );

            });

        prevBtn.disabled = (current === 0);

        prevBtn.classList.toggle(
            'client-testimonials-nav-btn--disabled',
            current === 0
        );

        updateCardColors();
    }

    prevBtn.addEventListener('click', function(){

        goTo(
            current - CONFIG.slidesPerClick
        );

    });

    nextBtn.addEventListener('click', function(){

        goTo(
            current + CONFIG.slidesPerClick
        );

    });

    var resizeTimer;

    window.addEventListener('resize', function(){

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function(){

            buildDots();
            goTo(current);

        }, 150);

    });

    buildDots();
    goTo(0);

})();
</script>