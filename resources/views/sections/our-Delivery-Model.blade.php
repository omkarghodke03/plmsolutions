{{--
    ============================================================
    Section  : Our Delivery Model
    File     : resources/views/sections/our-delivery-model.blade.php
    CSS      : resources/css/custom.css  (all our-delivery-model- classes)
    Notes    :
      - All custom classes prefixed with `our-delivery-model-`
      - Images loaded via asset() from public/images/
      - Bootstrap utility classes used alongside custom classes
      - On mobile (≤480px): cards show content by default (no hover needed)
      - Tap on mobile triggers active state via JS
    ============================================================
--}}

{{-- ── Link your CSS file in <head> if not already included ──
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
─────────────────────────────────────────────────────────── --}}

<section class="our-delivery-model-section" id="our-delivery-model">
    <div class="container-our-delivery-model">

        <div class="our-delivery-model-row">

            {{-- ════════════════════════════════════════════
                 LEFT — Info Card
                 ════════════════════════════════════════════ --}}
            <div class="our-delivery-model-left">
                <div class="our-delivery-model-info-card">

                    {{-- Eyebrow --}}
                    <p class="our-delivery-model-eyebrow">Our Delivery Model</p>

                    {{-- Main Heading --}}
                    <h2 class="our-delivery-model-heading">
                        <span class="odm-highlight">Scale</span> your<br>
                        Engineering<br>
                        Team Easily
                    </h2>

                    {{-- Description --}}
                    <p class="our-delivery-model-desc">
                        Leverage our proven approach to
                        <strong>expand your BIM, CAD, and engineering capacity</strong>
                        and deliver at speed.
                    </p>

                    {{-- Feature Tags --}}
                    <div class="our-delivery-model-tags">
                        <span class="our-delivery-model-tag">Dedicated Teams</span>
                        <span class="our-delivery-model-tag">Project-Based</span>
                        <span class="our-delivery-model-tag">Offshore Centers</span>
                        <span class="our-delivery-model-tag">Quality Assurance</span>
                    </div>

                    {{-- CTA Button --}}
                    <div>
                        <a  class="our-delivery-model-btn">
                            Explore Services
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="none" stroke="currentColor" stroke-width="2.5"
                                 viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>

                    {{-- Engineering Stack --}}
                    <p class="our-delivery-model-stack-label">Engineering Stack</p>
                    <div class="our-delivery-model-stack-tags">
                        <span class="our-delivery-model-stack-tag">AutoCAD</span>
                        <span class="our-delivery-model-stack-tag">Revit</span>
                        <span class="our-delivery-model-stack-tag">BIM 360</span>
                        <span class="our-delivery-model-stack-tag">Navisworks</span>
                        <span class="our-delivery-model-stack-tag">Civil 3D</span>
                    </div>

                </div>{{-- /info-card --}}
            </div>
            {{-- /LEFT --}}


            {{-- ════════════════════════════════════════════
                 RIGHT — 2×2 Step Cards
                 ════════════════════════════════════════════

                 DATA STRUCTURE per card:
                   image  → path relative to public/ (used with asset())
                   step   → Step label e.g. "Step 01"
                   title  → Card heading
                   desc   → Short description shown on hover
                   link   → URL for Explore link
                   icon   → Inline SVG string
            ─────────────────────────────────────────────── --}}
            <div class="our-delivery-model-right">

                @php
                    $steps = [
                        [
                            'image' => 'images/home-about-images1.jpg',   // → public/images/delivery-step-01.jpg
                            'step'  => 'Step 01',
                            'title' => 'Discover',
                            'desc'  => 'We assess your project requirements, workflows, and capacity gaps to design a tailored engagement model.',
                            'link'  => '#',
                            'meta'  => 'LCD 100 · REQ ANALYSIS',        // optional bottom meta text
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
                        ],
                        [
                            'image' => 'images/home-about-images2.png',   // → public/images/delivery-step-02.jpg
                            'step'  => 'Step 02',
                            'title' => 'Assemble',
                            'desc'  => 'We handpick and onboard the right engineers, BIM modelers, and specialists for your project.',
                            'link'  => '#',
                            'meta'  => '',
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        ],
                        [
                            'image' => 'images/home-about-images1.jpg',   // → public/images/delivery-step-03.jpg
                            'step'  => 'Step 03',
                            'title' => 'Deliver',
                            'desc'  => 'Your extended team integrates seamlessly, hitting milestones with full quality oversight and daily reporting.',
                            'link'  => '#',
                            'meta'  => '',
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
                        ],
                        [
                            'image' => 'images/home-about-images2.png',   // → public/images/delivery-step-04.jpg
                            'step'  => 'Step 04',
                            'title' => 'Scale',
                            'desc'  => 'Ramp capacity up or down in days — not months — as your project pipeline evolves.',
                            'link'  => '#',
                            'meta'  => '',
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
                        ],
                    ];
                @endphp

                <div class="our-delivery-model-grid">
                    @foreach($steps as $index => $step)
                        <div
                            class="our-delivery-model-card"
                            data-step="{{ $index }}"
                            role="button"
                            tabindex="0"
                            aria-label="{{ $step['title'] }} — {{ $step['step'] }}"
                        >
                            {{-- Background image --}}
                            <img
                                src="{{ asset($step['image']) }}"
                                alt="{{ $step['title'] }}"
                                class="our-delivery-model-card__img"
                                loading="lazy"
                            >

                            {{-- Bottom gradient overlay --}}
                            <div class="our-delivery-model-card__gradient"></div>

                            {{-- Icon badge (top-left) --}}
                            <div class="our-delivery-model-card__icon">
                                {!! $step['icon'] !!}
                            </div>

                            {{-- Step label (top-right) --}}
                            <span class="our-delivery-model-card__step">
                                {{ $step['step'] }}
                            </span>

                            {{-- Card body --}}
                            <div class="our-delivery-model-card__body">

                                {{-- Title — always visible --}}
                                <h3 class="our-delivery-model-card__title">
                                    {{ $step['title'] }}
                                </h3>

                                {{-- Description — revealed on hover --}}
                                <p class="our-delivery-model-card__desc">
                                    {{ $step['desc'] }}
                                </p>

                                {{-- Optional meta strip --}}
                                @if(!empty($step['meta']))
                                    <p class="our-delivery-model-card__meta">
                                        {{ $step['meta'] }}
                                    </p>
                                @endif

                                {{-- Explore link --}}
                                <a href="{{ $step['link'] }}" class="our-delivery-model-card__link">
                                    Explore
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         fill="none" stroke="currentColor" stroke-width="2.5"
                                         viewBox="0 0 24 24">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/>
                                    </svg>
                                </a>

                            </div>{{-- /card-body --}}
                        </div>{{-- /card --}}
                    @endforeach
                </div>{{-- /grid --}}

            </div>
            {{-- /RIGHT --}}

        </div>{{-- /row --}}
    </div>{{-- /container --}}
