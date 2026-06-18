@extends('layouts.app')
@section('title', 'About Us - Milestone')
@section('content')
@push('styles')
    @vite(['resources/css/aboutus.css'])
@endpush
{{-- ===================================================================
     SECTION: ABOUT MILESTONE PLM — S01
==================================================================== --}}
  <section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/Architectural-Services.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-6 col-lg-7 col-md-10">

                <div class="abouthero-breadcrumb">
                    <a href="#">Home</a>
                    <span>›</span>
                    <a href="#">About Us</a>
                </div>

                <div class="abouthero-tag">
                About Milestone PLM
                </div>

                <h1 class="abouthero-title">
                    Engineering Expertise <br>
                     Powering Global<br>
                     Innovation
                </h1>

                <p class="abouthero-desc">
                    Milestone PLM is a global engineering services partner delivering precision CAD, BIM, and structural solutions that accelerate construction and manufacturing projects worldwide.
                </p>

                <div class="abouthero-buttons">

                    <a href="#" class="abouthero-btn-primary">
                        Request a Proposal
                        <span>→</span>
                    </a>

                    <a href="#" class="abouthero-btn-outline">
                        Explore Our Services
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
                <div class="abouthero-tag">WHO WE ARE</div>
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
                 <div class="abouthero-tag">

               OUR PURPOSE

                </div>
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
                        To be the world's most trusted offshore engineering partner — continuously adopting emerging technologies, refining delivery processes.
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
{{-- resources/views/sections/team.blade.php --}}
{{-- Include in your layout: @include('sections.team') --}}

@php
$teamMembers = [
    [
        'name'   => 'Rajesh Nair',
        'role'   => 'Founder & Managing Director',
        'image'  => asset('images/about-1.jpg'),
        'quote'  => '"We built Milestone to be the most trusted engineering delivery partner in global AEC — precise, accountable, and always on time."',
    ],
    [
        'name'   => 'Anita Krishnan',
        'role'   => 'Director of Engineering',
        'image'  => asset('images/about-two.jpg'),
        'quote'  => '"Engineering excellence is not just about technical skill — it\'s about the systems, standards, and people behind every deliverable."',
    ],
    [
        'name'   => 'David Mitchell',
        'role'   => 'Head of Global Operations',
        'image'  => asset('images/about-three.jpg'),
        'quote'  => '"Our global delivery model gives clients the flexibility of a local partner with the scale and quality of an enterprise operation."',
    ],
    [
        'name'   => 'Priya Menon',
        'role'   => 'Head of BIM & Digital',
        'image'  => asset('images/about-four.jpg'),
        'quote'  => '"BIM is the language of modern construction — we make sure every project is digitally connected, coordinated, and future-ready."',
    ],
];
@endphp

