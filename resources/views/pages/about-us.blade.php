@extends('layouts.app')
@section('title', 'About Us - Milestone')
@section('content')

{{-- ===================================================================
     SECTION: ABOUT MILESTONE PLM — S01
==================================================================== --}}
   <section class="aboutplm-hero d-flex align-items-center"
            style="background: linear-gradient(
                to right,
             rgba(0,0,0,0.85),
             rgba(0,0,0,0.6),
             rgba(0,0,0,0.2)),
             url('{{ asset('images/Meeting-Spaces-Hero.jpg') }}') no-repeat center/cover;" >

    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-7 col-md-12">
                
                <p class="aboutplm-tag">ABOUT MILESTONE PLM</p>

                <h1 class="our-delivery-model-heading">
                    Engineering Expertise <br>
                    <span class="odm-highlight">Powering Global</span><br>
                    Innovation
                </h1>

                <p class="aboutplm-desc">
                    Milestone PLM is a global engineering services partner delivering precision CAD, BIM, and structural solutions that accelerate construction and manufacturing projects worldwide.
                </p>

                <div class="aboutplm-btns">
                    <a href="#" class="btn btn-primary aboutplm-btn-primary">
                        Request a Proposal →
                    </a>

                    <a href="#" class="btn btn-outline-light aboutplm-btn-secondary">
                        Explore Our Services →
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
{{-- ===================================================================
     SECTION: WHO WE ARE  Two Decades of  Engineering Excellence — S02
==================================================================== --}}
<section class="whoare-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 col-md-12 whoare-left">

                <p class="whoare-tag">WHO WE ARE</p>

                <h2 class="whoare-heading fade-down">
                    Two Decades of <br>
                    Engineering Excellence
                </h2>

                <p class="whoare-text">
                    Founded in 2004, Milestone PLM Solutions has grown into a trusted global partner for engineering and construction companies seeking high-quality CAD, BIM, and structural outsourcing services.
                </p>

                <p class="whoare-text">
                    Operating across India, Ireland, the UK, and Australia, our team delivers complex projects to international standards — on time and within budget.
                </p>

                <ul class="whoare-list">
                    <li>ISO 9001 & ISO 27001 certified quality & security</li>
                    <li>Expertise across Revit, AutoCAD, Tekla & 15+ platforms</li>
                    <li>Dedicated offshore engineering centre model</li>
                    <li>Serving AEC & manufacturing clients across 4 continents</li>
                </ul>

                <div class="whoare-footer d-flex align-items-center gap-4 mt-4">
                    <div>
                        <small>Engineering Solutions Partner Since</small>
                        <h4>2004</h4>
                    </div>

                    <a href="#" class="whoare-link">
                        Our Services →
                    </a>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">

                <div class="whoare-image-card locations-four-cards-card">

                    <img src="{{ asset('images/testimonials-image1.jpg') }}" 
                         class="img-fluid" 
                         alt="who we are">

                    <!-- Overlay Box -->
                    <div class="whoare-overlay-box">
                        <p>PROJECTS DELIVERED</p>
                        <h3>300+</h3>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
{{-- ============================================================
     SECTION: OUR PURPOSE  What Drives Milestone Forward -S03
============================================================ --}}
<section class="purposeplm-section py-5">
    <div class="container">

        <!-- TOP HEADER -->
        <div class="row mb-5 align-items-center">
            <div class="col-lg-8">
                <p class="purposeplm-tag">OUR PURPOSE</p>
                <h2 class="purposeplm-heading fade-down typewriter animate">
                    What Drives Milestone Forward
                </h2>
            </div>

            <div class="col-lg-4">
                <p class="purposeplm-desc">
                    Two defining principles guide every project, every team, and every client relationship we build.
                </p>
            </div>
        </div>

        <!-- CARDS -->
        <div class="row g-4">

            <!-- LEFT CARD (MISSION) -->
            <div class="col-lg-6">
                <div class="purposeplm-card purposeplm-dark">

                    <div class="purposeplm-icon">★</div>

                    <p class="purposeplm-subtag">OUR MISSION</p>

                    <h4>Accelerate Global Engineering Projects</h4>

                    <p>
                        To help construction and manufacturing companies worldwide accelerate their engineering projects by providing scalable, cost-efficient, and technically precise offshore engineering services — enabling faster delivery without compromising quality.
                    </p>

                    <div class="purposeplm-line"></div>

                    <span class="purposeplm-small">SINCE 2004</span>

                </div>
            </div>

            <!-- RIGHT CARD (VISION) -->
            <div class="col-lg-6">
                <div class="purposeplm-card purposeplm-light">

                    <div class="purposeplm-icon light">💡</div>

                    <p class="purposeplm-subtag">OUR VISION</p>

                    <h4>Engineering Excellence Through Innovation</h4>

                    <p>
                        To be the world's most trusted offshore engineering partner — continuously adopting emerging technologies, refining delivery processes, and building long-term global partnerships that drive lasting infrastructure and product innovation.
                    </p>

                    <div class="purposeplm-line"></div>

                    <span class="purposeplm-small">GLOBAL IMPACT</span>

                </div>
            </div>

        </div>
    </div>
