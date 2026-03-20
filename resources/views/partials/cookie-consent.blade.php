{{-- ============================================================
     Cookie Consent Banner + Manage Modal
     File    : resources/views/partials/cookie-consent.blade.php
     Include : @include('partials.cookie-consent') in app.blade.php
               Place just before </body>

     Security: CSRF via data attribute, XSS-safe {{ }}, route()
     Speed   : Banner appears after 3s (configurable in JS)
     Prefix  : plm-ck- on ALL classes — zero Bootstrap conflicts
     ============================================================ --}}

{{-- ── Only render when user has NOT yet consented ────────── --}}
@unless($cookieConsent ?? false)

{{-- ── Hidden config div — passes Laravel data to JS securely  --}}
<div id="plmCkCfg"
     data-accept-url="{{ route('cookie.accept') }}"
     data-decline-url="{{ route('cookie.decline') }}"
     data-save-url="{{ route('cookie.save-preferences') }}"
     data-csrf="{{ csrf_token() }}"
     aria-hidden="true"
     style="display:none;">
</div>

{{-- ════════════════════════════════════════════════════════
     BANNER — slides up from bottom
     ════════════════════════════════════════════════════════ --}}
<div class="plm-ck-banner"
     id="plmCkBanner"
     role="dialog"
     aria-live="polite"
     aria-label="Cookie consent banner"
     aria-describedby="plmCkBannerText">

    <div class="plm-ck-banner__inner">

        {{-- Logo --}}
        <!-- <div class="plm-ck-banner__logo-wrap">
            <img src="{{ asset('images/plm-logo.png') }}"
                 alt="Milestone PLM Solutions"
                 class="plm-ck-banner__logo"
                 loading="lazy"
                 width="110"
                 height="30">
        </div> -->

        {{-- Message --}}
        <p class="plm-ck-banner__text" id="plmCkBannerText">
            We use cookies and similar technologies to store and access information on your device. Some cookies are necessary for the website to function, while others help us improve performance and provide personalised content.
        </p>

        {{-- Action Buttons --}}
        <div class="plm-ck-banner__actions">

            {{-- 1. Manage Cookies → opens modal --}}
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--ghost"
                    id="plmCkManageBtn"
                    aria-haspopup="dialog">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/>
                </svg>
                Manage Cookies
            </button>

            {{-- 2. Reject non-essential --}}
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--secondary"
                    id="plmCkDeclineBtn">
                Reject Non-Essential
            </button>

            {{-- 3. Accept all --}}
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--primary"
                    id="plmCkAcceptBtn">
                Accept All
            </button>

        </div>

    </div>
</div>

{{-- ════════════════════════════════════════════════════════
     OVERLAY — darkens page behind modal
     ════════════════════════════════════════════════════════ --}}
<div class="plm-ck-overlay" id="plmCkOverlay" aria-hidden="true"></div>

{{-- ════════════════════════════════════════════════════════
     MANAGE COOKIES MODAL
     Matches HCLTech screenshot: left tabs + right panel + toggles
     ════════════════════════════════════════════════════════ --}}
