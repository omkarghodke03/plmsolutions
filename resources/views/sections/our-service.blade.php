{{--
    ============================================================
    Section  : Our Services
    File     : resources/views/sections/our-services.blade.php
    Notes    :
      - All custom classes are prefixed with `our-service-`
      - CSS variables: --plm-primary, --plm-secondary
      - Bootstrap utility classes are allowed
      - Images loaded via asset() from public/images/
      - Hover → expand on desktop | Tap → expand on mobile
    ============================================================
--}}

{{-- ─── Inline Styles ──────────────────────────────────────────── --}}
<style>
/* ── Root / Variables ──────────────────────────────────────── */
:root {
    --plm-primary   : #EC6502;
    --plm-secondary : #6F6F6F;
    --plm-heading   : 'Arial', sans-serif;
    --plm-subheading: 'Anklepants', sans-serif;

    /* Section-specific tokens */
    --os-card-radius     : 12px;
    --os-transition      : 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    --os-expanded-width  : 600px;   /* desktop expanded card width  */
    --os-collapsed-width : 72px;    /* desktop collapsed card width */
    --os-card-height     : 500px;   /* card height                  */
}

/* ── Section Wrapper ───────────────────────────────────────── */
.our-service-section {
    background: #f4f4f4;
    padding: 50px 0 60px;
}

/* ── Header Area ───────────────────────────────────────────── */
.our-service-eyebrow {
    font-family : var(--plm-subheading);
    font-size   : 12px;
    font-weight : 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color       : var(--plm-primary);
    margin-bottom: 8px;
}

.our-service-heading {
    font-family : var(--plm-heading);
    font-size   : clamp(28px, 4vw, 40px);
    font-weight : 500;
    color       : #1a1a1a;
    line-height : 1.15;
    margin-bottom: 0;
}

.our-service-heading span {
    color: var(--plm-primary);
}

.our-service-desc {
    font-family : var(--plm-heading);
    font-size   : 15px;
    color       : var(--plm-secondary);
    line-height : 1.65;
    max-width   : 100%;
}

/* ── Cards Container ───────────────────────────────────────── */
.our-service-cards {
    display    : flex;
    gap        : 8px;
    height     : var(--os-card-height);
    overflow   : hidden;
    /* justify-self: center; */
}

/* ── Individual Card ───────────────────────────────────────── */
.our-service-card {
    position     : relative;
    border-radius: var(--os-card-radius);
    overflow     : hidden;
    cursor       : pointer;

    /* Default = collapsed */
    width        : var(--os-collapsed-width);
    flex-shrink  : 0;
    transition   : width var(--os-transition);
}

/* Active / hovered card expands */
.our-service-card.is-active {
    width: var(--os-expanded-width);
}

/* ── Background Image ──────────────────────────────────────── */
.our-service-card__img {
    position  : absolute;
    inset     : 0;
    width     : 100%;
    height    : 100%;
    object-fit: cover;

    /* Start slightly zoomed in; zoom out on active */
    transform : scale(1.1);
    transition: transform var(--os-transition);
}

.our-service-card.is-active .our-service-card__img {
    transform: scale(1);
}

/* ── Dark Overlay (always) ─────────────────────────────────── */
.our-service-card::before {
    content   : '';
    border-top: 3px solid #ec6502;
    position  : absolute;
    inset     : 0;
    background: rgba(0, 0, 0, 0.35);
    z-index   : 1;
}

/* ── Bottom Gradient Overlay ───────────────────────────────── */
.our-service-card__gradient {
    position  : absolute;
    bottom    : 0;
    left      : 0;
    right     : 0;
    height    : 60%;
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 100%);
    z-index   : 2;
}

/* ── Icon Badge ────────────────────────────────────────────── */
.our-service-card__icon {
    position     : absolute;
    top          : 20px;
    left         : 16px;
    z-index      : 3;
    width        : 40px;
    height       : 40px;
    background   : #ec65027a;
    border-radius: 10px;
    display      : flex;
    align-items  : center;
    justify-content: center;
    color        : #fff;
    font-size    : 18px;
    flex-shrink  : 0;
}