<section class="team-section py-5">
    <div class="container">

        {{-- Section Header --}}
        <div class="row align-items-start mb-5">
            <div class="col-lg-7">
                 <div class="abouthero-tag">Our Leadership</div>
                <h2 class="team-heading">The Team Behind Milestone</h2>
            </div>
            <div class="col-lg-5 d-flex align-items-end">
                <p class="team-subtext">
                    Experienced engineering leaders who have built and delivered
                    complex projects across four continents.
                </p>
            </div>
        </div>

        {{-- Team Cards Grid --}}
        <div class="row g-4">
            @foreach ($teamMembers as $member)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="team-card">

                    {{-- Image wrapper --}}
                    <div class="team-card__img-wrap">

                        {{-- TOP BORDER ONLY: slides left to right on hover --}}
                        <div class="team-card__top-border"></div>

                        <img
                            src="{{ $member['image'] }}"
                            alt="{{ $member['name'] }}"
                            class="team-card__img"
                            loading="lazy"
                        >

                        {{-- Name / Role overlay at bottom of image --}}
                        <div class="team-card__overlay">
                            <h3 class="team-card__name">{{ $member['name'] }}</h3>
                            <p class="team-card__role">{{ $member['role'] }}</p>
                        </div>

                    </div>
                    {{-- Quote below card --}}
                    <p class="team-card__quote">{{ $member['quote'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ============================================================
     SECTION: What We Do — Core Engineering Capabilities S05
============================================================ --}}

{{-- resources/views/sections/culture.blade.php --}}
{{-- @include('sections.culture') --}}

<section class="culture-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- LEFT: Image Collage --}}
            <div class="col-12 col-lg-6">
                <div class="culture-collage">

                    {{-- Top row: big left + small right --}}
                    <div class="collage-row collage-row--top">
                        <div class="collage-img collage-img--tall fade-up">
                            <img src="{{ asset('images/about-frame-1.jpg') }}" alt="Team collaboration" loading="lazy">
                        </div>
                        <div class="collage-img collage-img--top-right fade-up" style="transition-delay:.1s">
                            <img src="{{ asset('images/about-frame-2.jpg') }}" alt="Team meeting" loading="lazy">
                        </div>
                    </div>

                    {{-- Bottom row: right image only (big) + small bottom-left --}}
                    <div class="collage-row collage-row--bottom">
                        <div class="collage-img collage-img--bottom-left fade-up" style="transition-delay:.2s">
                            <img src="{{ asset('images/about-frame-3.jpg') }}" alt="Working on laptop" loading="lazy">
                        </div>
                        <div class="collage-img collage-img--bottom-right fade-up" style="transition-delay:.3s">
                            <img src="{{ asset('images/about-frame-4.jpg') }}" alt="Diverse team" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Text + Feature Cards --}}
            <div class="col-12 col-lg-6">
                <div class="abouthero-tag">Our Culture</div>
                <h2 class="culture-heading fade-up" style="transition-delay:.05s">
                    A Global Team,<br>One Shared Culture
                </h2>
                <p class="culture-text fade-up" style="transition-delay:.1s">
                    At Milestone, our culture is built on collaboration, continuous learning,
                    innovation, and engineering excellence.
                </p>
                <p class="culture-text fade-up" style="transition-delay:.15s">
                    Across teams, projects, and geographies, we foster an environment where
                    people are empowered to solve complex challenges, grow professionally,
                    and deliver meaningful results for clients worldwide.
                </p>

                {{-- Feature Cards Grid --}}
                <div class="row g-3 mt-3">

                    <div class="col-6 fade-up" style="transition-delay:.2s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                            </div>
                            <h4 class="culture-card__title">Continuous Learning</h4>
                            <p class="culture-card__text">We encourage growth through knowledge sharing, training, and hands-on experience.</p>
                        </div>
                    </div>

                    <div class="col-6 fade-up" style="transition-delay:.25s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                            </div>
                            <h4 class="culture-card__title">Innovation</h4>
                            <p class="culture-card__text">We embrace new technologies and creative problem-solving to push boundaries.</p>
                        </div>
                    </div>

                    <div class="col-6 fade-up" style="transition-delay:.3s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                            </div>
                            <h4 class="culture-card__title">Collaboration</h4>
                            <p class="culture-card__text">Our teams work across disciplines and geographies to deliver better outcomes.</p>
                        </div>
                    </div>

                    <div class="col-6 fade-up" style="transition-delay:.35s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                            </div>
                            <h4 class="culture-card__title">Integrity</h4>
                            <p class="culture-card__text">We build long-term relationships through trust, transparency, and accountability.</p>
                        </div>
                    </div>
                    <div class="col-6 fade-up" style="transition-delay:.35s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                            </div>
                            <h4 class="culture-card__title">Engineering Excellence</h4>
                            <p class="culture-card__text">We build long-term relationships through trust, transparency, and accountability.</p>
                        </div>
                    </div>
<div class="col-6 fade-up" style="transition-delay:.35s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                            </div>
                            <h4 class="culture-card__title">Client Success</h4>
                            <p class="culture-card__text">We build long-term relationships through trust, transparency, and accountability.</p>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================
     SCROLL FADE-UP JAVASCRIPT
     Place this before </body> or in your app.js
     ===================================================== --}}

     <section class="ms-engineering-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 col-md-12">
                <div class="ms-content-box"><div class="abouthero-tag"> WHY MILESTONE</div>
                    <h2 class="ms-main-title">
                        Engineering Excellence
                        <br>
                        Built for Global Delivery
                    </h2>

                    <p class="ms-description">
                        Milestone PLM combines deep engineering expertise,
                        advanced BIM workflow and global project delivery capabilities
                        to execute complex projects efficiently.
                    </p>

                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 col-md-12">
                <div class="ms-image-box">
                    <img src="{{ asset('images/about-structure-image.png') }}"
                         alt="Engineering Structure"
                         class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>

<!-------------------------------------------------

 the cared section bottom

 -------------------------------------------------->
