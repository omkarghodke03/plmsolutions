{{-- resources/views/partials/footer.blade.php --}}
<footer class="plm-ft" aria-label="Site footer">
    <div class="plm-ft__main">
        <div class="plm-ft__container">

            {{-- Col 1: Brand --}}
            <div class="plm-ft__brand">
                <a href="{{ url('/') }}" class="plm-ft__logo-link" aria-label="Milestone PLM Solutions">
                    <img src="{{ asset('images/footer-image.png') }}" alt="Milestone PLM Solutions" width="160" height="44" loading="lazy">
                </a>
                <p class="plm-ft__desc">Global BIM, CAD, and structural engineering outsourcing services delivering precision and excellence for 15+ years.</p>

                {{-- ISO badges --}}
                <div class="plm-ft__badges">
                    <span class="plm-ft__badge"><small>ISO</small>9001</span>
                    <span class="plm-ft__badge"><small>ISO</small>27001</span>
                </div>

                {{-- Contact --}}
                <ul class="plm-ft__contact">
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/></svg>
                        <a href="tel:+918047370000">+91-80-4737-0000</a>
                    </li>
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741z"/></svg>
                        <a href="mailto:info@milestoneplm.com">info@milestoneplm.com</a>
                    </li>
                    <li>
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        <span>Bangalore, India &mdash; USA &mdash; UAE</span>
                    </li>
                </ul>

                {{-- Social --}}
                <div class="plm-ft__social">
                    <a href="https://linkedin.com/company/milestoneplm" class="plm-ft__social-btn" aria-label="LinkedIn" rel="noopener noreferrer" target="_blank">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                    </a>
                    <a href="https://twitter.com/milestoneplm" class="plm-ft__social-btn" aria-label="Twitter / X" rel="noopener noreferrer" target="_blank">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/></svg>
                    </a>
                    <a href="https://facebook.com/milestoneplm" class="plm-ft__social-btn" aria-label="Facebook" rel="noopener noreferrer" target="_blank">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Col 2: Services --}}
            <div class="plm-ft__col">
                <h3 class="plm-ft__heading">Services</h3>
                <ul class="plm-ft__links">
                    <li><a href="{{ url('/services/bim') }}">BIM Services</a></li>
                    <li><a href="{{ url('/services/architectural') }}">Architectural Services</a></li>
                    <li><a href="{{ url('/services/millwork') }}">Millwork Design</a></li>
                    <li><a href="{{ url('/services/structural') }}">Structural Services</a></li>
                    <li><a href="{{ url('/services/mep') }}">MEP Services</a></li>
                    <li><a href="{{ url('/services/engineering') }}">Engineering Solutions</a></li>
                    <li><a href="{{ url('/services/staffing') }}">Contract Staffing</a></li>
                </ul>
            </div>

            {{-- Col 3: Delivery Models + Industries --}}
            <div class="plm-ft__col">
                <h3 class="plm-ft__heading">Delivery Models</h3>
                <ul class="plm-ft__links">
                    <li><a href="{{ url('/delivery/dedicated-teams') }}">Dedicated Teams</a></li>
                    <li><a href="{{ url('/delivery/project-based') }}">Project-Based Engagement</a></li>
                    <li><a href="{{ url('/delivery/offshore') }}">Offshore Engineering Center</a></li>
                </ul>

                <h3 class="plm-ft__heading plm-ft__heading--gap">Industries</h3>
                <ul class="plm-ft__links">
                    <li><a href="{{ url('/industries/commercial') }}">Commercial</a></li>
                    <li><a href="{{ url('/industries/infrastructure') }}">Infrastructure</a></li>
                    <li><a href="{{ url('/industries/healthcare') }}">Healthcare</a></li>
                    <li><a href="{{ url('/industries/residential') }}">Residential</a></li>
                </ul>
            </div>

            {{-- Col 4: Company --}}
            <div class="plm-ft__col">
                <h3 class="plm-ft__heading">Company</h3>
                <ul class="plm-ft__links">
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/case-studies') }}">Case Studies</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/careers') }}">Careers</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="plm-ft__bottom">
        <div class="plm-ft__container plm-ft__bottom-inner">
            <p class="plm-ft__copy">&copy; {{ date('Y') }} Milestone PLM Solutions. All rights reserved.</p>
            <nav class="plm-ft__legal" aria-label="Legal links">
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                <a href="{{ url('/terms') }}">Terms of Service</a>
                <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>
            </nav>
        </div>
    </div>
</footer>