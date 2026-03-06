{{-- ══════════════════════════════════════════
     TOP BAR
══════════════════════════════════════════ --}}
<div class="top-bar">
    <div class="container-xxl d-flex align-items-center justify-content-between w-100">
        <div class="top-bar-social d-flex align-items-center gap-2">
            <p id="topbarlinestitles" class="topbartext-p" style="font-weight: 500;">Take Your First Step Towards The Career of Your Dreams</p>
            <!-- <a href="#" title="LinkedIn">in</a>
            <a href="#" title="Twitter">𝕏</a>
            <a href="#" title="Facebook">f</a> -->
        </div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <a href="tel:+911234567890"  style="color:#ec6502;">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                </svg>
                +91 1234567890
            </a>
            <div class="top-bar-divider"></div>
            <a href="mailto:info@milestone.com">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741zM1 11.105l4.708-2.897L1 5.383v5.722z"/>
                </svg>
                info@milestone.com
            </a>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════
     MAIN NAVBAR
══════════════════════════════════════════ --}}
<nav class="navbar navbar-expand-lg main-navbar" id="mainNavbar">
    <div class="container-xl">

        {{-- Logo --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <img   loading="lazy"
                src="{{ asset('images/plm-logo.png') }}"
                alt="Milestone Logo"
                width="160" height="48"
                loading="eager"
                onerror="this.style.display='none';this.nextElementSibling.style.display='block';"
            >
            <span class="navbar-logo-fallback">MILESTONE</span>
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>

                {{-- ★ MEGA MENU — What We Do (3 TABS) ★ --}}
                <li class="nav-item dropdown mega-menu-wrapper">
                    <a class="nav-link dropdown-toggle"
                       href="#" role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        What We Do <span class="arrow-icon">▾</span>
                    </a>

                    <div class="dropdown-menu mega-menu">
                        <div class="mega-tab-wrapper">

                            {{-- 3 TAB BUTTONS --}}
                            <div class="mega-tab-nav" role="tablist">
                                <button class="mega-tab-btn active"
                                        role="tab" aria-selected="true"
                                        aria-controls="tab-services"
                                        data-mega-tab="tab-services">
                                    Services <span class="tab-badge">1</span>
                                </button>
                                <button class="mega-tab-btn"
                                        role="tab" aria-selected="false"
                                        aria-controls="tab-products"
                                        data-mega-tab="tab-products">
                                    Products <span class="tab-badge">2</span>
                                </button>
                                <button class="mega-tab-btn"
                                        role="tab" aria-selected="false"
                                        aria-controls="tab-industries"
                                        data-mega-tab="tab-industries">
                                    Industries <span class="tab-badge">3</span>
                                </button>
                            </div>

                            {{-- TAB PANELS --}}
                            <div class="mega-tab-content">

                                {{-- PANEL 1: Services (open by default) --}}
                                <div class="mega-tab-panel active" id="tab-services" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Our Services</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">⚙</span>
                                                <span class="mega-text">
                                                    <strong>IT Consulting</strong>
                                                    <span>Strategic technology guidance</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">☁</span>
                                                <span class="mega-text">
                                                    <strong>Cloud Solutions</strong>
                                                    <span>Scalable cloud infrastructure</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🔒</span>
                                                <span class="mega-text">
                                                    <strong>Cybersecurity</strong>
                                                    <span>Protect your digital assets</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Support</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🛠</span>
                                                <span class="mega-text">
                                                    <strong>Managed Services</strong>
                                                    <span>24/7 infrastructure support</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📡</span>
                                                <span class="mega-text">
                                                    <strong>Network Setup</strong>
                                                    <span>Enterprise networking</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">💾</span>
                                                <span class="mega-text">
                                                    <strong>Data Backup</strong>
                                                    <span>Disaster recovery plans</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Development</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">💻</span>
                                                <span class="mega-text">
                                                    <strong>Web Development</strong>
                                                    <span>Custom web applications</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📱</span>
                                                <span class="mega-text">
                                                    <strong>Mobile Apps</strong>
                                                    <span>iOS & Android solutions</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🔗</span>
                                                <span class="mega-text">
                                                    <strong>API Integration</strong>
                                                    <span>Seamless connectivity</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 d-none d-lg-block">
                                            <div class="mega-menu-featured">
                                                <h5>Our Services</h5>
                                                <p>End-to-end technology services tailored for your business growth.</p>
                                                <a href="{{ route('contact') }}" class="btn-featured">Explore Services →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- PANEL 2: Products --}}
                                <div class="mega-tab-panel" id="tab-products" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Enterprise</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📦</span>
                                                <span class="mega-text">
                                                    <strong>Enterprise Suite</strong>
                                                    <span>End-to-end business tools</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📊</span>
                                                <span class="mega-text">
                                                    <strong>Analytics Platform</strong>
                                                    <span>Data-driven decisions</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🤖</span>
                                                <span class="mega-text">
                                                    <strong>AI Tools</strong>
                                                    <span>Intelligent automation</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Platforms</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🖥</span>
                                                <span class="mega-text">
                                                    <strong>CRM System</strong>
                                                    <span>Customer relationship tools</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📋</span>
                                                <span class="mega-text">
                                                    <strong>ERP Solution</strong>
                                                    <span>Resource planning software</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🔄</span>
                                                <span class="mega-text">
                                                    <strong>Workflow Engine</strong>
                                                    <span>Process automation</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Add-ons</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🔌</span>
                                                <span class="mega-text">
                                                    <strong>Plugin Library</strong>
                                                    <span>Extend your platform</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🛡</span>
                                                <span class="mega-text">
                                                    <strong>Security Module</strong>
                                                    <span>Advanced threat protection</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">📈</span>
                                                <span class="mega-text">
                                                    <strong>Reports & BI</strong>
                                                    <span>Business intelligence</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 d-none d-lg-block">
                                            <div class="mega-menu-featured">
                                                <h5>Our Products</h5>
                                                <p>Powerful software products built to scale with your enterprise needs.</p>
                                                <a href="{{ route('contact') }}" class="btn-featured">View Products →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- PANEL 3: Industries --}}
                                <div class="mega-tab-panel" id="tab-industries" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Manufacturing</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🏭</span>
                                                <span class="mega-text">
                                                    <strong>Smart Factory</strong>
                                                    <span>Industry 4.0 solutions</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">⚡</span>
                                                <span class="mega-text">
                                                    <strong>Energy & Utilities</strong>
                                                    <span>Optimised energy systems</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🚚</span>
                                                <span class="mega-text">
                                                    <strong>Logistics</strong>
                                                    <span>Supply chain management</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Healthcare & Finance</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🏥</span>
                                                <span class="mega-text">
                                                    <strong>Healthcare</strong>
                                                    <span>Digital health platforms</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🏦</span>
                                                <span class="mega-text">
                                                    <strong>Finance & Banking</strong>
                                                    <span>Fintech & compliance</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🏫</span>
                                                <span class="mega-text">
                                                    <strong>Education</strong>
                                                    <span>EdTech & LMS platforms</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mega-menu-title">Retail & Real Estate</div>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🛍</span>
                                                <span class="mega-text">
                                                    <strong>Retail & eCommerce</strong>
                                                    <span>Omnichannel solutions</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🏢</span>
                                                <span class="mega-text">
                                                    <strong>Real Estate</strong>
                                                    <span>PropTech management</span>
                                                </span>
                                            </a>
                                            <a href="#" class="mega-menu-item">
                                                <span class="mega-icon">🌐</span>
                                                <span class="mega-text">
                                                    <strong>Government</strong>
                                                    <span>Public sector digitisation</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 d-none d-lg-block">
                                            <div class="mega-menu-featured">
                                                <h5>Industries</h5>
                                                <p>Sector-specific solutions for unique challenges across every major industry.</p>
                                                <a href="{{ route('contact') }}" class="btn-featured">Find Your Industry →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>{{-- /.mega-tab-content --}}
                        </div>{{-- /.mega-tab-wrapper --}}
                    </div>{{-- /.mega-menu --}}
                </li>

                {{-- Company — Normal Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                       {{ request()->routeIs('about-us','leadership','careers','workculture','whymilestone') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Company <span class="arrow-icon">▾</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->routeIs('about-us') ? 'active' : '' }}"
                               href="{{ route('about-us') }}">About Us</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('leadership') ? 'active' : '' }}"
                               href="{{ route('leadership') }}">Leadership</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('careers') ? 'active' : '' }}"
                               href="{{ route('careers') }}">Careers</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('workculture') ? 'active' : '' }}"
                               href="{{ route('workculture') }}">Work Culture</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('whymilestone') ? 'active' : '' }}"
                               href="{{ route('whymilestone') }}">Why Milestone</a></li>
                    </ul>
                </li>

                {{-- Blog — Normal Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('blog*') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog <span class="arrow-icon">▾</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blog') }}">All Posts</a></li>
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Case Studies</a></li>
                        <li><a class="dropdown-item" href="#">Press Release</a></li>
                    </ul>
                </li>

                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                       href="{{ route('contact') }}">services</a>
                </li>
               {{-- CTA Button --}}
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('contact') }}" class="nav-link btn-cta" id="getaquote">Contact us</a>
                </li>

                {{-- Search Icon --}}
                <li class="nav-item d-flex align-items-center">
                    <button class="search-btn" id="searchToggle" aria-label="Open search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                            <circle cx="11" cy="11" r="7"/>
                            <path stroke-linecap="round" d="M16.5 16.5l4 4"/>
                        </svg>
                    </button>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{-- ══════════════════════════════════════════
     SEARCH OVERLAY
══════════════════════════════════════════ --}}
<div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Site search">
    <div class="search-box">
        <button class="search-close" id="searchClose" aria-label="Close search">×</button>
        <label for="siteSearch">Search Milestone</label>
        <div class="search-input-wrap">
            <input type="search" id="siteSearch"
                   placeholder="e.g. cloud solutions, careers…"
                   autocomplete="off">
            <button type="button" aria-label="Submit search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <circle cx="11" cy="11" r="7"/>
                    <path stroke-linecap="round" d="M16.5 16.5l4 4"/>
                </svg>
            </button>
        </div>
        <div class="search-tags">
            <span>Popular:</span>
            <a href="#">IT Consulting</a>
            <a href="#">Cloud</a>
            <a href="#">Careers</a>
            <a href="#">About Us</a>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════ --}}
