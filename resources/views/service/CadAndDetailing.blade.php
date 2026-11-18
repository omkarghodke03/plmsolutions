@extends('layouts.app')
@php
    $primaryKeyword = 'CAD Drafting Services';
@endphp
<meta name="description" content="We offer CAD Drafting Services with accurate drawing support. Save 57% on outsourcing. Trusted by global clients for speed, quality, and precision. Contact Us.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.milestonetech.net/engineering-solutions/mechanical-design/cad-and-detailing-services">
@section('title', 'CAD Drafting Services | Save 57% on CAD Outsourcing')
@push('styles')
    @vite(['resources/css/service/service.css']) 
    @vite(['resources/css/aboutus.css']) 
@endpush

<style>
    .bim-sidebar__cta-btn {
    border-radius: 20px;
    font-weight: 500 !important;
}
.bim-sub-block {
    border-radius: 20px;
}

.bim-stats{
    border-radius: 20px;
 }
 .bim-tech-meta {
     border-radius: 20px;
 }
 .bim-tech-card {
     border-radius: 10px;
 }
 .bim-tech-meta__tags {
     font-size:15px !important;
     display: flex;
     justify-content: center;
    align-items: center;
 }
 
.plm-feature-box {
    display: flex;
    /*justify-content: space-between;*/
    align-items: center;
    gap:25px;
}
 
 @media (max-width: 575.98px) {
     
    .plm-milestone-title {
         font-size:30px !important;
    }
    .plm-milestone-stats {
        margin: 10px 10px 0 !important; 
    }
    .plm-stat-card span {
       font-size: 32px; 
    }
    .plm-stat-card span {
       font-size: 32px !important;
        
    }
    .bim-tagwhyplm {
        padding-top:20px !important;
    }
}
@media (max-width: 767px) {
  
    .row {
        width: 100%;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-left: 0px;
        margin-right: 0px;
        padding-left: 0px;
        padding-right: 0px;
    }
}

</style>
@section('content')
        <section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/Architectural-Services.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="https://www.milestonetech.net/">Home</a>
                    <span>›</span>
                    <a href="/engineering-solutions">Engineering Solutions</a>
                    <span>›</span>
                    <a href="/engineering-solutions/mechanical-design">Mechanical Design</a>
                    <span>›</span>
                    <a class="active" href="/engineering-solutions/mechanical-design/cad-and-detailing-services">CAD Drafting & Detailing</a>
                </div>
                <div class="abouthero-tag">
                    Mechanical Design Services
                </div>
                <h1 class="abouthero-title">
                    CAD Drafting and Detailing Services
                </h1>
                <p class="abouthero-desc">
                    Develop accurate, manufacturing-ready engineering documentation with professional CAD Drafting and Detailing Services covering 2D drafting, 3D detailing, fabrication drawings, assembly documentation, and production support.
                </p>
                <div class="abouthero-buttons">
                    <a href="/contact" class="abouthero-btn-primary">
                        GET A QUOTE
                        <span>→</span>
                    </a>
                    <a href="#" class="abouthero-btn-outline">
                        DOWNLOAD BROCHURE
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- the Building Information Modeling s02-->

