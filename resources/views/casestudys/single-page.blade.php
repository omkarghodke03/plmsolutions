@extends('layouts.app')

@section('title', $caseStudy->meta_title ?? $caseStudy->title . ' | Milestone PLM')

@section('content')



<style>
    
    /* GALLERY ITEM HOVER */
.cs-gallery-item {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    border-radius: 8px;
}

.cs-gallery-item img {
    transition: transform 0.4s ease;
    width: 100%;
    display: block;
}

.cs-gallery-item:hover img {
    transform: scale(1.05);
}

.cs-gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.cs-gallery-item:hover .cs-gallery-overlay {
    opacity: 1;
}

/* LIGHTBOX */
.cs-lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.92);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.cs-lightbox.active {
    opacity: 1;
    visibility: visible;
}

/* CLOSE BUTTON */
.cs-lb-close {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 44px;
    height: 44px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.25s ease;
    z-index: 10;
}

.cs-lb-close:hover {
    background: rgba(224, 122, 47, 0.7);
    border-color: #E07A2F;
}

/* ARROWS */
.cs-lb-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.25s ease, border-color 0.25s ease;
    z-index: 10;
}

.cs-lb-arrow:hover {
    background: #E07A2F;
    border-color: #E07A2F;
}

.cs-lb-prev { left: 24px; }
.cs-lb-next { right: 24px; }

/* IMAGE */
.cs-lb-content {
    max-width: 85vw;
    max-height: 85vh;
    text-align: center;
}

.cs-lb-content img {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 6px;
    transition: opacity 0.25s ease;
}

/* COUNTER */
.cs-lb-counter {
    color: rgba(255, 255, 255, 0.55);
    font-size: 13px;
    letter-spacing: 2px;
    margin-top: 14px;
}

/* RESPONSIVE */
@media (max-width: 576px) {
    .cs-lb-prev { left: 10px; }
    .cs-lb-next { right: 10px; }
    .cs-lb-arrow { width: 38px; height: 38px; }
}
</style>
{{-- HERO --}}
<section class="cs-single-hero"
    style="background: linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)),
    url('{{ asset('casestudy/' . $caseStudy->cover_image) }}') center/cover no-repeat;">
    <div class="container">
        <div class="cs-hero-breadcrumb">
            <a href="{{ url('/') }}">HOME</a><span>›</span>
            <a href="{{ route('case-studies.index') }}">CASE STUDIES</a><span>›</span>
            <span class="active">{{ strtoupper($caseStudy->industry_tag) }}</span>
        </div>
       
        <h1 class="cs-hero-title">{{ $caseStudy->title }}</h1>
        <p class="cs-hero-desc">{{ $caseStudy->short_description }}</p>
         <div class="cs-hero-tags">
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->service) }}</span>
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->industry) }}</span>
            @if($caseStudy->meta_keywords)
                @foreach(array_slice(explode(',', $caseStudy->meta_keywords), 0, 3) as $kw)
                <span class="cs-hero-tag">{{ strtoupper(trim($kw)) }}</span>
                @endforeach
            @endif
        </div>
        <div class="cs-hero-meta">
            @if($caseStudy->location)<span>📍 {{ $caseStudy->location }}</span>@endif
            @if($caseStudy->timeline)<span>⏱️ {{ $caseStudy->timeline }}</span>@endif
            @if($caseStudy->team_size)<span>👥 {{ $caseStudy->team_size }}</span>@endif
            @if($caseStudy->industry)<span>🏗️ {{ $caseStudy->industry }}</span>@endif
        </div>
    </div>
</section>

