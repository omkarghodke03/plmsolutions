@php
    $cookieConsent = request()->cookie('milestone_cookie_consent');
    $showCookieBanner = empty($cookieConsent);
@endphp
@if ($showCookieBanner)
<div
    id="milestone-cookie-banner"
    class="milestone-cookie-banner"
    role="dialog"
    aria-modal="false"
    aria-labelledby="cookie-banner-title"
    aria-describedby="cookie-banner-description"
>

    <div class="cookie-banner-inner">

        <div class="cookie-banner-info">

            <div class="cookie-icon" aria-hidden="true">
                <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M20.5 13.2C19.7 17.8 15.7 21 11 21C5.5 21 1 16.5 1 11C1 6.3 4.2 2.3 8.8 1.5C9.1 1.4 9.4 1.6 9.5 1.9C9.8 3.9 11.3 5.5 13.3 5.8C13.7 5.9 14 6.2 14 6.6C14.3 8.6 15.8 10.2 17.8 10.5C18.2 10.6 18.5 10.9 18.5 11.3C18.5 12 19.2 12.8 20.1 12.9C20.4 12.9 20.6 13 20.5 13.2Z"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />

                    <circle
                        cx="8"
                        cy="11"
                        r="1"
                        fill="currentColor"
                    />

                    <circle
                        cx="12"
                        cy="15"
                        r="1"
                        fill="currentColor"
                    />

                    <circle
                        cx="7"
                        cy="16"
                        r="1"
                        fill="currentColor"
                    />
                </svg>
            </div>

            <div>
                <h2 id="cookie-banner-title">
                    We use cookies
                </h2>

                <p id="cookie-banner-description">
                    We use cookies to improve your experience,
                    analyse website usage and provide relevant content.
                    You can manage your preferences at any time.
                </p>
            </div>

        </div>

        <div class="cookie-banner-actions">

            <button
                type="button"
                class="cookie-btn cookie-btn-manage"
                id="cookie-manage-btn"
            >
                Manage Preferences
            </button>

            <button
                type="button"
                class="cookie-btn cookie-btn-reject"
                id="cookie-reject-btn"
            >
                Reject All
            </button>

            <button
                type="button"
                class="cookie-btn cookie-btn-accept"
                id="cookie-accept-btn"
            >
                Accept All
            </button>

        </div>

    </div>
</div>


{{-- ============================= --}}
{{-- Cookie Preferences Modal --}}
{{-- ============================= --}}

<div
    id="cookie-preferences-modal"
    class="cookie-modal-overlay"
    role="dialog"
    aria-modal="true"
    aria-labelledby="cookie-preferences-title"
    hidden
>

    <div class="cookie-modal">

        <div class="cookie-modal-header">

            <div>
                <span class="cookie-modal-eyebrow">
                    COOKIE SETTINGS
                </span>

                <h2 id="cookie-preferences-title">
                    Cookie Preferences
                </h2>
            </div>

            <button
                type="button"
                id="cookie-modal-close"
                class="cookie-modal-close"
                aria-label="Close cookie preferences"
            >
                &times;
            </button>

        </div>

        <div class="cookie-modal-body">

            <p class="cookie-modal-description">
                Choose which cookies you would like to allow.
                Essential cookies are required for the website
                to function properly.
            </p>


            {{-- Essential --}}
            <div class="cookie-preference-row">

                <div class="cookie-preference-info">

                    <h3>
                        Essential Cookies
                    </h3>

                    <p>
                        Required for basic website functionality,
                        security and session management.
                    </p>

                </div>

                <div class="cookie-status">
                    Always Active
                </div>

            </div>


            {{-- Analytics --}}
            <div class="cookie-preference-row">

                <div class="cookie-preference-info">

                    <h3>
                        Analytics Cookies
                    </h3>

                    <p>
                        Help us understand how visitors use
                        the website and improve its performance.
                    </p>

                </div>

                <label class="cookie-switch">

                    <input
                        type="checkbox"
                        id="analytics-cookie-toggle"
                    >

                    <span class="cookie-slider"></span>

                </label>

            </div>


            {{-- Marketing --}}
            <div class="cookie-preference-row">

                <div class="cookie-preference-info">

                    <h3>
                        Marketing Cookies
                    </h3>

                    <p>
                        Used to support relevant content and
                        marketing-related functionality.
                    </p>

                </div>

                <label class="cookie-switch">

                    <input
                        type="checkbox"
                        id="marketing-cookie-toggle"
                    >

                    <span class="cookie-slider"></span>

                </label>

            </div>

        </div>


        <div class="cookie-modal-footer">

            <button
                type="button"
                id="cookie-save-preferences"
                class="cookie-btn cookie-btn-accept cookie-save-btn"
            >
                Save Preferences
            </button>

        </div>

    </div>
