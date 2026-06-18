/**
 * about-section.js  →  public/js/about-section.js
 * Load: <script src="{{ asset('js/about-section.js') }}" defer></script>
 *
 * Features:
 *  1. Scroll-reveal: cards fade + slide up when they enter the viewport
 *  2. Counter animation: numbers count up from 0 → target on first reveal
 *  3. Respects prefers-reduced-motion
 */

(function () {
    'use strict';

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    /* ── Helpers ─────────────────────────────────────────── */

    /**
     * Easing: easeOutQuart — fast start, soft stop
     * @param {number} t  progress 0→1
     */
    function easeOutQuart(t) {
        return 1 - Math.pow(1 - t, 4);
    }

    /**
     * Animate a counter from 0 → target over `duration` ms.
     * @param {HTMLElement} el       The <span class="as-counter"> element
     * @param {number}      target   Final value
     * @param {number}      duration ms (default 1800)
     */
    function animateCounter(el, target, duration) {
        duration = duration || 1800;

        if (prefersReducedMotion) {
            el.textContent = target;
            return;
        }

        const startTime = performance.now();

        function tick(now) {
            const elapsed  = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const value    = Math.round(easeOutQuart(progress) * target);

            el.textContent = value;

            if (progress < 1) {
                requestAnimationFrame(tick);
            } else {
                el.textContent = target; // ensure exact final value
            }
        }

        requestAnimationFrame(tick);
    }

    /* ── IntersectionObserver ────────────────────────────── */

    /**
     * Observe every .as-card.
     * On first intersection:
     *   – add .as-card--visible  (triggers CSS fade-in)
     *   – start the counter animation
     *   – unobserve so it never fires again
     */
    function initObserver() {
        const cards = document.querySelectorAll('#about-section .as-card');
        if (!cards.length) return;

        // If reduced motion, just show cards immediately
        if (prefersReducedMotion) {
            cards.forEach(function (card) {
                card.classList.add('as-card--visible');
                var counter = card.querySelector('.as-counter');
                if (counter) counter.textContent = card.dataset.count;
            });
            return;
        }

        var options = {
            root      : null,      // viewport
            rootMargin: '0px 0px -80px 0px',  // trigger slightly before fully visible
            threshold : 0.15
        };

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;

                var card    = entry.target;
                var counter = card.querySelector('.as-counter');
                var target  = parseInt(card.dataset.count, 10);

                // 1. Reveal card
                card.classList.add('as-card--visible');

                // 2. Animate counter
                if (counter && !isNaN(target)) {
                    // Slightly longer duration for bigger numbers
                    var duration = target >= 100 ? 2000 : 1600;
                    animateCounter(counter, target, duration);
                }

                // 3. Stop watching
                observer.unobserve(card);
            });
        }, options);

        cards.forEach(function (card) {
            observer.observe(card);
        });
    }

    /* ── Init ────────────────────────────────────────────── */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initObserver);
    } else {
        initObserver(); // already loaded
    }

})();



    /* ──────────────────────────────────────────────── */
    /* ────────slider code js home page under use ───── */
    /* ──────────────────────────────────────────────── */

/**
 * case-study.js  →  public/js/case-study.js
 * <script src="{{ asset('js/case-study.js') }}" defer></script>
 *
 * Features:
 *  – Smooth slide animation (translateX + opacity)
 *  – Ken Burns bg zoom on active slide
 *  – Dot indicators (animated active pill)
 *  – Counter "01 / 03" updates
 *  – Prev / Next header arrows + side hover arrows
 *  – Keyboard arrow key support
 *  – Touch / swipe support (mobile)
 *  – Auto-play with pause-on-hover
 *  – Respects prefers-reduced-motion
 */

(function () {
    'use strict';

    /* ── Config ──────────────────────────────────────────── */
    var AUTOPLAY_DELAY  = 3000;   // ms between auto-advances
    var ANIM_LOCK_TIME  = 700;    // ms — block rapid clicks during transition

    /* ── State ───────────────────────────────────────────── */
    var slides      = [];
    var dots        = [];
    var current     = 0;
    var total       = 0;
    var isAnimating = false;
    var autoTimer   = null;
    var touchStartX = 0;
    var touchStartY = 0;

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
        section        = document.getElementById('case-study-section');
        if (!section) return;

        track          = document.getElementById('cs-track');
        dotsWrap       = document.getElementById('cs-dots');
        btnPrev        = document.getElementById('cs-prev');
        btnNext        = document.getElementById('cs-next');
        counterCurrent = section.querySelector('.cs-counter__current');
        counterTotal   = section.querySelector('.cs-counter__total');
        sideLeft       = section.querySelector('.cs-side-arrow--left');
        sideRight      = section.querySelector('.cs-side-arrow--right');

        slides = Array.prototype.slice.call(
            track.querySelectorAll('.cs-slide')
        );
        total = slides.length;

        if (total < 2) return; // nothing to slide

        /* Update total counter */
        if (counterTotal) counterTotal.textContent = pad(total);

        /* Build dots */
        buildDots();

        /* Buttons */
        if (btnPrev)   btnPrev.addEventListener('click', prev);
        if (btnNext)   btnNext.addEventListener('click', next);
        if (sideLeft)  sideLeft.addEventListener('click', prev);
        if (sideRight) sideRight.addEventListener('click', next);

        /* Keyboard */
        document.addEventListener('keydown', onKeyDown);

        /* Touch / swipe */
        track.addEventListener('touchstart', onTouchStart, { passive: true });
        track.addEventListener('touchend',   onTouchEnd,   { passive: true });

        /* Pause autoplay on hover */
        section.addEventListener('mouseenter', stopAutoplay);
        section.addEventListener('mouseleave', startAutoplay);

        /* Start */
        updateUI(0, -1);
        startAutoplay();
    }

    /* ── Build dot buttons ───────────────────────────────── */
    function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        dots = [];

        for (var i = 0; i < total; i++) {
            var btn = document.createElement('button');
            btn.className   = 'cs-dot' + (i === 0 ? ' cs-dot--active' : '');
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

        /* Outgoing slide */
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

        /* Incoming slide */
        if (slides[newIdx]) {
            slides[newIdx].classList.add('cs-slide--active');
            slides[newIdx].setAttribute('aria-hidden', 'false');
        }

        /* Counter */
        if (counterCurrent) counterCurrent.textContent = pad(newIdx + 1);

        /* Dots */
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
        /* Only react when slider is in viewport */
        var rect = section.getBoundingClientRect();
        var inView = rect.top < window.innerHeight && rect.bottom > 0;
        if (!inView) return;

        if (e.key === 'ArrowLeft')  { prev(); stopAutoplay(); }
        if (e.key === 'ArrowRight') { next(); stopAutoplay(); }
    }

    /* ── Touch / Swipe ───────────────────────────────────── */
    function onTouchStart(e) {
        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;
    }
    function onTouchEnd(e) {
        var dx = e.changedTouches[0].screenX - touchStartX;
        var dy = e.changedTouches[0].screenY - touchStartY;

        /* Ignore mostly-vertical swipes (scrolling) */
        if (Math.abs(dx) < 40 || Math.abs(dy) > Math.abs(dx)) return;

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