{{-- ── PAGE WRAPPER ──────────────────────────────────────── --}}
<div class="bim-page" id="bim-page">

    {{-- ── MOBILE HORIZONTAL NAV (visible < lg) ──────────── --}}
    <nav class="bim-mnav d-lg-none" id="bim-mnav" aria-label="Jump to section">
        <div class="bim-mnav__track">
            <a class="bim-mnav__tab active" href="#bim-overview"      data-target="bim-overview">Overview</a>
            <a class="bim-mnav__tab"        href="#bim-capabilities"  data-target="bim-capabilities">Capabilities</a>
            <a class="bim-mnav__tab"        href="#bim-technologies"  data-target="bim-technologies">Technologies</a>
            <a class="bim-mnav__tab"        href="#bim-industries"    data-target="bim-industries">Industries</a>
            <a class="bim-mnav__tab"        href="#bim-process"       data-target="bim-process">Our Process</a>
            <a class="bim-mnav__tab"        href="#bim-faq"           data-target="bim-faq">FAQ</a>
        </div>
    </nav>

    <div class="container-xxl">
        <div class="bim-layout">

            {{-- ══════════════════════════════════════════
                 SIDEBAR  (hidden on mobile)
            ══════════════════════════════════════════ --}}
            <aside class="bim-sidebar d-none d-lg-flex" aria-label="Section navigation">
                <nav class="bim-sidebar__nav">
                    <ul class="bim-sidebar__list" role="list">

                        @php
                        $navItems = [
                            ['id'=>'bim-overview',      'label'=>'Overview',     'icon'=>'grid'],
                            ['id'=>'bim-capabilities',  'label'=>'Capabilities', 'icon'=>'list'],
                            ['id'=>'bim-technologies',  'label'=>'Technologies', 'icon'=>'gear'],
                            ['id'=>'bim-case-studies',  'label'=>'Case Studies', 'icon'=>'book'],
                            ['id'=>'bim-industries',    'label'=>'Industries',   'icon'=>'building'],
                            ['id'=>'bim-process',       'label'=>'Our Process',  'icon'=>'flow'],
                            ['id'=>'bim-faq',           'label'=>'FAQ',          'icon'=>'help'],
                        ];
                        @endphp

                        @foreach ($navItems as $nav)
                        <li class="bim-sidebar__item">
                            <a class="bim-sidebar__link {{ $loop->first ? 'active' : '' }}"
                               href="#{{ $nav['id'] }}"
                               data-target="{{ $nav['id'] }}">
                                <span class="bim-sidebar__icon" aria-hidden="true">
                                    @if($nav['icon'] === 'grid')
                                        <svg viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="11" y="2" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="2" y="11" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/><rect x="11" y="11" width="7" height="7" rx="1" stroke="currentColor" stroke-width="1.5"/></svg>
                                    @elseif($nav['icon'] === 'list')
                                        <svg viewBox="0 0 20 20" fill="none"><path d="M4 6h12M4 10h8M4 14h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    @elseif($nav['icon'] === 'gear')
                                        <svg viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="2.5" stroke="currentColor" stroke-width="1.5"/><path d="M10 2v2M10 16v2M2 10h2M16 10h2M4.22 4.22l1.42 1.42M14.36 14.36l1.42 1.42M4.22 15.78l1.42-1.42M14.36 5.64l1.42-1.42" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    @elseif($nav['icon'] === 'book')
                                        <svg viewBox="0 0 20 20" fill="none"><path d="M3 3.5C3 3 3.5 2.5 4.5 2.5H10V17H4.5C3.5 17 3 16.5 3 16V3.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M17 3.5C17 3 16.5 2.5 15.5 2.5H10V17H15.5C16.5 17 17 16.5 17 16V3.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M10 2.5V17" stroke="currentColor" stroke-width="1.5"/></svg>
                                    @elseif($nav['icon'] === 'building')
                                        <svg viewBox="0 0 20 20" fill="none"><path d="M3 17V8l7-5 7 5v9M8 17v-5h4v5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    @elseif($nav['icon'] === 'flow')
                                        <svg viewBox="0 0 20 20" fill="none"><circle cx="10" cy="4"  r="2" stroke="currentColor" stroke-width="1.5"/><circle cx="10" cy="16" r="2" stroke="currentColor" stroke-width="1.5"/><path d="M10 6v8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    @else
                                        <svg viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M10 14v-1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M10 11c0-2 3-2 3-4a3 3 0 0 0-6 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    @endif
                                </span>
                                <span class="bim-sidebar__label">{{ $nav['label'] }}</span>
                                <span class="bim-sidebar__arrow" aria-hidden="true">→</span>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </nav>

                <div class="bim-sidebar__cta">
                   <a
    href="{{ url('/contact') }}"
    class="bim-sidebar__cta-btn"
    style="text-decoration: none;"
>
    GET A QUOTE
</a>
                    <a  class="bim-sidebar__cta-contact" href="{{ $geoData['tel'] }}" style="color: #6f6f6f; text-decoration: none;"><svg width="13" height="13" viewBox="0 0 20 20" fill="none" aria-hidden="true">
    <path d="M5.5 2.5h2l1 4-1.5 1.5a11 11 0 0 0 5 5L13.5 11l4 1v2c0 1.1-.9 2-2 2C9.7 16 4 10.3 4 4.5c0-1.1.9-2 1.5-2Z"
          stroke="currentColor"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"/>
</svg>
    {{ $geoData['phone'] }}