</div>


<style>

    /* =========================================================
       COOKIE BANNER
    ========================================================= */

    .milestone-cookie-banner {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;

        z-index: 999999;

        background: #ffffff;
        color: #111111;

        border-top: 1px solid #e6e6e6;

        box-shadow:
            0 -8px 30px rgba(0, 0, 0, 0.08);

        font-family:
            Arial,
            sans-serif;

        animation:
            cookieBannerIn 0.35s ease-out;
    }

    .cookie-banner-inner {
        width: 100%;
        max-width: 1280px;

        margin: 0 auto;

        padding: 20px 28px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 35px;

        box-sizing: border-box;
    }

    .cookie-banner-info {
        display: flex;
        align-items: flex-start;

        gap: 14px;

        flex: 1;
        min-width: 0;
    }

    .cookie-icon {
        width: 42px;
        height: 42px;

        min-width: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #dddddd;
        border-radius: 50%;

        color: #111111;

        background: #fafafa;
    }

    .cookie-banner-info h2 {
        margin: 0 0 5px;

        font-family:
            Arial,
            sans-serif;

        font-size: 16px;
        line-height: 1.3;

        font-weight: 700;

        color: #111111;
    }

    .cookie-banner-info p {
        margin: 0;

        max-width: 720px;

        font-family:
            Arial,
            sans-serif;

        font-size: 15px;
        line-height: 1.55;

        color: #555555;
    }


    /* =========================================================
       BUTTONS
    ========================================================= */

    .cookie-banner-actions {
        display: flex;
        align-items: center;

        gap: 9px;

        flex-shrink: 0;
    }

    .cookie-btn {
        min-height: 42px;

        padding: 10px 17px;

        border-radius: 4px;

        font-family:
            Arial,
            sans-serif;

        font-size: 13px;
        font-weight: 500;

        line-height: 1;

        cursor: pointer;

        transition:
            all 0.2s ease;

        white-space: nowrap;
    }

    .cookie-btn:focus-visible {
        outline: 2px solid #111111;
        outline-offset: 3px;
    }

    .cookie-btn:disabled {
        opacity: 0.55;
        cursor: not-allowed;
    }


    /* Manage */
    .cookie-btn-manage {
        background: transparent;

        border: 1px solid transparent;

        color: #111111;
    }

    .cookie-btn-manage:hover {
        border-color: #111111;
    }


    /* Reject */
    .cookie-btn-reject {
        background: #ffffff;

        border: 1px solid #111111;

        color: #111111;
    }

    .cookie-btn-reject:hover {
        background: #111111;
        color: #ffffff;
    }


    /* Accept */
    .cookie-btn-accept {
        background: #111111;

        border: 1px solid #111111;

        color: #ffffff;
    }

    .cookie-btn-accept:hover {
        background: #ffffff;
        color: #111111;
    }


    /* =========================================================
       MODAL
    ========================================================= */

    .cookie-modal-overlay {
        position: fixed;

        inset: 0;

        z-index: 1000000;

        display: flex;

        align-items: center;
        justify-content: center;

        padding: 20px;

        background:
            rgba(0, 0, 0, 0.45);

        backdrop-filter:
            blur(3px);
    }

    .cookie-modal {
        width: 100%;
        max-width: 620px;

        max-height: 90vh;

        overflow-y: auto;

        background: #ffffff;

        border-radius: 8px;

        box-shadow:
            0 20px 60px rgba(0, 0, 0, 0.20);

        font-family:
            Arial,
            sans-serif;

        animation:
            cookieModalIn 0.25s ease-out;
    }

    .cookie-modal-header {
        display: flex;

        align-items: flex-start;
        justify-content: space-between;

        gap: 20px;

        padding: 24px 26px 18px;

        border-bottom: 1px solid #eeeeee;
    }

    .cookie-modal-eyebrow {
        display: block;

        margin-bottom: 5px;

        font-size: 10px;
        font-weight: 500;

        letter-spacing: 1.2px;

        color: #777777;
    }

    .cookie-modal-header h2 {
        margin: 0;

        font-size: 21px;
        font-weight: 500;

        color: #111111;
    }

    .cookie-modal-close {
        width: 34px;
        height: 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 0;

        background: #ffffff;

        border: 1px solid #dddddd;
        border-radius: 50%;

        color: #111111;

        font-size: 23px;
        line-height: 1;

        cursor: pointer;

        transition: all 0.2s ease;
    }

    .cookie-modal-close:hover {
        background: #111111;
        border-color: #111111;

        color: #ffffff;
    }

    .cookie-modal-body {
        padding: 8px 26px 20px;
    }

    .cookie-modal-description {
        margin: 10px 0 20px;

        font-size: 13px;
        line-height: 1.55;

        color: #555555;
    }


    /* Preference row */

    .cookie-preference-row {
        display: flex;

        align-items: center;
        justify-content: space-between;

        gap: 20px;

        padding: 17px 0;

        border-bottom: 1px solid #eeeeee;
    }

    .cookie-preference-info {
        flex: 1;
    }

    .cookie-preference-info h3 {
        margin: 0 0 5px;

        font-size: 14px;
        font-weight: 500;

        color: #111111;
    }

    .cookie-preference-info p {
        margin: 0;

        font-size: 12px;
        line-height: 1.5;

        color: #666666;
    }

    .cookie-status {
        padding: 6px 10px;

        border-radius: 20px;

        background: #f3f3f3;

        color: #555555;

        font-size: 11px;
        font-weight: 600;

        white-space: nowrap;
    }


    /* =========================================================
       SWITCH
    ========================================================= */

    .cookie-switch {
        position: relative;

        width: 44px;
        height: 24px;

        flex-shrink: 0;

        cursor: pointer;
    }

    .cookie-switch input {
        position: absolute;

        opacity: 0;

        width: 0;
        height: 0;
    }

    .cookie-slider {
        position: absolute;

        inset: 0;

        background: #d5d5d5;

        border-radius: 30px;

        transition:
            background 0.2s ease;
    }

    .cookie-slider::before {
        content: "";

        position: absolute;

        width: 18px;
        height: 18px;

        left: 3px;
        top: 3px;

        background: #ffffff;

        border-radius: 50%;

        box-shadow:
            0 1px 3px rgba(0, 0, 0, 0.25);

        transition:
            transform 0.2s ease;
    }

    .cookie-switch input:checked + .cookie-slider {
        background: #111111;
    }

    .cookie-switch input:checked + .cookie-slider::before {
        transform: translateX(20px);
    }


    /* =========================================================
       MODAL FOOTER
    ========================================================= */

    .cookie-modal-footer {
        display: flex;

        justify-content: flex-end;

        padding: 18px 26px 24px;

        border-top: 1px solid #eeeeee;
    }

    .cookie-save-btn {
        min-width: 160px;
    }


    /* =========================================================
       ANIMATIONS
    ========================================================= */

    @keyframes cookieBannerIn {

        from {
            opacity: 0;

            transform:
                translateY(100%);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }
    }

    @keyframes cookieModalIn {

        from {
            opacity: 0;

            transform:
                translateY(15px)
                scale(0.98);
        }

        to {
            opacity: 1;

            transform:
                translateY(0)
                scale(1);
        }
    }


    /* =========================================================
       TABLET
    ========================================================= */

    @media (max-width: 900px) {

        .cookie-banner-inner {
            padding: 18px 20px;

            gap: 20px;
        }

        .cookie-banner-actions {
            flex-wrap: wrap;

            justify-content: flex-end;
        }

        .cookie-btn {
            padding-left: 14px;
            padding-right: 14px;
        }
    }


    /* =========================================================
       MOBILE
    ========================================================= */

    @media (max-width: 700px) {

        .cookie-banner-inner {
            flex-direction: column;

            align-items: stretch;

            gap: 15px;

            padding: 17px 16px;
        }

        .cookie-banner-info {
            gap: 10px;
        }

        .cookie-icon {
            width: 36px;
            height: 36px;

            min-width: 36px;
        }

        .cookie-icon svg {
            width: 19px;
            height: 19px;
        }

        .cookie-banner-info h2 {
            font-size: 15px;
        }

        .cookie-banner-info p {
            font-size: 12px;
        }

        .cookie-banner-actions {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 8px;
        }

        .cookie-btn-manage {
            grid-column:
                1 / -1;

            border: 1px solid #dddddd;
        }

        .cookie-btn-reject,
        .cookie-btn-accept {
            width: 100%;
        }
    }


    /* Small mobile */

    @media (max-width: 420px) {

        .cookie-banner-inner {
            padding: 14px;
        }

        .cookie-banner-actions {
            grid-template-columns: 1fr;
        }

        .cookie-btn-manage {
            grid-column: auto;
        }

        .cookie-btn {
            width: 100%;

            min-height: 44px;
        }

        .cookie-modal-overlay {
            padding: 12px;
        }

        .cookie-modal {
            max-height: 94vh;
        }

        .cookie-modal-header {
            padding: 20px 18px 15px;
        }

        .cookie-modal-body {
            padding: 8px 18px 15px;
        }

        .cookie-modal-footer {
            padding: 15px 18px 20px;
        }

        .cookie-preference-row {
            align-items: flex-start;
        }

        .cookie-preference-info p {
            font-size: 11px;
        }
    }

