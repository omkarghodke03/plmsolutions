@extends('layouts.app')

@section('title', $caseStudy->meta_title ?? $caseStudy->title . ' | Milestone PLM')

@section('content')

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
        <div class="cs-hero-tags">
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->service) }}</span>
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->industry) }}</span>
            @if($caseStudy->meta_keywords)
                @foreach(array_slice(explode(',', $caseStudy->meta_keywords), 0, 3) as $kw)
                <span class="cs-hero-tag">{{ strtoupper(trim($kw)) }}</span>
                @endforeach
            @endif
        </div>
        <h1 class="cs-hero-title">{{ $caseStudy->title }}</h1>
        <p class="cs-hero-desc">{{ $caseStudy->short_description }}</p>
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
                @if($caseStudy->gallery_images)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow"><span class="cs-line"></span> GLIMPSE OF WORK</p>
                    <h2 class="cs-section-heading">Project in Pictures</h2>
                    <div class="cs-gallery-grid">
                        @foreach($caseStudy->gallery_images as $i => $img)
                        <div class="cs-gallery-item {{ $i === 0 ? 'cs-gallery-main' : '' }}">
                            <img src="{{ asset('casestudy/' . $img) }}" alt="{{ $caseStudy->title }} - Image {{ $i+1 }}" loading="lazy">
                        </div>
                        @endforeach
                    </div>
                    @if($caseStudy->gallery_caption)
                    <p class="cs-gallery-caption">{{ $caseStudy->gallery_caption }}</p>
                    @endif
                </div>
                @endif

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
                            <span class="cs-detail-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M3 21h18"/>
<path d="M5 21V7l7-4 7 4v14"/>
<path d="M9 9h.01"/>
<path d="M9 13h.01"/>
<path d="M9 17h.01"/>
<path d="M15 9h.01"/>
<path d="M15 13h.01"/>
<path d="M15 17h.01"/>
</svg>
</span>
                            <div><p class="cs-detail-label">CLIENT</p><p class="cs-detail-val">{{ $caseStudy->client }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->location)
                        <li>
                            <span class="cs-detail-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
<path d="M12 21s-6-5.33-6-11a6 6 0 1112 0c0 5.67-6 11-6 11z"/>
<circle cx="12" cy="10" r="2"/>
</svg></span>
                            <div><p class="cs-detail-label">LOCATION</p><p class="cs-detail-val">{{ $caseStudy->location }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->service)
                        <li>
                            <span class="cs-detail-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
<path d="M14.7 6.3a1 1 0 010 1.4l-7 7a1 1 0 01-1.4 0l-2.6-2.6a1 1 0 010-1.4l7-7a4 4 0 015.7 0l1.3 1.3a4 4 0 010 5.7l-7 7"/>
</svg></span>
                            <div><p class="cs-detail-label">SERVICE</p><p class="cs-detail-val">{{ $caseStudy->service }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->industry)
                        <li>
                            <span class="cs-detail-icon">#></span>
                            <div><p class="cs-detail-label">INDUSTRY</p><p class="cs-detail-val">{{ $caseStudy->industry }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->timeline)
                        <li>
                            <span class="cs-detail-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
<circle cx="9" cy="7" r="4"/>
<path d="M23 21v-2a4 4 0 00-3-3.87"/>
<path d="M16 3.13a4 4 0 010 7.75"/>
</svg></span>
                            <div><p class="cs-detail-label">TIMELINE</p><p class="cs-detail-val">{{ $caseStudy->timeline }}</p></div>
                        </li>
                        @endif
                        @if($caseStudy->team_size)
                        <li>
                            <span class="cs-detail-icon">👥</span>
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



@include('sections.location')
@endsection