<section class="stats-section py-5">
  <div class="container">

    {{-- ROW 1: Big Stat Cards --}}
    <div class="row g-4 mb-4">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-card">
          <div class="st-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <circle cx="12" cy="8" r="4"/>
              <path d="M6 20v-1a6 6 0 0112 0v1"/>
              <path d="M9 11l1.5 1.5L15 8"/>
            </svg>
          </div>
          <div class="st-number">20+</div>
          <div class="st-title">Years Experience</div>
          <div class="st-desc">Two decades of delivering excellence in engineering and BIM solutions.</div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-card">
          <div class="st-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <rect x="3" y="3" width="18" height="18" rx="2"/>
              <path d="M4 6h16M4 10h16M4 14h10M4 18h6"/>
            </svg>
          </div>
          <div class="st-number">500+</div>
          <div class="st-title">Projects Delivered</div>
          <div class="st-desc">Successfully executed projects across diverse industries worldwide.</div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-card">
          <div class="st-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
            </svg>
          </div>
          <div class="st-number">100+</div>
          <div class="st-title">Engineering Experts</div>
          <div class="st-desc">Skilled professionals driving innovation and precision in every project.</div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="stat-card">
          <div class="st-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <circle cx="12" cy="12" r="9"/>
              <path d="M12 3a15 15 0 010 18M3 12h18"/>
            </svg>
          </div>
          <div class="st-number">Global</div>
          <div class="st-title">Delivery Network</div>
          <div class="st-desc">Strong global presence ensuring seamless delivery across time zones.</div>
        </div>
      </div>

    </div>

    {{-- ROW 2: Feature Cards --}}
    <div class="row g-4">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feat-card">
          <div class="fc-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <rect x="3" y="3" width="18" height="18" rx="2"/>
              <path d="M4 6h16M4 10h16M4 14h10M4 18h6"/>
            </svg>
          </div>
          <div class="fc-body">
            <div class="fc-title">BIM Excellence</div>
            <div class="fc-desc">Advanced BIM workflows ensuring accuracy, efficiency and better project outcomes.</div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feat-card">
          <div class="fc-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <circle cx="12" cy="8" r="4"/>
              <path d="M6 20v-1a6 6 0 0112 0v1"/>
              <path d="M9 11l1.5 1.5L15 8"/>
            </svg>
          </div>
          <div class="fc-body">
            <div class="fc-title">Multi-Industry Expertise</div>
            <div class="fc-desc">Experience across residential, commercial, industrial and infrastructure projects.</div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feat-card">
          <div class="fc-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <path d="M12 22s-8-4-8-10V5l8-3 8 3v7c0 6-8 10-8 10z"/>
            </svg>
          </div>
          <div class="fc-body">
            <div class="fc-title">Global Standards</div>
            <div class="fc-desc">Adherence to international standards and best practices ensuring quality and safety.</div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feat-card">
          <div class="fc-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
            </svg>
          </div>
          <div class="fc-body">
            <div class="fc-title">Scalable Teams</div>
            <div class="fc-desc">Flexible and scalable team structure to meet projects of any size and complexity.</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ---------------------------------
last section start code  -
------------------------------------->
<section class="values-section py-5">
  <div class="container-xl">

    {{-- Section Header --}}
    <div class="text-center mb-5">
      <div class="values-eyebrow">
        <span></span>
        <p>OUR VALUES</p>
        <span></span>
      </div>
      <h2 class="values-heading">The Principles That Define Us</h2>
    </div>

    {{-- Cards Row --}}
    <div class="row g-4">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="val-card">
          <div class="val-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
              stroke="#E07A2F" stroke-width="1.6">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02
                12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
          </div>
          <h3 class="val-title">Quality</h3>
          <p class="val-desc">We uphold the highest standards in every deliverable,
            backed by ISO-certified QA processes and peer reviews.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="val-card">
          <div class="val-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
              stroke="#E07A2F" stroke-width="1.6">
              <line x1="12" y1="2" x2="12" y2="6"/>
              <path d="M12 6a6 6 0 100 12 6 6 0 000-12z"/>
              <line x1="12" y1="18" x2="12" y2="22"/>
              <path d="M9 21h6"/>
            </svg>
          </div>
          <h3 class="val-title">Innovation</h3>
          <p class="val-desc">We continuously adopt emerging technologies to deliver
            smarter, faster, and more accurate engineering outcomes.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="val-card">
          <div class="val-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
              stroke="#E07A2F" stroke-width="1.6">
              <path d="M12 22s-8-4-8-10V5l8-3 8 3v7c0 6-8 10-8 10z"/>
            </svg>
          </div>
          <h3 class="val-title">Integrity</h3>
          <p class="val-desc">Transparent communication, ethical practices, and
            confidential handling of all client data and project information.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="val-card">
          <div class="val-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
              stroke="#E07A2F" stroke-width="1.6">
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06
                a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78
                1.06-1.06a5.5 5.5 0 000-7.78z"/>
            </svg>
          </div>
          <h3 class="val-title">Collaboration</h3>
          <p class="val-desc">We work as an extension of your team, aligning with
            your workflows, tools, and project goals seamlessly.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!--------=======================================
                form code start 
