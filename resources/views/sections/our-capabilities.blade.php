<style>
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

@media (max-width: 767.98px) {
    .cs-footer { justify-content: center; }
}
    
</style>

<section class="cs-section" id="case-study-section" aria-labelledby="cs-heading">
    <div class="container-xl cs-container">

        <div class="cs-header">

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
        <div class="cs-slider-wrap" aria-roledescription="carousel">
            <div class="cs-track" id="cs-track">

                @php
                $slides = [
                    [
                        'image'   => 'casestudy/case-study-hero-section-banner.png',
                        'badge'   => 'Sheet Metal Fabrication',
                        'title'   => 'End-to-End Product Development and Manufacturing Engineering Support',
                        'desc'    => '60% reduction in engineering costs delivering end-to-end CAD, fixture design and manufacturing documentation for a leading contract manufacturer.',
                        'link'    => '/case-studie/end-to-end-product-development-manufacturing-engineering',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => 'Michigan, USA',  'label' => 'Location'],
                            ['value' => '8 Weeks',   'label' => 'Duration'],
                            ['value' => '5 Engineers',  'label' => 'Team']
                            
                        ],
                    ],
                    [
                        'image'   => 'casestudy/highway-three.png',
                        'badge'   => 'Infrastructure',
                        'title'   => 'Highway Cable-Stay Bridge — Steel Detailing',
                        'desc'    => 'Detailed steel detailing and fabrication documentation for a complex highway cable-stay bridge infrastructure project.',
                        'link'    => '/case-studie/highway-cable-stay-bridge-steel-detailing',
                        'link_label' => 'Read Case Study',
                        'stats'   => [
                            ['value' => '1.2 km', 'label' => 'Bridge Span'],
                            ['value' => '14',     'label' => 'Disciplines'],
                            ['value' => '0 RFI',  'label' => 'At Handover'],
                        ],
                    ],
                    [
                        'image'   => 'casestudy/datacenter-three.png',
                        'badge'   => 'Commercial',
                        'title'   => 'Data Centre MEP Coordination — Fast-Track',
                        'desc'    => 'Fast-track MEP coordination and clash resolution for a high-performance data centre project delivered under an accelerated construction schedule.',
                        'link'    => '/case-studie/data-centre-mep-coordination-fast-track',
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
                        <div class="cs-slide__bg"
                             style="background-image:url('{{ asset($slide['image']) }}')"
                             role="img"
                             aria-label="{{ e($slide['title']) }}">
                        </div>

                        <div class="cs-slide__overlay" aria-hidden="true"></div>

                        <div class="cs-slide__content">

                            <span class="cs-slide__badge">{{ e($slide['badge']) }}</span>

                            <h3 class="cs-slide__title">{{ e($slide['title']) }}</h3>

                            <p class="cs-slide__desc">{{ e($slide['desc']) }}</p>

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
            </div>
        </div>

        <div class="cs-footer">
            <span class="cs-counter" id="cs-counter" aria-live="polite">
                <span class="cs-counter__current">01</span>
                <span class="cs-counter__sep"> / </span>
                <span class="cs-counter__total">03</span>
            </span>

            <div class="cs-dots" id="cs-dots" role="tablist" aria-label="Slide indicators">
               
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
</section>

<script>
    


(function () {
    'use strict';
    var AUTOPLAY_DELAY  = 3000;
    var ANIM_LOCK_TIME  = 700;
    var slides      = [];
    var dots        = [];
    var current     = 0;
    var total       = 0;
    var isAnimating = false;
    var autoTimer   = null;
    var touchStartX = 0;
    var touchStartY = 0;
    var touchMoved  = false;   
    var prefersReduced = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;
    var section, track, dotsWrap,
        counterCurrent, counterTotal,
        btnPrev, btnNext,
        sideLeft, sideRight;
    function init() {
        section = document.getElementById('case-study-section');
        if (!section) return;
        track          = document.getElementById('cs-track');
        dotsWrap       = document.getElementById('cs-dots');
        btnPrev  = document.getElementById('cs-prev');
        btnNext  = document.getElementById('cs-next');
        counterCurrent = section.querySelector('.cs-counter__current');
        counterTotal   = section.querySelector('.cs-counter__total');
        sideLeft  = section.querySelector('.cs-side-arrow--left');
        sideRight = section.querySelector('.cs-side-arrow--right');
        slides = Array.prototype.slice.call(
            track.querySelectorAll('.cs-slide')
        );
        total = slides.length;
        if (total < 2) return;
        if (counterTotal) counterTotal.textContent = pad(total);
        buildDots();
        if (btnPrev)   btnPrev.addEventListener('click', prev);
        if (btnNext)   btnNext.addEventListener('click', next);
        if (sideLeft)  sideLeft.addEventListener('click', prev);
        if (sideRight) sideRight.addEventListener('click', next);
        document.addEventListener('keydown', onKeyDown);
        var sliderWrap = section.querySelector('.cs-slider-wrap') || track;
        sliderWrap.addEventListener('touchstart', onTouchStart, { passive: true });
        sliderWrap.addEventListener('touchmove',  onTouchMove,  { passive: true });
        sliderWrap.addEventListener('touchend',   onTouchEnd,   { passive: true });
        section.addEventListener('mouseenter', stopAutoplay);
        section.addEventListener('mouseleave', startAutoplay);
        updateUI(0, -1);
        startAutoplay();
    }
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
    function startAutoplay() {
        stopAutoplay();
        autoTimer = setInterval(next, AUTOPLAY_DELAY);
    }
    function stopAutoplay() {
        if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
    }
    function onKeyDown(e) {
        var rect   = section.getBoundingClientRect();
        var inView = rect.top < window.innerHeight && rect.bottom > 0;
        if (!inView) return;
        if (e.key === 'ArrowLeft')  { prev(); stopAutoplay(); }
        if (e.key === 'ArrowRight') { next(); stopAutoplay(); }
    }
    function onTouchStart(e) {
        touchStartX = e.changedTouches[0].clientX;  
        touchStartY = e.changedTouches[0].clientY;
        touchMoved  = false;
    }
    function onTouchMove(e) {
        touchMoved = true;  
    }
    function onTouchEnd(e) {
        if (!touchMoved) return;  
        var dx = e.changedTouches[0].clientX - touchStartX;
        var dy = e.changedTouches[0].clientY - touchStartY;
        if (Math.abs(dx) < 30) return;             
        if (Math.abs(dy) > Math.abs(dx) * 0.8) return; 
        if (dx < 0) next(); else prev();
        stopAutoplay();
    }
    function pad(n) { return n < 10 ? '0' + n : '' + n; }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>