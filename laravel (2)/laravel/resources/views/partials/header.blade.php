<style>
.plm-mobile-cat {
    border-bottom: 1px solid var(--plm-border);
}
.plm-mobile-cat:last-of-type {
    border-bottom: none;
}
.plm-mobile-cat__toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 12px 24px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--plm-font);
    font-size: 13.5px;
    font-weight: 600;
    letter-spacing: 0.02em;
    color: var(--plm-dark);
    text-align: left;
    transition: color var(--plm-transition);
}
.plm-mobile-cat__toggle:hover {
    color: var(--plm-primary);
}
.plm-mobile-cat__toggle .plm-nav__chevron {
    flex-shrink: 0;
    transition: transform var(--plm-transition);
}
.plm-mobile-cat__list {
    padding: 0 0 6px 12px;
}
.plm-mobile-nav__sub-link--viewall {
    display: block;
    margin: 6px 24px 0;
    padding: 10px 0;
    font-size: 13px;
    font-weight: 700;
    color: var(--plm-primary);
    border-top: 1px solid var(--plm-border);
}    
</style>
<div class="plm-topbar">
    <div class="container-fluid plm-topbar__inner">

        <span class="plm-topbar__label">
            Discover Independence &mdash; Download our
            <a href="#" class="plm-topbar__link">Brochure</a>
        </span>

       <div class="plm-topbar__right">

    {{-- Flag + Country --}}
    <span class="plm-geo__display" aria-live="polite">
        <img src="https://flagcdn.com/w20/{{ $geoData['flag'] }}.png"
             alt="{{ $geoData['country'] }}"
             style="width:20px;height:14px;object-fit:cover;border-radius:2px;vertical-align:middle;margin-right:5px;">
        <span>{{ $geoData['country'] }}</span>
    </span>

    {{-- Phone --}}
    <a href="{{ $geoData['tel'] }}" class="plm-topbar__phone" aria-label="Call us">
        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
        </svg>
        <span>{{ $geoData['phone'] }}</span>
    </a>

    {{-- Email --}}
    <!--<a href="mailto:{{ $geoData['email'] }}" class="plm-topbar__email" aria-label="Email us">-->
    <!--    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">-->
    <!--        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/>-->
    <!--    </svg>-->
    <!--</a>-->

</div>
    </div>
</div>

{{-- ═══════════════════════
     MAIN HEADER
     ═══════════════════════ --}}
<header class="plm-header" id="plm-header">
    <div class="container-fluid plm-header__inner">

        <a href="https://www.milestonetech.net" class="plm-header__logo" aria-label="Milestone PLM Solutions Home">
            <img src="{{ asset('service-img/plm-logo.png') }}" alt="Milestone PLM Solutions" width="180" height="50" loading="eager">
        </a>
        <div class="plm-header__actions">
                        <a href="https://www.milestonetech.net/contact" target="_blank" class="plm-header__cta">Get a Quote</a>

            <button class="plm-header__search-btn" id="plm-search-toggle"
                    aria-label="Open search" aria-expanded="false"
                    aria-controls="plm-search-bar" type="button">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Search Bar --}}
    <div class="plm-search-bar" id="plm-search-bar" role="search" aria-hidden="true" hidden>
        <div class="container-fluid plm-search-bar__inner">
            <form action="{{ url('/search') }}" method="GET" class="plm-search-bar__form" role="search">
                @csrf
                <label for="plm-search-input" class="visually-hidden">Search website</label>
                <input type="search" id="plm-search-input" name="q"
                       class="plm-search-bar__input"
                       placeholder="Search across the entire website..."
                       autocomplete="off" maxlength="200"
                       value="{{ e(request('q', '')) }}" aria-label="Search">
                <button type="submit" class="plm-search-bar__submit" aria-label="Submit search">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                <button type="button" class="plm-search-bar__close" id="plm-search-close" aria-label="Close search">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</header>

<div class="plm-mobile-nav" id="plm-mobile-nav" aria-hidden="true" hidden>
    <div class="plm-mobile-nav__overlay" id="plm-mobile-overlay"></div>
    
</div>



<div class="plm-mega-backdrop" id="plm-mega-backdrop" hidden aria-hidden="true"></div>