<script>
(function () {
    'use strict';

    /* ── Sticky shadow on scroll ── */
    var navbar = document.getElementById('mainNavbar');
    window.addEventListener('scroll', function () {
        navbar.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });

    /* ── Search overlay ── */
    var overlay     = document.getElementById('searchOverlay');
    var openBtn     = document.getElementById('searchToggle');
    var closeBtn    = document.getElementById('searchClose');
    var searchInput = document.getElementById('siteSearch');

    function openSearch() {
        overlay.classList.add('active');
        setTimeout(function () { searchInput.focus(); }, 100);
        document.body.style.overflow = 'hidden';
    }
    function closeSearch() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    openBtn.addEventListener('click', openSearch);
    closeBtn.addEventListener('click', closeSearch);
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) closeSearch();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeSearch();
    });

    /* ── Close mobile nav on link click ── */
    document.querySelectorAll(
        '.navbar-nav .nav-link:not(.dropdown-toggle), .dropdown-item, .mega-menu-item'
    ).forEach(function (link) {
        link.addEventListener('click', function () {
            var collapse = document.getElementById('navbarMain');
            if (collapse && collapse.classList.contains('show')) {
                bootstrap.Collapse.getInstance(collapse)?.hide();
            }
        });
    });

    /* ── Mega Menu Tab Switcher ── */
    document.querySelectorAll('.mega-tab-btn').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();

            var targetId = btn.getAttribute('data-mega-tab');
            var wrapper  = btn.closest('.mega-tab-wrapper');

            wrapper.querySelectorAll('.mega-tab-btn').forEach(function (b) {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            wrapper.querySelectorAll('.mega-tab-panel').forEach(function (p) {
                p.classList.remove('active');
            });

            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');

            var panel = document.getElementById(targetId);
            if (panel) { panel.classList.add('active'); }
        });
    });

})();
</script>