========================================-------->
<section class="ready-scale">
    <div class="container">
        <div class="row align-items-center g-0">

            {{-- ── LEFT CONTENT ─────────────────────────────────────── --}}
            <div class="col-lg-6 left-content">

                <span class="tag">
                    <span class="tag-line"></span>
                    READY TO SCALE?
                </span>

                <h1 class="heading-contactfornhome">
    Let's accelerate your <span style="color:#EC6502;">next project.</span>
</h1>
                </h1>

                <p class="description-contactform-home">
                    Precision CAD, BIM, and structural detailing —
                    delivered by a global engineering team, on time, every time.
                </p>

                {{-- Trust bullets --}}
                <ul class="trust-list">
                   <li>
    <span class="trust-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 7v5l3 2"></path>
        </svg>
    </span>
    Response within 1 business day — guaranteed
</li>
                    <li>
                       <span class="trust-icon">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
         stroke="currentColor" stroke-width="2"
         stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 3l7 3v5c0 5-3.5 8-7 10-3.5-2-7-5-7-10V6l7-3z"/>
    </svg>
</span>
                        No commitment required · Free initial consultation
                    </li>
                    <li>
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <circle cx="9" cy="8" r="3"/>
    <circle cx="17" cy="8" r="2"/>
    <path d="M4 18c0-3 2-5 5-5s5 2 5 5"/>
    <path d="M15 18c0-2 1.5-4 4-4"/>
</svg></span>
                        Dedicated project lead assigned from day one
                    </li>
                    <li>
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <path d="M12 3l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3 6.4 20.2l1.1-6.2L3 9.6l6.2-.9L12 3z"/>
</svg></span>
                        98% client satisfaction across 500+ projects
                    </li>
                </ul>

                <hr class="rs-divider">

                <div class="contact-info">
                    <div class="item">
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6v3.5c0 .6-.4 1-1 1C10.3 21 3 13.7 3 4.7c0-.6.4-1 1-1h3.5c0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1l-2.2 2.2z"/>
</svg></span>
                        <span>+1-919-238-8044</span>
                    </div>
                    <div class="item">
                        <span class="trust-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff7a00" stroke-width="2">
    <rect x="3" y="5" width="18" height="14" rx="1"/>
    <path d="M3 7l9 6 9-6"/>