</a>
                    <a href="mailto:info@milestontech.net" class="bim-sidebar__cta-contact">
                        <svg width="13" height="13" viewBox="0 0 20 20" fill="none" aria-hidden="true"><rect x="2" y="4" width="16" height="12" rx="1" stroke="currentColor" stroke-width="1.5"/><path d="M2 4l8 7 8-7" stroke="currentColor" stroke-width="1.5"/></svg>
                        info@milestontech.net
                    </a>
                </div>
            </aside>

            {{-- ══════════════════════════════════════════
                 CONTENT AREA
            ══════════════════════════════════════════ --}}
            <main class="bim-content" role="main">

                {{-- ─────────────────────────────────────
                     §1 OVERVIEW
                ───────────────────────────────────────── --}}
                <section class="bim-sec" id="bim-overview" aria-label="Overview">

                    <div class="bim-tag bim-anim bim-anim--down">
                        <span class="bim-tag__bar" aria-hidden="true"></span>
                        CAD Drafting &amp; Detailing
                    </div>

                    <div class="row g-4 align-items-center mt-1">
                        <div class="col-12 col-md-7 bim-anim bim-anim--center">
                            <h2 class="bim-h2">
                                <em class="bim-orange">CAD Drafting </em>and<br>
                                <em class="bim-orange">Detailing </em>Services
                            </h2>
                            <p class="bim-body mt-3">
                              With over two decades of engineering experience, MILESTONE provides professional CAD Drafting and Detailing Services for mechanical components, machinery, equipment, assemblies, and manufacturing requirements. Our engineering team develops accurate 2D drawings, detailed 3D CAD models, fabrication drawings, assembly documentation, and production-ready engineering details from sketches, specifications, reference files, and existing design data.
                            </p>
                            <p class="bim-body mt-2">
                              We support engineering and manufacturing teams across automotive, industrial equipment, heavy engineering, machinery, precision manufacturing, medical devices, and consumer products. By combining CAD expertise with practical engineering knowledge, we create clear, consistent, and manufacturing-ready documentation that supports design development, fabrication, assembly, inspection, and production.
                            </p>
                        </div>
                        <div class="col-12 col-md-5 bim-anim bim-anim--center">
                            <div class="bim-img-frame">
                                <img src="{{ asset('images/infrostrucre-bakcground.png') }}"
                                     alt="Architectural BIM blueprint"
                                     class="img-fluid"
                                     loading="lazy" decoding="async">
                                <div class="bim-img-frame__badge" aria-hidden="true">
                                    <span>CAD</span>
                                    <small>Ready</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Stats --}}
                    <div class="bim-stats bim-anim bim-anim--up mt-5">
                        <div class="bim-stats__item"><strong>22+ Years</strong><span>Engineering Experience</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>2D &amp; 3D</strong><span>CAD Drafting &amp; Modeling</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>Multi-Industry</strong><span>Engineering Expertise</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>Production Ready</strong><span>Drawings &amp; Documentation</span></div>
                    </div>

                    {{-- Sub block --}}
                    <div class="bim-sub-block bim-anim bim-anim--up mt-5">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                            <h3 class="bim-h3 mb-0">CAD Drafting and Detailing Services at Milestone PLM</h3> 
                            <span class="bim-badge">Accurate CAD Documentation</span>
                        </div>
                        <div class="bim-sub-block__line" aria-hidden="true"></div>
                        <p class="bim-body mt-3">
                           Our CAD drafting and detailing team develops accurate 2D drawings, detailed CAD documentation, and 3D design data for engineering and manufacturing requirements. We convert sketches, PDFs, markups, existing drawings, and design inputs into structured CAD deliverables while maintaining dimensional accuracy, drawing standards, and project specifications.
                        </p>
                        <div class="row g-2 mt-2">
                            @foreach ([
                                '2D CAD drafting and detailed engineering drawings',
                                '3D CAD modeling and design documentation',
                                'PDF, sketch, and legacy drawing conversion to CAD',
                                'Manufacturing and fabrication drawings',
                                'Assembly drawings, detail drawings, and BOM documentation',
                                'Dimensioning, tolerancing, annotations, and drawing detailing',
                                'Design revisions and CAD drawing updates',
                                'As-built drawings and engineering documentation'
                            ] as $pt)
                            <div class="col-12 col-sm-6">
                                <div class="bim-check">
                                    <span class="bim-check__icon" aria-hidden="true">
                                        <svg viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="1.5"/><path d="M6 10l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </span>
                                    {{ $pt }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </section>

                <hr class="bim-hr" aria-hidden="true">

                {{-- ─────────────────────────────────────
                     §2 CAPABILITIES
                ───────────────────────────────────────── --}}
<section class="bim-sec" id="bim-capabilities" aria-label="Capabilities">

    <div class="bim-tag bim-anim bim-anim--down">
        <span class="bim-tag__bar" aria-hidden="true"></span>
        What We Deliver
    </div>

    <h2 class="bim-h2 mt-2 bim-anim bim-anim--down" style="--bim-delay:80ms">
        CAD Drafting and Detailing Services -
        <em class="bim-orange">Key Capabilities</em>
    </h2>

    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
        Delivering accurate CAD drafting and engineering detailing solutions for manufacturing,
        fabrication, assembly, product development, and engineering documentation requirements.
    </p>

    @php
    $caps = [
        [
            'num'=>'01',
            'title'=>'2D CAD Drafting',
            'desc'=>'Accurate 2D engineering drawings developed from sketches, specifications, existing drawings, and design inputs for manufacturing and documentation.',
            'items'=>[
                'Mechanical Detail Drawings',
                'General Arrangement Drawings',
                'Component Drawings',
                'Assembly Drawings',
                'Sectional & Detail Views',
                'Engineering Drawing Updates'
            ]
        ],
        [
            'num'=>'02',
            'title'=>'3D CAD Modeling & Detailing',
            'desc'=>'Detailed 3D CAD models and engineering details for components, assemblies, machinery, and equipment used in design and manufacturing workflows.',
            'items'=>[
                '3D Part Modeling',
                'Assembly Modeling',
                'Mechanical Component Modeling',
                'Design Modification',
                'Model-Based Documentation',
                '3D Design Development'
            ]
        ],
        [
            'num'=>'03',
            'title'=>'Manufacturing & Fabrication Drawings',
            'desc'=>'Production-ready drawings with dimensions, tolerances, material information, fabrication details, and manufacturing requirements.',
            'items'=>[
                'Manufacturing Drawings',
                'Fabrication Drawings',
                'Sheet Metal Drawings',
                'Weldment Details',
                'Flat Pattern Development',
                'BOM & Part Information'
            ]
        ],
        [
            'num'=>'04',
            'title'=>'Assembly & Engineering Detailing',
            'desc'=>'Clear assembly and engineering documentation that supports manufacturing, fabrication, inspection, installation, and production activities.',
            'items'=>[
                'Assembly Documentation',
                'Exploded Views',
                'Detail Drawings',
                'Parts Identification',
                'Dimensioning & Tolerancing',
                'Engineering Documentation'
            ]
        ],
    ];
    @endphp

    <div class="row g-3 mt-2">

        @foreach ($caps as $cap)

        <div class="col-12 col-md-6 bim-anim bim-anim--up"
             style="--bim-delay:{{ $loop->index * 80 }}ms">

            <div class="bim-cap-card">

                <div class="bim-cap-card__top">
                    <span class="bim-cap-card__num">{{ $cap['num'] }}</span>
                    <span class="bim-cap-card__line" aria-hidden="true"></span>
                </div>

                <h3 class="bim-cap-card__title">
                    {{ $cap['title'] }}
                </h3>

                <p class="bim-cap-card__desc">
                    {{ $cap['desc'] }}
                </p>

                <ul class="bim-cap-card__list" role="list">

                    @foreach($cap['items'] as $item)

                    <li>
                        <span class="bim-cap-card__dot" aria-hidden="true"></span>
                        {{ $item }}
                    </li>

                    @endforeach

                </ul>

            </div>

        </div>

        @endforeach

    </div>

</section>

                <hr class="bim-hr" aria-hidden="true">

                {{-- ─────────────────────────────────────
                     §3 TECHNOLOGIES
                ───────────────────────────────────────── --}}
                <section class="bim-sec" id="bim-technologies" aria-label="Technologies">

                    <div class="bim-tag bim-anim bim-anim--down">
                        <span class="bim-tag__bar" aria-hidden="true"></span>
                        Tools &amp; Software
                    </div>
                    <h2 class="bim-h2 mt-2 bim-anim bim-anim--down" style="--bim-delay:80ms">
                        CAD Technologies We <em class="bim-orange">Work With</em>
                    </h2>
                    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
                        We use established CAD and engineering design software to create accurate 2D drawings, detailed 3D models, assemblies, fabrication documentation, and production-ready engineering deliverables.
                    </p>

                    <!--<div class="bim-tech-meta bim-anim bim-anim--up mt-4">-->
                    <!--    <div class="bim-tech-meta__stat">-->
                    <!--        <strong>8</strong><span>Platforms</span>-->
                    <!--    </div>-->
                    <!--    <div class="bim-tech-meta__sep" aria-hidden="true"></div>-->
                    <!--    <div class="bim-tech-meta__stat">-->
                    <!--        <strong>8</strong><span>Disciplines</span>-->
                    <!--    </div>-->
                    <!--    <div class="bim-tech-meta__sep" aria-hidden="true"></div>-->
                    <!--    <p class="bim-tech-meta__tags">-->
                    <!--        Modeling · Coordination · Collaboration · Documentation · Automation · Scan to BIM · Review · QA-->
                    <!--    </p>-->
                    <!--</div>-->

                    @php
                        $techs = [
                                [ 'label' => '', 'image' => 'service-img/tools/es/autocad-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/solidworks-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/nx-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/creo-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/inventor-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/ansys-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/catia-software.webp' ],
                                [ 'label' => '', 'image' => 'service-img/tools/es/revit-software.webp' ],
                                 ];
                    @endphp

                    <div class="row g-3 mt-2">
                        @foreach ($techs as $t)
                       <div class="col-6 col-sm-4 col-md-3 bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 55 }}ms">
                    <div class="bim-tech-card">
                         <div class="bim-tech-card__icon">
                            <img src="{{ asset($t['image']) }}" alt="{{ $t['label'] }}" class="bim-tech-card__img"></div>
                            <span class="bim-tech-card__label">{{ $t['label'] }} </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <hr class="bim-hr" aria-hidden="true">

                 {{-- ─────────────────────────────────────
                     §4 case study 
                ───────────────────────────────────────── --}}
<section class="bim-sec bim-case-studies" id="bim-case-studies">
    @php
        $caseStudies = [
            [
                'slug'    => 'highway-cable-stay-bridge-steel-detailing',
                'tag'     => 'Infrastructure',
                'title'   => 'Highway Cable-Stay Bridge — Steel Detailing',
                'excerpt' => 'Full LOD 400 MEP & structural clash detection for a 3-level underground station, resolving 1,200+ clashes before...',
                'image'   => asset('images/California-Residential-Building-Design-BIMModeling.jpg'),
                'url'     => url('/case-studies/highway-cable-stay-bridge-steel-detailing'),
            ],
            [
                'slug'    => 'data-centre-mep-coordination-fast-track',
                'tag'     => 'Commercial',
                'title'   => 'Data Centre MEP Coordination — Fast-Track',
                'excerpt' => 'Fast-track MEP coordination and clash resolution for a high-performance data centre',
                'image'   => asset('service-img/hospital-service.jpg'),
                'url'     => url('/case-studies/data-centre-mep-coordination-fast-track'),
            ],
            [
                'slug'    => 'design-support-for-manufacturing-sheet-metal-fabrication',
                'tag'     => 'Sheet Metal Fabrication',
                'title'   => 'End-to-End Product Development & Manufacturing Engineering Support',
                'excerpt' => '48 MW hyperscale data centre: full MEP, structural, and architectural disciplines federated in a single Revit...',
                'image'   => asset('images/Manufacturing-Ready-Assembly-Engineering-UG-NX-Documentation.jpg'),
                'url'     => url('/case-studies/design-support-for-manufacturing-sheet-metal-fabrication'),
            ],
        ];
    @endphp

    <div class="container">

        <div class="bim-cs__header">
            <div class="bim-cs__heading">

                <div class="bim-cs__eyebrow">
                    <span class="bim-cs__eyebrow-line"></span>
                    CASE STUDIES
                </div>

                <h2 class="bim-cs__title">
                    CAD Drafting &amp; Detailing <span class="text-accent">in Action</span>
                </h2>

                <p class="bim-cs__desc">
                    Explore engineering projects where accurate CAD drafting, detailing, and production documentation supported design development, fabrication, manufacturing, and assembly requirements.
                </p>

            </div>

            <a href="{{ url('/case-studies') }}" class="bim-cs__viewall">
                VIEW ALL <span aria-hidden="true">→</span>
            </a>
        </div>

        <div class="bim-cs__grid">

            @foreach ($caseStudies as $cs)

                <a href="{{ $cs['url'] }}"
                   class="bim-cs__card"
                   style="background-image:url('{{ $cs['image'] }}')">

                    <div class="bim-cs__overlay"></div>

                    <span class="bim-cs__tag">
                        {{ $cs['tag'] }}
                    </span>

                    <div class="bim-cs__content">

                        <h3 class="bim-cs__card-title">
                            {{ $cs['title'] }}
                        </h3>

                        <p class="bim-cs__card-desc">
                            {{ $cs['excerpt'] }}
                        </p>

                    </div>

                </a>

            @endforeach

        </div>

    </div>
</section>

                <hr class="bim-hr" aria-hidden="true">
                {{-- ─────────────────────────────────────
                     §4 INDUSTRIES
                ───────────────────────────────────────── --}}
<section class="bim-sec" id="bim-industries" aria-label="Industries">

    <div class="bim-tag bim-anim bim-anim--down">
        <span class="bim-tag__bar" aria-hidden="true"></span>
        Sectors We Serve
    </div>

    <h2 class="bim-h2 mt-2 bim-anim bim-anim--down" style="--bim-delay:80ms">
        Industries We <em class="bim-orange">Work In</em>
    </h2>

    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
        Our CAD Drafting and Detailing Services support diverse engineering and manufacturing
        requirements across different industries.
    </p>

    @php
    $industries = [
        [
            'num'=>'01',
            'title'=>'Automotive',
            'desc'=>'Product design, engineering components, fixtures, tooling, and manufacturing-ready solutions for automotive applications.',
            'image'=>'service-img/industries/automotive.webp'
        ],
        [
            'num'=>'02',
            'title'=>'Heavy Engineering',
            'desc'=>'Engineering design for complex equipment, assemblies, machinery, and heavy-duty industrial applications.',
            'image'=>'service-img/industries/heavy-engineering.webp'
        ],
        [
            'num'=>'03',
            'title'=>'Industrial & Heavy Equipment',
            'desc'=>'Product development and engineering design for industrial equipment, machinery, components, and heavy equipment.',
            'image'=>'service-img/industries/industrial-and-heavy-equipment.webp'
        ],
        [
            'num'=>'04',
            'title'=>'Medical Devices',
            'desc'=>'Precision product design for medical devices, equipment, enclosures, components, and specialized applications.',
            'image'=>'service-img/industries/medical-devices.webp'
        ],
        [
            'num'=>'05',
            'title'=>'Machinery & Robotics',
            'desc'=>'Custom machinery, robotic systems, automation equipment, and engineered components for production environments.',
            'image'=>'service-img/industries/machinery-and-robotics.webp'
        ],
        [
            'num'=>'06',
            'title'=>'Precision Manufacturing',
            'desc'=>'High-accuracy product designs, fixtures, tooling, and components developed for precision manufacturing requirements.',
            'image'=>'service-img/industries/precision-manufacturing.webp'
        ],
        [
            'num'=>'07',
            'title'=>'Consumer Products',
            'desc'=>'Product design and development for consumer products, plastic components, enclosures, prototypes, and production.',
            'image'=>'service-img/industries/consumer-products.webp'
        ],
        [
            'num'=>'08',
            'title'=>'Electric Enclosure',
            'desc'=>'Engineering and sheet metal design for electrical enclosures, cabinets, panels, and related assemblies.',
            'image'=>'service-img/industries/electric-enclosure.webp'
        ],
        [
            'num'=>'09',
            'title'=>'Transformer',
            'desc'=>'Design support for transformer components, sheet metal parts, enclosures, assemblies, and manufacturing documentation.',
            'image'=>'service-img/industries/transformer.webp'
        ],
    ];
    @endphp

    <div class="row g-3 mt-2">
        @foreach ($industries as $ind)
        <div class="col-12 col-sm-6 col-lg-4 bim-anim bim-anim--up"
             style="--bim-delay:{{ $loop->index * 80 }}ms">

            <div class="bim-ind-card">

                <div class="bim-ind-card__img">
                    <img src="{{ asset($ind['image']) }}"
                         alt="{{ $ind['title'] }}"
                         loading="lazy"
                         decoding="async">

                    <div class="bim-ind-card__overlay" aria-hidden="true"></div>

                    <div class="bim-ind-card__badges">
                        <span class="bim-ind-card__sq" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none">
                                <path d="M3 17V8l7-5 7 5v9M8 17v-5h4v5"
                                      stroke="#fff"
                                      stroke-width="1.5"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <span class="bim-ind-card__num">{{ $ind['num'] }}</span>
                    </div>
                </div>

                <div class="bim-ind-card__body">
                    <h3 class="bim-ind-card__title">{{ $ind['title'] }}</h3>
                    <p class="bim-ind-card__desc">{{ $ind['desc'] }}</p>
                </div>

            </div>

        </div>
        @endforeach
    </div>

</section>

                <hr class="bim-hr" aria-hidden="true">

                {{-- ─────────────────────────────────────
                     §5 OUR PROCESS
                ───────────────────────────────────────── --}}
<section class="bim-sec" id="bim-process" aria-label="Our Process">

    <div class="bim-tag bim-anim bim-anim--down">
        <span class="bim-tag__bar" aria-hidden="true"></span>
        How We Work
    </div>

    <h2 class="bim-h2 mt-2 bim-anim bim-anim--down" style="--bim-delay:80ms">
        Our <em class="bim-orange">CAD Delivery Process</em>
    </h2>

    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
        From design inputs to final engineering documentation, we follow a structured CAD drafting
        and detailing process to deliver accurate, consistent, and production-ready drawings.
    </p>

    @php
    $steps = [
        [
            'num'   => '01',
            'title' => 'Project Assessment',
            'desc'  => 'Review drawings, sketches, specifications, reference models, standards, and project requirements.',
            'icon'  => 'clipboard'
        ],

        [
            'num'   => '02',
            'title' => 'Drafting & Modeling',
            'desc'  => 'Develop 2D drawings or 3D CAD models based on the approved design inputs and project requirements.',
            'icon'  => 'lightbulb'
        ],

        [
            'num'   => '03',
            'title' => 'Detailing & Documentation',
            'desc'  => 'Add dimensions, tolerances, materials, annotations, assembly information, and manufacturing details.',
            'icon'  => 'cube'
        ],

        [
            'num'   => '04',
            'title' => 'Quality Review',
            'desc'  => 'Review drawings and models for dimensional accuracy, consistency, completeness, and project requirements.',
            'icon'  => 'file'
        ],

        [
            'num'   => '05',
            'title' => 'Final Delivery & Support',
            'desc'  => 'Issue approved CAD files and documentation while supporting revisions, updates, and downstream engineering requirements.',
            'icon'  => 'rocket'
        ]
    ];
    @endphp

    <div class="bim-process mt-5">

        <div class="bim-process__line"></div>

        @foreach ($steps as $step)

        <div class="bim-process__item bim-anim bim-anim--up"
             style="--bim-delay:{{ $loop->index * 100 }}ms">

            <div class="bim-process__number">
                {{ $step['num'] }}
            </div>

            <div class="bim-process__circle">

                @if($step['icon'] == 'clipboard')

                    <img src="{{ asset('images/process-one-in.png') }}"
                         alt="Project assessment"
                         width="30"
                         height="30">

                @elseif($step['icon'] == 'lightbulb')

                    <img src="{{ asset('images/process-two.svg') }}"
                         alt="CAD drafting"
                         width="50"
                         height="50">

                @elseif($step['icon'] == 'cube')

                    <img src="{{ asset('images/process-three.svg') }}"
                         alt="Engineering detailing"
                         width="50"
                         height="50">

                @elseif($step['icon'] == 'file')

                    <img src="{{ asset('images/process-fours.svg') }}"
                         alt="CAD quality review"
                         width="50"
                         height="50">

                @elseif($step['icon'] == 'rocket')

                    <img src="{{ asset('images/process-four.svg') }}"
                         alt="Final CAD delivery"
                         width="50"
                         height="50">

                @endif

            </div>

            <h3 class="bim-process__title">
                {{ $step['title'] }}
            </h3>

            <p class="bim-process__desc">
                {{ $step['desc'] }}
            </p>

        </div>

        @endforeach

    </div>

</section>

                <hr class="bim-hr" aria-hidden="true">

                {{-- ─────────────────────────────────────
                     §6 FAQ
                ───────────────────────────────────────── --}}
<section class="bim-sec" id="bim-faq" aria-label="FAQ">

    <div class="bim-tag bim-anim bim-anim--down">
        <span class="bim-tag__bar" aria-hidden="true"></span>
        Common Questions
    </div>

    <h2 class="bim-h2 mt-2 bim-anim bim-anim--down" style="--bim-delay:80ms">
        Frequently Asked <em class="bim-orange">Questions</em>
    </h2>

    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
        Answers to common questions about our CAD Drafting and Detailing Services.
    </p>

    @php
    $faqs = [
        [
            'q' => 'What types of CAD drafting and detailing do you provide?',
            'a' => 'We provide 2D CAD drafting, 3D CAD modeling, mechanical detailing, manufacturing drawings, fabrication drawings, assembly drawings, sheet metal documentation, general arrangement drawings, and engineering documentation based on project requirements.'
        ],
        [
            'q' => 'Can you create CAD drawings from sketches or existing drawings?',
            'a' => 'Yes. We can develop CAD drawings from sketches, PDFs, scanned drawings, reference documents, existing CAD files, specifications, and other approved design inputs. The required level of detail and output format is confirmed during project assessment.'
        ],
        [
            'q' => 'Can you prepare manufacturing and fabrication drawings?',
            'a' => 'Yes. We prepare manufacturing and fabrication drawings with dimensions, tolerances, material information, views, annotations, welding details, assembly information, and other project-specific requirements needed to support production.'
        ],
        [
            'q' => 'Do you provide 3D CAD modeling along with 2D detailing?',
            'a' => 'Yes. We support both 2D and 3D CAD requirements, including component modeling, assembly modeling, design modifications, detailed views, and drawing creation from 3D CAD data.'
        ],
        [
            'q' => 'How do you manage CAD revisions and design changes?',
            'a' => 'We follow a controlled revision process to track design changes and update drawings, models, BOMs, and related documentation according to the agreed project requirements and revision instructions.'
        ]
    ];
    @endphp

    <div class="bim-faq mt-4" id="bimFaqAcc" role="list">

        @foreach ($faqs as $faq)

        @php
            $fId = 'bimFaq' . $loop->index;
        @endphp

        <div class="bim-faq__item bim-anim bim-anim--up"
             style="--bim-delay:{{ $loop->index * 80 }}ms"
             role="listitem">

            <button class="bim-faq__q {{ $loop->first ? '' : 'collapsed' }}"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#{{ $fId }}"
                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                    aria-controls="{{ $fId }}">

                {{ $faq['q'] }}

                <span class="bim-faq__icon"
                      aria-hidden="true"></span>

            </button>

            <div id="{{ $fId }}"
                 class="collapse {{ $loop->first ? 'show' : '' }}"
                 data-bs-parent="#bimFaqAcc">

                <div class="bim-faq__a">
                    {{ $faq['a'] }}
                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

            </main>{{-- /bim-content --}}

        </div>{{-- /bim-layout --}}
    </div>{{-- /container-xl --}}
</div>{{-- /bim-page --}}


<!-- -----------------------------------
WHY MILESTONE PLM section  start 
 ---------------------------------------->

<section class="plm-milestone-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Left Content -->
            <div class="col-lg-5">

                <div class="plm-milestone-content">
                     <div class="bim-tagwhyplm bim-anim bim-anim--down">
                        <span class="bim-tag__bar" aria-hidden="true"></span>
                         WHY MILESTONE PLM
                    </div>
                    <h2 class="plm-milestone-title">
                         Partner with
                        <span>CAD Engineering Experts</span>
                    </h2>

                    <p class="plm-milestone-text">
                        Build accurate, production-ready engineering documentation with experienced CAD professionals
                        who understand drafting, detailing, manufacturing requirements, and technical documentation workflows.
                    </p>

                </div>

            </div>

            <!-- Right Stats -->
            <div class="col-lg-7">

                <div class="plm-milestone-stats">

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <circle cx="12" cy="12" r="8"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M12 7V17"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>

    <path d="M15 9.5C15 8.5 14 8 12 8C10 8 9 8.8 9 10C9 11.2 10 11.8 12 12C14 12.2 15 12.8 15 14C15 15.2 14 16 12 16C10 16 9 15.5 9 14.5"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>
</svg>
</div>
                        <span class="counter" data-target="60">0</span><span>%</span>   
                        <small>COST SAVINGS VS IN-HOUSE</small> 
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
        <circle cx="12" cy="12" r="8"
            stroke="currentColor"
            stroke-width="1.8"/>
        <path d="M12 8V12L15 14"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"/>
    </svg>
</div>
                        <span class="counter" data-target="98">0</span><span>%</span>
                        <small>ON-TIME DELIVERY RATE</small>
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
   <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <circle cx="12" cy="8" r="4"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M5 20C5 16.5 8 14 12 14C16 14 19 16.5 19 20"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>
</svg>
</div>
                        <span class="counter" data-target="48">0</span><span>H</span>
                        <small>TEAM ASSEMBLY TIME</small>
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <rect x="4" y="5" width="16" height="15" rx="2"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M8 3V7M16 3V7M4 9H20"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>

    <path d="M9 14L11 16L15 12"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"/>
</svg>
</div>
                        <span class="counter" data-target="19">0</span><span>+</span>
                        <small>YEARS OF AEC EXPERTISE</small>
                    </div>

                </div>

            </div>

        </div>

        <!-- Features -->

   <div class="row mt-5 g-0">

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
           <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
            </div>
            <div>
            <h5>On-Time Delivery</h5>
            <p>Structured execution process and repeatable delivery.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <div>
            <h5>Cost Advantage</h5>
            <p>Up to 60% savings compared to traditional staffing.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
 <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
            <div>
            <h5>Team Ready</h5>
            <p>Dedicated teams assembled quickly and professionally.</p></div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <div>
            <h5>Elastic Scale</h5>
            <p>Scale up or down without recruitment delays.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
           <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <div>
            <h5>Proven Track Record</h5>
            <p>Trusted by firms across multiple countries.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                
            </div>
            <div>
            <h5>Certified Quality</h5>
            <p>Strict quality control and review workflows.</p></div>
        </div>
    </div>

</div>

    </div>

</section>



@push('scripts')
<script>
(function () {
    'use strict';

    /*
     * OFFSET must equal:
     *   CSS --bim-sidebar-top (80px) + bim-sec scroll-margin-top buffer (20px) = 100px
     * This keeps sidebar active state and clicked scroll position perfectly in sync.
     */
    var OFFSET = 100;

    /* ── Smooth scroll ──────────────────────────── */
    document.querySelectorAll('[data-target]').forEach(function (el) {
        el.addEventListener('click', function (e) {
            var target = document.getElementById(this.dataset.target);
            if (!target) return;
            e.preventDefault();
            window.scrollTo({
                top     : target.getBoundingClientRect().top + window.scrollY - OFFSET,
                behavior: 'smooth'
            });
        });
    });

    /* ── Scroll spy ─────────────────────────────────────────────
       rootMargin: top = -OFFSET so active fires when the section
       top crosses the sticky sidebar top line.
       bottom = -45% so only the dominant on-screen section wins.
    ─────────────────────────────────────────────────────────── */
    var sections  = document.querySelectorAll('.bim-sec[id]');
    var sideLinks = document.querySelectorAll('.bim-sidebar__link');
    var mobTabs   = document.querySelectorAll('.bim-mnav__tab');

    function setActive(id) {
        [sideLinks, mobTabs].forEach(function (col) {
            col.forEach(function (el) {
                el.classList.toggle('active', el.dataset.target === id);
            });
        });
        /* keep active mobile tab scrolled into view */
        var activeTab = document.querySelector('.bim-mnav__tab.active');
        if (activeTab) activeTab.scrollIntoView({ inline: 'nearest', block: 'nearest', behavior: 'smooth' });
    }

    var spyObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) { if (e.isIntersecting) setActive(e.target.id); });
    }, {
        rootMargin: '-' + OFFSET + 'px 0px -45% 0px',
        threshold : 0
    });

    sections.forEach(function (s) { spyObs.observe(s); });

    /* ── Scroll-reveal ──────────────────────────── */
    var revObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            var el = e.target;
            el.style.transitionDelay = el.style.getPropertyValue('--bim-delay') || '0ms';
            el.classList.add('bim-anim--in');
            revObs.unobserve(el);
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.bim-anim').forEach(function (el) { revObs.observe(el); });

}());




/*term AEC with Engineering Services srction js code */
const counters = document.querySelectorAll('.counter');

const startCounter = () => {

    counters.forEach(counter => {

        const target = +counter.getAttribute('data-target');

        let count = 0;

        const update = () => {

            const increment = target / 60;

            if(count < target){

                count += increment;

                counter.innerText = Math.ceil(count);

                requestAnimationFrame(update);

            }else{

                counter.innerText = target;
            }
        };

        update();
    });
};

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            startCounter();
            observer.disconnect();
        }
    });

},{threshold:0.3});
  observer.observe(document.querySelector('.plm-milestone-section'));
</script>
@endpush

@include('sections.ready-to-scale')
@include('sections.location')
@endsection