{{-- MAIN CONTENT + SIDEBAR --}}
<section class="cs-single-section">
    <div class="container">
        <div class="row g-5">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-8" id="csContent">

                {{-- Project Overview --}}
                @if($caseStudy->project_overview)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow"><span class="cs-line"></span> PROJECT OVERVIEW</p>
                    <div class="cs-section-body">{!! nl2br(e($caseStudy->project_overview)) !!}</div>
                </div>
                @endif

                {{-- Challenge --}}
                @if($caseStudy->challenge_heading)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow"><span class="cs-line"></span> THE CHALLENGE</p>
                    <h2 class="cs-section-heading">{{ $caseStudy->challenge_heading }}</h2>
                    @if($caseStudy->challenge_body)
                    <div class="cs-section-body">{!! nl2br(e($caseStudy->challenge_body)) !!}</div>
                    @endif
                    @if($caseStudy->challenge_points)
                    <ol class="cs-challenge-list">
                        @foreach($caseStudy->challenge_points as $i => $point)
                        <li>
                            <span class="cs-point-num">0{{ $i + 1 }}</span>
                            <span>{{ $point }}</span>
                        </li>
                        @endforeach
                    </ol>
                    @endif
                </div>
                @endif

                {{-- Our Approach --}}
                @if($caseStudy->approach_heading)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow"><span class="cs-line"></span> OUR APPROACH</p>
                    <h2 class="cs-section-heading">{{ $caseStudy->approach_heading }}</h2>
                    @if($caseStudy->approach_body)
                    <div class="cs-section-body">{!! nl2br(e($caseStudy->approach_body)) !!}</div>
                    @endif

                    {{-- Key Deliverables --}}
                    @if($caseStudy->key_deliverables)
                    <div class="cs-deliverables-box">
                        <p class="cs-deliverables-title">KEY DELIVERABLES</p>
                        <ul class="cs-deliverables-list">
                            @foreach($caseStudy->key_deliverables as $item)
                            <li>
                                <svg viewBox="0 0 20 20" fill="none" class="cs-check-icon">
                                    <circle cx="10" cy="10" r="9" stroke="#ec6502" stroke-width="1.5"/>
                                    <path d="M6 10l3 3 5-5" stroke="#ec6502" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @endif

                {{-- Delivery Process --}}
                @if($caseStudy->delivery_process)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow"><span class="cs-line"></span> DELIVERY PROCESS</p>
                    <h2 class="cs-section-heading">How we structured the work</h2>
                    <div class="cs-process-list">
                        @foreach($caseStudy->delivery_process as $step)
                        <div class="cs-process-item">
                            <div class="cs-process-num">{{ $step['step'] }}</div>
                            <div class="cs-process-body">
                                <h4 class="cs-process-title">{{ $step['title'] }}</h4>
                                <p class="cs-process-desc">{{ $step['body'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Gallery --}}
               {{-- Gallery --}}
@if($caseStudy->gallery_images)
<div class="cs-section-block">
    <p class="cs-section-eyebrow"><span class="cs-line"></span> GLIMPSE OF WORK</p>
    <h2 class="cs-section-heading">Project in Pictures</h2>
    <div class="cs-gallery-grid">
        @foreach($caseStudy->gallery_images as $i => $img)
        <div class="cs-gallery-item {{ $i === 0 ? 'cs-gallery-main' : '' }}"
             data-index="{{ $i }}"
             onclick="openLightbox({{ $i }})">
            <img src="{{ asset('casestudy/' . $img) }}"
                 alt="{{ $caseStudy->title }} - Image {{ $i+1 }}"
                 loading="lazy">
            <div class="cs-gallery-overlay">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8">
                    <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
                </svg>
            </div>
        </div>
        @endforeach
    </div>
    @if($caseStudy->gallery_caption)
    <p class="cs-gallery-caption">{{ $caseStudy->gallery_caption }}</p>
    @endif
</div>
@endif

{{-- LIGHTBOX --}}
<div class="cs-lightbox" id="csLightbox" onclick="closeLightboxOutside(event)">
    <button class="cs-lb-close" onclick="closeLightbox()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
    </button>
    <button class="cs-lb-arrow cs-lb-prev" onclick="changeSlide(-1)">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
            <path d="M15 18l-6-6 6-6"/>
        </svg>
    </button>
    <div class="cs-lb-content">
        <img id="csLbImg" src="" alt="">
        <p class="cs-lb-counter" id="csLbCounter"></p>
    </div>
    <button class="cs-lb-arrow cs-lb-next" onclick="changeSlide(1)">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
            <path d="M9 18l6-6-6-6"/>
        </svg>
    </button>
</div>

                {{-- Testimonial --}}
                @if($caseStudy->testimonial_quote)
                <div class="cs-testimonial-block">
                    <div class="cs-testimonial-quote-icon">"</div>
                    <blockquote class="cs-testimonial-text">
                        "{{ $caseStudy->testimonial_quote }}"
                    </blockquote>
                    <div class="cs-testimonial-author">
                        <span class="cs-testimonial-line"></span>
                        <div>
                            <p class="cs-testimonial-name">{{ $caseStudy->testimonial_name }}</p>
                            <p class="cs-testimonial-role">{{ $caseStudy->testimonial_role }}</p>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            {{-- RIGHT STICKY SIDEBAR --}}
            <div class="col-lg-4">
                <div class="cs-sidebar" id="csSidebar">
                    <p class="cs-sidebar-heading">PROJECT DETAILS</p>
                    <ul class="cs-details-list">
                        @if($caseStudy->client)
                        <li>
                            <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon1.svg') }}" alt="CLIENT"></span>
                            <div><p class="cs-detail-label">CLIENT</p><p class="cs-detail-val">{{ $caseStudy->client }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->location)
                        <li>
                            <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon2.svg') }}" alt="location"></span>
                            <div><p class="cs-detail-label">LOCATION</p><p class="cs-detail-val">{{ $caseStudy->location }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->service)
                        <li>
                            <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon3.svg') }}" alt="service"></span>
                            <div><p class="cs-detail-label">SERVICE</p><p class="cs-detail-val">{{ $caseStudy->service }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->industry)
                        <li>
                           <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon4.svg') }}" alt="INDUSTRY"></span>
                            <div><p class="cs-detail-label">INDUSTRY</p><p class="cs-detail-val">{{ $caseStudy->industry }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->timeline)
                        <li>
                           <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon5.svg') }}" alt="timeline"></span>
                            <div><p class="cs-detail-label">TIMELINE</p><p class="cs-detail-val">{{ $caseStudy->timeline }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->team_size)
                        <li>
                            <span class="cs-detail-icon"> <img src="{{ asset('images/case-icon6.svg') }}" alt="team size"></span>
                            <div><p class="cs-detail-label">TEAM SIZE</p><p class="cs-detail-val">{{ $caseStudy->team_size }}</p></div>
                        </li>
                        @endif
                    </ul>

                    {{-- CTA Box --}}
                    <div class="cs-sidebar-cta">
                       <p class="cs-cta-title">Work on a similar project?</p> 
                        <p class="cs-cta-desc">Tell us about your requirements and we'll respond within 24 hours.</p>
                        <a href="/contact" class="cs-cta-btn">GET IN TOUCH →</a>
                    </div>

                    {{-- Related Service --}}
                    @if($caseStudy->related_service_label)
                    <div class="cs-sidebar-service">
                        <p class="cs-service-label">RELATED SERVICE</p>
                        <a href="{{ $caseStudy->related_service_url ?? '#' }}" class="cs-service-link">
                            {{ $caseStudy->related_service_label }}
                            <svg viewBox="0 0 16 16" fill="none" width="14" height="14">
                                <path d="M3 3h10v10M3 13L13 3" stroke="#ec6502" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>
                
            </div>

        </div>
    </div>
</section>

{{-- RELATED CASE STUDIES --}}
@if($related->count())
<section class="cs-related-section">
    <div class="container">
        <div class="cs-related-header">
            <div>
                <p class="cs-section-eyebrow"><span class="cs-line"></span> CONTINUE READING</p>
                <h2 class="cs-related-title">Related Case Studies</h2>
            </div>
            <a href="{{ route('case-studies.index') }}" class="cs-view-all">VIEW ALL →</a>
        </div>
        <div class="row g-4">
            @foreach($related as $cs)
            <div class="col-12 col-md-4">
                <a href="{{ route('case-studies.show', $cs->slug) }}" class="cs-rel-card">
                    <div class="cs-rel-img-wrap">
                        <img src="{{ asset('casestudy/' . $cs->cover_image) }}" alt="{{ $cs->title }}" loading="lazy">
                        <span class="cs-industry-badge">{{ strtoupper($cs->industry_tag) }}</span>
                    </div>
                    <div class="cs-rel-body">
                        <p class="cs-card-cat">{{ strtoupper($cs->category) }}</p>
                        <h3 class="cs-rel-card-title">{{ $cs->title }}</h3>
                        <span class="cs-read-more">READ CASE STUDY →</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- PREV / NEXT --}}