</section>
{{-- ===================================================================
     SECTION: INDUSTRIES WE SERVE  Built for Complex Industries — S04
==================================================================== --}}
<section class="industryplm-section py-5">
    <div class="container">

        <!-- HEADER -->
        <div class="row mb-4 align-items-center">
            <div class="col-lg-8">
                <p class="industryplm-tag">INDUSTRIES WE SERVE</p>
               <h2 class="industryplm-heading typewriter animate">
                Built for Complex Industries
               </h2>
            </div>

            <div class="col-lg-4">
                <p class="industryplm-desc">
                    Our engineering expertise spans sectors where precision, compliance, and scalability are non-negotiable.
                </p>
            </div>
        </div>

        <!-- GRID -->
        <div class="row g-4">

            <!-- CARD -->
           @php
            $industries = [
                ['img'=>'Meeting-Spaces-Hero.jpg','title'=>'Construction','cat'=>'COMMERCIAL & RESIDENTIAL'],
                ['img'=>'sector-expertise4.jpg','title'=>'Automotive','cat'=>'ASSEMBLY & EV FACILITIES'],
                ['img'=>'sector-expertise2.jpg','title'=>'Energy','cat'=>'RENEWABLE & POWER'],
                ['img'=>'sector-expertise3.jpg','title'=>'Industrial Equipment','cat'=>'PRECISION MANUFACTURING'],
                ['img'=>'sector-expertise1.jpg','title'=>'Infrastructure','cat'=>'BRIDGES & HIGHWAYS'],
                ['img'=>'sector-expertise4.jpg','title'=>'Healthcare','cat'=>'HOSPITALS & RESEARCH']
            ];
            @endphp

            @foreach($industries as $key => $item)
            <div class="col-lg-4 col-md-6">

                <div class="industryplm-card" data-bs-toggle="modal" data-bs-target="#industryModal{{$key}}">

                    <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['title'] }}">

                    <div class="industryplm-overlay">
                        <p class="industryplm-cat">{{ $item['cat'] }}</p>
                        <h5>{{ $item['title'] }}</h5>
                        <span class="industryplm-view">View Details →</span>
                    </div>

                </div>

            </div>

            <!-- MODAL -->
            <div class="modal fade " id="industryModal{{$key}}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered w-100">
                    <div class="modal-content">

                        <div class="modal-body p-0 "  >
                            <img src="{{ asset('images/'.$item['img']) }}" class="w-100" style="height: 300px; ">

                            <div class="p-4">
                                <h4>{{ $item['title'] }}</h4>
                                <p>
                                    Detailed description about {{ $item['title'] }} industry. 
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>  




{{-- ============================================================
     SECTION: What We Do — Core Engineering Capabilities S05
============================================================ --}}

