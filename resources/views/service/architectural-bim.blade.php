@extends('layouts.app')

@section('title', 'Architectural BIM Services')
@push('styles')
    @vite(['resources/css/service/service.css']) 
@endpush
@section('content')
      <section class="aboutplm-hero d-flex align-items-center"
            style="background: linear-gradient(
                to right,
             rgba(0,0,0,0.85),
             rgba(0,0,0,0.6),
             rgba(0,0,0,0.2)),
             url('{{ asset('images/infrostrucre-bakcground.png') }}') no-repeat center/cover;" >

    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-7 col-md-12">
                
                <p class="aboutplm-tag">Building Information Modeling</p>

                <h1 class="our-delivery-model-heading">
                    BIM Services<br>
                    <span class="odm-highlight">Powering Global</span><br>
                    Innovation
                </h1>

                <p class="aboutplm-desc">
                   End-to-end BIM delivery across every project phase and LOD level — inside your tools, to your standards, from day one.

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
                    <a class="bim-sidebar__cta-btn">GET A QUOTE</a>
                    <a href="tel:+19192388044" class="bim-sidebar__cta-contact">
                        <svg width="13" height="13" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 3h4l2 5-2.5 1.5a11 11 0 0 0 5 5L13 12l5 2v4a1 1 0 0 1-1 1C6 19 1 14 1 4a1 1 0 0 1 1-1h1z" stroke="currentColor" stroke-width="1.5"/></svg>
                        +1-919-238-8044
                    </a>
                    <a href="mailto:info@milestoneplm.com" class="bim-sidebar__cta-contact">
                        <svg width="13" height="13" viewBox="0 0 20 20" fill="none" aria-hidden="true"><rect x="2" y="4" width="16" height="12" rx="1" stroke="currentColor" stroke-width="1.5"/><path d="M2 4l8 7 8-7" stroke="currentColor" stroke-width="1.5"/></svg>
                        info@milestoneplm.com
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
                        Building Information Modeling
                    </div>

                    <div class="row g-4 align-items-center mt-1">
                        <div class="col-12 col-md-7 bim-anim bim-anim--left">
                            <h2 class="bim-h2">
                                <em class="bim-orange">SMART</em> BIM Models for<br>
                                <em class="bim-orange">SMART</em> Building Projects
                            </h2>
                            <p class="bim-body mt-3">
                                BIM is only as valuable as the standard it's produced to. We deliver fully coordinated,
                                LOD-compliant models that integrate directly into your delivery workflow — using your
                                Revit templates, your naming conventions, and your QA process from the first file.
                            </p>
                            <p class="bim-body mt-2">
                                We cover architectural, structural, and MEP disciplines as a single coordinated package.
                                Every model is clash-checked using Navisworks before delivery, backed by documented QA
                                records, and structured for COBie-compliant FM handover.
                            </p>
                        </div>
                        <div class="col-12 col-md-5 bim-anim bim-anim--right">
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
                        <div class="bim-stats__item"><strong>LOD 100–500</strong><span>All Disciplines</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>3 Disciplines</strong><span>Arch · Structural · MEP</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>COBie</strong><span>FM Handover Ready</span></div>
                        <div class="bim-stats__div" aria-hidden="true"></div>
                        <div class="bim-stats__item"><strong>BEP</strong><span>Compliant Delivery</span></div>
                    </div>

                    {{-- Sub block --}}
                    <div class="bim-sub-block bim-anim bim-anim--up mt-5">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                            <h3 class="bim-h3 mb-0">BIM Modeling Services at Milestone PLM</h3>
                            <span class="bim-badge">Architectural, Structural &amp; MEP</span>
                        </div>
                        <div class="bim-sub-block__line" aria-hidden="true"></div>
                        <p class="bim-body mt-3">
                            Full-spectrum BIM services delivering LOD 100–500 models across all disciplines —
                            clash-free, BEP-compliant, and ready for construction or FM handover.
                        </p>
                        <div class="row g-2 mt-2">
                            @foreach ([
                                'LOD 100–500 modeling across all three disciplines',
                                'Navisworks multi-discipline clash detection & resolution logs',
                                'COBie-structured data for FM handover',
                                'BEP review, setup, and template configuration',
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
                        Our <em class="bim-orange">Capabilities</em>
                    </h2>
                    <p class="bim-body mt-2 bim-anim bim-anim--down" style="--bim-delay:140ms">
                        Covering every discipline and coordination need from concept to handover.
                    </p>

                    @php
                    $caps = [
                        ['num'=>'01','title'=>'Architectural BIM Modeling','desc'=>'Full building envelope and spatial coordination from concept through as-built, at any LOD level.','items'=>['Conceptual massing (LOD 100–200)','Design development models (LOD 300)','Construction-ready models (LOD 350–400)','As-built record models (LOD 500)']],
                        ['num'=>'02','title'=>'Structural BIM Modeling','desc'=>'Structural systems modeled to match engineer-of-record calculations — every connection at the right tolerance.','items'=>['Concrete frame & slab elements','Steel structure & connections','Foundation & retaining wall modeling','Rebar placement within concrete elements']],
                        ['num'=>'03','title'=>'MEP BIM Coordination','desc'=>'All three MEP disciplines in a single federated environment — clash-free and ready for contractor issue.','items'=>['Mechanical: HVAC, ductwork, AHUs','Electrical: cable trays, distribution boards','Plumbing: pipework, drainage, soil stacks','Fire protection: sprinkler & FM200 layout']],
                        ['num'=>'04','title'=>'Clash Detection & Resolution','desc'=>'Systematic Navisworks clash detection with full issue tracking, trade assignment, and BCF-format reports.','items'=>['Hard clash detection (physical intersections)','Soft clash & clearance zone analysis','Clash matrix with trade-by-trade assignment','Weekly BCF reports linked to Revit elements']],
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
                        We embed inside your existing stack — no forced migrations, no new tools to learn.
                    </p>

                    <div class="bim-tech-meta bim-anim bim-anim--up mt-4">
                        <div class="bim-tech-meta__stat">
                            <strong>8</strong><span>Platforms</span>
                        </div>
                        <div class="bim-tech-meta__sep" aria-hidden="true"></div>
                        <div class="bim-tech-meta__stat">
                            <strong>8</strong><span>Disciplines</span>
                        </div>
                        <div class="bim-tech-meta__sep" aria-hidden="true"></div>
                        <p class="bim-tech-meta__tags">
                            Modeling · Coordination · Collaboration · Documentation · Automation · Scan to BIM · Review · QA
                        </p>
                    </div>

                    @php
                    $techs = [
                        ['abbr'=>'ARC', 'label'=>'Autodesk Revit',   'bg'=>'#7B1F1F'],
                        ['abbr'=>'NW',  'label'=>'Navisworks',        'bg'=>'#6B3FA0'],
                        ['abbr'=>'360', 'label'=>'BIM 360 / ACC',     'bg'=>'#1A6B3A'],
                        ['abbr'=>'C3D', 'label'=>'AutoCAD',           'bg'=>'#B83232'],
                        ['abbr'=>'DY',  'label'=>'Dynamo',            'bg'=>'#2C3E50'],
                        ['abbr'=>'AR',  'label'=>'Autodesk ReCap',    'bg'=>'#34495E'],
                        ['abbr'=>'BR',  'label'=>'Bluebeam Revu',     'bg'=>'#2C3E50'],
                        ['abbr'=>'SO',  'label'=>'Solibri',           'bg'=>'#34495E'],
                    ];
                    @endphp

                    <div class="row g-3 mt-2">
                        @foreach ($techs as $t)
                        <div class="col-6 col-sm-4 col-md-3 bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 55 }}ms">
                            <div class="bim-tech-card">
                                <div class="bim-tech-card__icon" style="background:{{ $t['bg'] }}">{{ $t['abbr'] }}</div>
                                <span class="bim-tech-card__label">{{ $t['label'] }}</span>
                            </div>
                        </div>
                        @endforeach
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
                        ['num'=>'01','title'=>'Healthcare & Hospitals',    'desc'=>'Complex MEP coordination for medical facilities, clean rooms, and surgical suites.'],
                        ['num'=>'02','title'=>'Commercial Office',          'desc'=>'Tenant fit-out and base build BIM packages from RIBA Stage 2 through handover.'],
                        ['num'=>'03','title'=>'Industrial & Manufacturing', 'desc'=>'Factory, warehouse, and process plant facility modeling to fabrication standard.'],
                        ['num'=>'04','title'=>'Residential & Mixed-Use',    'desc'=>'Multi-storey residential schemes with full MEP and structural coordination.'],
                        ['num'=>'05','title'=>'Data Centres',               'desc'=>'High-precision MEP and structural coordination for mission-critical environments.'],
                    ];
                    @endphp

                    <div class="row g-3 mt-2">
                        @foreach ($industries as $ind)
                        <div class="col-12 col-sm-6 bim-anim bim-anim--up" style="--bim-delay:{{ $loop->index * 80 }}ms">
                            <div class="bim-ind-card">
                                <div class="bim-ind-card__img">
                                    <img src="{{ asset('images/infrostrucre-bakcground.png') }}"
                                         alt="{{ $ind['title'] }}" loading="lazy" decoding="async">
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
                        A consistent, documented process on every BIM engagement —
                        so you always know where your project stands.
                    </p>

                    @php
                    $steps = [
                        ['num'=>'01','title'=>'BEP Review & Setup',   'desc'=>'We review your BIM Execution Plan, configure templates, and agree shared parameters, naming conventions, and LOD targets.'],
                        ['num'=>'02','title'=>'Phased Modeling',       'desc'=>'Discipline models built progressively to agreed LOD milestones with weekly progress reports against the schedule.'],
                        ['num'=>'03','title'=>'Coordination Rounds',   'desc'=>'Multi-discipline federation and Navisworks clash detection every two weeks. All clashes logged, assigned, and tracked to resolution.'],
                        ['num'=>'04','title'=>'3-Stage QA Gate',       'desc'=>'Every deliverable passes through modeler review, coordinator check, and PM sign-off before issue. QA records retained.'],
                        ['num'=>'05','title'=>'Handover',              'desc'=>'COBie-structured data and as-built model delivered in your format of choice. FM handover package produced if required.'],
                    ];
                    @endphp

                    <div class="bim-process mt-4">
                        @foreach ($steps as $step)
                        <div class="bim-process__row bim-anim bim-anim--left" style="--bim-delay:{{ $loop->index * 100 }}ms">
                            <div class="bim-process__left" aria-hidden="true">
                                <span class="bim-process__num">{{ $step['num'] }}</span>
                                @if (!$loop->last)
                                <span class="bim-process__line"></span>
                                @endif
                            </div>
                            <div class="bim-process__body">
                                <h3 class="bim-process__title">{{ $step['title'] }}</h3>
                                <p class="bim-process__desc">{{ $step['desc'] }}</p>
                            </div>
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
                        ['q'=>'What LOD levels do you deliver to?',        'a'=>'We deliver LOD 100–500 across all disciplines. The target LOD per element is agreed in the BEP at project start and tracked at each coordination round.'],
                        ['q'=>'Do you work inside our Revit templates?',    'a'=>'Yes. We always work inside client-supplied templates and follow your naming conventions, shared parameters, and browser structure from file 1.'],
                        ['q'=>'How do you handle clash resolution?',         'a'=>'All clashes are logged in a BCF-format issue tracker linked to elements in Revit. Clashes are assigned by trade, resolved in coordination rounds, and documented in weekly reports.'],
                        ['q'=>'Can you take over a BIM model mid-project?', 'a'=>'Yes. We perform a model audit against your BEP, document existing issues, agree a remediation plan, and take over seamlessly — usually within one sprint.'],
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
</script>
@endpush


@endsection