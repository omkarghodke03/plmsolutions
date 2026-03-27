{{-- resources/views/partials/header.blade.php --}}

{{-- ═══════════════════════
     TOP BAR
     ═══════════════════════ --}}
<div class="plm-topbar">
    <div class="container-fluid plm-topbar__inner">

        <span class="plm-topbar__label">
            Discover Independence &mdash; Download our
            <a href="#" class="plm-topbar__link">Brochure</a>
        </span>

        <div class="plm-topbar__right">

            {{-- Auto-detected location display (read-only, no dropdown) --}}
            <span class="plm-geo__display" id="plm-geo-display" aria-live="polite">
                <span id="plm-geo-flag" aria-hidden="true">🌐</span>
                <span id="plm-geo-name">Detecting...</span>
            </span>

            {{-- Phone — populated by GeoIP JS --}}
            <a id="plm-topbar-phone" href="#" class="plm-topbar__phone" aria-label="Call us">
                <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                </svg>
                <span id="plm-topbar-phone-text">&nbsp;</span>
            </a>

            {{-- Email — populated by GeoIP JS --}}
            <a id="plm-topbar-email" href="#" class="plm-topbar__email" aria-label="Email us">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/>
                </svg>
                <span id="plm-topbar-email-text" class="plm-topbar__email-text">&nbsp;</span>
            </a>

        </div>
    </div>
</div>

{{-- ═══════════════════════
     MAIN HEADER
     ═══════════════════════ --}}
