{{--
    resources/views/partials/preloader.blade.php
    ─────────────────────────────────────────────
    Branded preloader — Circle Spinner version.
    No progress bar. Pure SVG CSS animation.

    Security:
      • Static HTML only — no raw user data echoed.
      • No inline JS (CSP-safe).
      • ARIA role + label for screen readers.
      • draggable="false" for touch devices.
--}}

<div id="preloader"
     role="status"
     aria-label="Page loading, please wait"
     aria-live="polite">

    {{-- Logo --}}
    <img
        src="{{ asset('images/plm-logo.png') }}"
        alt="Milestone PLM Solutions"
        class="preloader__logo img-fluid"
        draggable="false"
        loading="eager"
        width="220"
        height="60"
    />

    {{-- Circle Spinner — pure SVG, no external library needed --}}
    <div class="preloader__spinner" aria-hidden="true">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            {{-- Grey track ring --}}
            <circle class="spinner__track" cx="50" cy="50" r="44"/>
            {{-- Animated orange arc --}}
            <circle class="spinner__arc"   cx="50" cy="50" r="44"/>
        </svg>
    </div>

    {{-- Loading label --}}
    <span class="preloader__text">Loading&hellip;</span>

</div>