@push('scripts')
<script>
(function () {
    'use strict';

    const $  = (sel, ctx = document) => ctx.querySelector(sel);
    const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];
    const header      = $('#plm-header');
    const topbar      = document.querySelector('.plm-topbar');
    const backdrop    = $('#plm-mega-backdrop');
    const megaToggles = $$('[data-plm-mega]');
    let   closeTimer  = null;
    let   scrollRAF   = null;
    function getMegaTop() {
        const headerRect = header ? header.getBoundingClientRect() : null;
        return headerRect ? Math.round(headerRect.bottom) : 0;
    }

    function syncMegaTop() {
        const top = getMegaTop() + 'px';
        $$('.plm-mega:not([hidden])').forEach(p => { p.style.top = top; });
    }

    function openMega(btn) {
        clearTimeout(closeTimer);
        const panel = $(`#mega-${btn.dataset.plmMega}`);
        if (!panel) return;
        megaToggles.forEach(b => { if (b !== btn) _hideMega(b); });
        btn.setAttribute('aria-expanded', 'true');
        panel.style.top = getMegaTop() + 'px';
        panel.hidden = false;
        backdrop.hidden = false;
    }

    function _hideMega(btn) {
        const panel = $(`#mega-${btn.dataset.plmMega}`);
        if (!panel) return;
        btn.setAttribute('aria-expanded', 'false');
        panel.hidden = true;
    }

    function scheduleClose() {
        closeTimer = setTimeout(closeAllMega, 150);
    }

    function closeAllMega() {
        clearTimeout(closeTimer);
        megaToggles.forEach(b => _hideMega(b));
        backdrop.hidden = true;
    }

    window.addEventListener('scroll', () => {
        if (scrollRAF) return;
        scrollRAF = requestAnimationFrame(() => {
            syncMegaTop();
            header && header.classList.toggle('plm-header--scrolled', window.scrollY > 10);
            scrollRAF = null;
        });
    }, { passive: true });

    megaToggles.forEach(btn => {
        const panel = $(`#mega-${btn.dataset.plmMega}`);
        btn.addEventListener('mouseenter', () => openMega(btn));
        btn.addEventListener('mouseleave', scheduleClose);
        if (panel) {
            panel.addEventListener('mouseenter', () => clearTimeout(closeTimer));
            panel.addEventListener('mouseleave', scheduleClose);
        }
        btn.addEventListener('click', () => {
            btn.getAttribute('aria-expanded') === 'true'
                ? (_hideMega(btn), backdrop.hidden = true)
                : openMega(btn);
        });
    });

    backdrop.addEventListener('click', closeAllMega);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeAllMega(); closeSearch(); } });
    document.addEventListener('click', e => {
        if (!e.target.closest('#plm-header') && !e.target.closest('#plm-mega-backdrop')) closeAllMega();
    });


  function activateMegaPanel(tag) {
       const container = tag.closest('.plm-mega');
       if (!container) return;
       $$('.plm-mega__tag', container).forEach(t => t.classList.remove('plm-mega__tag--active'));
       tag.classList.add('plm-mega__tag--active');
       $$('.plm-mega__panel', container).forEach(p => { p.hidden = true; p.classList.remove('plm-mega__panel--active'); });
       const target = $(`#panel-${tag.dataset.plmPanel}`);
       if (target) { target.hidden = false; target.classList.add('plm-mega__panel--active'); }
   }

$$('[data-plm-panel]').forEach(tag => {
    tag.addEventListener('mouseenter', () => activateMegaPanel(tag));
    tag.addEventListener('click', () => activateMegaPanel(tag));
});

    const searchToggle = $('#plm-search-toggle');
    const searchClose  = $('#plm-search-close');
    const searchBar    = $('#plm-search-bar');
    const searchInput  = $('#plm-search-input');

    function openSearch() {
        searchBar.hidden = false; searchBar.removeAttribute('aria-hidden');
        searchToggle.setAttribute('aria-expanded', 'true');
        closeAllMega(); closeMobileNav();
        setTimeout(() => searchInput && searchInput.focus(), 50);
    }
    function closeSearch() {
        if (!searchBar || searchBar.hidden) return;
        searchBar.hidden = true; searchBar.setAttribute('aria-hidden', 'true');
        searchToggle.setAttribute('aria-expanded', 'false');
    }
    searchToggle && searchToggle.addEventListener('click', openSearch);
    searchClose  && searchClose.addEventListener('click', closeSearch);
    const hamburger     = $('#plm-hamburger');
    const mobileNav     = $('#plm-mobile-nav');
    const mobileClose   = $('#plm-mobile-close');
    const mobileOverlay = $('#plm-mobile-overlay');

    function openMobileNav() {
        mobileNav.hidden = false; mobileNav.removeAttribute('aria-hidden');
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.classList.add('plm-nav-open'); closeAllMega();
    }
    function closeMobileNav() {
        mobileNav.hidden = true; mobileNav.setAttribute('aria-hidden', 'true');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('plm-nav-open');
    }
    hamburger     && hamburger.addEventListener('click', openMobileNav);
    mobileClose   && mobileClose.addEventListener('click', closeMobileNav);
    mobileOverlay && mobileOverlay.addEventListener('click', closeMobileNav);

    $$('[data-plm-mobile-toggle]').forEach(btn => {
    btn.addEventListener('click', () => {
        const sub = $(`#${btn.dataset.plmMobileToggle}`);
        if (!sub) return;
        sub.hidden = !sub.hidden;
        const ch = btn.querySelector('.plm-nav__chevron');
        if (ch) ch.style.transform = sub.hidden ? '' : 'rotate(180deg)';
    });
});


$$('[data-plm-mobile-cat]').forEach(btn => {
    btn.addEventListener('click', () => {
        const list = $(`#${btn.dataset.plmMobileCat}`);
        if (!list) return;
        const wasOpen = !list.hidden;
        const parentSub = btn.closest('.plm-mobile-nav__sub');

        if (parentSub) {
            $$('.plm-mobile-cat__list', parentSub).forEach(l => { l.hidden = true; });
            $$('.plm-mobile-cat__toggle', parentSub).forEach(b => {
                const c = b.querySelector('.plm-nav__chevron');
                if (c) c.style.transform = '';
            });
        }

        if (!wasOpen) {
            list.hidden = false;
            const chev = btn.querySelector('.plm-nav__chevron');
            if (chev) chev.style.transform = 'rotate(180deg)';
        }
    });
});

/* Initial shadow check */
header && header.classList.toggle('plm-header--scrolled', window.scrollY > 10);

    /* Initial shadow check */
    header && header.classList.toggle('plm-header--scrolled', window.scrollY > 10);

})();
</script>
@endpush