<header class="plm-header" id="plm-header">
    <div class="container-fluid plm-header__inner">

        <a href="{{ url('/') }}" class="plm-header__logo" aria-label="Milestone PLM Solutions Home">
            <img src="{{ asset('images/plm-logo.png') }}" alt="Milestone PLM Solutions" width="180" height="50" loading="eager">
        </a>

        <nav class="plm-nav" id="plm-nav" role="navigation" aria-label="Main navigation">
            <ul class="plm-nav__list" role="menubar">

                {{-- Services Mega --}}
                <li class="plm-nav__item plm-nav__item--mega" role="none">
                    <button class="plm-nav__link plm-nav__link--toggle"
                            aria-haspopup="true" aria-expanded="false"
                            data-plm-mega="services" type="button">
                        Services
                        <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </button>
                    <div class="plm-mega" id="mega-services" role="region" aria-label="Services menu" hidden>
                        <div class="plm-mega__layout">
                            <div class="plm-mega__tags">
                                <button class="plm-mega__tag plm-mega__tag--active" data-plm-panel="bim" type="button">BIM Services</button>
                                <button class="plm-mega__tag" data-plm-panel="engineering" type="button">Engineering Design</button>
                                <button class="plm-mega__tag" data-plm-panel="staffing" type="button">Staffing &amp; Solutions</button>
                                <a href="{{ url('/services') }}" class="plm-mega__view-all">VIEW ALL SERVICES &rarr;</a>
                            </div>
                            <div class="plm-mega__panels">
                                <div class="plm-mega__panel plm-mega__panel--active" id="panel-bim">
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BIM MODELING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/architectural-bim') }}" class="plm-mega__item-link">Architectural BIM</a></li>
                                            <li><a href="{{ url('/services/structural-bim') }}" class="plm-mega__item-link">Structural BIM</a></li>
                                            <li><a href="{{ url('/services/mep-bim') }}" class="plm-mega__item-link">MEP BIM</a></li>
                                            <li><a href="{{ url('/services/as-built-documentation') }}" class="plm-mega__item-link">As-Built Documentation</a></li>
                                        </ul>
                                    </div>
                                     <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BIM MODELING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/architectural-bim') }}" class="plm-mega__item-link">Architectural BIM</a></li>
                                            <li><a href="{{ url('/services/structural-bim') }}" class="plm-mega__item-link">Structural BIM</a></li>
                                            <li><a href="{{ url('/services/mep-bim') }}" class="plm-mega__item-link">MEP BIM</a></li>
                                            <li><a href="{{ url('/services/as-built-documentation') }}" class="plm-mega__item-link">As-Built Documentation</a></li>
                                        </ul>
                                    </div>
                                     <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BIM MODELING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/architectural-bim') }}" class="plm-mega__item-link">Architectural BIM</a></li>
                                            <li><a href="{{ url('/services/structural-bim') }}" class="plm-mega__item-link">Structural BIM</a></li>
                                            <li><a href="{{ url('/services/mep-bim') }}" class="plm-mega__item-link">MEP BIM</a></li>
                                            <li><a href="{{ url('/services/as-built-documentation') }}" class="plm-mega__item-link">As-Built Documentation</a></li>
                                        </ul>
                                    </div>
                                     <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BIM MODELING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/architectural-bim') }}" class="plm-mega__item-link">Architectural BIM</a></li>
                                            <li><a href="{{ url('/services/structural-bim') }}" class="plm-mega__item-link">Structural BIM</a></li>
                                            <li><a href="{{ url('/services/mep-bim') }}" class="plm-mega__item-link">MEP BIM</a></li>
                                            <li><a href="{{ url('/services/as-built-documentation') }}" class="plm-mega__item-link">As-Built Documentation</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BIM COORDINATION</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/clash-detection') }}" class="plm-mega__item-link">Clash Detection</a></li>
                                            <li><a href="{{ url('/services/4d-5d-scheduling') }}" class="plm-mega__item-link">4D / 5D Scheduling</a></li>
                                            <li><a href="{{ url('/services/lod-management') }}" class="plm-mega__item-link">LOD Management</a></li>
                                            <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Scan to BIM</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="plm-mega__panel" id="panel-engineering" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">CAD SERVICES</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/2d-drafting') }}" class="plm-mega__item-link">2D Drafting</a></li>
                                            <li><a href="{{ url('/services/3d-modeling') }}" class="plm-mega__item-link">3D Modeling</a></li>
                                            <li><a href="{{ url('/services/product-design') }}" class="plm-mega__item-link">Product Design</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">ANALYSIS</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">FEA Analysis</a></li>
                                            <li><a href="{{ url('/services/cfd') }}" class="plm-mega__item-link">CFD Simulation</a></li>
                                            <li><a href="{{ url('/services/thermal') }}" class="plm-mega__item-link">Thermal Analysis</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="plm-mega__panel" id="panel-staffing" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">STAFFING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/contract-staffing') }}" class="plm-mega__item-link">Contract Staffing</a></li>
                                            <li><a href="{{ url('/services/permanent-staffing') }}" class="plm-mega__item-link">Permanent Staffing</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">SOLUTIONS</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/plm-implementation') }}" class="plm-mega__item-link">PLM Implementation</a></li>
                                            <li><a href="{{ url('/services/cad-migration') }}" class="plm-mega__item-link">CAD Migration</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Industries Mega --}}
                <li class="plm-nav__item plm-nav__item--mega" role="none">
                    <button class="plm-nav__link plm-nav__link--toggle"
                            aria-haspopup="true" aria-expanded="false"
                            data-plm-mega="industries" type="button">
                        Industries
                        <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </button>
                    <div class="plm-mega" id="mega-industries" role="region" aria-label="Industries menu" hidden>
                        <div class="plm-mega__layout">
                            <div class="plm-mega__tags">
                                <button class="plm-mega__tag plm-mega__tag--active" data-plm-panel="construction" type="button">Construction</button>
                                <button class="plm-mega__tag" data-plm-panel="manufacturing" type="button">Manufacturing</button>
                                <button class="plm-mega__tag" data-plm-panel="infrastructure" type="button">Infrastructure</button>
                                <a href="{{ url('/industries') }}" class="plm-mega__view-all">VIEW ALL INDUSTRIES &rarr;</a>
                            </div>
                            <div class="plm-mega__panels">
                                <div class="plm-mega__panel plm-mega__panel--active" id="panel-construction">
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BUILDING</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/industries/residential') }}" class="plm-mega__item-link">Residential</a></li>
                                            <li><a href="{{ url('/industries/commercial') }}" class="plm-mega__item-link">Commercial</a></li>
                                            <li><a href="{{ url('/industries/industrial') }}" class="plm-mega__item-link">Industrial</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">SPECIALTY</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/industries/healthcare') }}" class="plm-mega__item-link">Healthcare</a></li>
                                            <li><a href="{{ url('/industries/education') }}" class="plm-mega__item-link">Education</a></li>
                                            <li><a href="{{ url('/industries/retail') }}" class="plm-mega__item-link">Retail</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="plm-mega__panel" id="panel-manufacturing" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">SECTORS</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/industries/automotive') }}" class="plm-mega__item-link">Automotive</a></li>
                                            <li><a href="{{ url('/industries/aerospace') }}" class="plm-mega__item-link">Aerospace</a></li>
                                            <li><a href="{{ url('/industries/consumer-goods') }}" class="plm-mega__item-link">Consumer Goods</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="plm-mega__panel" id="panel-infrastructure" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">CIVIL</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/industries/roads-highways') }}" class="plm-mega__item-link">Roads &amp; Highways</a></li>
                                            <li><a href="{{ url('/industries/bridges') }}" class="plm-mega__item-link">Bridges</a></li>
                                            <li><a href="{{ url('/industries/utilities') }}" class="plm-mega__item-link">Utilities</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/case-studies') }}" class="plm-nav__link" role="menuitem">Case Studies</a>
                </li>
                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/blog') }}" class="plm-nav__link" role="menuitem">Blog</a>
                </li>
                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/about-us') }}" class="plm-nav__link" role="menuitem">About</a>
                </li>

            </ul>
        </nav>

        <div class="plm-header__actions">
            <button class="plm-header__search-btn" id="plm-search-toggle"
                    aria-label="Open search" aria-expanded="false"
                    aria-controls="plm-search-bar" type="button">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <a href="{{ url('/admin/login') }}" target="_blank" class="plm-header__cta">Get a Quote</a>
            <button class="plm-header__hamburger" id="plm-hamburger"
                    aria-label="Open navigation menu" aria-expanded="false"
                    aria-controls="plm-mobile-nav" type="button">
                <span class="plm-header__hamburger-bar"></span>
                <span class="plm-header__hamburger-bar"></span>
                <span class="plm-header__hamburger-bar"></span>
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