<section class="wwd-section" id="What-We-Do" aria-label="What We Do - Core Engineering Capabilities">
    <div class="container-fluid px-0">

        {{-- ── Section Header ── --}}
        <div class="container wwd-header-wrap">
            <p class="wwd-eyebrow">
                <span class="wwd-eyebrow-line" aria-hidden="true"></span>
                WHAT WE DO
            </p>
        </div>

        {{-- ── Split Layout ── --}}
        <div class="container">
            <div class="row wwd-split-row g-0">

                {{-- ════════════════════════════════
                     LEFT — Sticky Panel
                ════════════════════════════════ --}}
                <div class="col-lg-5 wwd-left-col">
                    <div class="wwd-sticky-panel">

                        {{-- Heading & sub-description --}}
                        <h2 class="wwd-heading">Core Engineering<br>Capabilities</h2>
                        <p class="wwd-subtext">
                            From CAD drafting to full BIM coordination, our engineering
                            services cover the complete design-to-delivery workflow
                            for construction and manufacturing projects.
                        </p>

                        {{-- Dynamic image container --}}
                        <div class="wwd-img-wrap" aria-live="polite" aria-atomic="true">
                            {{-- Each image tagged with data-index matching its card --}}
                            <img
                                src="{{ asset('images/sector-expertise1.jpg') }}"
                                alt="BIM Modeling — engineering drawings"
                                class="wwd-service-img active"
                                data-img-index="0"
                                loading="eager"
                                width="500"
                                height="380"
                            >
                            <img
                                src="{{ asset('images/sector-expertise4.jpg') }}"
                                alt="CAD Drafting — precision 2D/3D drawings"
                                class="wwd-service-img"
                                data-img-index="1"
                                loading="lazy"
                                width="500"
                                height="380"
                            >
                            <img
                                src="{{ asset('images/sector-expertise3.jpg') }}"
                                alt="Structural Services — steel and concrete"
                                class="wwd-service-img"
                                data-img-index="2"
                                loading="lazy"
                                width="500"
                                height="380"
                            >
                            <img
                                src="{{ asset('images/sector-expertise3.jpg') }}"
                                alt="MEP Engineering — mechanical electrical plumbing"
                                class="wwd-service-img"
                                data-img-index="3"
                                loading="lazy"
                                width="500"
                                height="380"
                            >
                            <img
                                src="{{ asset('images/sector-expertise2.jpg') }}"
                                alt="Engineering Solutions — end-to-end consulting"
                                class="wwd-service-img"
                                data-img-index="4"
                                loading="lazy"
                                width="500"
                                height="380"
                            >

                            {{-- Decorative overlay tint --}}
                            <div class="wwd-img-overlay" aria-hidden="true"></div>
                        </div>

                    </div>{{-- /wwd-sticky-panel --}}
                </div>{{-- /col left --}}

                {{-- ════════════════════════════════
                     RIGHT — Scrollable Cards
                ════════════════════════════════ --}}
                <div class="col-lg-7 wwd-right-col">
                    <div class="wwd-cards-list" id="wwdCardsList">

                        {{-- ── Card Data: PHP array for maintainability ── --}}
                        @php
                            $services = [
                                [
                                    'number'      => '01',
                                    'icon'        => 'layers',          // SVG key
                                    'title'       => 'BIM Modeling',
                                    'description' => 'Comprehensive Building Information Modeling across architectural, structural, and MEP disciplines with LOD 100–500 deliverables.',
                                ],
                                [
                                    'number'      => '02',
                                    'icon'        => 'file-text',
                                    'title'       => 'CAD Drafting',
                                    'description' => 'Precision 2D/3D CAD drafting, shop drawings, and construction documentation to global standards.',
                                ],
                                [
                                    'number'      => '03',
                                    'icon'        => 'box',
                                    'title'       => 'Structural Services',
                                    'description' => 'Steel detailing, concrete design, and structural analysis supporting complex construction projects worldwide.',
                                ],
                                [
                                    'number'      => '04',
                                    'icon'        => 'settings',
                                    'title'       => 'MEP Engineering',
                                    'description' => 'Mechanical, electrical, and plumbing coordination with clash detection and system optimization.',
                                ],
                                [
                                    'number'      => '05',
                                    'icon'        => 'cpu',
                                    'title'       => 'Engineering Solutions',
                                    'description' => 'End-to-end project consulting, process optimization, and dedicated offshore engineering center models.',
                                ],
                            ];
                        @endphp

                        @foreach ($services as $index => $service)
                        <div
                            class="wwd-card {{ $index === 0 ? 'is-active' : '' }}"
                            data-card-index="{{ $index }}"
                            aria-label="{{ $service['title'] }}"
                            tabindex="0"
                            role="article"
                        >
                            {{-- Divider top --}}
                            <div class="wwd-card-divider" aria-hidden="true"></div>

                            <div class="wwd-card-inner">
                                {{-- Number --}}
                                <span class="wwd-card-number" aria-hidden="true">{{ $service['number'] }}</span>

                                {{-- Icon --}}
                                <div class="wwd-card-icon" aria-hidden="true">
                                     @switch($service['icon'])
        @case('layers')
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
            </svg>
        @break
        @case('file-text')
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
            </svg>
        @break
        @case('box')
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
        @break
        @case('settings')
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
        @break
        @case('cpu')
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/>
            </svg>
        @break
    @endswitch
                                </div>

                                {{-- Content --}}
                                <div class="wwd-card-content">
                                    <h3 class="wwd-card-title">{{ $service['title'] }}</h3>
                                    <p class="wwd-card-desc">{{ $service['description'] }}</p>
                                </div>

                                {{-- Active indicator arrow --}}
                                <div class="wwd-card-arrow" aria-hidden="true">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>

                            {{-- Last card gets bottom divider --}}
                            @if ($loop->last)
                            <div class="wwd-card-divider" aria-hidden="true"></div>
                            @endif
                        </div>
                        @endforeach

                    </div>{{-- /wwd-cards-list --}}
                </div>{{-- /col right --}}

            </div>{{-- /row --}}
        </div>{{-- /container --}}

    </div>
