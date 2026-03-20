/* ============================================================
   MILESTONE PLM — Cookie Consent JS
   File : resources/js/cookie-consent.js

   Flow:
   1. Read config (URLs + CSRF) from hidden #plmCkCfg div
   2. Show banner after BANNER_DELAY (default 3000ms)
   3. Handle Accept / Decline / Manage buttons
   4. Modal: tab switching + toggle labels
   5. POST consent to Laravel via fetch() with CSRF header
   ============================================================ */

(function () {
    'use strict';

    /* ── Read secure config from Blade data attributes ──────── */
    const cfg = document.getElementById('plmCkCfg');
    if (!cfg) return; // @unless($cookieConsent) — already consented

    const URL_ACCEPT  = cfg.dataset.acceptUrl;
    const URL_DECLINE = cfg.dataset.declineUrl;
    const URL_SAVE    = cfg.dataset.saveUrl;
    const CSRF        = cfg.dataset.csrf;

    /* ── Elements ───────────────────────────────────────────── */
    const banner  = document.getElementById('plmCkBanner');
    const overlay = document.getElementById('plmCkOverlay');
    const modal   = document.getElementById('plmCkModal');
    if (!banner || !modal || !overlay) return;

    // Banner buttons
    const btnManage  = document.getElementById('plmCkManageBtn');
    const btnDecline = document.getElementById('plmCkDeclineBtn');
    const btnAccept  = document.getElementById('plmCkAcceptBtn');

    // Modal buttons
    const btnClose        = document.getElementById('plmCkModalClose');
    const btnSave         = document.getElementById('plmCkSaveBtn');
    const btnModalDecline = document.getElementById('plmCkModalDeclineBtn');
    const btnModalAccept  = document.getElementById('plmCkModalAcceptBtn');

    // Toggles
    const togPerf   = document.getElementById('plmTogglePerf');
    const togFunc   = document.getElementById('plmToggleFunc');
    const togAd     = document.getElementById('plmToggleAd');
    const togSocial = document.getElementById('plmToggleSocial');

    // Tabs + panels
    const tabs   = document.querySelectorAll('.plm-ck-tab');
    const panels = document.querySelectorAll('.plm-ck-panel');

    /* ──────────────────────────────────────────────────────────
    |  BANNER DELAY — milliseconds before banner slides up
    |
    |   1000 = 1 second
    |   3000 = 3 seconds  ← default
    |   5000 = 5 seconds
    ─────────────────────────────────────────────────────────── */
    const BANNER_DELAY = 3000;

    /* ── Show banner after delay ────────────────────────────── */
    setTimeout(function () {
        banner.classList.add('plm-ck-banner--show');
    }, BANNER_DELAY);

    /* ── Toggle label update ────────────────────────────────── */
    function syncLabel(chk) {
        const lbl = chk.closest('label').querySelector('.plm-ck-toggle__lbl');
        if (lbl) lbl.textContent = chk.checked ? 'Active' : 'Inactive';
    }

    [togPerf, togFunc, togAd, togSocial].forEach(function (t) {
        if (t) t.addEventListener('change', function () { syncLabel(t); });
    });

    /* ── Tab switching ──────────────────────────────────────── */
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('plm-ck-tab--active'); });
            panels.forEach(function (p) { p.classList.remove('plm-ck-panel--active'); });
            tab.classList.add('plm-ck-tab--active');
            const target = document.getElementById(tab.dataset.panel);
            if (target) target.classList.add('plm-ck-panel--active');
        });
    });

    /* ── Open modal ─────────────────────────────────────────── */
    function openModal() {
        overlay.style.display = 'block';
        modal.style.display   = 'flex';
        // Trigger reflow so CSS transition plays
        overlay.offsetHeight;
        modal.offsetHeight;
        overlay.classList.add('plm-ck-overlay--show');
        modal.classList.add('plm-ck-modal--show');
        document.body.style.overflow = 'hidden';
        if (tabs[0]) tabs[0].focus();
    }

    /* ── Close modal ────────────────────────────────────────── */
    function closeModal() {
        overlay.classList.remove('plm-ck-overlay--show');
        modal.classList.remove('plm-ck-modal--show');
        document.body.style.overflow = '';
        setTimeout(function () {
            modal.style.display   = 'none';
            overlay.style.display = 'none';
        }, 400);
    }

    /* ── Hide banner ────────────────────────────────────────── */
    function hideBanner() {
        banner.classList.remove('plm-ck-banner--show');
        setTimeout(function () { banner.style.display = 'none'; }, 450);
    }

    /* ── Secure fetch POST ──────────────────────────────────── */
    function postConsent(url, body) {
        return fetch(url, {
            method  : 'POST',
            headers : {
                'Content-Type'     : 'application/json',
                'X-CSRF-TOKEN'     : CSRF,
                'Accept'           : 'application/json',
                'X-Requested-With' : 'XMLHttpRequest',
            },
            body : JSON.stringify(body),
        }).catch(function (err) {
            // Silent fail — banner still hides even if request fails
            console.warn('Cookie consent request failed:', err);
        });
    }

    /* ── Actions ────────────────────────────────────────────── */

    // Accept all
    function acceptAll() {
        postConsent(URL_ACCEPT, {}).then(function () {
            hideBanner();
            closeModal();
        });
    }

    // Decline non-essential
    function declineAll() {
        postConsent(URL_DECLINE, {}).then(function () {
            hideBanner();
            closeModal();
        });
    }

    // Save custom preferences from modal toggles
    function savePreferences() {
        const prefs = {
            performance : togPerf   ? (togPerf.checked   ? 1 : 0) : 0,
            functional  : togFunc   ? (togFunc.checked   ? 1 : 0) : 0,
            advertising : togAd     ? (togAd.checked     ? 1 : 0) : 0,
            social      : togSocial ? (togSocial.checked ? 1 : 0) : 0,
        };
        postConsent(URL_SAVE, prefs).then(function () {
            hideBanner();
            closeModal();
        });
    }

    /* ── Bind all buttons ───────────────────────────────────── */

    // Banner
    if (btnManage)  btnManage.addEventListener('click',  openModal);
    if (btnDecline) btnDecline.addEventListener('click', declineAll);
    if (btnAccept)  btnAccept.addEventListener('click',  acceptAll);

    // Modal
    if (btnClose)        btnClose.addEventListener('click',        closeModal);
    if (btnSave)         btnSave.addEventListener('click',         savePreferences);
    if (btnModalDecline) btnModalDecline.addEventListener('click', declineAll);
    if (btnModalAccept)  btnModalAccept.addEventListener('click',  acceptAll);

    // Click overlay to close
    overlay.addEventListener('click', closeModal);

    // Escape key to close
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('plm-ck-modal--show')) {
            closeModal();
        }
    });

})();