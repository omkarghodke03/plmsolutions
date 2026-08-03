{{-- resources/views/partials/header.blade.php --}}

{{-- ═══════════════════════
     TOP BAR
     ═══════════════════════ --}}
     <style>
         
         
         /* ── Mobile Category Accordion (Services / Industries) ── */
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

        <a href="{{ url('/') }}" class="plm-header__logo" aria-label="Milestone PLM Solutions Home">
            <img src="{{ asset('service-img/plm-logo.png') }}" alt="Milestone PLM Solutions" width="180" height="50" loading="eager">
        </a>

        <nav class="plm-nav" id="plm-nav" role="navigation" aria-label="Main navigation">
            <ul class="plm-nav__list" role="menubar">
                {{-- Services Mega --}}
            <li class="plm-nav__item plm-nav__item--mega" role="none">
            <button class="plm-nav__link plm-nav__link--toggle"
                aria-haspopup="true" aria-expanded="false"
                data-plm-mega="services"
                type="button"
                onclick="window.location='{{ url('/services/bim-services') }}'">
                Services
                <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </button>
                    <div class="plm-mega" id="mega-services" role="region" aria-label="Services menu" hidden>
                        <div class="plm-mega__layout">
                            <div class="plm-mega__tags">
                                <button class="plm-mega__tag plm-mega__tag--active" data-plm-panel="bim" type="button">AEC Solutions</button>
                                <button class="plm-mega__tag" data-plm-panel="engineering" type="button">Engineering Solutions</button>
                                <button class="plm-mega__tag" data-plm-panel="staffing" type="button">Data & Analytics Solutions</button>
                                <a href="{{ url('/services/bim-services') }}" class="plm-mega__view-all">VIEW ALL SERVICES &rarr;</a>
                            </div>
                            <div class="plm-mega__panels">
                                <div class="plm-mega__panel plm-mega__panel--active" id="panel-bim">
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Architecture</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/architectural-bim') }}" class="plm-mega__item-link">Architectural 3d modeling</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Architectural 2d drafting</a></li>
                                            <li><a href="{{ url('/services/mep-bim') }}" class="plm-mega__item-link">Architectural BIM Modeling</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Revit BIM Services</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Architectural Construction Documents</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Architectural Permit Set</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Modular BIM</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">3D Rendering</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Lighting Design</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">As Built Drawings</a></li>
                                        </ul>
                                    </div>
                                     
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Structure</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Structural BIM</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Precast Detailing</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Structural 3d modeling</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Structural 2d drafting</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Structural Construction Documents</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">MEP</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">MEP BIM Modeling</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">MEP Drafting</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">MEP Coordination</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">MEP Shop drawings</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">HVAC Drafting</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Electrical Drafting</a></li>
                                            <li><a href="{{ url('/services/') }}" class="plm-mega__item-link">Fire-fighting Shop Drawings</a></li>
                                        </ul>
                                    </div>
                                    <!--<div class="plm-mega__group">-->
                                    <!--    <h3 class="plm-mega__heading">BIM</h3>-->
                                    <!--    <ul class="plm-mega__items">-->
                                    <!--        <li><a href="{{ url('/services/clash-detection') }}" class="plm-mega__item-link">BIM Modeling</a></li>-->
                                    <!--        <li><a href="{{ url('/services/4d-5d-scheduling') }}" class="plm-mega__item-link">BIM Coordination</a></li>-->
                                    <!--        <li><a href="{{ url('/services/lod-management') }}" class="plm-mega__item-link">Revit Family Creation </a></li>-->
                                    <!--        <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Shop Drawings</a></li>-->
                                    <!--        <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Scan to BIM</a></li>-->
                                    <!--         <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">4D BIM</a></li>-->
                                    <!--          <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">5D BIM</a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                    <!--<div class="plm-mega__group">-->
                                    <!--    <h3 class="plm-mega__heading">Digital Twin</h3>-->
                                    <!--    <ul class="plm-mega__items">-->
                                    <!--        <li><a href="{{ url('/services/clash-detection') }}" class="plm-mega__item-link">Revit BIM model enhancement</a></li>-->
                                    <!--        <li><a href="{{ url('/services/4d-5d-scheduling') }}" class="plm-mega__item-link">Asset tagging</a></li>-->
                                    <!--        <li><a href="{{ url('/services/lod-management') }}" class="plm-mega__item-link">COBie data creation</a></li>-->
                                    <!--        <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Equipment metadata integration</a></li>-->
                                    <!--        <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">QR code integration</a></li>-->
                                    <!--         <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Facility database creation</a></li>-->
                                    <!--          <li><a href="{{ url('/services/scan-to-bim') }}" class="plm-mega__item-link">Custom Dashboard Development </a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                </div>
                                <div class="plm-mega__panel" id="panel-engineering" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Mechanical Design</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/product-design') }}" class="plm-mega__item-link">Product Design & Development</a></li>
                                            <li><a href="{{ url('/services/3d-modeling') }}" class="plm-mega__item-link">CAD & Detailing</a></li>
                                            <li><a href="{{ url('/services/product-design') }}" class="plm-mega__item-link">Manufacturing Support</a></li>
                                            <li><a href="{{ url('/services/2d-drafting') }}" class="plm-mega__item-link">Automotive Design</a></li>
                                            <li><a href="{{ url('/services/3d-modeling') }}" class="plm-mega__item-link">Finite Element Analysis</a></li>
                                            <li><a href="{{ url('/services/product-design') }}" class="plm-mega__item-link">Aftermarket / Engineering Documentation</a></li>
                                            <li><a href="{{ url('/services/2d-drafting') }}" class="plm-mega__item-link">Value Analysis / Value Engineering</a></li>
                                            <li><a href="{{ url('/services/3d-modeling') }}" class="plm-mega__item-link">Rapid Prototyping</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Electrical Design</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Schematics</a></li>
                                            <li><a href="{{ url('/services/cfd') }}" class="plm-mega__item-link">3d Routing</a></li>
                                            <li><a href="{{ url('/services/thermal') }}" class="plm-mega__item-link">HMI Design</a></li>
                                             <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">PLC Programming</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Millwork Design</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Commercial Millwork</a></li>
                                            <li><a href="{{ url('/services/cfd') }}" class="plm-mega__item-link">Residential Millwork</a></li>
                                            <li><a href="{{ url('/services/thermal') }}" class="plm-mega__item-link">Hospitality Millwork</a></li>
                                             <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Retail & Store Fixture Millwork</a></li>
                                              <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Healthcare & Institutional Millwork</a></li>
                                            <li><a href="{{ url('/services/cfd') }}" class="plm-mega__item-link">Custom Cabinetry & Casework</a></li>
                                            <li><a href="{{ url('/services/thermal') }}" class="plm-mega__item-link">Custom Furniture Millwork</a></li>
                                             <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Architectural Woodwork</a></li>
                                             <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Interior Fit-Out Millwork</a></li>
                                             <li><a href="{{ url('/services/fea') }}" class="plm-mega__item-link">Specialty & Custom Millwork</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="plm-mega__panel" id="panel-staffing" hidden>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">Data Analytics</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/contract-staffing') }}" class="plm-mega__item-link">Campaign analysis</a></li>
                                            <li><a href="{{ url('/services/permanent-staffing') }}" class="plm-mega__item-link">Competitor intelligence</a></li>
                                            <li><a href="{{ url('/services/contract-staffing') }}" class="plm-mega__item-link">Sales Analytics</a></li>
                                            <li><a href="{{ url('/services/permanent-staffing') }}" class="plm-mega__item-link">Customer Analytics</a></li>
                                            <li><a href="{{ url('/services/contract-staffing') }}" class="plm-mega__item-link">Demand Planning</a></li>
                                            <li><a href="{{ url('/services/contract-staffing') }}" class="plm-mega__item-link">Sentiment Analysis</a></li>
                                        </ul>
                                    </div>
                                    <div class="plm-mega__group">
                                        <h3 class="plm-mega__heading">BI and Reporting</h3>
                                        <ul class="plm-mega__items">
                                            <li><a href="{{ url('/services/plm-implementation') }}" class="plm-mega__item-link">Data Preparation</a></li>
                                            <li><a href="{{ url('/services/cad-migration') }}" class="plm-mega__item-link">Data Integration</a></li>
                                            <li><a href="{{ url('/services/cad-migration') }}" class="plm-mega__item-link">Dashboards</a></li>
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
                    <a href="{{ url('/blogs') }}" class="plm-nav__link" role="menuitem">Blog</a>
                </li>

                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/case-studies') }}" class="plm-nav__link" role="menuitem">Case Studies</a>
                </li>
                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/careers') }}" class="plm-nav__link" role="menuitem">Careers</a>
                </li>
                <li class="plm-nav__item" role="none">
                    <a href="{{ url('/about-us') }}" class="plm-nav__link" role="menuitem">About</a>
                </li>

            </ul>
        </nav>

        <div class="plm-header__actions">
                        <a href="{{ url('/contact-us') }}" target="_blank" class="plm-header__cta">Get a Quote</a>

            <button class="plm-header__search-btn" id="plm-search-toggle"
                    aria-label="Open search" aria-expanded="false"
                    aria-controls="plm-search-bar" type="button">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
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
            <a href="{{ $geoData['tel'] }}" class="plm-mobile-contact__link">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                </svg>
                <span>{{ $geoData['phone'] }}</span>
            </a>

            <a href="mailto:{{ $geoData['email'] }}" class="plm-mobile-contact__link">
                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/>
                </svg>
                <span>{{ $geoData['email'] }}</span>
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

                <div class="plm-mobile-nav__sub plm-mobile-nav__sub--accordion" id="m-services" hidden>

                    {{-- AEC Solutions --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-bim" type="button">
                            AEC Solutions
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-bim" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Architecture</strong>
                            <a href="{{ url('/services/architectural-bim') }}" class="plm-mobile-nav__sub-link">Architectural 3d modeling</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Architectural 2d drafting</a>
                            <a href="{{ url('/services/mep-bim') }}" class="plm-mobile-nav__sub-link">Architectural BIM Modeling</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Revit BIM Services</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Architectural Construction Documents</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Architectural Permit Set</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Modular BIM</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">3D Rendering</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Lighting Design</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">As Built Drawings</a>

                            <strong class="plm-mobile-nav__sub-heading">Structure</strong>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Structural BIM</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Precast Detailing</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Structural 3d modeling</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Structural 2d drafting</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Structural Construction Documents</a>

                            <strong class="plm-mobile-nav__sub-heading">MEP</strong>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">MEP BIM Modeling</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">MEP Drafting</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">MEP Coordination</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">MEP Shop drawings</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">HVAC Drafting</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Electrical Drafting</a>
                            <a href="{{ url('/services/') }}" class="plm-mobile-nav__sub-link">Fire-fighting Shop Drawings</a>
                        </div>
                    </div>

                    {{-- Engineering Solutions --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-engineering" type="button">
                            Engineering Solutions
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-engineering" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Mechanical Design</strong>
                            <a href="{{ url('/services/product-design') }}" class="plm-mobile-nav__sub-link">Product Design & Development</a>
                            <a href="{{ url('/services/3d-modeling') }}" class="plm-mobile-nav__sub-link">CAD & Detailing</a>
                            <a href="{{ url('/services/product-design') }}" class="plm-mobile-nav__sub-link">Manufacturing Support</a>
                            <a href="{{ url('/services/2d-drafting') }}" class="plm-mobile-nav__sub-link">Automotive Design</a>
                            <a href="{{ url('/services/3d-modeling') }}" class="plm-mobile-nav__sub-link">Finite Element Analysis</a>
                            <a href="{{ url('/services/product-design') }}" class="plm-mobile-nav__sub-link">Aftermarket / Engineering Documentation</a>
                            <a href="{{ url('/services/2d-drafting') }}" class="plm-mobile-nav__sub-link">Value Analysis / Value Engineering</a>
                            <a href="{{ url('/services/3d-modeling') }}" class="plm-mobile-nav__sub-link">Rapid Prototyping</a>

                            <strong class="plm-mobile-nav__sub-heading">Electrical Design</strong>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Schematics</a>
                            <a href="{{ url('/services/cfd') }}" class="plm-mobile-nav__sub-link">3d Routing</a>
                            <a href="{{ url('/services/thermal') }}" class="plm-mobile-nav__sub-link">HMI Design</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">PLC Programming</a>

                            <strong class="plm-mobile-nav__sub-heading">Millwork Design</strong>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Commercial Millwork</a>
                            <a href="{{ url('/services/cfd') }}" class="plm-mobile-nav__sub-link">Residential Millwork</a>
                            <a href="{{ url('/services/thermal') }}" class="plm-mobile-nav__sub-link">Hospitality Millwork</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Retail & Store Fixture Millwork</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Healthcare & Institutional Millwork</a>
                            <a href="{{ url('/services/cfd') }}" class="plm-mobile-nav__sub-link">Custom Cabinetry & Casework</a>
                            <a href="{{ url('/services/thermal') }}" class="plm-mobile-nav__sub-link">Custom Furniture Millwork</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Architectural Woodwork</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Interior Fit-Out Millwork</a>
                            <a href="{{ url('/services/fea') }}" class="plm-mobile-nav__sub-link">Specialty & Custom Millwork</a>
                        </div>
                    </div>

                    {{-- Data & Analytics Solutions --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-staffing" type="button">
                            Data & Analytics Solutions
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-staffing" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Data Analytics</strong>
                            <a href="{{ url('/services/contract-staffing') }}" class="plm-mobile-nav__sub-link">Campaign analysis</a>
                            <a href="{{ url('/services/permanent-staffing') }}" class="plm-mobile-nav__sub-link">Competitor intelligence</a>
                            <a href="{{ url('/services/contract-staffing') }}" class="plm-mobile-nav__sub-link">Sales Analytics</a>
                            <a href="{{ url('/services/permanent-staffing') }}" class="plm-mobile-nav__sub-link">Customer Analytics</a>
                            <a href="{{ url('/services/contract-staffing') }}" class="plm-mobile-nav__sub-link">Demand Planning</a>
                            <a href="{{ url('/services/contract-staffing') }}" class="plm-mobile-nav__sub-link">Sentiment Analysis</a>

                            <strong class="plm-mobile-nav__sub-heading">BI and Reporting</strong>
                            <a href="{{ url('/services/plm-implementation') }}" class="plm-mobile-nav__sub-link">Data Preparation</a>
                            <a href="{{ url('/services/cad-migration') }}" class="plm-mobile-nav__sub-link">Data Integration</a>
                            <a href="{{ url('/services/cad-migration') }}" class="plm-mobile-nav__sub-link">Dashboards</a>
                        </div>
                    </div>

                    <a href="{{ url('/services/bim-services') }}" class="plm-mobile-nav__sub-link plm-mobile-nav__sub-link--viewall">VIEW ALL SERVICES &rarr;</a>
                </div>
            </li>

            <li class="plm-mobile-nav__item">
                <button class="plm-mobile-nav__link plm-mobile-nav__link--toggle" data-plm-mobile-toggle="m-industries" type="button">
                    Industries
                    <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </button>

                <div class="plm-mobile-nav__sub plm-mobile-nav__sub--accordion" id="m-industries" hidden>

                    {{-- Construction --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-construction" type="button">
                            Construction
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-construction" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Building</strong>
                            <a href="{{ url('/industries/residential') }}" class="plm-mobile-nav__sub-link">Residential</a>
                            <a href="{{ url('/industries/commercial') }}" class="plm-mobile-nav__sub-link">Commercial</a>
                            <a href="{{ url('/industries/industrial') }}" class="plm-mobile-nav__sub-link">Industrial</a>

                            <strong class="plm-mobile-nav__sub-heading">Specialty</strong>
                            <a href="{{ url('/industries/healthcare') }}" class="plm-mobile-nav__sub-link">Healthcare</a>
                            <a href="{{ url('/industries/education') }}" class="plm-mobile-nav__sub-link">Education</a>
                            <a href="{{ url('/industries/retail') }}" class="plm-mobile-nav__sub-link">Retail</a>
                        </div>
                    </div>

                    {{-- Manufacturing --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-manufacturing" type="button">
                            Manufacturing
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-manufacturing" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Sectors</strong>
                            <a href="{{ url('/industries/automotive') }}" class="plm-mobile-nav__sub-link">Automotive</a>
                            <a href="{{ url('/industries/aerospace') }}" class="plm-mobile-nav__sub-link">Aerospace</a>
                            <a href="{{ url('/industries/consumer-goods') }}" class="plm-mobile-nav__sub-link">Consumer Goods</a>
                        </div>
                    </div>

                    {{-- Infrastructure --}}
                    <div class="plm-mobile-cat">
                        <button class="plm-mobile-cat__toggle" data-plm-mobile-cat="m-cat-infrastructure" type="button">
                            Infrastructure
                            <svg class="plm-nav__chevron" width="11" height="11" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                        </button>
                        <div class="plm-mobile-cat__list" id="m-cat-infrastructure" hidden>
                            <strong class="plm-mobile-nav__sub-heading">Civil</strong>
                            <a href="{{ url('/industries/roads-highways') }}" class="plm-mobile-nav__sub-link">Roads &amp; Highways</a>
                            <a href="{{ url('/industries/bridges') }}" class="plm-mobile-nav__sub-link">Bridges</a>
                            <a href="{{ url('/industries/utilities') }}" class="plm-mobile-nav__sub-link">Utilities</a>
                        </div>
                    </div>

                    <a href="{{ url('/industries') }}" class="plm-mobile-nav__sub-link plm-mobile-nav__sub-link--viewall">VIEW ALL INDUSTRIES &rarr;</a>
                </div>
            </li>

            <li class="plm-mobile-nav__item"><a href="{{ url('/case-studies') }}" class="plm-mobile-nav__link">Case Studies</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/blogs/') }}" class="plm-mobile-nav__link">Blog</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/careers') }}" class="plm-mobile-nav__link">Career</a></li>
            <li class="plm-mobile-nav__item"><a href="{{ url('/about-us') }}" class="plm-mobile-nav__link">About</a></li>
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

/* ══ CATEGORY ACCORDION inside Services/Industries ══ */
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