</section>


{{-- ============================================================
     INLINE ICONS FALLBACK
     If partials/icons approach is not set up yet, replace the
     @include above with inline SVGs. Example shown below as
     reference — delete once icon partials are created.
     ============================================================

Layers (BIM):
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>

File-text (CAD):
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>

Box (Structural):
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>

Settings (MEP):
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>

CPU (Solutions):
<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>

============================================================ --}}
<script>
    /**
 * what-we-do.js
 * ─────────────────────────────────────────────────────────────
 * Scroll-spy: watches cards in #What-We-Do and swaps the
 * sticky image on the left as each card enters the viewport.
 *
 * Also handles click/keyboard activation of cards.
 *
 * Include at end of <body> or via @stack('scripts') in Blade.
 * Requires: NO external libraries — vanilla JS only.
 * ─────────────────────────────────────────────────────────────
 */

(function () {
    'use strict';

    /** ── Config ── **/
    const ACTIVE_CLASS   = 'is-active';
    const IMG_CLASS      = 'wwd-service-img';
    const IMG_ACTIVE     = 'active';
    /** How far into the viewport the card must be before activating (0–1) **/
    const THRESHOLD      = 0.45;
    /** Breakpoint below which sticky + scroll-spy is disabled (matches CSS) **/
    const STICKY_BREAKPOINT = 992;

    /** ── Grab DOM elements ── **/
    const section   = document.getElementById('What-We-Do');
    if (!section) return;   // Section not on this page — bail early

    const cards     = Array.from(section.querySelectorAll('.wwd-card'));
    const images    = Array.from(section.querySelectorAll('.' + IMG_CLASS));

    if (!cards.length || !images.length) return;

    /**
     * activateIndex
     * Switches active card and image to the given index.
     * @param {number} index — zero-based card index
     */
    function activateIndex(index) {
        // Guard: clamp to valid range
        index = Math.max(0, Math.min(index, cards.length - 1));

        cards.forEach(function (card, i) {
            card.classList.toggle(ACTIVE_CLASS, i === index);
            card.setAttribute('aria-current', i === index ? 'true' : 'false');
        });

        images.forEach(function (img, i) {
            img.classList.toggle(IMG_ACTIVE, i === index);
        });
    }

    /** ── IntersectionObserver for scroll-spy ── **/
    var currentActiveIndex = 0;

    var observer = new IntersectionObserver(
        function (entries) {
            // Only run scroll-spy on desktop (sticky layout)
            if (window.innerWidth < STICKY_BREAKPOINT) return;

            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var idx = parseInt(entry.target.dataset.cardIndex, 10);
                    if (!isNaN(idx) && idx !== currentActiveIndex) {
                        currentActiveIndex = idx;
                        activateIndex(idx);
                    }
                }
            });
        },
        {
            threshold: THRESHOLD,
            // Root margin: push trigger point to middle of viewport
            rootMargin: '-15% 0px -35% 0px',
        }
    );

    cards.forEach(function (card) {
        observer.observe(card);
    });

    /** ── Click handler ── **/
    cards.forEach(function (card) {
        card.addEventListener('click', function () {
            var idx = parseInt(card.dataset.cardIndex, 10);
            if (!isNaN(idx)) {
                currentActiveIndex = idx;
                activateIndex(idx);

                // On mobile: smooth scroll to the image so user sees it change
                if (window.innerWidth < STICKY_BREAKPOINT) {
                    var imgWrap = section.querySelector('.wwd-img-wrap');
                    if (imgWrap) {
                        imgWrap.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }
                }
            }
        });
    });

    /** ── Keyboard accessibility (Enter / Space to activate) ── **/
    cards.forEach(function (card) {
        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.click();
            }
        });
    });

    /** ── Init: activate the first card on load ── **/
    activateIndex(0);

})();
</script>


