@extends('layouts.app')
@php
    $primaryKeyword = 'Competitive Intelligence Services';
@endphp
<meta name="description" content="Get Competitive Intelligence Services to analyze competitors, monitor market trends, uncover opportunities, and make informed decisions that strengthen your market position.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.milestonetech.net/data-analytics-solutions/data-analytics/competitor-intelligence-services">
@section('title', 'Competitive Intelligence Services | Stay Ahead of Competitors')
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
                    <a href="/data-analytics-solutions">Data Analytics Solutions</a>
                    <span>›</span>
                    <a href="/data-analytics-solutions/data-analytics">Data Analytics</a>
                    <span>›</span>
                    <a class="active" href="/data-analytics-solutions/data-analytics/competitor-intelligence-services">Competitive Intelligence</a>
                </div>
                <div class="abouthero-tag">
                    Data Analytics
                </div>
                <h1 class="abouthero-title">
                    Competitive Intelligence Services
                </h1>
                <p class="abouthero-desc">
                    Transform concepts into production-ready products with expert product design and development services covering engineering design, prototyping, validation, optimization, and manufacturing support.
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
                        Product Design & Development
                    </div>

                    <div class="row g-4 align-items-center mt-1">
                        <div class="col-12 col-md-7 bim-anim bim-anim--center">
                            <h2 class="bim-h2">
                                <em class="bim-orange">Product </em>Design &<br>
                                <em class="bim-orange">Development </em>Services
                            </h2>
                            <p class="bim-body mt-3">
                              With over two decades of engineering experience, MILESTONE delivers end-to-end Product Design & Development Services for complex sheet metal components, machinery, static equipment, and other engineered products. Our experienced engineering team supports the complete product development lifecycle, from concept development and detailed design to prototyping, testing, validation, and manufacturing support. 
                            </p>
                            <p class="bim-body mt-2">
                               We serve diverse industries including automotive, aerospace, medical, transportation, industrial equipment, and precision manufacturing. By combining engineering expertise, advanced CAD tools, and practical manufacturing knowledge, we develop innovative, cost-effective, and production-ready solutions that improve product performance, reduce development challenges, and accelerate time-to-market. 
                            </p>
                        </div>
                        <div class="col-12 col-md-5 bim-anim bim-anim--center">
                            <div class="bim-img-frame">
                                <img src="{{ asset('images/infrostrucre-bakcground.png') }}"
                                     alt="Architectural BIM blueprint"
                                     class="img-fluid"
                                     loading="lazy" decoding="async">
                                <div class="bim-img-frame__badge" aria-hidden="true">
                                    <span>LOD 500</span>
                                    <small>Ready</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Stats --}}
                    <div class="bim-stats bim-anim bim-anim--up mt-5">
                        <div class="bim-stats__item"><strong>22+ Years</strong><span>Engineering Experience</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>End-to-End</strong><span>Product Development</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>Multi-Industry</strong><span>Engineering Expertise</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>Production Ready</strong><span>Design & Documentation</span></div>
                    </div>

                    {{-- Sub block --}}
                    <div class="bim-sub-block bim-anim bim-anim--up mt-5">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                            <h3 class="bim-h3 mb-0">Product Design & Development Services at Milestone PLM</h3>
                            <span class="bim-badge">End-to-End Product Development</span>
                        </div>
                        <div class="bim-sub-block__line" aria-hidden="true"></div>
                        <p class="bim-body mt-3">
                           Our mechanical engineering team provides comprehensive product development support, combining design expertise, advanced CAD capabilities, and manufacturing knowledge to develop accurate, efficient, and production-ready engineering solutions. From initial concepts and 3D modeling to detailed engineering, prototyping, validation, and manufacturing documentation, we support projects throughout the complete development lifecycle.
                        </p>
                        <div class="row g-2 mt-2">
                            @foreach ([
                                'Product research, design study, and concept development',
                                'Detailed engineering and 3D CAD data production',
                                'Sheet metal component and machinery design',
                                'Jigs, fixtures, and special purpose machine design',
                                'Tool and mold design with mold-flow analysis',
                                'Plastic product and casting design',
                                'Prototyping, testing, and product validation',
                                'Reverse engineering and design optimization'
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
                       Product Design and Development Services - <em class="bim-orange">Key Capabilities</em>
                    </h2>
                    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
                        Delivering specialized engineering design solutions across product development, manufacturing, automation, and fabrication requirements.
                    </p>

                    @php
                    $caps = [
                        ['num'=>'01','title'=>'Jigs & Fixture Design','desc'=>'Custom fixtures and production tooling engineered for accuracy, repeatability, productivity, and efficient manufacturing operations.','items'=>['Welding Fixtures', 'Pressure Testing Fixtures', 'Assembly Fixtures', 'Machining Fixtures', 'Inspection & Checking Fixtures', 'Leak Testing Fixtures']],
                        ['num'=>'02','title'=>'Special Purpose Machine (SPM) Design','desc'=>'Custom machines and automation systems designed to meet specific production, assembly, testing, material handling, and process requirements.','items'=>['Assembly Automation Machines', 'Testing & Inspection Machines', 'Material Handling Systems', 'Packaging & Conveying Equipment', 'Robotic Integration Solutions', 'Process Automation Equipment']],
                        ['num'=>'03','title'=>'Sheet Metal Design & Fabrication','desc'=>'Fabrication-ready sheet metal solutions covering part development, assemblies, manufacturing documentation, and production support.','items'=>['Sheet Metal Part Design', 'Enclosure & Cabinet Design', 'Welded Sheet Metal Assemblies', 'Laser Cutting & Bending Development', 'Manufacturing Drawings & Flat Patterns', 'Prototype & Production Support']],
                        ['num'=>'04','title'=>'Plastic Product Design','desc'=>'Plastic components and products engineered for functionality, durability, manufacturability, tooling efficiency, and cost-effective production.','items'=>['Injection Molded Part Design', 'Plastic Enclosure Design', 'Consumer Product Development', 'Structural Plastic Component Design', 'Moldability & Tooling Optimization', 'Prototype & Production Support']],
                    ];
                    @endphp

                    <div class="row g-3 mt-2">
                        @foreach ($caps as $cap)
                        <div class="col-12 col-md-6 bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 80 }}ms">
                            <div class="bim-cap-card">
                                <div class="bim-cap-card__top">
                                    <span class="bim-cap-card__num">{{ $cap['num'] }}</span>
                                    <span class="bim-cap-card__line" aria-hidden="true"></span>
                                </div>
                                <h3 class="bim-cap-card__title">{{ $cap['title'] }}</h3>
                                <p class="bim-cap-card__desc">{{ $cap['desc'] }}</p>
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
                        Technologies We <em class="bim-orange">Work With</em>
                    </h2>
                    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
                        We use industry-leading CAD, BIM, visualization, and engineering design software to develop accurate, manufacturable, and production-ready solutions.
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
                                [ 'label' => '', 'image' => 'service-img/autocad.webp' ],
                                [ 'label' => '', 'image' => 'service-img/solidworks.webp' ],
                                [ 'label' => '', 'image' => 'service-img/catia.webp' ],
                                [ 'label' => '', 'image' => 'service-img/creo.webp' ],
                                [ 'label' => '', 'image' => 'service-img/ansys.webp' ],
                                [ 'label' => '', 'image' => 'service-img/nx.webp' ],
                                [ 'label' => '', 'image' => 'service-img/fusion360.webp' ],
                                [ 'label' => '', 'image' => 'service-img/inventor.webp' ],
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
                    Engineering Design Services <span class="text-accent">in Action</span>
                </h2>

                <p class="bim-cs__desc">
                    Explore real-world engineering projects and discover how our design expertise delivers accurate, practical, and manufacturing-ready solutions.
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
                        Our BIM teams have delivered projects across a wide range of building types and sectors.
                    </p>

                    @php
                $industries = [
                    [
                        'num'=>'01',
                        'title'=>'Industrial & Heavy Equipment',
                        'desc'=>'Heavy equipment and industrial machinery designed for reliable performance and efficient manufacturing.',
                        'image'=>'service-img/industrial.webp'
                    ],
                    [
                        'num'=>'02',
                        'title'=>'Machinery & Robotics',
                        'desc'=>'Custom machinery, robotic systems, and automation solutions designed for efficient production.',
                        'image'=>'service-img/machinery-and-robotics.webp'
                    ],
                    [
                        'num'=>'03',
                        'title'=>'Precision Manufacturing',
                        'desc'=>'High-accuracy components, fixtures, tooling, and designs for precision manufacturing applications.',
                        'image'=>'service-img/precision-manufacturing.webp'
                    ],
                    [
                        'num'=>'04',
                        'title'=>'Heavy Engineering',
                        'desc'=>'Engineering solutions for complex equipment, assemblies, structures, and heavy-duty applications.',
                        'image'=>'service-img/heavy-engineering.webp'
                    ],
                    [
                        'num'=>'05',
                        'title'=>'Medical Devices',
                        'desc'=>'Precision product design for medical equipment, devices, enclosures, and critical components.',
                        'image'=>'service-img/medical-devices.webp'
                    ],
                    [
                        'num'=>'05',
                        'title'=>'Consumer Products',
                        'desc'=>'Product design and development covering DFM, plastic components, prototyping, and production support.',
                        'image'=>'service-img/consumer-products.webp'
                    ],
                    [
                        'num'=>'05',
                        'title'=>'Electric Enclosure & Transformer',
                        'desc'=>'Sheet metal designs for electrical enclosures, cabinets, transformer components, and assemblies.',
                        'image'=>'service-img/electric-enclosure-and-transformer.webp'
                    ],
                    [
                        'num'=>'05',
                        'title'=>'Sheet Metal & Fabrication',
                        'desc'=>'Manufacturing-ready designs for enclosures, cabinets, racks, doors, and fabricated assemblies.',
                        'image'=>'service-img/sheet-metal-and-fabrication.webp'
                    ],
                    
                   
                    ];
                 @endphp

                    <div class="row g-3 mt-2">
                        @foreach ($industries as $ind)
                        <div class="col-12 col-sm-6 col-lg-4 bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 80 }}ms">
                            <div class="bim-ind-card">
                                <div class="bim-ind-card__img">
                                    <img src="{{ asset($ind['image']) }}" alt="{{ $ind['title'] }}" loading="lazy" decoding="async">
                                    <div class="bim-ind-card__overlay" aria-hidden="true"></div>
                                    <div class="bim-ind-card__badges">
                                        <span class="bim-ind-card__sq" aria-hidden="true">
                                            <svg viewBox="0 0 20 20" fill="none"><path d="M3 17V8l7-5 7 5v9M8 17v-5h4v5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
                        Our <em class="bim-orange">Delivery Process</em>
                    </h2>
                    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
                        From concept to production ready design, we deliver accurate, manufacturable, and reliable product engineering solutions.
                    </p>

                    @php
                $steps = [
                         [
                             'num'   => '01',
                             'title' => 'Project Assessment',
                             'desc'  => 'Review specifications, performance criteria, standards, and project objectives.',
                             'icon'  => 'clipboard'
                         ],

                         [
                             'num'   => '02',
                             'title' => 'Concept Design',
                             'desc'  => 'Develop and evaluate design concepts to identify the most effective engineering solution.',
                             'icon'  => 'lightbulb'
                         ],

                         [
                            'num'   => '03',
                            'title' => 'CAD Modeling & Analysis',
                            'desc'  => 'Create detailed 3D models and perform engineering analysis to optimise the product.',
                            'icon'  => 'cube'
                         ],

                         [
                           'num'   => '04',
                           'title' => 'Engineering Documentation',
                           'desc'  => 'Prepare manufacturing drawings, BOMs, assembly details, and technical documentation.',
                           'icon'  => 'file'
                         ],

                         [
                           'num'   => '05',
                           'title' => 'Delivery & Support',
                           'desc'  => 'Issue final design packages and provide technical assistance through manufacturing and implementation.',
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

    <img src="{{ asset('images/process-one-in.png') }}" alt="Clipboard" width="30" height="30">

@elseif($step['icon'] == 'lightbulb')

    <img src="{{ asset('images/process-two.svg') }}" alt="Lightbulb" width="50" height="50">

@elseif($step['icon'] == 'cube')

    <img src="{{ asset('images/process-three.svg') }}" alt="Cube" width="50" height="50">

@elseif($step['icon'] == 'file')

    <img src="{{ asset('images/process-fours.svg') }}" alt="File" width="50" height="50">

@elseif($step['icon'] == 'rocket')

    <img src="{{ asset('images/process-four.svg') }}" alt="Rocket" width="50" height="50">

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
                        Answers to the questions we hear most often about our BIM Services.
                    </p>

                    @php
                    $faqs = [
                        ['q'=>'Do you work with the Engineer of Records calculations ?',        'a'=>'Yes. We work from the Engineer of Record’s calculations, design specifications, and equipment data, translating engineering requirements into detailed mechanical fabrication, manufacturing, and installation drawings.'],
                        ['q'=>'What codes do you work to ?',    'a'=>'We work to the applicable mechanical engineering codes and standards required by the project and jurisdiction, including ASME, ISO, BS EN, AS/NZS, and Indian Standards (IS). All applicable codes and project requirements are confirmed at the start of the project.'],
                        ['q'=>'Can you produce 3D fabrication models ?',         'a'=>'Yes. We develop detailed 3D fabrication models to support manufacturing and installation, including assemblies, components, fabrication details, and associated production documentation in accordance with project requirements.'],
                        ['q'=>'How do you handle engineering revisions and design changes ?', 'a'=>'We maintain a controlled revision management process, tracking all engineering changes and updating drawings, models, and documentation within the agreed turnaround timeframe. All revisions are clearly identified, documented, and coordinated to ensure compliance with project requirements and approved design specifications.'],
                    ];
                    @endphp

                    <div class="bim-faq mt-4" id="bimFaqAcc" role="list">
                        @foreach ($faqs as $faq)
                        @php $fId = 'bimFaq' . $loop->index; @endphp
                        <div class="bim-faq__item bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 80 }}ms" role="listitem">
                            <button class="bim-faq__q {{ $loop->first ? '' : 'collapsed' }}"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $fId }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="{{ $fId }}">
                                {{ $faq['q'] }}
                                <span class="bim-faq__icon" aria-hidden="true"></span>
                            </button>
                            <div id="{{ $fId }}" class="collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#bimFaqAcc">
                                <div class="bim-faq__a">{{ $faq['a'] }}</div>
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
                        <span>Engineering Experts</span>
                    </h2>

                    <p class="plm-milestone-text">
                        Built to close the gap between how Western AEC and Engineering Design firms run
                        projects and where the world's best engineering talent
                        actually sits.
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