/* ── Vertical Text (collapsed state) ──────────────────────── */
.our-service-card__vertical-label {
    position     : absolute;
    bottom       : 24px;
    left         : 0;
    right        : 0;
    z-index      : 3;
    display      : flex;
    align-items  : center;
    justify-content: center;

    /* Rotate text upward */
    writing-mode : vertical-rl;
    text-orientation: mixed;
    transform    : rotate(180deg);

    font-family  : var(--plm-heading);
    font-size    : 13px;
    font-weight  : 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color        : #fff;
    white-space  : nowrap;

    /* Show only when collapsed */
    opacity      : 1;
    transition   : opacity 0.2s ease;
}

.our-service-card.is-active .our-service-card__vertical-label {
    opacity: 0;
    pointer-events: none;
}

/* ── Horizontal Content (expanded state) ──────────────────── */
.our-service-card__content {
    position  : absolute;
    bottom    : 0;
    left      : 0;
    right     : 0;
    z-index   : 3;
    padding   : 24px 22px 20px;

    /* Hidden when collapsed */
    opacity   : 0;
    transform : translateY(10px);
    transition: opacity 0.3s ease 0.15s, transform 0.3s ease 0.15s;
    pointer-events: none;
}

.our-service-card.is-active .our-service-card__content {
    opacity        : 1;
    transform      : translateY(0);
    pointer-events : auto;
}

/* ── Counter Badge ─────────────────────────────────────────── */
.our-service-card__counter {
    font-family   : var(--plm-heading);
    font-size     : 12px;
    color         : rgba(255,255,255,0.6);
    margin-bottom : 6px;
    letter-spacing: 1px;
}

.our-service-card__title {
    font-family  : var(--plm-heading);
    font-size    : 22px;
    font-weight  : 700;
    color        : #fff;
    line-height  : 1.2;
    margin-bottom: 8px;
    white-space  : nowrap;
}

.our-service-card__text {
    font-family  : var(--plm-heading);
    font-size    : 13px;
    color        : rgba(255,255,255,0.8);
    line-height  : 1.55;
    margin-bottom: 14px;
    /* Clamp to 2 lines so text doesn't overflow */
    display      : -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow     : hidden;
}

/* ── Learn More Link ───────────────────────────────────────── */
.our-service-card__link {
    display    : inline-flex;
    align-items: center;
    gap        : 6px;
    font-family: var(--plm-heading);
    font-size  : 13px;
    font-weight: 600;
    color      : var(--plm-primary);
    text-decoration: none;
    letter-spacing : 0.5px;
    text-transform : uppercase;
    transition : gap 0.2s ease;
}

.our-service-card__link:hover {
    gap  : 10px;
    color: var(--plm-primary);
}

/* ── CTA Button ────────────────────────────────────────────── */
.our-service-btn {
    display     : inline-flex;
    align-items : center;
    gap         : 8px;
    padding     : 14px 32px;
    font-family : var(--plm-heading);
    font-size   : 14px;
    font-weight : 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    color       : #fff;
    background  : var(--plm-primary);
    border      : 2px solid var(--plm-primary);
    border-radius: 0;
    position    : relative;
    overflow    : hidden;
    cursor      : pointer;
    transition  : transform 0.25s ease, box-shadow 0.25s ease,
                  background 0.25s ease, border-color 0.25s ease;
}

/* Ripple layer */
.our-service-btn::after {
    content      : '';
    display      : inline-block;
    position     : absolute;
    inset        : 0;
    background   : var(--plm-primary);
    z-index      : -1;
    transition   : transform 0.4s ease, opacity 0.4s ease;
}

.our-service-btn:hover {
    background  : #d05800;
    border-color: #d05800;
    color       : #fff;
    transform   : translateY(-3px);
    box-shadow  : 0 10px 20px rgba(0,0,0,0.25);
}

.our-service-btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity  : 0;
}