{{-- ===================================================================

     SECTION: WHY MILESTONE   Why Global Clients Choose Milestone — S06
==================================================================== --}}
<section class="why-milestone-section">
    <div class="why-milestone-container">

        <!-- Heading -->
        <div class="why-milestone-header">
            <span class="why-milestone-tag">WHY MILESTONE</span>
            <h2 class="why-milestone-title">
                Why Global Clients Choose <br> Milestone
            </h2>
            <p class="why-milestone-desc">
                Six reasons why engineering and construction firms across four continents trust
                Milestone PLM to deliver their most demanding projects.
            </p>
        </div>

        <!-- Cards -->
        <div class="why-milestone-grid">

            <!-- Card 1 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                <h3>Experienced Engineering Team</h3>
                <p>100+ certified CAD/BIM engineers with domain expertise spanning 20+ years of global project delivery.</p>
            </div>

            <!-- Card 2 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
</div>
                <h3>Scalable Offshore Resources</h3>
                <p>Flexible team models — from a single specialist to a full offshore engineering center.</p>
            </div>

            <!-- Card 3 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
</div>
                <h3>Cost-Effective Delivery</h3>
                <p>Achieve up to 60% cost savings without compromising quality or turnaround time.</p>
            </div>

            <!-- Card 4 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
</div>
                <h3>Secure Data Handling</h3>
                <p>ISO 27001-aligned protocols, NDA workflows, and encrypted file transfer.</p>
            </div>

            <!-- Card 5 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
</div>
                <h3>ISO Standard Processes</h3>
                <p>ISO 9001-certified quality management ensures every deliverable meets standards.</p>
            </div>

            <!-- Card 6 -->
            <div class="why-milestone-card">
                <div class="why-milestone-icon">                <div class="why-milestone-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
</div>
                <h3>Advanced Engineering Software</h3>
                <p>Revit, AutoCAD, Tekla, Navisworks, and more leading tools.</p>
            </div>

        </div>

    </div>
</section>
{{-- ===================================================================

     SECTION: Delivery Model  — S07
==================================================================== --}}
  {{-- ============================================================
     Delivery Model — Horizontal Sticky Scrollytelling
     The section height = sticky panel height × (TOTAL steps + 1)
     No blank page gap. Next section starts right after.
     Usage: @include('components.delivery-model')
     ============================================================ --}}

<style>
@font-face {
    font-family: 'Anklepants';
    src: local('Anklepants');
    /* src: url('/fonts/Anklepants.woff2') format('woff2'); */
    font-display: swap;
}

/* ── Tokens ── */
:root {
    --dm-primary      : #EC6502;
    --dm-bg           : #1e1e1e;
    --dm-text         : #ffffff;
    --dm-muted        : #9a9a9a;
    --dm-secondary    : #6F6F6F;
    --dm-border       : #3a3a3a;
    --dm-font-heading : 'Arial', sans-serif;
    --dm-font-sub     : 'Anklepants', 'Arial', sans-serif;
    --dm-ease         : cubic-bezier(0.4, 0, 0.2, 1);
    --dm-panel-height : 0px; /* set by JS */
}

/* ─────────────────────────────────────────────
   OUTER SECTION
   Height = panel-height × (steps + 1)
   This gives scroll room without blank space.
   The sticky panel fills the visible area.
───────────────────────────────────────────── */
.delivery-model-section {
    background: var(--dm-bg);
    position: relative;
    /* JS sets: height = panelH * 6  (1 for header view + 5 steps) */
}

/* ── Sticky Panel ── */
.delivery-model-sticky-panel {
    position: sticky;
    top: 0;
    width: 100%;
    background: var(--dm-bg);
    z-index: 10;
    padding: 60px 0 72px;
    /* No overflow-hidden so box-shadow on badges isn't clipped */
}

/* ─────────────────────────────────────────────
   HEADER
───────────────────────────────────────────── */
.delivery-model-header-row {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 52px;
}
.delivery-model-header-left  { flex: 0 0 auto; }
.delivery-model-header-right { flex: 0 0 280px; text-align: right; }

