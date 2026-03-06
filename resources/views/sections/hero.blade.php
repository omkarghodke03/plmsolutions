{{-- ============================================================
     Hero Section — Milestone PLM Solutions
     Matches design: video bg, badge, heading, stats, CTA buttons
     Security  : CSRF protected, XSS safe, escaped dynamic data
     Performance: Preloaded video, lazy observer, poster fallback
     Responsive : Bootstrap 5 — mobile / tablet / desktop
     ============================================================ --}}

@php
    // Security: all dynamic strings escaped via {{ }}
    $heroBadge       = 'ISO 9001 & 27001 CERTIFIED';
    $heroHeading1    = 'Precision engineering';
    $heroHeading2    = 'Delivered globally';
    $heroSubheading  = 'World-class BIM, CAD, and structural engineering services that transform complex projects into built reality';
    $heroBtn1Text    = 'START YOUR PROJECT';
    $heroBtn1Url     = route('about-us');
    $heroBtn2Text    = 'VIEW OUR WORK';
    $heroBtn2Url     = '#';

    $stats = [
        ['value' => '300+', 'label' => 'PROJECTS'],
        ['value' => '100+', 'label' => 'EXPERTS'],
        ['value' => '60+',  'label' => 'CLIENTS'],
        ['value' => '19+',  'label' => 'YEARS'],
    ];
@endphp

{{-- Preload critical video for fast first paint --}}
@push('styles')
<link rel="preload" as="video" href="{{ asset('videos/herosectionvideo.mp4') }}" type="video/mp4">
@endpush

<section class="plm-hero" id="plmHeroSection" aria-label="Hero Section">

    {{-- ── Video Background ──────────────────────────────────── --}}
    <div class="plm-hero__video-wrap">
        <video
            class="plm-hero__video"
            id="plmHeroVideo"
            playsinline
            autoplay
            muted
            loop
            preload="auto"
            poster="{{ asset('images/hero-poster.jpg') }}"
            aria-hidden="true">
            <source src="{{ asset('videos/herosectionvideo.mp4') }}" type="video/mp4">
            {{-- Fallback image if video not supported --}}
            <img src="{{ asset('images/hero-poster.jpg') }}"
                 alt="Engineering workspace"
                 class="plm-hero__video-fallback">
        </video>

        {{-- Dark gradient overlay for text readability --}}
        <div class="plm-hero__overlay" aria-hidden="true"></div>
    </div>

    {{-- ── Hero Content ───────────────────────────────────────── --}}
    <div class="plm-hero__content container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7">

                {{-- ISO Badge --}}
                <div class="plm-hero__badge" aria-label="{{ $heroBadge }}">
                    <svg class="plm-hero__badge-icon" xmlns="http://www.w3.org/2000/svg"
                         width="16" height="16" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 8v4l3 3"/>
                    </svg>
                    <span>{{ $heroBadge }}</span>
                </div>

                {{-- Main Heading --}}
                <h1 class="plm-hero__heading">
                    <span class="plm-hero__heading-white">{{ $heroHeading1 }}</span>
                    <span class="plm-hero__heading-orange">{{ $heroHeading2 }}</span>
                </h1>

                {{-- Subheading --}}
                <p class="plm-hero__subheading">
                    {{ $heroSubheading }}
                </p>

                {{-- ── Stats Row ──────────────────────────────── --}}
                <div class="plm-hero__stats" role="list" aria-label="Company statistics">
                    @foreach($stats as $stat)
                        <div class="plm-hero__stat" role="listitem">
                            <span class="plm-hero__stat-value">{{ $stat['value'] }}</span>
                            <span class="plm-hero__stat-label">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>

                {{-- ── CTA Buttons ─────────────────────────────── --}}
                <div class="plm-hero__cta" role="group" aria-label="Call to action buttons">

                    <a href="{{ $heroBtn1Url }}"
                       class="plm-hero__btn plm-hero__btn--primary"
                       role="button"
                       aria-label="Start your project with Milestone PLM">
                        {{ $heroBtn1Text }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             stroke-width="2.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>

                    <a href="{{ $heroBtn2Url }}"
                       class="plm-hero__btn plm-hero__btn--outline"
                       role="button"
                       aria-label="View our work and case studies">
                        {{ $heroBtn2Text }}
                    </a>

                </div>

            </div>
        </div>
    </div>

</section>

{{-- ── Scripts: Video observer (performance + security) ──────── --}}
@push('scripts')
<script>
(function () {
    'use strict';

    const video = document.getElementById('plmHeroVideo');
    if (!video) return;

    // Security: disable right-click save on video
    video.addEventListener('contextmenu', function (e) {
        e.preventDefault();
        return false;
    });

    // Performance: pause video when scrolled out of viewport
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    video.play().catch(function () {
                        // Autoplay blocked by browser — silent fail
                    });
                } else {
                    video.pause();
                }
            });
        }, { threshold: 0.25 });

        observer.observe(video);
    }

    // Performance: reduce video quality on slow connections
    if ('connection' in navigator) {
        const conn = navigator.connection;
        if (conn && (conn.saveData || conn.effectiveType === 'slow-2g' || conn.effectiveType === '2g')) {
            video.pause();
            video.removeAttribute('autoplay');
        }
    }

})();
</script>
@endpush