<div class="cs-prevnext">
    <div class="cs-prevnext-inner">
        @if($prev)
        <a href="{{ route('case-studies.show', $prev->slug) }}" class="cs-prev">
            <span class="cs-pn-label">← PREVIOUS</span>
            <span class="cs-pn-title">{{ $prev->title }}</span>
        </a>
        @else
        <span></span>
        @endif

        @if($next)
        <a href="{{ route('case-studies.show', $next->slug) }}" class="cs-next">
            <span class="cs-pn-label">NEXT →</span>
            <span class="cs-pn-title">{{ $next->title }}</span>
        </a>
        @endif
    </div>
</div>

<script>
    (function () {
    // Build images array from blade — injected via PHP
const images = @json($caseStudy->gallery_images ?? []);
const baseUrl = '{{ asset('casestudy/') }}/';

    let current = 0;

    const lightbox  = document.getElementById('csLightbox');
    const lbImg     = document.getElementById('csLbImg');
    const lbCounter = document.getElementById('csLbCounter');

    function updateSlide() {
        lbImg.style.opacity = '0';
        setTimeout(() => {
            lbImg.src        = baseUrl + images[current];
            lbCounter.textContent = (current + 1) + ' / ' + images.length;
            lbImg.style.opacity = '1';
        }, 180);
    }

    window.openLightbox = function (index) {
        current = index;
        updateSlide();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function () {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    };

    window.closeLightboxOutside = function (e) {
        if (e.target === lightbox) closeLightbox();
    };

    window.changeSlide = function (dir) {
        current = (current + dir + images.length) % images.length;
        updateSlide();
    };

    // Keyboard support
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'ArrowLeft')  changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
        if (e.key === 'Escape')     closeLightbox();
    });
})();
    
</script>


@include('sections.location')
@endsection