.delivery-model-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--dm-primary);
    font-family: var(--dm-font-heading);
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    margin-bottom: 12px;
}
.delivery-model-label::before {
    content: '';
    width: 26px; height: 2px;
    background: var(--dm-primary);
    flex-shrink: 0;
}
.delivery-model-heading {
    font-family: var(--dm-font-heading);
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 800;
    color: var(--dm-text);
    line-height: 1.15;
    margin: 0;
}
.delivery-model-desc {
    font-family: var(--dm-font-sub);
    color: var(--dm-muted);
    font-size: 0.9rem;
    line-height: 1.7;
    margin: 0;
}

/* ─────────────────────────────────────────────
   HORIZONTAL TIMELINE RAIL
───────────────────────────────────────────── */
.delivery-model-rail {
    position: relative;
    display: flex;
    align-items: flex-start;
}

/* Grey baseline */
.delivery-model-rail::before {
    content: '';
    position: absolute;
    top: 22px; left: 0; right: 0;
    height: 1px;
    background: var(--dm-border);
    z-index: 0;
}

/* Orange progress fill */
.delivery-model-progress {
    position: absolute;
    top: 22px; left: 0;
    height: 1px; width: 0%;
    background: var(--dm-primary);
    z-index: 1;
    transition: width 0.55s var(--dm-ease);
}

/* ── Step ── */
.delivery-model-step {
    flex: 1;
    position: relative;
    z-index: 2;
    padding-right: 24px;
}
.delivery-model-step:last-child { padding-right: 0; }

/* Badge */
.delivery-model-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px; height: 44px;
    border: 1.5px solid var(--dm-border);
    background: var(--dm-bg);
    color: var(--dm-secondary);
    font-family: var(--dm-font-heading);
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    margin-bottom: 20px;
    transition:
        border-color 0.4s var(--dm-ease),
        color        0.4s var(--dm-ease),
        background   0.4s var(--dm-ease),
        box-shadow   0.4s var(--dm-ease);
}

/* Title */
.delivery-model-step-title {
    font-family: var(--dm-font-heading);
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--dm-secondary);
    margin: 0 0 8px;
    transition: color 0.4s var(--dm-ease);
}

/* Body */
.delivery-model-step-body {
    font-family: var(--dm-font-sub);
    font-size: 0.8rem;
    color: var(--dm-secondary);
    line-height: 1.65;
    opacity: 0.55;
    transition: color 0.4s var(--dm-ease), opacity 0.4s var(--dm-ease);
}

/* ── Active ── */
.delivery-model-step.is-active .delivery-model-badge {
    border-color : var(--dm-primary);
    color        : var(--dm-primary);
    background   : rgba(236,101,2,0.08);
    box-shadow   : 0 0 0 3px rgba(236,101,2,0.14);
}
.delivery-model-step.is-active .delivery-model-step-title { color: var(--dm-text); }
.delivery-model-step.is-active .delivery-model-step-body  { color: var(--dm-muted); opacity: 1; }

/* ─────────────────────────────────────────────
   RESPONSIVE ≤ 991px
───────────────────────────────────────────── */
@media (max-width: 991.98px) {
    .delivery-model-sticky-panel  { padding: 40px 0 56px; }
    .delivery-model-header-row    { flex-direction: column; align-items: flex-start; gap: 12px; margin-bottom: 36px; }
    .delivery-model-header-right  { flex: none; text-align: left; }
    .delivery-model-step          { padding-right: 10px; }
    .delivery-model-step-title    { font-size: 0.75rem; }
    .delivery-model-step-body     { display: none; }
}

/* ─────────────────────────────────────────────
   RESPONSIVE ≤ 575px  → vertical
───────────────────────────────────────────── */
@media (max-width: 575.98px) {
    .delivery-model-rail          { flex-direction: column; gap: 0; }
    .delivery-model-rail::before  { top: 0; bottom: 0; left: 21px; right: auto; width: 1px; height: 100%; }
    .delivery-model-progress      {
        top: 0; left: 21px;
        width: 1px !important;
        height: 0%;
        transition: height 0.55s var(--dm-ease);
    }
    .delivery-model-step          { display: flex; align-items: flex-start; gap: 16px; padding-right: 0; padding-bottom: 28px; flex: none; width: 100%; }
    .delivery-model-step:last-child { padding-bottom: 0; }
    .delivery-model-badge         { margin-bottom: 0; flex-shrink: 0; }
    .delivery-model-step-title    { white-space: normal; font-size: 0.9rem; }
    .delivery-model-step-body     { display: block; }
}
</style>

