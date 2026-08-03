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

<style>
    .our-delivery-model-stack-tag {
        border-radius: 15px;
    }
    
    @media screen and (width: 390px) {
        .our-delivery-model-tag {
          font-size: 5px;
          padding: 4px;
        text-align:center;
    }
           
    }
    
    @media (max-width: 480px) {
    .our-delivery-model-card {
        min-height: 240px;
    }
    .our-delivery-model-tag {
     font-size: 10px;
     padding: 8px;
     align-items: Center;
    }
    
   }
   
    @media (max-width: 1024px) {
    .our-delivery-model-info-card {
        padding: 10pX;
    }
}
@media (max-width: 768px) {
    .our-delivery-model-card {
        min-height: 270px;
    }
}

.our-delivery-model-card__title  {
    font-weight: 500;
}

.our-delivery-model-card__desc {
    font-weight: 500;
}

.our-delivery-model-card__img {
    transform : scale(1.08);
    transition: transform 2.8s cubic-bezier(0.22, 1, 0.36, 1);
}



.our-delivery-model-card:hover .our-delivery-model-card__img {
    transform: scale(1);
}

.our-delivery-model-card::before {
    transition: background 1s ease;
}

.our-delivery-model-card__gradient {
    position  : absolute;
    bottom    : 0;
    left      : 0;
    right     : 0;
    height    : 65%;
    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.90) 0%,
        rgba(0, 0, 0, 0.4)  50%,
        transparent         100%
    );
    z-index   : 2;
    transition: margin-bottom .8s ease;
}

.our-delivery-model-card__desc {
    transition:
    max-height .9s ease,
    opacity .7s ease .15s,
    transform .7s ease .15s;
}
.our-delivery-model-card__link {
    transform : translateY(6px);
    transition:
        opacity   0.3s ease 0.2s,
        transform 0.3s ease 0.2s,
        gap       0.2s ease;
}

.our-delivery-model-card:hover .our-delivery-model-card__link {
    opacity  : 1;
    transform: translateY(0);
}



.our-delivery-model-card__meta {
    opacity    : 0;
    --odm-transition: 1.2s ease;
}

</style>

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
                    <h2 class="our-delivery-model-heading">Scale Smarter with
                        <span class="odm-highlight">Expert AEC  & </span> <br>
                       Engineering Teams
                    </h2>

                    {{-- Description --}}
                    <p class="our-delivery-model-desc">
                    Strengthen your project delivery capabilities with expert AEC Services and Engineering Design Services, backed by dedicated teams that seamlessly integrate with your operations.
                    </p>

                    {{-- Feature Tags --}}
                    <div class="our-delivery-model-tags">
                        <span class="our-delivery-model-tag">Time & Material</span>
                        <span class="our-delivery-model-tag">Full-Time Equivalent (FTE)</span>
                        <span class="our-delivery-model-tag">Offshore Engineering Centers</span>
                        <span class="our-delivery-model-tag">Virtual Design Center [VDC]</span>
                    </div>

                    {{-- CTA Button --}}
                    <div>
    <a href="https://coral-pigeon-247564.hostingersite.com/services/bim-services"
       class="our-delivery-model-btn">
        Explore Services
        <svg xmlns="http://www.w3.org/2000/svg"
             width="16"
             height="16"
             fill="none"
             stroke="currentColor"
             stroke-width="2.5"
             viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12"/>
            <polyline points="12 5 19 12 12 19"/>
        </svg>
    </a>
</div>

                    {{-- Engineering Stack --}}
                    <p class="our-delivery-model-stack-label">Engineering Stack</p>
                    <div class="our-delivery-model-stack-tags">
                        <span class="our-delivery-model-stack-tag" >AutoCAD</span>
                        <span class="our-delivery-model-stack-tag">Revit</span>
                        <span class="our-delivery-model-stack-tag">BIM 360</span>
                        <span class="our-delivery-model-stack-tag">Creo</span>
                        <span class="our-delivery-model-stack-tag">Navisworks</span>
                        <span class="our-delivery-model-stack-tag">Solidworks</span>
                        <span class="our-delivery-model-stack-tag">Digital Twin</span>
                        <span class="our-delivery-model-stack-tag">NX</span>
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
                            'image' => 'images/discuss-trial-one.jpeg',   // → public/images/delivery-step-01.jpg
                            'step'  => 'Step 1',
                            'title' => 'Discuss Trial Projects',
                            'desc'  => 'We understand your project scope, objectives, and technical requirements to define a clear trial engagement approach.',
                            'link'  => '#',
                            'meta'  => 'Scope Alignment · Requirement Mapping',        // optional bottom meta text
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
                        ],
                        [
                            'image' => 'images/review-the-project-two.jpeg',   // → public/images/delivery-step-02.jpg
                            'step'  => 'Step 02',
                            'title' => 'Execute the Project',
                            'desc'  => 'Our dedicated AEC and Engineering experts begin execution with structured workflows and industry-standard practices.',
                            'link'  => '#',
                            'meta'  => 'Production Start · Dedicated Team Setup',
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                        ],
                        [
                            'image' => 'images/execute-the-project-three.jpeg',   // → public/images/delivery-step-03.jpg
                            'step'  => 'Step 03',
                            'title' => 'Review the Project ver',
                            'desc'  => 'We conduct detailed quality checks and collaborate with you for feedback, revisions, and approval cycles.',
                            'link'  => '#',
                            'meta'  => 'QA Review · Client Feedback Loop',
                            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
                        ],
                        [
                            'image' => 'images/final-job-delivered-four.jpeg',   // → public/images/delivery-step-04.jpg
                            'step'  => 'Step 04',
                            'title' => 'Final Job Delivered',
                            'desc'  => 'Final outputs are delivered in production-ready formats, ensuring accuracy, compliance, and on-time completion.',
                            'link'  => '#',
                            'meta'  => 'Handover · Approved Deliverables',
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