{{-- Mobile Nav --}}
<div class="plm-mobile-nav" id="plm-mobile-nav" aria-hidden="true" hidden>
    <div class="plm-mobile-nav__overlay" id="plm-mobile-overlay"></div>
    <nav class="plm-mobile-nav__drawer" aria-label="Mobile navigation">

        <button class="plm-mobile-nav__close" id="plm-mobile-close" aria-label="Close menu" type="button">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>

        {{-- Mobile auto-detected contact --}}
        <div class="plm-mobile-contact">
            <a id="plm-mobile-phone" href="#" class="plm-mobile-contact__link">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                </svg>
                <span id="plm-mobile-phone-text">&nbsp;</span>
            </a>
            <a id="plm-mobile-email" href="#" class="plm-mobile-contact__link">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/>
                </svg>
                <span id="plm-mobile-email-text">&nbsp;</span>
            </a>
        </div>

        <ul class="plm-mobile-nav__list">
            <li class="plm-mobile-nav__item">
                <button class="plm-mobile-nav__link plm-mobile-nav__link--toggle" data-plm-mobile-toggle="m-services" type="button">
                    Services
                    <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </button>
                <div class="plm-mobile-nav__sub" id="m-services" hidden>
                    <strong class="plm-mobile-nav__sub-heading">BIM MODELING</strong>
                    <a href="{{ url('/services/architectural-bim') }}" class="plm-mobile-nav__sub-link">Architectural BIM</a>
                    <a href="{{ url('/services/structural-bim') }}" class="plm-mobile-nav__sub-link">Structural BIM</a>
                    <a href="{{ url('/services/mep-bim') }}" class="plm-mobile-nav__sub-link">MEP BIM</a>
                    <a href="{{ url('/services/as-built-documentation') }}" class="plm-mobile-nav__sub-link">As-Built Documentation</a>
                    <strong class="plm-mobile-nav__sub-heading">BIM COORDINATION</strong>
                    <a href="{{ url('/services/clash-detection') }}" class="plm-mobile-nav__sub-link">Clash Detection</a>
                    <a href="{{ url('/services/4d-5d-scheduling') }}" class="plm-mobile-nav__sub-link">4D / 5D Scheduling</a>
                    <a href="{{ url('/services/lod-management') }}" class="plm-mobile-nav__sub-link">LOD Management</a>
                    <a href="{{ url('/services/scan-to-bim') }}" class="plm-mobile-nav__sub-link">Scan to BIM</a>
                </div>
            </li>
            <li class="plm-mobile-nav__item">
                <button class="plm-mobile-nav__link plm-mobile-nav__link--toggle" data-plm-mobile-toggle="m-industries" type="button">
                    Industries
                    <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </button>
                <div class="plm-mobile-nav__sub" id="m-industries" hidden>
                    <strong class="plm-mobile-nav__sub-heading">CONSTRUCTION</strong>
                    <a href="{{ url('/industries/residential') }}" class="plm-mobile-nav__sub-link">Residential</a>
                    <a href="{{ url('/industries/commercial') }}" class="plm-mobile-nav__sub-link">Commercial</a>
                    <strong class="plm-mobile-nav__sub-heading">MANUFACTURING</strong>
                    <a href="{{ url('/industries/automotive') }}" class="plm-mobile-nav__sub-link">Automotive</a>
                    <a href="{{ url('/industries/aerospace') }}" class="plm-mobile-nav__sub-link">Aerospace</a>
                </div>
            </li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/case-studies') }}" class="plm-mobile-nav__link">Case Studies</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/blog') }}" class="plm-mobile-nav__link">Blog</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/about') }}" class="plm-mobile-nav__link">About</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/get-a-quote') }}" class="plm-header__cta plm-header__cta--mobile">Get a Quote</a></li>
        </ul>
    </nav>
