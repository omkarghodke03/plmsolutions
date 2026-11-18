/* ============================================================================
   AUTOMOTIVE INDUSTRY - STICKY TAB NAVIGATION (SCROLL-SPY + FADE) SCRIPT
   ----------------------------------------------------------------------------
   What this does:
   1. Watches each content section (#overview, #challenges, #solutions, #get-in-touch)
      using IntersectionObserver and marks the matching tab "active" only when
      that section is the one currently in view.
   2. Fades content IN as a section scrolls into view, and fades it back OUT
      if you scroll past it (either direction) — via the .auto-visible class.
   3. Smooth-scrolls to a section when a tab / in-page CTA is clicked, WITHOUT
      ever writing a #hash/slug into the browser URL address bar.
   ============================================================================ */

document.addEventListener('DOMContentLoaded', function () {

    var stickyNav    = document.getElementById('autoStickyNav');
    var tabLinks      = document.querySelectorAll('.auto-tab-link');
    var scrollLinks   = document.querySelectorAll('.auto-scroll-link'); // tabs + in-page CTA buttons
    var sections      = document.querySelectorAll('.auto-content-section[data-section]');
    var fadeTargets   = document.querySelectorAll('.auto-fade-target');

    if (!sections.length) {
        return; // Section not present on this page
    }

    /* ------------------------------------------------------------------
       Helper: activate a tab by its data-target value (e.g. "#overview")
    ------------------------------------------------------------------ */
    function setActiveTab(targetId) {
        tabLinks.forEach(function (link) {
            if (link.getAttribute('data-target') === targetId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    function getNavHeight() {
        return stickyNav ? stickyNav.offsetHeight : 0;
    }

    /* ------------------------------------------------------------------
       1. SCROLL-SPY (active tab) VIA INTERSECTION OBSERVER
    ------------------------------------------------------------------ */
    function buildSpyObserver() {
        var navHeight = getNavHeight();

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var id = '#' + entry.target.getAttribute('id');
                    setActiveTab(id);
                }
            });
        }, {
            root: null,
            rootMargin: '-' + (navHeight + 10) + 'px 0px -60% 0px',
            threshold: 0
        });

        sections.forEach(function (section) {
            observer.observe(section);
        });

        return observer;
    }

    /* ------------------------------------------------------------------
       2. FADE-IN / FADE-OUT VIA A SEPARATE, MORE FORGIVING OBSERVER
       Fades content in as soon as a little of it is visible, and fades
       it back out once it's fully scrolled away (both directions).
    ------------------------------------------------------------------ */
    function buildFadeObserver() {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('auto-visible');
                } else {
                    entry.target.classList.remove('auto-visible');
                }
            });
        }, {
            root: null,
            rootMargin: '0px 0px -10% 0px',
            threshold: 0.15
        });

        fadeTargets.forEach(function (el) {
            observer.observe(el);
        });

        return observer;
    }

    var spyObserver  = buildSpyObserver();
    var fadeObserver = fadeTargets.length ? buildFadeObserver() : null;

    /* ------------------------------------------------------------------
       3. SMOOTH SCROLL ON CLICK — NEVER TOUCHES THE URL / HASH
       (links use href="javascript:void(0);" + data-target, so there is
       nothing for the browser to append to the address bar by default;
       we still call preventDefault() defensively.)
    ------------------------------------------------------------------ */
    scrollLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            var targetId = this.getAttribute('data-target');
            var targetEl = document.querySelector(targetId);
            if (!targetEl) return;

            var navHeight = getNavHeight();
            var targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - navHeight - 10;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            // Reflect the click immediately for a snappy feel;
            // the scroll-spy observer keeps it correct afterwards.
            setActiveTab(targetId);
        });
    });

    /* ------------------------------------------------------------------
       4. RE-CALCULATE OBSERVER OFFSETS ON RESIZE
       (sticky nav height can change on mobile when tabs wrap to 2 lines)
    ------------------------------------------------------------------ */
    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            spyObserver.disconnect();
            spyObserver = buildSpyObserver();
        }, 250);
    });

});