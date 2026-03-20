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
                'desc'  => 'Office towers, retail centers, hospitality complexes. Our engineering teams deliver precision BIM modeling, structural analysis, and MEP coordination for commercial projects worldwide.',
                'badge' => '120+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise1.jpg',
            ],
            [
                'id'    => 'manufacturing',
                'tab'   => 'Precision Manufacturing',
                'title' => 'Precision Manufacturing',
                'desc'  => 'From automated production lines to cleanroom facilities, we bring high-accuracy BIM and CAD solutions to complex manufacturing environments.',
                'badge' => '80+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise2.jpg',
            ],
            [
                'id'    => 'automotive',
                'tab'   => 'Automotive',
                'title' => 'Automotive',
                'desc'  => 'Assembly plants, testing facilities, and R&D centers — our teams support automotive clients with structural detailing, MEP, and facility planning.',
                'badge' => '45+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise3.jpg',
            ],
            [
                'id'    => 'residential',
                'tab'   => 'Residential',
                'title' => 'Residential',
                'desc'  => 'Multi-storey housing, luxury villas, and large-scale developments. We deliver fully coordinated BIM models and shop drawings for residential projects.',
                'badge' => '200+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise4.jpg',
            ],
            [
                'id'    => 'industrial',
                'tab'   => 'Industrial',
                'title' => 'Industrial',
                'desc'  => 'Warehouses, logistics hubs, and heavy industrial plants. We provide structural, MEP, and BIM coordination for industrial-scale construction.',
                'badge' => '60+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise5.jpg',
            ],
            [
                'id'    => 'mixed',
                'tab'   => 'Mixed-Use',
                'title' => 'Mixed-Use',
                'desc'  => 'Integrated retail, office, and residential towers with complex coordination needs. Our multi-discipline teams manage all engineering streams seamlessly.',
                'badge' => '35+ Projects',
                'link'  => '#',
                'image' => 'images/sector-expertise6.jpg',
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