</svg></span>
                        <span>info@milestoneplm.com</span>
                    </div>
                </div>

            </div>

            {{-- ── RIGHT FORM ───────────────────────────────────────── --}}
            <div class="col-lg-6">
                <div class="form-card">

                    <p class="form-eyebrow">SCHEDULE A CONSULTATION</p>
                    <h5>Tell us about your project</h5>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" id="rsForm" novalidate>
                        @csrf

                        {{-- Full Name --}}
                        <div class="rs-field">
                            <label for="rs_name">FULL NAME <span class="req">*</span></label>
                            <input
                                type="text"
                                id="rs_name"
                                name="name"
                                placeholder="Jane Smith"
                                value="{{ old('name') }}"
                                class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                maxlength="100"
                                autocomplete="name"
                                required
                            >
                            @error('name')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email + Phone --}}
                        <div class="rs-row">
                            <div class="rs-field">
                                <label for="rs_email">WORK EMAIL <span class="req">*</span></label>
                                <input
                                    type="email"
                                    id="rs_email"
                                    name="email"
                                    placeholder="jane@company.com"
                                    value="{{ old('email') }}"
                                    class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    maxlength="255"
                                    autocomplete="email"
                                    required
                                >
                                @error('email')
                                    <span class="rs-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="rs-field">
                                <label for="rs_phone">PHONE</label>
                                <input
                                    type="tel"
                                    id="rs_phone"
                                    name="phone"
                                    placeholder="+1 (555) 000-0000"
                                    value="{{ old('phone') }}"
                                    class="{{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                    maxlength="30"
                                    autocomplete="tel"
                                >
                                @error('phone')
                                    <span class="rs-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Service --}}
                        <div class="rs-field">
                            <label for="rs_service">SERVICE OF INTEREST</label>
                            <select id="rs_service" name="service" class="{{ $errors->has('service') ? 'is-invalid' : '' }}">
                                <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service…</option>
                                <option value="CAD Design"              {{ old('service') === 'CAD Design'              ? 'selected' : '' }}>CAD Design</option>
                                <option value="BIM Services"             {{ old('service') === 'BIM Services'             ? 'selected' : '' }}>BIM Services</option>
                                <option value="Structural Detailing"     {{ old('service') === 'Structural Detailing'     ? 'selected' : '' }}>Structural Detailing</option>
                                <option value="Engineering Consultation" {{ old('service') === 'Engineering Consultation' ? 'selected' : '' }}>Engineering Consultation</option>
                            </select>
                            @error('service')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Project Brief --}}
                        <div class="rs-field">
                            <label for="rs_brief">PROJECT BRIEF</label>
                            <textarea
                                id="rs_brief"
                                name="project_brief"
                                placeholder="Briefly describe your project or requirements…"
                                rows="4"
                                maxlength="2000"
                                class="{{ $errors->has('project_brief') ? 'is-invalid' : '' }}"
                            >{{ old('project_brief') }}</textarea>
                            @error('project_brief')
                                <span class="rs-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Honeypot anti-spam (hidden from real users) --}}
                        <div style="display:none" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <button type="submit" id="rsSubmit">
                            <span class="rs-btn-label">SEND REQUEST</span>
                            <span class="rs-arrow">→</span>
                            <span class="rs-spinner d-none">⏳</span>
                        </button>

                        <p class="rs-note">Free consultation · No spam, ever · Confidential</p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="loc-section" id="locations-section" aria-labelledby="loc-heading">
    <div class="container loc-container">

        {{-- Section heading --}}
        <p class="loc-heading" id="loc-heading">Our locations:</p>

        {{-- Locations row --}}
        <div class="row g-4 loc-row">

            @php
                $locations = [
                    [
                        'country' => 'India',
                        'city'    => 'Thane',
                        'address' => "202 Siddhashram CHS, Gokhale Road",
                        'image'   => 'images/plm-home-locations1.jpg',
                        'alt'     => 'Bangalore city skyline',
                    ],
                    [
                        'country' => 'USA',
                        'city'    => 'Dover',
                        'address' => "8 The Green #20190",
                        'image'   => 'images/plm-home-locations2.jpg',
                        'alt'     => '8 The Green #20190',
                    ],
                    [
                        'country' => 'UK',
                        'city'    => 'Reading',
                        'address' => "Davidson House, Forbury Square",
                        'image'   => 'images/plm-home-locations3.jpg',
                        'alt'     => 'London aerial view',
                    ],
                   
                ];
            @endphp

            @foreach ($locations as $loc)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="loc-card">

                        {{-- Circle image --}}
                        <div class="loc-card__img-wrap" aria-hidden="true">
                            <img
                                src="{{ asset($loc['image']) }}"
                                alt="{{ e($loc['alt']) }}"
                                class="loc-card__img"
                                loading="lazy"
                            >
                        </div>

                        {{-- Text --}}
                        <div class="loc-card__body">
                            <span class="loc-card__country">{{ e($loc['country']) }}</span>
                            <h3 class="loc-card__city">{{ e($loc['city']) }}</h3>
                            <address class="loc-card__address">
                                {!! nl2br(e($loc['address'])) !!}
                            </address>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>{{-- /.row --}}

    </div>{{-- /.container --}}
</section>

@push('scripts')
@endpush









<!-- Our Leadership  this section js script start -->
<script>
(function () {
    'use strict';

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                // Remove 'visible' so animation replays on scroll back up
                entry.target.classList.remove('visible');
            }
        });
    }, {
        threshold: 0.15
    });

    document.querySelectorAll('.fade-up').forEach(function (el) {
        observer.observe(el);
    });
}());
</script>
</section>
@endsection