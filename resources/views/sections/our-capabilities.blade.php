{{--
    =====================================================
    CASE STUDY SECTION
    resources/views/sections/case-study.blade.php
    Usage: @include('sections.case-study')
    =====================================================
--}}

<style>
    
    /* =====================================================
   CASE STUDY — additions only (no duplicates)
   Paste these at the END of your existing CSS file
   ===================================================== */
.cs-section{
    padding: 30px 0px 50px;
}

.cs-slide__stat-value {
    font-size: clamp(18px, 2.2vw, 20px) !important;
}

.cs-view-more {
    display        : inline-flex;
    align-items    : center;
    gap            : 8px;
    padding        : 10px 20px;
    color          : var(--cs-accent);
    background     : transparent;
    font-family    : var(--cs-heading-font);
    font-size      : 12px;
    font-weight    : 500;
    border-radius  : 20px;
    padding        : 11px 20px;
    letter-spacing : .10em;
    text-transform : uppercase;
    text-decoration: none;
    white-space    : nowrap;
    transition     : background 0.25s ease, color 0.25s ease;
}
.cs-view-more svg {
    width     : 15px;
    height    : 15px;
    transition: transform 0.25s ease;
}
.cs-view-more:hover {
    color     : var(--cs-accent);
}
.cs-view-more:hover svg { transform: translateX(3px); }

.cs-footer {
    display        : flex;
    align-items    : center;
    justify-content: flex-end;
    gap            : 16px;
    margin-top     : 30px;
}

.cs-side-arrow { display: none; }

/* ── Responsive ─────────────────────────────────────── */
@media (max-width: 767.98px) {
    .cs-footer { justify-content: center; }
}
    
</style>