.our-service-btn:active {
    transform : translateY(-1px);
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

/* ── Responsive: Tablet (≤991px) ──────────────────────────── */
@media (max-width: 991px) {
    :root {
        --os-expanded-width : 320px;
        --os-collapsed-width: 60px;
        --os-card-height    : 320px;
    }

    .our-service-header-row {
        margin-bottom: 24px !important;
    }

    .our-service-desc {
        max-width: 100%;
    }
}

/* ── Responsive: Mobile (≤767px) ──────────────────────────── */
@media (max-width: 767px) {
    .our-service-section {
        padding: 50px 0 40px;
    }

    /* Stack cards vertically as a slider */
    .our-service-cards {
        flex-direction : column;
        height         : auto;
        overflow-x     : hidden;
        overflow-y     : visible;
        gap            : 10px;
    }

    /* Each card becomes a full-width row */
    .our-service-card {
        width  : 100% !important;  /* override all widths */
        height : 80px;             /* collapsed height on mobile */
        transition: height var(--os-transition);
    }

    .our-service-card.is-active {
        width : 100% !important;
        height: 260px;             /* expanded height on mobile */
    }

    /* Hide vertical label on mobile (not needed in horizontal layout) */
    .our-service-card__vertical-label {
        writing-mode   : horizontal-tb;
        transform      : none;
        text-align     : left;
        left           : 0px;
        bottom         : 50%;
        transform      : translateY(50%);
        font-size      : 14px;
        justify-content: flex-start;
    }

    .our-service-card.is-active .our-service-card__vertical-label {
        opacity: 0;
    }

    /* Icon stays top-left on mobile */
    .our-service-card__icon {
        top : 50%;
        transform: translateY(-50%);
    }

    .our-service-card.is-active .our-service-card__icon {
        top      : 16px;
        transform: none;
    }
}
@media (min-width: 1200px) {
    .container,  {
        max-width: 100vw;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        align-items: center;
    }
}
</style>

{{-- ─── Section HTML ────────────────────────────────────────────── --}}
<section class="our-service-section" id="our-services">
    <div class="container">

        {{-- ── Header Row ──────────────────────────────────────── --}}
        <div class="row align-items-end our-service-header-row mb-4">
            {{-- Left: Eyebrow + Heading --}}
            <div class="col-lg-6 mb-3 mb-lg-0">
                <p class="our-service-eyebrow">Our Capabilities</p>
                <h2 class="our-service-heading">
                    Browse our <span>Services</span>
                </h2>
            </div>

            {{-- Right: Description --}}
            <div class="col-lg-6">
                <p class="our-service-desc mb-0">
                    Milestone PLM provides a comprehensive range of engineering,
                    BIM, and digital design services that help global companies
                    scale project delivery.
                </p>
            </div>
        </div>
        {{-- ── End Header Row ──────────────────────────────────── --}}

        {{-- ── Cards Row ───────────────────────────────────────── --}}
        {{--
            DATA STRUCTURE:
            Each item = [ 'title', 'description', 'image_filename', 'icon_svg' ]
            Add / remove items freely — the JS auto-handles widths.
        --}}
        @php
            /*
            |----------------------------------------------------------
            | HOW TO UPDATE IMAGES:
            | Put your images in:  public/images/
            | Then set the path:   'image' => 'images/your-file.jpg'
            |
            | Example filenames you are using:
            |   public/images/home-about-images1.jpg  →  'images/home-about-images1.jpg'
            |   public/images/home-about-images2.png  →  'images/home-about-images2.png'
            |----------------------------------------------------------
            */
            $services = [
                [
                    'title'  => 'BIM Services',
                    'desc'   => 'Full-spectrum BIM services from modeling to coordination, clash detection, and 4D/5D scheduling across all project phases.',
                    'image'  => 'images/home-about-images1.jpg',   // → public/images/home-about-images1.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>',
                ],
                [
                    'title'  => 'Architectural Services',
                    'desc'   => 'End-to-end architectural design, documentation, and visualization for residential and commercial projects.',
                    'image'  => 'images/home-about-images2.png',   // → public/images/home-about-images2.png
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>',
                ],
                [
                    'title'  => 'Millwork Design',
                    'desc'   => 'Custom millwork drafting and shop drawing production for interior cabinetry and joinery.',
                    'image'  => 'images/home-about-images1.jpg',   // → public/images/home-about-images3.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>',
                ],
                [
                    'title'  => 'Structural Services',
                    'desc'   => 'Structural engineering design, analysis, and detailing for diverse construction typologies.',
                    'image'  => 'images/home-about-images1.jpg',   // → public/images/home-about-images4.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
                ],
                [
                    'title'  => 'MEP Services',
                    'desc'   => 'Mechanical, electrical, and plumbing design, coordination, and clash-free BIM modeling.',
                    'image'  => 'images/home-about-images2.png',   // → public/images/home-about-images5.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>',
                ],
                [
                    'title'  => 'Engineering Solutions',
                    'desc'   => 'Integrated engineering consulting and digital solutions for complex infrastructure challenges.',
                    'image'  => 'images/home-about-images2.png',   // → public/images/home-about-images6.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                ],
                [
                    'title'  => 'Contract Staffing',
                    'desc'   => 'On-demand BIM, CAD, and engineering professionals to augment your project teams.',
                    'image'  => 'images/home-about-images2.png',   // → public/images/home-about-images7.jpg
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
                ],
            ];
        @endphp

        <div class="our-service-cards" id="ourServiceCards">
            @foreach($services as $index => $service)
                {{--
                    - First card (index 0) is active by default.
                    - data-index used by JS for identification.
                --}}
                <div
                    class="our-service-card {{ $index === 0 ? 'is-active' : '' }}"
                    data-index="{{ $index }}"
                    role="button"
                    aria-label="View {{ $service['title'] }}"
                    tabindex="0"
                >
                    {{-- Background image --}}
                    <img
                        src="{{ asset($service['image']) }}"
                        alt="{{ $service['title'] }}"
                        class="our-service-card__img"
                        loading="lazy"
                    >

                    {{-- Dark overlay + bottom gradient --}}
                    <div class="our-service-card__gradient"></div>

                    {{-- Icon badge --}}
                    <div class="our-service-card__icon">
                        {!! $service['icon'] !!}
                    </div>

                    {{-- Vertical label (collapsed state only) --}}
                    <span class="our-service-card__vertical-label">
                        {{ $service['title'] }}
                    </span>

                    {{-- Horizontal content (expanded / active state) --}}
                    <div class="our-service-card__content">
                        <p class="our-service-card__counter">
                            0{{ $index + 1 }} / 0{{ count($services) }}
                        </p>
                        <h3 class="our-service-card__title">
                            {{ $service['title'] }}
                        </h3>
                        <p class="our-service-card__text">
                            {{ $service['desc'] }}
                        </p>
                        <a href="#" class="our-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                 fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- ── End Cards Row ────────────────────────────────────── --}}

        {{-- ── CTA Button ───────────────────────────────────────── --}}
        <div class="text-center mt-5">
            <a  class="our-service-btn our-service-btc">
                View All Services
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>
        {{-- ── End CTA Button ───────────────────────────────────── --}}

    </div>{{-- /container --}}
</section>

{{-- ─── JavaScript ──────────────────────────────────────────────── --}}
<script>
(function () {
    'use strict';

    const container = document.getElementById('ourServiceCards');
    if (!container) return;

    const cards = Array.from(container.querySelectorAll('.our-service-card'));

    /**
     * Activate a single card and collapse the rest.
     * @param {HTMLElement} target
     */
    function activateCard(target) {
        cards.forEach(function (card) {
            card.classList.toggle('is-active', card === target);
        });
    }

    /**
     * Detect if the device is a touch/mobile device.
     * We use pointer coarse as the most reliable check.
     */
    function isTouchDevice() {
        return window.matchMedia('(pointer: coarse)').matches;
    }

    cards.forEach(function (card) {

        /* ── Desktop: hover behaviour ──────────────────────────── */
        card.addEventListener('mouseenter', function () {
            if (!isTouchDevice()) {
                activateCard(card);
            }
        });

        /* ── Mobile: tap behaviour ─────────────────────────────── */
        card.addEventListener('click', function () {
            activateCard(card);
        });

        /* ── Keyboard: Enter / Space for accessibility ─────────── */
        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                activateCard(card);
            }
        });
    });

})();
</script>