</section>


{{-- ── JavaScript: tap-to-activate on touch devices ──────────── --}}
<script>
(function () {
    'use strict';

    /* Only apply tap behaviour on touch/coarse-pointer devices */
    if (!window.matchMedia('(pointer: coarse)').matches) return;

    const cards = document.querySelectorAll('.our-delivery-model-card');

    cards.forEach(function (card) {
        card.addEventListener('click', function () {
            /* Toggle active class — CSS :hover won't fire on mobile */
            const isActive = card.classList.contains('odm-tap-active');

            /* Remove active from all cards first */
            cards.forEach(function (c) {
                c.classList.remove('odm-tap-active');
            });

            /* If it wasn't active, activate it */
            if (!isActive) {
                card.classList.add('odm-tap-active');
            }
        });
    });
})();
</script>

{{-- ── Mobile tap-active CSS (mirrors hover styles) ─────────── --}}
<style>
/* When a card has been tapped on mobile, show the same state as :hover */
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__img     { transform: scale(1); }
.our-delivery-model-card.odm-tap-active::before                           { background: rgba(0,0,0,0.25); }
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__gradient{ height: 80%; }
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__title   { margin-bottom: 10px; }
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__desc    { max-height: 120px; opacity: 1; transform: translateY(0); }
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__link    { opacity: 1; transform: translateY(0); }
.our-delivery-model-card.odm-tap-active .our-delivery-model-card__meta    { opacity: 1; }
</style>