<div class="plm-ck-modal"
     id="plmCkModal"
     role="dialog"
     aria-modal="true"
     aria-labelledby="plmCkModalTitle"
     style="display:none;">

    <div class="plm-ck-modal__box">

        {{-- ── Modal Header ──────────────────────────── --}}
        <div class="plm-ck-modal__header">
            <img src="{{ asset('images/plm-logo.png') }}"
                 alt="Milestone PLM Solutions"
                 class="plm-ck-modal__logo"
                 loading="lazy"
                 width="100"
                 height="28">
            <h2 class="plm-ck-modal__title" id="plmCkModalTitle">
                Cookie Preference Centre
            </h2>
            <button type="button"
                    class="plm-ck-modal__close"
                    id="plmCkModalClose"
                    aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round"
                     stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6"  y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        {{-- ── Modal Body: Left tabs + Right panels ─── --}}
        <div class="plm-ck-modal__body">

            {{-- Left: Tab navigation --}}
            <nav class="plm-ck-modal__tabs" aria-label="Cookie categories">

                <button class="plm-ck-tab plm-ck-tab--active"
                        type="button"
                        data-panel="plmPanelPrivacy">
                    Your Privacy
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelNecessary">
                    Strictly Necessary Cookies
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelPerformance">
                    Performance Cookies
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelFunctional">
                    Functional Cookies
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelAdvertising">
                    Advertising Cookies
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelSocial">
                    Social Media Cookies
                </button>

            </nav>

            {{-- Right: Content panels --}}
            <div class="plm-ck-modal__panels">

                {{-- Your Privacy --}}
                <div class="plm-ck-panel plm-ck-panel--active" id="plmPanelPrivacy">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Your Privacy</h3>
                    </div>
                    <p class="plm-ck-panel__text">
                        When you visit our website, we may store or retrieve
                        information on your browser, mostly in the form of cookies.
                        This information might be about you, your preferences or
                        your device and is mostly used to make the site work as you
                        expect it to.
                    </p>
                    <p class="plm-ck-panel__text">
                        You can choose not to allow some types of cookies. Click on
                        the category headings to find out more and change your
                        default settings.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

                {{-- Strictly Necessary --}}
                <div class="plm-ck-panel" id="plmPanelNecessary">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Strictly Necessary Cookies</h3>
                        <span class="plm-ck-always-on">Always Active</span>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies are necessary for the website to function and
                        cannot be switched off. They are usually only set in response
                        to actions made by you such as logging in or filling in forms.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

                {{-- Performance --}}
                <div class="plm-ck-panel" id="plmPanelPerformance">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Performance Cookies</h3>
                        <label class="plm-ck-toggle" aria-label="Performance cookies">
                            <input type="checkbox" class="plm-ck-toggle__chk"
                                   id="plmTogglePerf" name="performance">
                            <span class="plm-ck-toggle__track">
                                <span class="plm-ck-toggle__thumb"></span>
                            </span>
                            <span class="plm-ck-toggle__lbl">Inactive</span>
                        </label>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies allow us to count visits and traffic sources
                        so we can measure and improve the performance of our site.
                        They help us know which pages are the most and least popular.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

                {{-- Functional --}}
                <div class="plm-ck-panel" id="plmPanelFunctional">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Functional Cookies</h3>
                        <label class="plm-ck-toggle" aria-label="Functional cookies">
                            <input type="checkbox" class="plm-ck-toggle__chk"
                                   id="plmToggleFunc" name="functional">
                            <span class="plm-ck-toggle__track">
                                <span class="plm-ck-toggle__thumb"></span>
                            </span>
                            <span class="plm-ck-toggle__lbl">Inactive</span>
                        </label>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies enable enhanced functionality and
                        personalisation. They may be set by us or by third party
                        providers whose services we have added to our pages.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

                {{-- Advertising --}}
                <div class="plm-ck-panel" id="plmPanelAdvertising">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Advertising Cookies</h3>
                        <label class="plm-ck-toggle" aria-label="Advertising cookies">
                            <input type="checkbox" class="plm-ck-toggle__chk"
                                   id="plmToggleAd" name="advertising">
                            <span class="plm-ck-toggle__track">
                                <span class="plm-ck-toggle__thumb"></span>
                            </span>
                            <span class="plm-ck-toggle__lbl">Inactive</span>
                        </label>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies may be set through our site by our advertising
                        partners to build a profile of your interests and show you
                        relevant adverts on other sites.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

                {{-- Social --}}
                <div class="plm-ck-panel" id="plmPanelSocial">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Social Media Cookies</h3>
                        <label class="plm-ck-toggle" aria-label="Social media cookies">
                            <input type="checkbox" class="plm-ck-toggle__chk"
                                   id="plmToggleSocial" name="social">
                            <span class="plm-ck-toggle__track">
                                <span class="plm-ck-toggle__thumb"></span>
                            </span>
                            <span class="plm-ck-toggle__lbl">Inactive</span>
                        </label>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies are set by social media services we have added
                        to the site to enable you to share our content with your
                        friends and networks.
                    </p>
                    <a href="#" class="plm-ck-panel__link">Cookie Details &rarr;</a>
                </div>

            </div>{{-- /.plm-ck-modal__panels --}}
        </div>{{-- /.plm-ck-modal__body --}}

        {{-- ── Modal Footer ──────────────────────────── --}}
        <div class="plm-ck-modal__footer">
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--ghost"
                    id="plmCkSaveBtn">
                Confirm My Choices &rarr;
            </button>
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--secondary"
                    id="plmCkModalDeclineBtn">
                Reject All &rarr;
            </button>
            <button type="button"
                    class="plm-ck-btn plm-ck-btn--primary"
                    id="plmCkModalAcceptBtn">
                Allow All &rarr;
            </button>
        </div>

    </div>{{-- /.plm-ck-modal__box --}}
</div>{{-- /.plm-ck-modal --}}

@endunless

{{-- ── Conditional script loading based on consent ────────── --}}
{{-- Usage: load tracking only when user has consented         --}}
@if($consentPerformance ?? false)
    {{-- Google Analytics / performance scripts here --}}
@endif

@if($consentAdvertising ?? false)
    {{-- Facebook Pixel / advertising scripts here --}}
@endif

@if($consentSocial ?? false)
    {{-- Social embeds / share widgets here --}}
@endif