</div>

<div class="plm-mega-backdrop" id="plm-mega-backdrop" hidden aria-hidden="true"></div>

@push('scripts')
<script>
(function () {
    'use strict';

    const $  = (sel, ctx = document) => ctx.querySelector(sel);
    const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

    /* ══════════════════════════════════════════════════════
       GEO-IP AUTO DETECTION
       Uses free ip-api.com (no key needed, 1000 req/min).
       Falls back to India if request fails or country unknown.
    ══════════════════════════════════════════════════════ */
    const GEO_MAP = {
        IN:  { country:'India',          flag:'🇮🇳', phone:'+91-80-4737-0000', tel:'tel:+918047370000',  email:'india@milestoneplm.com' },
        GB:  { country:'United Kingdom', flag:'🇬🇧', phone:'+44-20-3290-3900', tel:'tel:+442032903900',  email:'uk@milestoneplm.com'    },
        US:  { country:'USA',            flag:'🇺🇸', phone:'+1-919-238-8044',  tel:'tel:+19192388044',   email:'usa@milestoneplm.com'   },
        AE:  { country:'UAE',            flag:'🇦🇪', phone:'+971-4-876-0000',  tel:'tel:+97148760000',   email:'uae@milestoneplm.com'   },
        AU:  { country:'Australia',      flag:'🇦🇺', phone:'+61-2-8091-0000',  tel:'tel:+61280910000',   email:'australia@milestoneplm.com' },
        CA:  { country:'Canada',         flag:'🇨🇦', phone:'+1-647-478-0000',  tel:'tel:+16474780000',   email:'canada@milestoneplm.com' },
        SG:  { country:'Singapore',      flag:'🇸🇬', phone:'+65-6100-0000',    tel:'tel:+6561000000',    email:'singapore@milestoneplm.com' },
    };
    const DEFAULT_GEO = GEO_MAP['IN'];

    function applyGeo(data) {
        const geoFlagEl      = $('#plm-geo-flag');
        const geoNameEl      = $('#plm-geo-name');
        const phoneLink      = $('#plm-topbar-phone');
        const phoneText      = $('#plm-topbar-phone-text');
        const emailLink      = $('#plm-topbar-email');
        const emailText      = $('#plm-topbar-email-text');
        const mobilePhone    = $('#plm-mobile-phone');
        const mobilePhoneTxt = $('#plm-mobile-phone-text');
        const mobileEmail    = $('#plm-mobile-email');
        const mobileEmailTxt = $('#plm-mobile-email-text');

        if (geoFlagEl)   geoFlagEl.textContent   = data.flag;
        if (geoNameEl)   geoNameEl.textContent    = data.country;
        if (phoneText)   phoneText.textContent    = data.phone;
        if (phoneLink)   phoneLink.href           = data.tel;
        if (emailText)   emailText.textContent    = data.email;
        if (emailLink)   emailLink.href           = 'mailto:' + data.email;
        if (mobilePhoneTxt) mobilePhoneTxt.textContent = data.phone;
        if (mobilePhone)    mobilePhone.href           = data.tel;
        if (mobileEmailTxt) mobileEmailTxt.textContent = data.email;
        if (mobileEmail)    mobileEmail.href            = 'mailto:' + data.email;
    }

    /* Check sessionStorage cache first — avoids repeat API calls on navigation */
    const cached = sessionStorage.getItem('plm_geo');
    if (cached) {
        try { applyGeo(JSON.parse(cached)); } catch(e) { applyGeo(DEFAULT_GEO); }
    } else {
        /* ip-api.com: free, HTTPS on paid plan; use HTTP for free tier */
        fetch('https://ip-api.com/json/?fields=countryCode', { cache: 'no-store' })
            .then(r => r.ok ? r.json() : null)
            .then(json => {
                const data = (json && GEO_MAP[json.countryCode]) ? GEO_MAP[json.countryCode] : DEFAULT_GEO;
                sessionStorage.setItem('plm_geo', JSON.stringify(data));
                applyGeo(data);
            })
            .catch(() => applyGeo(DEFAULT_GEO));
    }

    /* ══════════════════════════════════════════════════════
       MEGA MENU — scroll-proof positioning
       The mega panel uses position:fixed but its `top` value
       must equal the ACTUAL bottom edge of the sticky header
       at the time it opens (accounts for topbar hide on scroll).
       We recalculate on every open AND on scroll while open.
    ══════════════════════════════════════════════════════ */
    const header      = $('#plm-header');
    const topbar      = document.querySelector('.plm-topbar');
    const backdrop    = $('#plm-mega-backdrop');
    const megaToggles = $$('[data-plm-mega]');
    let   closeTimer  = null;
    let   scrollRAF   = null;

    /** Returns the pixel value for mega panel `top` based on live DOM rect */
    function getMegaTop() {
        const headerRect = header ? header.getBoundingClientRect() : null;
        return headerRect ? Math.round(headerRect.bottom) : 0;
    }

    /** Apply correct top to all visible mega panels */
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
        /* Set correct top BEFORE showing to avoid flicker */
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

    /* Recalculate mega top on scroll — throttled via rAF */
    window.addEventListener('scroll', () => {
        if (scrollRAF) return;
        scrollRAF = requestAnimationFrame(() => {
            syncMegaTop();
            /* Also update sticky shadow */
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

    /* Mega panel tabs */
    $$('[data-plm-panel]').forEach(tag => {
        tag.addEventListener('click', () => {
            const container = tag.closest('.plm-mega');
            if (!container) return;
            $$('.plm-mega__tag', container).forEach(t => t.classList.remove('plm-mega__tag--active'));
            tag.classList.add('plm-mega__tag--active');
            $$('.plm-mega__panel', container).forEach(p => { p.hidden = true; p.classList.remove('plm-mega__panel--active'); });
            const target = $(`#panel-${tag.dataset.plmPanel}`);
            if (target) { target.hidden = false; target.classList.add('plm-mega__panel--active'); }
        });
    });

    /* ══════════════════════════════════════════
       SEARCH
    ══════════════════════════════════════════ */
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

    /* ══════════════════════════════════════════
       MOBILE NAV
    ══════════════════════════════════════════ */
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

    /* Initial shadow check */
    header && header.classList.toggle('plm-header--scrolled', window.scrollY > 10);

})();
</script>
@endpush