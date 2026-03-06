// Custom JS
console.log('Milestone Project Loaded');


/* ============================================================
 1)  Preloader Controller code javascript start
   File: resources/js/custom.js

   HOW LOADING TIME WORKS
   ──────────────────────
   The preloader hides itself in ONE of these 3 ways,
   whichever happens FIRST:

   1. window 'load' event fires           → page fully loaded
      (all images, CSS, JS assets done)   → hides immediately

   2. MIN_MS delay passes                 → minimum display time
      (even if page loads in 0.1s,        → always shows spinner
       spinner stays visible this long)    → for at least MIN_MS

   3. MAX_MS hard ceiling is hit          → emergency fallback
      (if load event never fires due to   → force-hides after
       broken asset / very slow network)   → MAX_MS no matter what

   CHANGE THESE TWO VALUES TO CONTROL TIMING:
   ───────────────────────────────────────────
   MIN_MS = minimum time spinner shows   (default: 800ms)
   MAX_MS = maximum time spinner shows   (default: 5000ms = 5s)
   ============================================================ */

(function () {
    'use strict';

    /* ══════════════════════════════════════════════════════════
       ⚙️  TIMING SETTINGS — change these values as needed
       ══════════════════════════════════════════════════════════

       MIN_MS  →  Spinner shows for AT LEAST this long.
                  Even if the page loads in 200ms, the spinner
                  stays visible for MIN_MS before hiding.
                  Recommended: 500 – 1500ms

       MAX_MS  →  Spinner NEVER shows longer than this.
                  Hard ceiling. Page is always unblocked by this time.
                  Recommended: 3000 – 5000ms

       FADE_MS →  How long the fade-out animation takes.
                  Should match the CSS transition value (0.55s = 550ms)
    ══════════════════════════════════════════════════════════ */
    const MIN_MS  = 500;    // ← change this  (e.g. 500, 1000, 1500)
    const MAX_MS  = 4000;   // ← change this  (e.g. 3000, 4000, 5000)
    const FADE_MS = 250;    // ← keep in sync with CSS transition

    /* ── Elements ───────────────────────────────────────────── */
    const preloader = document.getElementById('preloader');
    if (!preloader) return;

    /* ── CSRF token (for Axios / fetch requests) ────────────── */
    const csrfMeta  = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfMeta ? csrfMeta.getAttribute('content') : '';
    // Usage in fetch: headers: { 'X-CSRF-TOKEN': csrfToken }

    /* ── State ──────────────────────────────────────────────── */
    let hidden    = false;
    let pageReady = false;        // true when window.load fires
    const startTime = Date.now(); // record when preloader started

    /* ── Lock body scroll while preloader visible ───────────── */
    document.body.style.overflow = 'hidden';

    /* ── Core hide function (idempotent) ────────────────────── */
    function hidePreloader() {
        if (hidden) return;
        hidden = true;

        setTimeout(function () {
            preloader.classList.add('preloader--hidden');

            preloader.addEventListener('transitionend', function onEnd() {
                preloader.removeEventListener('transitionend', onEnd);
                if (preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }
                document.body.style.overflow = '';
            }, { once: true });

        }, FADE_MS);
    }

    /* ── Smart hide: respects MIN_MS minimum display time ───── */
    function tryHide() {
        const elapsed   = Date.now() - startTime;
        const remaining = MIN_MS - elapsed;

        if (remaining <= 0) {
            // Page loaded AND minimum time already passed → hide now
            hidePreloader();
        } else {
            // Page loaded but minimum time not yet reached
            // → wait the remaining time, then hide
            setTimeout(hidePreloader, remaining);
        }
    }

    /* ── 1. Hide when page fully loads (images, CSS, JS done) ── */
    window.addEventListener('load', function () {
        pageReady = true;
        tryHide();
    }, { once: true });

    /* ── 2. Hard ceiling: ALWAYS hide within MAX_MS ─────────── */
    setTimeout(hidePreloader, MAX_MS);

    /* ── 3. Tab switch safety (mobile browsers) ─────────────── */
    document.addEventListener('visibilitychange', function () {
        if (document.visibilityState === 'visible' && pageReady) {
            tryHide();
        }
    });

})();


/* ============================================================
2)cookies javascript start 
============================================================*/