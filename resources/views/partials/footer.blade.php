

<footer class="plm-footer" aria-label="Site Footer">

    {{-- ── Main Footer Body ─────────────────────────────────── --}}
    <div class="plm-footer__body">
        <div class="container">
            <div class="row g-4 g-lg-5">

                {{-- ── Col 1 : Logo + Desc + ISO badges + Social ── --}}
                <div class="col-12 col-sm-6 col-lg-3">

                    {{-- Logo --}}
                    <a href="{{ url('/') }}"
                       class="plm-footer__logo-link"
                       aria-label="Milestone PLM Solutions — Home">
                        <img src="{{ asset('images/footer-image.png') }}"
                             alt="Milestone PLM Solutions"
                             class="plm-footer__logo"
                             loading="lazy"
                             width="160"
                             height="44">
                    </a>

                    {{-- Description --}}
                    <p class="plm-footer__desc">
                        Global BIM, CAD, and structural engineering outsourcing services
                        delivering precision and excellence for 15+ years.
                    </p>

                    {{-- ISO Certification Badges --}}
                    <div class="plm-footer__iso" aria-label="ISO Certifications">
                        <div class="plm-footer__iso-badge" aria-label="ISO 9001 Certified">
                            <span class="plm-footer__iso-top">ISO</span>
                            <span class="plm-footer__iso-num">9001</span>
                        </div>
                        <div class="plm-footer__iso-badge" aria-label="ISO 27001 Certified">
                            <span class="plm-footer__iso-top">ISO</span>
                            <span class="plm-footer__iso-num">27001</span>
                        </div>
                    </div>

                    {{-- Social Icons --}}
                    <div class="plm-footer__social" role="list" aria-label="Social media links">

                        <a href="https://linkedin.com/company/milestone-plm"
                           target="_blank" rel="noopener noreferrer"
                           class="plm-footer__social-btn"
                           role="listitem"
                           aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>

                        <a href="https://twitter.com"
                           target="_blank" rel="noopener noreferrer"
                           class="plm-footer__social-btn"
                           role="listitem"
                           aria-label="Twitter / X">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                        </a>

                        <a href="https://facebook.com"
                           target="_blank" rel="noopener noreferrer"
                           class="plm-footer__social-btn"
                           role="listitem"
                           aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>

                    </div>
                </div>

                {{-- ── Col 2 : Services ─────────────────────────── --}}
                <div class="col-6 col-sm-6 col-lg-2">
                    <h6 class="plm-footer__col-title">Services</h6>
                    <ul class="plm-footer__links" aria-label="Services links">
                        <li><a href=""         class="plm-footer__link">BIM Modeling &amp; Coordination</a></li>
                        <li><a href=""         class="plm-footer__link">Shop Drawings</a></li>
                        <li><a href=""         class="plm-footer__link">Structural Detailing</a></li>
                        <li><a href=""         class="plm-footer__link">CAD Drafting Services</a></li>
                        <li><a href=""         class="plm-footer__link">3D Rendering</a></li>
                        <li><a href=""         class="plm-footer__link">As-Built Documentation</a></li>
                    </ul>
                </div>

                {{-- ── Col 3 : Delivery Models + Industries ────────── --}}
                <div class="col-6 col-sm-6 col-lg-2">
                    <h6 class="plm-footer__col-title">Delivery Models</h6>
                    <ul class="plm-footer__links" aria-label="Delivery models links">
                        <li><a href="#" class="plm-footer__link">Dedicated Teams</a></li>
                        <li><a href="#" class="plm-footer__link">Project-Based Engagement</a></li>
                        <li><a href="#" class="plm-footer__link">Offshore Engineering Center</a></li>
                    </ul>

                    <h6 class="plm-footer__col-title mt-4">Industries</h6>
                    <ul class="plm-footer__links" aria-label="Industries links">
                        <li><a href="#" class="plm-footer__link">Commercial Buildings</a></li>
                        <li><a href="#" class="plm-footer__link">Infrastructure Projects</a></li>
                        <li><a href="#" class="plm-footer__link">Healthcare Facilities</a></li>
                        <li><a href="#" class="plm-footer__link">Residential Developments</a></li>
                        <li><a href="#" class="plm-footer__link">Industrial Plants</a></li>
                    </ul>
                </div>

                {{-- ── Col 4 : Resources ───────────────────────────── --}}
                <div class="col-6 col-sm-6 col-lg-2">
                    <h6 class="plm-footer__col-title">Resources</h6>
                    <ul class="plm-footer__links" aria-label="Resources links">
                        <li><a href=""  class="plm-footer__link">Case Studies</a></li>
                        <li><a href=""         class="plm-footer__link">Insights &amp; Blog</a></li>
                        <li><a href="#"                           class="plm-footer__link">Technical Guides</a></li>
                        <li><a href="#"                           class="plm-footer__link">BIM Standards</a></li>
                        <li><a href="#"                           class="plm-footer__link">Webinars &amp; Events</a></li>
                    </ul>
                </div>

                {{-- ── Col 5 : Company + 500+ Stat ────────────────── --}}
                <div class="col-6 col-sm-6 col-lg-3">
                    <h6 class="plm-footer__col-title">Company</h6>
                    <ul class="plm-footer__links" aria-label="Company links">
                        <li><a href="{{ route('about-us') }}"      class="plm-footer__link">About Us</a></li>
                        <li><a href="{{ route('leadership') }}"    class="plm-footer__link">Leadership</a></li>
                        <li><a href="{{ route('careers') }}"       class="plm-footer__link">Careers</a></li>
                        <li><a href="#"                            class="plm-footer__link">Quality Standards</a></li>
                        <li><a href="{{ route('contact') }}"       class="plm-footer__link">Contact Us</a></li>
                    </ul>

                    {{-- 500+ Stat Block --}}
                    <div class="plm-footer__stat-block" aria-label="500 plus engineering teams delivered since 2007">
                        <span class="plm-footer__stat-number">500+</span>
                        <span class="plm-footer__stat-label">Engineering teams delivered</span>
                        <span class="plm-footer__stat-since">since 2007</span>
                    </div>
                </div>

            </div>{{-- /.row --}}
        </div>{{-- /.container --}}
    </div>{{-- /.plm-footer__body --}}

    {{-- ── Bottom Bar ──────────────────────────────────────────── --}}
    <div class="plm-footer__bottom">
        <div class="container">
            <div class="plm-footer__bottom-inner">

                {{-- Copyright --}}
                <p class="plm-footer__copy">
                    &copy; {{ date('Y') }} Milestone Engineering Solutions. All rights reserved.
                </p>

                {{-- Legal Links --}}
                <nav class="plm-footer__legal" aria-label="Legal links">
                    <a href="#" class="plm-footer__legal-link">Privacy Policy</a>
                    <a href="#" class="plm-footer__legal-link">Terms of Service</a>
                    <a href="#" class="plm-footer__legal-link">Cookie Policy</a>
                </nav>

            </div>
        </div>
    </div>

</footer>