{{-- ========================  HTML  ======================== --}}
<section class="delivery-model-section" id="delivery-model">

    <div class="delivery-model-sticky-panel" id="dm-sticky-panel">
        <div class="container">

            {{-- Header --}}
            <div class="delivery-model-header-row">
                <div class="delivery-model-header-left">
                    <p class="delivery-model-label">Delivery Model</p>
                    <h2 class="delivery-model-heading">How We Deliver Projects</h2>
                </div>
                <div class="delivery-model-header-right">
                    <p class="delivery-model-desc">
                        A structured five-phase engagement model designed for
                        clarity, control, and consistent quality.
                    </p>
                </div>
            </div>

            {{-- Horizontal Timeline --}}
            <div class="delivery-model-rail" id="dm-rail">
                <div class="delivery-model-progress" id="dm-progress" aria-hidden="true"></div>

                <div class="delivery-model-step" data-step="1">
                    <div class="delivery-model-badge">01</div>
                    <h3 class="delivery-model-step-title">Consultation</h3>
                    <p class="delivery-model-step-body">Understand project scope, timeline, and technical requirements.</p>
                </div>

                <div class="delivery-model-step" data-step="2">
                    <div class="delivery-model-badge">02</div>
                    <h3 class="delivery-model-step-title">Project Planning</h3>
                    <p class="delivery-model-step-body">Define deliverables, assign specialists, and establish milestones.</p>
                </div>

                <div class="delivery-model-step" data-step="3">
                    <div class="delivery-model-badge">03</div>
                    <h3 class="delivery-model-step-title">Engineering Execution</h3>
                    <p class="delivery-model-step-body">Expert teams produce precise, standards-compliant deliverables.</p>
                </div>

                <div class="delivery-model-step" data-step="4">
                    <div class="delivery-model-badge">04</div>
                    <h3 class="delivery-model-step-title">Quality Assurance</h3>
                    <p class="delivery-model-step-body">Multi-tier review process ensures accuracy before delivery.</p>
                </div>

                <div class="delivery-model-step" data-step="5">
                    <div class="delivery-model-badge">05</div>
                    <h3 class="delivery-model-step-title">Delivery</h3>
                    <p class="delivery-model-step-body">Structured handoff with full documentation and post-delivery support.</p>
                </div>
            </div>{{-- /.delivery-model-rail --}}

        </div>{{-- /.container --}}
    </div>{{-- /.delivery-model-sticky-panel --}}

</section>

{{-- ========================  JS  ======================== --}}
<script>
(function () {
    'use strict';

    const TOTAL    = 5;
    const section  = document.getElementById('delivery-model');
    const panel    = document.getElementById('dm-sticky-panel');
    const steps    = document.querySelectorAll('.delivery-model-step');
    const progress = document.getElementById('dm-progress');
    const isMobile = () => window.innerWidth < 576;

    /* ── Set section height = panelHeight × (TOTAL + 1)
       This gives exactly TOTAL scroll "ticks" of panelHeight each,
       so the next section starts immediately after — no blank gap. ── */
    function setSectionHeight() {
        const panelH = panel.offsetHeight;
        section.style.height = (panelH * (TOTAL + 1)) + 'px';
    }

    /* ── Activate steps 1…n ── */
    function activate(n) {
        steps.forEach((s, i) => s.classList.toggle('is-active', i < n));

        const pct = n <= 0     ? 0
                  : n >= TOTAL ? 100
                  : ((n - 0.5) / TOTAL) * 100;

        if (isMobile()) {
            progress.style.width  = '1px';
            progress.style.height = pct + '%';
        } else {
            progress.style.width  = pct + '%';
            progress.style.height = '1px';
        }
    }

    /* ── Scroll handler ── */
    function onScroll() {
        const rect     = section.getBoundingClientRect();
        const scrolled = -rect.top;                       /* px past section top */
        const panelH   = panel.offsetHeight;
        /* Each step activates after scrolling one panelHeight inside section */
        const active   = Math.min(TOTAL, Math.max(1, Math.ceil(scrolled / panelH)));
        activate(active);
    }

    /* ── Init & listeners ── */
    setSectionHeight();
    activate(1);
    onScroll();

    window.addEventListener('scroll', onScroll,         { passive: true });
    window.addEventListener('resize', () => {
        setSectionHeight();
        onScroll();
    }, { passive: true });

}());
</script>
</section>
@endsection