</style>


<script>
(function () {

    'use strict';

    const banner = document.getElementById(
        'milestone-cookie-banner'
    );

    const modal = document.getElementById(
        'cookie-preferences-modal'
    );

    const manageButton = document.getElementById(
        'cookie-manage-btn'
    );

    const rejectButton = document.getElementById(
        'cookie-reject-btn'
    );

    const acceptButton = document.getElementById(
        'cookie-accept-btn'
    );

    const closeButton = document.getElementById(
        'cookie-modal-close'
    );

    const saveButton = document.getElementById(
        'cookie-save-preferences'
    );

    const analyticsToggle = document.getElementById(
        'analytics-cookie-toggle'
    );

    const marketingToggle = document.getElementById(
        'marketing-cookie-toggle'
    );


    /*
     * Nothing to initialize if the banner
     * is not present.
     */
    if (!banner) {
        return;
    }


    /*
     * CSRF token.
     */
    const csrfMeta = document.querySelector(
        'meta[name="csrf-token"]'
    );

    if (!csrfMeta) {
        console.error(
            'Cookie consent: CSRF token not found.'
        );

        return;
    }

    const csrfToken = csrfMeta.getAttribute('content');


    /*
     * Save preferences to Laravel.
     */
    async function savePreferences(
        preference,
        analytics,
        marketing
    ) {

        const buttons = [
            acceptButton,
            rejectButton,
            manageButton,
            saveButton
        ].filter(Boolean);

        buttons.forEach(function (button) {
            button.disabled = true;
        });

        try {

            const response = await fetch(
                '{{ route('cookie-consent.save') }}',
                {
                    method: 'POST',

                    credentials: 'same-origin',

                    headers: {
                        'Content-Type':
                            'application/json',

                        'Accept':
                            'application/json',

                        'X-CSRF-TOKEN':
                            csrfToken,

                        'X-Requested-With':
                            'XMLHttpRequest'
                    },

                    body: JSON.stringify({
                        preference: preference,

                        analytics:
                            Boolean(analytics),

                        marketing:
                            Boolean(marketing)
                    })
                }
            );


            /*
             * Handle validation/server errors.
             */
            if (!response.ok) {

                let errorMessage =
                    'Unable to save cookie preferences.';

                try {

                    const errorData =
                        await response.json();

                    if (errorData.message) {
                        errorMessage =
                            errorData.message;
                    }

                } catch (error) {
                    // Ignore invalid JSON error response.
                }

                throw new Error(errorMessage);
            }


            /*
             * Success.
             */
            closeBanner();

        } catch (error) {

            console.error(
                'Cookie consent error:',
                error
            );

            buttons.forEach(function (button) {
                button.disabled = false;
            });

            alert(
                'We could not save your cookie preferences. Please try again.'
            );
        }
    }


    /*
     * Close banner after successful save.
     */
    function closeBanner() {

        if (modal) {
            modal.hidden = true;
        }

        banner.style.opacity = '0';

        banner.style.transform =
            'translateY(100%)';

        banner.style.transition =
            'opacity 0.25s ease, transform 0.25s ease';

        setTimeout(function () {

            banner.remove();

        }, 260);
    }


    /*
     * Open preferences modal.
     */
    function openPreferences() {

        if (!modal) {
            return;
        }

        modal.hidden = false;

        document.body.style.overflow = 'hidden';

        if (analyticsToggle) {
            analyticsToggle.checked = false;
        }

        if (marketingToggle) {
            marketingToggle.checked = false;
        }

        setTimeout(function () {

            if (closeButton) {
                closeButton.focus();
            }

        }, 50);
    }


    /*
     * Close preferences modal.
     */
    function closePreferences() {

        if (!modal) {
            return;
        }

        modal.hidden = true;

        document.body.style.overflow = '';
    }


    /*
     * Accept All
     */
    if (acceptButton) {

        acceptButton.addEventListener(
            'click',
            function () {

                savePreferences(
                    'accepted',
                    true,
                    true
                );

            }
        );
    }


    /*
     * Reject All
     */
    if (rejectButton) {

        rejectButton.addEventListener(
            'click',
            function () {

                savePreferences(
                    'rejected',
                    false,
                    false
                );

            }
        );
    }


    /*
     * Manage Preferences
     */
    if (manageButton) {

        manageButton.addEventListener(
            'click',
            function () {

                openPreferences();

            }
        );
    }


    /*
     * Save custom preferences.
     */
    if (saveButton) {

        saveButton.addEventListener(
            'click',
            function () {

                const analytics =
                    analyticsToggle
                        ? analyticsToggle.checked
                        : false;

                const marketing =
                    marketingToggle
                        ? marketingToggle.checked
                        : false;

                savePreferences(
                    'custom',
                    analytics,
                    marketing
                );

            }
        );
    }


    /*
     * Close modal.
     */
    if (closeButton) {

        closeButton.addEventListener(
            'click',
            function () {

                closePreferences();

            }
        );
    }


    /*
     * Clicking outside modal closes it.
     */
    if (modal) {

        modal.addEventListener(
            'click',
            function (event) {

                if (
                    event.target === modal
                ) {

                    closePreferences();

                }

            }
        );
    }


    /*
     * ESC closes preferences modal.
     */
    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                modal &&
                !modal.hidden
            ) {

                closePreferences();

            }

        }
    );

})();
</script>

@endif