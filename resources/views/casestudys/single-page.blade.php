@extends('layouts.app')

@section('title', $caseStudy->meta_title ?? $caseStudy->title . ' | Milestone PLM')

@push('styles')
<style>
/* SEO meta injected via blade */
</style>
@endpush

@section('content')

{{-- SEO Meta in head --}}
@push('styles')
<meta name="description" content="{{ $caseStudy->meta_description ?? $caseStudy->short_description }}">
@endpush
{{-- HERO SECTION --}}
<section class="cs-single-hero" style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('{{ asset('casestudy/' . $caseStudy->cover_image) }}') center/cover no-repeat;">
    <div class="container">

        {{-- Breadcrumb --}}
        <div class="cs-hero-breadcrumb">
            <a href="{{ url('/') }}">HOME</a>
            <span>›</span>
            <a href="{{ route('case-studies.index') }}">CASE STUDIES</a>
            <span>›</span>
            <span class="active">{{ strtoupper($caseStudy->industry_tag) }}</span>
        </div>

        {{-- Tags --}}
        <div class="cs-hero-tags">
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->service) }}</span>
            <span class="cs-hero-tag">{{ strtoupper($caseStudy->industry) }}</span>
            @if($caseStudy->meta_keywords)
                @foreach(array_slice(explode(',', $caseStudy->meta_keywords), 0, 3) as $kw)
                <span class="cs-hero-tag">{{ strtoupper(trim($kw)) }}</span>
                @endforeach
            @endif
        </div>

        {{-- Title --}}
        <h1 class="cs-hero-title">{{ $caseStudy->title }}</h1>

        {{-- Short Description --}}
        <p class="cs-hero-desc">{{ $caseStudy->short_description }}</p>

        {{-- Meta Info Bar --}}
        <div class="cs-hero-meta">
            @if($caseStudy->location)
            <span>📍 {{ $caseStudy->location }}</span>
            @endif
            @if($caseStudy->timeline)
            <span>⏱️ {{ $caseStudy->timeline }}</span>
            @endif
            @if($caseStudy->team_size)
            <span>👥 {{ $caseStudy->team_size }}</span>
            @endif
            @if($caseStudy->industry)
            <span>🏗️ {{ $caseStudy->industry }}</span>
            @endif
        </div>

    </div>
</section>
{{-- Breadcrumb --}}
<!-- <div class="cs-breadcrumb">
    <div class="container">
        <a href="{{ url('/') }}">HOME</a>
        <span>›</span>
        <a href="{{ route('case-studies.index') }}">CASE STUDIES</a>
        <span>›</span>
        <span class="active">{{ strtoupper($caseStudy->title) }}</span>
    </div>
</div> -->

{{-- Page Layout --}}
<section class="cs-single-section">
    <div class="container">
        <div class="row g-5">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-8" id="csContent">

                {{-- Cover Image --}}
                <div class="cs-cover-wrap">
                    <img
                        src="{{ asset('casestudy/' . $caseStudy->cover_image) }}"
                        alt="{{ $caseStudy->image_alt ?? $caseStudy->title }}"
                        title="{{ $caseStudy->image_title ?? $caseStudy->title }}"
                        class="cs-cover-img"
                    >
                    <span class="cs-industry-badge">{{ strtoupper($caseStudy->industry_tag) }}</span>
                </div>

                <p class="cs-single-cat">{{ strtoupper($caseStudy->category) }}</p>
                <h1 class="cs-single-title">{{ $caseStudy->title }}</h1>

                {{-- Project Overview --}}
                @if($caseStudy->project_overview)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow">
                        <span class="cs-line"></span> PROJECT OVERVIEW
                    </p>
                    <div class="cs-section-body">
                        {!! nl2br(e($caseStudy->project_overview)) !!}
                    </div>
                </div>
                @endif

                {{-- Challenge --}}
                @if($caseStudy->challenge_heading)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow">
                        <span class="cs-line"></span> THE CHALLENGE
                    </p>
                    <h2 class="cs-section-heading">{{ $caseStudy->challenge_heading }}</h2>
                    @if($caseStudy->challenge_body)
                    <div class="cs-section-body">
                        {!! nl2br(e($caseStudy->challenge_body)) !!}
                    </div>
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

                {{-- Solution --}}
                @if($caseStudy->solution)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow">
                        <span class="cs-line"></span> THE SOLUTION
                    </p>
                    <div class="cs-section-body">
                        {!! nl2br(e($caseStudy->solution)) !!}
                    </div>
                </div>
                @endif

                {{-- Results --}}
                @if($caseStudy->results)
                <div class="cs-section-block">
                    <p class="cs-section-eyebrow">
                        <span class="cs-line"></span> THE RESULTS
                    </p>
                    <div class="cs-section-body">
                        {!! nl2br(e($caseStudy->results)) !!}
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
                            <span class="cs-detail-icon">🏢</span>
                            <div>
                                <p class="cs-detail-label">CLIENT</p>
                                <p class="cs-detail-val">{{ $caseStudy->client }}</p>
                            </div>
                        </li>
                        @endif

                        @if($caseStudy->location)
                        <li>
                            <span class="cs-detail-icon">📍</span>
                            <div>
                                <p class="cs-detail-label">LOCATION</p>
                                <p class="cs-detail-val">{{ $caseStudy->location }}</p>
                            </div>
                        </li>
                        @endif

                        @if($caseStudy->service)
                        <li>
                            <span class="cs-detail-icon">🔧</span>
                            <div>
                                <p class="cs-detail-label">SERVICE</p>
                                <p class="cs-detail-val">{{ $caseStudy->service }}</p>
                            </div>
                        </li>
                        @endif

                        @if($caseStudy->industry)
                        <li>
                            <span class="cs-detail-icon">🏗️</span>
                            <div>
                                <p class="cs-detail-label">INDUSTRY</p>
                                <p class="cs-detail-val">{{ $caseStudy->industry }}</p>
                            </div>
                        </li>
                        @endif

                        @if($caseStudy->timeline)
                        <li>
                            <span class="cs-detail-icon">⏱️</span>
                            <div>
                                <p class="cs-detail-label">TIMELINE</p>
                                <p class="cs-detail-val">{{ $caseStudy->timeline }}</p>
                            </div>
                        </li>
                        @endif

                        @if($caseStudy->team_size)
                        <li>
                            <span class="cs-detail-icon">👥</span>
                            <div>
                                <p class="cs-detail-label">TEAM SIZE</p>
                                <p class="cs-detail-val">{{ $caseStudy->team_size }}</p>
                            </div>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


@include('sections.ready-to-scale')
@include('sections.location')
@endsection