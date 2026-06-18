@unless($cookieConsent ?? false)

{{-- Config --}}
<div id="plmCkCfg"
     data-accept-url="{{ route('cookie.accept') }}"
     data-decline-url="{{ route('cookie.decline') }}"
     data-save-url="{{ route('cookie.save-preferences') }}"
     data-csrf="{{ csrf_token() }}"
     aria-hidden="true"
     style="display:none;">
</div>

{{-- ══ BANNER ══ --}}
<div class="plm-ck-banner" id="plmCkBanner"
     role="dialog" aria-live="polite"
     aria-label="Cookie consent banner">

    <div class="plm-ck-banner__inner">

        <p class="plm-ck-banner__text">
            We use cookies to improve your experience.
            Strictly necessary cookies are always active.
            You can choose which other cookies to allow.
        </p>

        <div class="plm-ck-banner__actions">
            <button type="button" class="plm-ck-btn plm-ck-btn--ghost"
                    id="plmCkManageBtn" aria-haspopup="dialog">
                Manage Cookies
            </button>
            <button type="button" class="plm-ck-btn plm-ck-btn--secondary"
                    id="plmCkDeclineBtn">
                Reject Non-Essential
            </button>
            <button type="button" class="plm-ck-btn plm-ck-btn--primary"
                    id="plmCkAcceptBtn">
                Accept All
            </button>
        </div>

    </div>
</div>

{{-- ══ OVERLAY ══ --}}
<div class="plm-ck-overlay" id="plmCkOverlay" aria-hidden="true"></div>

{{-- ══ MANAGE MODAL ══ --}}
<div class="plm-ck-modal" id="plmCkModal"
     role="dialog" aria-modal="true"
     aria-labelledby="plmCkModalTitle"
     style="display:none;">

    <div class="plm-ck-modal__box">

        {{-- Header --}}
        <div class="plm-ck-modal__header">
            <img src="{{ asset('images/plm-logo.png') }}"
                 alt="Milestone PLM" class="plm-ck-modal__logo"
                 loading="lazy" width="100" height="28">
            <h2 class="plm-ck-modal__title" id="plmCkModalTitle">
                Cookie Preference Centre
            </h2>
            <button type="button" class="plm-ck-modal__close"
                    id="plmCkModalClose" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round"
                     stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6"  y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        {{-- Body: Tabs + Panels --}}
        <div class="plm-ck-modal__body">

            {{-- Left Tabs --}}
            <nav class="plm-ck-modal__tabs" aria-label="Cookie categories">
                <button class="plm-ck-tab plm-ck-tab--active"
                        type="button" data-panel="plmPanelPrivacy">
                    Your Privacy
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelNecessary">
                    Strictly Necessary
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelPerformance">
                    Performance
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelFunctional">
                    Functional
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelAdvertising">
                    Advertising
                </button>
                <button class="plm-ck-tab" type="button"
                        data-panel="plmPanelSocial">
                    Social Media
                </button>
            </nav>

            {{-- Right Panels --}}
            <div class="plm-ck-modal__panels">

                {{-- Your Privacy --}}
                <div class="plm-ck-panel plm-ck-panel--active" id="plmPanelPrivacy">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Your Privacy</h3>
                    </div>
                    <p class="plm-ck-panel__text">
                        When you visit our website, we may store cookies on your browser.
                        You can choose not to allow some types of cookies below.
                    </p>
                </div>

                {{-- Strictly Necessary --}}
                <div class="plm-ck-panel" id="plmPanelNecessary">
                    <div class="plm-ck-panel__head">
                        <h3 class="plm-ck-panel__title">Strictly Necessary</h3>
                        <span class="plm-ck-always-on">Always Active</span>
                    </div>
                    <p class="plm-ck-panel__text">
                        These cookies are essential for the website to function
                        and cannot be switched off.
                    </p>
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
                        Help us count visits and measure site performance.
                    </p>
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
                        Enable enhanced functionality and personalisation.
                    </p>
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
                        Used to show relevant ads on other sites.
                    </p>
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
                        Allow sharing our content with your social networks.
                    </p>
                </div>

            </div>{{-- /.plm-ck-modal__panels --}}
        </div>{{-- /.plm-ck-modal__body --}}

        {{-- Footer --}}
        <div class="plm-ck-modal__footer">
            <button type="button" class="plm-ck-btn plm-ck-btn--ghost"
                    id="plmCkSaveBtn">
                Confirm My Choices &rarr;
            </button>
            <button type="button" class="plm-ck-btn plm-ck-btn--secondary"
                    id="plmCkModalDeclineBtn">
                Reject All &rarr;
            </button>
            <button type="button" class="plm-ck-btn plm-ck-btn--primary"
                    id="plmCkModalAcceptBtn">
                Allow All &rarr;
            </button>
        </div>

    </div>{{-- /.plm-ck-modal__box --}}
</div>{{-- /.plm-ck-modal --}}

@endunless

{{-- Conditional script loading --}}
@if($consentPerformance ?? false)
    {{-- Google Analytics येथे --}}
@endif
@if($consentAdvertising ?? false)
    {{-- Facebook Pixel येथे --}}
@endif
@if($consentSocial ?? false)
    {{-- Social widgets येथे --}}
@endif