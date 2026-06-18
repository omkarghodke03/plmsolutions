{{--
    ============================================================
    Section  : Sector Expertise — Industries We Serve
    File     : resources/views/sections/sector-expertise.blade.php
    CSS      : resources/css/section.css  (SE- prefix)
    Images   : public/images/your-file.jpg  via asset()
    ============================================================
--}}

<section class="SE-section">
    <div class="container">

        {{-- ── Header ──────────────────────────────────────── --}}
        <div class="SE-header">
            <p class="SE-eyebrow">Sector Expertise</p>
            <h2 class="SE-heading">
                Industries <span class="SE-heading-highlight">We Serve</span>
            </h2>
        </div>

        @php
        /*
        |--------------------------------------------------------------
        | HOW TO ADD / EDIT AN INDUSTRY:
        |
        |  'id'      → unique key, used for tab switching (no spaces)
        |  'tab'     → label shown on the tab button
        |  'title'   → heading inside the content panel
        |  'desc'    → description paragraph
        |  'badge'   → small badge text on image (e.g. "120+ Projects")
        |  'link'    → URL for "Learn More" button
        |  'image'   → path from public/ folder
        |--------------------------------------------------------------
        */
        $industries = [
            [
                'id'    => 'commercial',
                'tab'   => 'Commercial',
                'title' => 'Commercial',
                'desc'  => 'Office towers, retail centers, corporate campuses, and hospitality complexes designed for modern business needs. We provide BIM modeling, structural engineering, MEP design, and project coordination to support efficient, scalable, and high-performance commercial developments worldwide.',
                'badge' => '120+ Projects',
                'link'  => '#',
                'image' => 'images/infrastructureplmsolution.jpeg',
            ],
            [
                'id'    => 'Residential',
                'tab'   => 'Residential',
                'title' => 'Residential',
                'desc'  => 'Multi-family housing, luxury residences, townships, and community developments designed for comfort and long-term value. Our teams deliver coordinated BIM workflows, structural design, and MEP engineering solutions that enhance project quality, efficiency, and constructability.',
                'badge' => '80+ Projects',
                'link'  => '#',
                'image' => 'service-img/residential.jpg',
            ],
            [
                'id'    => 'Healthcare',
                'tab'   => 'Healthcare ',
                'title' => 'Healthcare ',
                'desc'  => 'Hospitals, medical centers, specialty clinics, and healthcare campuses designed to meet strict regulatory and operational requirements. We provide BIM modeling, MEP engineering, and multidisciplinary coordination to create safe, efficient, and patient-focused healthcare environments.',
                'badge' => '45+ Projects',
                'link'  => '#',
                'image' => 'service-img/healthcare.jfif',
            ],
            [
                'id'    => 'Education',
                'tab'   => 'Education',
                'title' => 'Education',
                'desc'  => 'Universities, schools, research facilities, and training centers designed to support learning and innovation. Our engineering teams deliver BIM-enabled design, structural analysis, and MEP coordination to create functional, sustainable, and future-ready educational spaces.',
                'badge' => '200+ Projects',
                'link'  => '#',
                'image' => 'service-img/education.jpg',
            ],
            [
                'id'    => 'Hospitality',
                'tab'   => 'Hospitality',
                'title' => 'Hospitality',
                'desc'  => 'Hotels, resorts, convention centers, and leisure destinations designed to elevate guest experiences. We provide integrated BIM, structural, and MEP engineering services that support operational efficiency, comfort, and design excellence.',
                'badge' => '60+ Projects',
                'link'  => '#',
                'image' => 'service-img/hospitality.jpg',
            ],
            [
                'id'    => 'Infrastructure',
                'tab'   => 'Infrastructure',
                'title' => 'Infrastructure',
                'desc'  => 'Transportation hubs, bridges, utilities, public facilities, and large-scale infrastructure projects requiring precision and reliability. Our teams deliver engineering design, BIM coordination, and construction documentation to support resilient and sustainable infrastructure development.',
                'badge' => '35+ Projects',
                'link'  => '#',
                'image' => 'service-img/infrastructure.jpg',
            ],
             [
                'id'    => 'Industrial & Heavy Equipment',
                'tab'   => 'Industrial & Heavy Equipment',
                'title' => 'Industrial & Heavy Equipment',
                'desc'  => 'Manufacturing plants, industrial machinery, heavy equipment assemblies, and production facilities requiring precision engineering and performance optimization. Our teams provide product design, CAD detailing, engineering analysis, and manufacturing support to improve efficiency, reliability, and operational performance.',
                'badge' => '30+ Projects',
                'link'  => '#',
                'image' => 'service-img/industrial.jpg',
            ],
            [
                'id'    => 'Precision Manufacturing',
                'tab'   => 'Precision Manufacturing',
                'title' => 'Precision Manufacturing',
                'desc'  => 'High-precision manufacturing environments, CNC machining facilities, component production units, and advanced manufacturing operations focused on quality and accuracy. We deliver engineering design, detailed drafting, production documentation, and process support to enhance productivity, consistency, and manufacturing excellence.',
                'badge' => '30+ Projects',
                'link'  => '#',
                'image' => 'service-img/infrastructure.jpg',
            ],
            [
                'id'    => 'Heavy Engineering',
                'tab'   => 'Heavy Engineering',
                'title' => 'Heavy Engineering',
                'desc'  => 'Large-scale industrial equipment, process plants, material handling systems, and engineered machinery built for demanding operating conditions. Our engineering teams provide design, analysis, detailing, and manufacturing support to ensure structural integrity, operational efficiency, and long-term performance.',
                'badge' => '30+ Projects',
                'link'  => '#',
                'image' => 'service-img/infrastructure.jpg',
            ],
            [
                'id'    => 'Electric Enclosure & Transformer',
                'tab'   => 'Electric Enclosure & Transformer',
                'title' => 'Electric Enclosure & Transformer',
                'desc'  => 'Electrical enclosures, transformer assemblies, control panels, and power distribution equipment designed for safety, durability, and compliance. We provide engineering design, CAD detailing, fabrication drawings, and manufacturing documentation to support efficient production and reliable operation.',
                'badge' => '40+ Projects',
                'link'  => '#',
                'image' => 'images/data-center-images.jpg',
            ],
            [
                'id'    => 'Sheet Metal & Fabrication',
                'tab'   => 'Sheet Metal & Fabrication',
                'title' => 'Sheet Metal & Fabrication',
                'desc'  => 'Fabricated metal components, sheet metal assemblies, industrial cabinets, brackets, frames, and custom-engineered products manufactured to exact specifications. Our teams deliver 3D modeling, detailed fabrication drawings, cut lists, and production support to streamline manufacturing and improve quality.',
                'badge' => '30+ Projects',
                'link'  => '#',
                'image' => 'images/High-Rise CAD Documentation.jpeg',
            ],
            [
                'id'    => 'Static Equipment',
                'tab'   => 'Static Equipment',
                'title' => 'Static Equipment',
                'desc'  => 'Pressure vessels, storage tanks, heat exchangers, reactors, and other static equipment designed for industrial and process applications. We provide engineering design, detailed drafting, fabrication documentation, and manufacturing support to ensure safety, performance, and compliance with industry standards.',
                'badge' => '30+ Projects',
                'link'  => '#',
                'image' => 'images/engeryandutilities-image.jpeg',
            ],
        ];
        @endphp

        {{-- ── Tab Buttons ──────────────────────────────────── --}}
        <div class="SE-tabs" id="SE-tabs">
            @foreach($industries as $index => $industry)
                <button
                    class="SE-tab-btn {{ $index === 0 ? 'SE-tab-btn--active' : '' }}"
                    data-target="{{ $industry['id'] }}"
                    type="button"
                >
                    {{ $industry['tab'] }}
                </button>
            @endforeach
        </div>

        {{-- ── Content Panels ───────────────────────────────── --}}
        <div class="SE-panels" id="SE-panels">
            @foreach($industries as $index => $industry)
                <div
                    class="SE-panel {{ $index === 0 ? 'SE-panel--active' : '' }}"
                    id="SE-panel-{{ $industry['id'] }}"
                >
                    <div class="row g-0 align-items-stretch">

                        {{-- Left: Image --}}
                        <div class="col-12 col-md-6">
                            <div class="SE-panel-img-wrap">
                                <img
                                    src="{{ asset($industry['image']) }}"
                                    alt="{{ $industry['title'] }}"
                                    class="SE-panel-img"
                                    loading="lazy"
                                >
                                {{-- Badge over image --}}
                                <span class="SE-panel-badge">
                                    {{ $industry['badge'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Right: Content --}}
                        <div class="col-12 col-md-6">
                            <div class="SE-panel-content">
                                <h3 class="SE-panel-title">{{ $industry['title'] }}</h3>
                                <p class="SE-panel-desc">{{ $industry['desc'] }}</p>
                                <a href="{{ $industry['link'] }}" class="SE-panel-link">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="none" stroke="currentColor" stroke-width="2.5"
                                         viewBox="0 0 24 24">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>{{-- /panels --}}

    </div>{{-- /container --}}
</section>


{{-- ── Tab Switch JavaScript ───────────────────────────────────── --}}
<script>
(function () {
    'use strict';

    var tabs   = document.querySelectorAll('.SE-tab-btn');
    var panels = document.querySelectorAll('.SE-panel');

    tabs.forEach(function (btn) {
        btn.addEventListener('click', function () {

            /* Skip if already active */
            if (btn.classList.contains('SE-tab-btn--active')) return;

            /* Remove active from all tabs */
            tabs.forEach(function (t) {
                t.classList.remove('SE-tab-btn--active');
            });

            /* Hide all panels */
            panels.forEach(function (p) {
                p.classList.remove('SE-panel--active');
            });

            /* Activate clicked tab */
            btn.classList.add('SE-tab-btn--active');

            /* Show matching panel */
            var target = document.getElementById('SE-panel-' + btn.dataset.target);
            if (target) {
                target.classList.add('SE-panel--active');
            }
        });
    });

})();
</script>