<section class="cs-section" id="case-study-section" aria-labelledby="cs-heading">
    <div class="container-xl cs-container">

        {{-- ── TOP ROW: Title + View More Button ──────────── --}}
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

            {{-- Right: View More button only --}}
            <div class="cs-header__right">
                <a href="{{ route('case-studies.index') }}"
                   class="cs-view-more"
                   aria-label="View all case studies">
                    View More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
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
                        'image'   => 'casestudy/case-study-hero-section-banner.png',
                        'badge'   => 'Sheet Metal Fabrication',
                        'title'   => 'End-to-End Product Development and Manufacturing Engineering Support',
                        'desc'    => '60% reduction in engineering costs delivering end-to-end CAD, fixture design and manufacturing documentation for a leading contract manufacturer.',
                        'link'    => 'https://coral-pigeon-247564.hostingersite.com/case-studies/design-support-for-manufacturing-sheet-metal-fabrication',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => 'Michigan, USA',  'label' => 'Location'],
                            ['value' => '8 Weeks',   'label' => 'Duration'],
                            ['value' => '5 Engineers',  'label' => 'Team']
                            
                        ],
                    ],
                    [
                        'image'   => 'images/Manufacturing-Ready-Assembly-Engineering-UG-NX-Documentation.jpg',
                        'badge'   => 'Infrastructure',
                        'title'   => 'Universal Sheet Metal Fixture Design Delivering 40% Faster Processing',
                        'desc'    => 'Delivered end-to-end structural BIM for a 1.2 km cable-stayed bridge, integrating 14 discipline models with zero RFI backlog at handover.',
                        'link'    => '#',
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
                        'title'   => 'Manufacturing-Ready Assembly Engineering and UG-NX Documentation',
                        'desc'    => 'Produced full construction documentation for a 42-floor mixed-use tower, cutting drawing revision cycles by 60% through federated model reviews.',
                        'link'    => '#',
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
        </div>{{-- /.cs-slider-wrap --}}

        {{-- ── BOTTOM CONTROLS: counter + dots + arrows ────── --}}
        <div class="cs-footer">
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
        </div>{{-- /.cs-footer --}}

    </div>{{-- /.container-xl --}}
</section>

<script>
    


(function () {
    'use strict';

    /* ── Config ──────────────────────────────────────────── */
    var AUTOPLAY_DELAY  = 3000;
    var ANIM_LOCK_TIME  = 700;

    /* ── State ───────────────────────────────────────────── */
    var slides      = [];
    var dots        = [];
    var current     = 0;
    var total       = 0;
    var isAnimating = false;
    var autoTimer   = null;
    var touchStartX = 0;
    var touchStartY = 0;
    var touchMoved  = false;   // NEW: track if finger actually moved

    var prefersReduced = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    /* ── DOM refs ─────────────────────────────────────────── */
    var section, track, dotsWrap,
        counterCurrent, counterTotal,
        btnPrev, btnNext,
        sideLeft, sideRight;

    /* ── Init ─────────────────────────────────────────────── */
    function init() {
        section = document.getElementById('case-study-section');
        if (!section) return;

        track          = document.getElementById('cs-track');
        dotsWrap       = document.getElementById('cs-dots');

        /* Arrows — header किंवा footer दोन्हीकडे शोधतो */
        btnPrev  = document.getElementById('cs-prev');
        btnNext  = document.getElementById('cs-next');

        counterCurrent = section.querySelector('.cs-counter__current');
        counterTotal   = section.querySelector('.cs-counter__total');

        /* Side arrows (slider च्या आत — optional) */
        sideLeft  = section.querySelector('.cs-side-arrow--left');
        sideRight = section.querySelector('.cs-side-arrow--right');

        slides = Array.prototype.slice.call(
            track.querySelectorAll('.cs-slide')
        );
        total = slides.length;

        if (total < 2) return;

        if (counterTotal) counterTotal.textContent = pad(total);

        buildDots();

        /* Arrow buttons */
        if (btnPrev)   btnPrev.addEventListener('click', prev);
        if (btnNext)   btnNext.addEventListener('click', next);
        if (sideLeft)  sideLeft.addEventListener('click', prev);
        if (sideRight) sideRight.addEventListener('click', next);

        /* Keyboard */
        document.addEventListener('keydown', onKeyDown);

        /* ── Touch / Swipe — FIXED ── */
        /* track वर नाही, slider-wrap वर लावतो — full area cover होतो */
        var sliderWrap = section.querySelector('.cs-slider-wrap') || track;

        sliderWrap.addEventListener('touchstart', onTouchStart, { passive: true });
        sliderWrap.addEventListener('touchmove',  onTouchMove,  { passive: true });
        sliderWrap.addEventListener('touchend',   onTouchEnd,   { passive: true });

        /* Pause autoplay on hover (desktop) */
        section.addEventListener('mouseenter', stopAutoplay);
        section.addEventListener('mouseleave', startAutoplay);

        updateUI(0, -1);
        startAutoplay();
    }

    /* ── Build dots ──────────────────────────────────────── */
    function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        dots = [];

        for (var i = 0; i < total; i++) {
            var btn = document.createElement('button');
            btn.className  = 'cs-dot' + (i === 0 ? ' cs-dot--active' : '');
            btn.setAttribute('role', 'tab');
            btn.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            btn.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
            btn.dataset.index = i;
            btn.addEventListener('click', onDotClick);
            dotsWrap.appendChild(btn);
            dots.push(btn);
        }
    }

    function onDotClick(e) {
        var idx = parseInt(e.currentTarget.dataset.index, 10);
        if (idx !== current) goTo(idx);
    }

    /* ── Navigation ──────────────────────────────────────── */
    function prev() { goTo(current === 0 ? total - 1 : current - 1); }
    function next() { goTo(current === total - 1 ? 0 : current + 1); }

    function goTo(newIndex) {
        if (isAnimating || newIndex === current) return;

        var oldIndex = current;
        current      = newIndex;

        isAnimating = true;
        updateUI(newIndex, oldIndex);

        setTimeout(function () { isAnimating = false; }, ANIM_LOCK_TIME);
    }

    /* ── Update DOM ──────────────────────────────────────── */
    function updateUI(newIdx, oldIdx) {

        if (oldIdx >= 0 && slides[oldIdx]) {
            var outgoing = slides[oldIdx];
            outgoing.classList.remove('cs-slide--active');
            if (!prefersReduced) {
                outgoing.classList.add('cs-slide--exit');
                setTimeout(function () {
                    outgoing.classList.remove('cs-slide--exit');
                    outgoing.setAttribute('aria-hidden', 'true');
                }, 680);
            } else {
                outgoing.setAttribute('aria-hidden', 'true');
            }
        }

        if (slides[newIdx]) {
            slides[newIdx].classList.add('cs-slide--active');
            slides[newIdx].setAttribute('aria-hidden', 'false');
        }

        if (counterCurrent) counterCurrent.textContent = pad(newIdx + 1);

        dots.forEach(function (dot, i) {
            var active = i === newIdx;
            dot.classList.toggle('cs-dot--active', active);
            dot.setAttribute('aria-selected', active ? 'true' : 'false');
        });
    }

    /* ── Autoplay ─────────────────────────────────────────── */
    function startAutoplay() {
        stopAutoplay();
        autoTimer = setInterval(next, AUTOPLAY_DELAY);
    }
    function stopAutoplay() {
        if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
    }

    /* ── Keyboard ─────────────────────────────────────────── */
    function onKeyDown(e) {
        var rect   = section.getBoundingClientRect();
        var inView = rect.top < window.innerHeight && rect.bottom > 0;
        if (!inView) return;

        if (e.key === 'ArrowLeft')  { prev(); stopAutoplay(); }
        if (e.key === 'ArrowRight') { next(); stopAutoplay(); }
    }

    /* ── Touch / Swipe — FIXED ───────────────────────────── */
    function onTouchStart(e) {
        touchStartX = e.changedTouches[0].clientX;   // screenX ऐवजी clientX
        touchStartY = e.changedTouches[0].clientY;
        touchMoved  = false;
    }

    function onTouchMove(e) {
        touchMoved = true;   // finger move झाली हे track करतो
    }

    function onTouchEnd(e) {
        if (!touchMoved) return;   // tap असेल तर slide करू नको

        var dx = e.changedTouches[0].clientX - touchStartX;
        var dy = e.changedTouches[0].clientY - touchStartY;

        /* Vertical scroll पेक्षा horizontal जास्त असेल तरच slide */
        if (Math.abs(dx) < 30) return;              // threshold 40→30 (easier swipe)
        if (Math.abs(dy) > Math.abs(dx) * 0.8) return;  // diagonal ignore

        if (dx < 0) next(); else prev();
        stopAutoplay();
    }

    /* ── Helpers ─────────────────────────────────────────── */
    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    /* ── Boot ─────────────────────────────────────────────── */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
</script>