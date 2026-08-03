@extends('layouts.app')
@section('title', 'About Us - Milestone')
@section('content')
@push('styles')
    @vite(['resources/css/aboutus.css'])
@endpush
{{-- ===================================================================
     SECTION: ABOUT MILESTONE PLM — S01
==================================================================== --}}
<style> 

.whoare-image-card {
    position: relative;
    overflow: hidden;
}

.whoare-image-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: -150%;
    width: 50%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,0.2),
        transparent
    );
    transform: skewX(-25deg);
    transition: left 1.2s ease;
}

.whoare-image-card:hover::before {
    left: 150%;
}



.whoare-overlay-box {
    position: absolute;
    bottom: 20px;
    border-radius: 20px;
    left: 20px;
    background: #111;
    color: #fff;
    padding: 20px;
}.whoare-overlay-box h3 {
    color: var(--plm-primary);
    font-size: 45px;
    font-weight: 700;
}

.abouthero-btn-primary {
    width: 230px;
}

.whoare-image-card img {
      height:auto;
      width: auto;
  }

.whoare-link {
    background-color: #fff;
    color: #EC6502;
    border-radius:20px;
    font-weight:500;
    border: 1px solid #EC6502;
    padding: 10px 20px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.whoare-link:hover {
    background-color: #EC6502;
    color: #fff;
    border-color: #EC6502;
}

.img-fluid {
    max-width: 100%;
    height: 260px;
}

.whoare-image-card {
    height: 370px;}


/* SECTION */
.purposeplm-section {
    background: #f8f8f8;
}

/* TAG */
.purposeplm-tag {
    color: var(--plm-primary);
    letter-spacing: 3px;
    font-size: 12px;
}

/* HEADING */
.purposeplm-heading {
    font-family: var(--plm-heading);
    font-size: clamp(28px, 3vw, 42px);
    font-weight: 800;
}

/* DESC */
.purposeplm-desc {
    color: var(--plm-secondary);
}

/* CARD — fixed min-height so both stay consistent */
.purposeplm-card {
    border-radius: 15px;
    padding: 50px;
    position: relative;
    min-height: 420px;               /* ← fixed size anchor */
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    will-change: transform;
}

/* Push the bottom line + label to the end regardless of content length */
.purposeplm-line {
    height: 1px;
    background: #ddd;
    margin: 20px 0 20px;
    margin-top: auto;                /* ← pushes footer to bottom */
}

/* DARK CARD */
.purposeplm-dark {
    background: #111;
    color: #fff;
}

/* DARK CARD HOVER */
.purposeplm-dark:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(236, 101, 2, 0.25);
}

/* LIGHT CARD */
.purposeplm-light {
    background: #fff;
    color: #111;
    border-top: 3px solid var(--plm-primary);
}

/* LIGHT CARD HOVER */
.purposeplm-light:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
    border-top-color: #c05500;
}

/* ICON */
.purposeplm-icon {
    width: 50px;
    height: 50px;
    background: rgba(236, 101, 2, 0.1);
    color: var(--plm-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: background 0.3s ease;
}

.purposeplm-icon.light {
    background: #f2f2f2;
}

.purposeplm-dark:hover .purposeplm-icon {
    background: rgba(236, 101, 2, 0.25);
}

.purposeplm-light:hover .purposeplm-icon.light {
    background: #e8e8e8;
}

/* SUB TAG */
.purposeplm-subtag {
    color: var(--plm-primary);
    font-size: 12px;
    letter-spacing: 2px;
}

.purposeplm-subtag h4 {
    font-size: 28px;
    font-weight: 600;
}

/* CARD TEXT — override for dark card */
.purposeplm-dark p {
    color: rgba(255, 255, 255, 0.65);
}

.purposeplm-light p {
    color: var(--plm-secondary);
}

/* SMALL TEXT */
.purposeplm-small {
    font-size: 12px;
    letter-spacing: 2px;
    color: var(--plm-primary);
}


/* ANIMATION */
.fade-down {
    opacity: 0;
    transform: translateY(-30px);
    animation: fadeDown 1s ease forwards;
}

@keyframes fadeDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 991px) {
    .purposeplm-section {
        text-align: center;
    }
}

@media (max-width: 576px) {
    .purposeplm-card {
        padding: 25px;
        min-height: 380px;
    }
    .whoare-overlay-box {
            left: 100px;
           bottom: 10px;
           padding:10px;
    }
    .whoare-overlay-box P {
        font-size: 15px;
        
    }
    .whoare-overlay-box h3 {
         font-size: 25px;
    }
    .whoare-image-card {
    height: 290px;
}
.whoare-link{
    font-size: 12px;
    padding: 13px;
}

 
}

@media (min-width: 768px) and (max-width: 834px) {
  .whoare-image-card img {
      height: 100%;
  }
  .whoare-overlay-box {
       left: 130px;
        bottom: 10px;
  }
   .whoare-image-card {
    height:500px;
}
}


@media (min-width: 835px) and (max-width: 1024px) {
 
}


.st-number {
    color:#EC6502 !important;
    font-weight: 700;
}
.stat-card {
    background: #fff;
    border-radius: 12px;
    padding: 32px 28px;
    border: 1.5px solid transparent;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    transition: border-color 0.3s ease, box-shadow 0.35s ease, transform 0.3s ease;
    height: 100%;               /* equal height inside align-items-stretch row */
}

/* HOVER — border glow + lift */
.stat-card:hover {
    border-color: #E07A2F;
    box-shadow: 0 8px 32px rgba(224, 122, 47, 0.18), 0 2px 8px rgba(0, 0, 0, 0.06);
    transform: translateY(-5px);
}

/* ICON */
.st-icon {
    width: 48px;
    height: 48px;
    background: rgba(224, 122, 47, 0.08);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    transition: background 0.3s ease;
}

.stat-card:hover .st-icon {
    background: rgba(224, 122, 47, 0.16);
}

/* NUMBER */
.st-number {
    font-size: clamp(30px, 4vw, 42px);
    font-weight: 800;
    color: #111;
    line-height: 1;
    margin-bottom: 8px;
}

/* TITLE */
.st-title {
    font-size: 15px;
    font-weight: 600;
    color: #111;
    margin-bottom: 8px;
}

/* DESC */
.st-desc {
    font-size: 14px;
    color: #777;
    line-height: 1.6;
}

.feat-card {
    border: 1.5px solid transparent;
    transition: border-color 0.3s ease, box-shadow 0.35s ease, transform 0.3s ease;
}

.feat-card:hover {
    border-color: #E07A2F;
    box-shadow: 0 8px 32px rgba(224, 122, 47, 0.18), 0 2px 8px rgba(0, 0, 0, 0.06);
    transform: translateY(-5px);
}

.feat-card:hover .fc-icon {
    background: rgba(224, 122, 47, 0.16);
}

/*buttom section border color animation css */
.val-card {
    position: relative;
    overflow: hidden;
}

.val-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 3px;
    height: 100%;
    background: #E07A2F;
    transform: translateY(-100%);
    transition: transform 0.4s ease;
}

.val-card:hover::before {
    transform: translateY(0);
}
</style>


  <section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.60) 0%,rgba(16,16,16,0.55) 35%,rgba(16,16,16,0.40) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('service-img/residential.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-7 col-lg-7 ">

                <div class="abouthero-breadcrumb">
                    <a href="/home">Home</a>
                    <span>›</span>
                    <a href="#">About Us</a>
                </div>

                <div class="abouthero-tag">
                About Milestone PLM
                </div>

                <h1 class="abouthero-title">
                    Engineering Expertise 
                     Powering Global
                     Innovation
                </h1>

                <p class="abouthero-desc" style="font-size:16px;">
                    Milestone PLM is a global engineering services partner delivering precision CAD, BIM, and structural solutions that accelerate construction and manufacturing projects worldwide.
                </p>

                <div class="abouthero-buttons">

                    <a href="/contact-us" class="abouthero-btn-primary">
                       REQUEST PROPOSAL
                        <span>→</span>
                    </a>

                    <a href="/services/bim-services" class="abouthero-btn-outline">
                        EXPLORE OUR SERVICES
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

                <div class="whoare-footer d-flex align-items-end justify-content-between mt-4">
                    <div>
                        <small>Engineering Solutions Partner Since</small>
                        <h4>2004</h4>
                    </div>

                    <a href="/services/bim-services" class="whoare-link">
                        OUR SERVICES →
                    </a>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">

                <div class="whoare-image-card ">

                    <img src="{{ asset('images/testimonials-image1.jpg') }}" 
                         class="img-fluid align-items-end" 
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
                <div class="abouthero-tag">OUR PURPOSE</div>
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
        <div class="row g-4 align-items-stretch">
            <!-- LEFT CARD (MISSION) -->
            <div class="col-lg-6 d-flex">
                <div class="purposeplm-card purposeplm-dark w-100">
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
            <div class="col-lg-6 d-flex">
                <div class="purposeplm-card purposeplm-light w-100">
                    <div class="purposeplm-icon light">
                        <img src="{{ asset('images/about-image3.svg') }}">
                    </div>
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
        <div class="row align-items-end mb-5">
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
                            <img src="{{ asset('images/execute-the-project-three.jpeg') }}" alt="Diverse team" loading="lazy">
                        </div>
                    </div>
                     <div class="collage-row collage-row--bottom">
                         <div class="collage-img collage-img--bottom-right fade-up" style="transition-delay:.3s">
                            <img src="{{ asset('images/about-frame-4.jpg') }}" alt="Diverse team" loading="lazy" >
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
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">

    <!-- Light Rays -->
    <line x1="12" y1="2" x2="12" y2="5"/>
    <line x1="4.9" y1="4.9" x2="7" y2="7"/>
    <line x1="19.1" y1="4.9" x2="17" y2="7"/>

    <!-- Bulb -->
    <path d="M8 11a4 4 0 1 1 8 0c0 1.5-.8 2.5-1.8 3.5-.6.6-1.2 1.3-1.2 2H11c0-.7-.6-1.4-1.2-2C8.8 13.5 8 12.5 8 11Z"/>

    <!-- Bulb Base -->
    <path d="M10 19h4"/>
    <path d="M10.5 21h3"/>
</svg>
        
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
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">

    <path d="M8 12L5 9L2 12L6 16L9 13"/>
    <path d="M16 12L19 9L22 12L18 16L15 13"/>
    <path d="M9 13L11 15C11.6 15.6 12.4 15.6 13 15L15 13"/>
    <path d="M8 8L10 6C11 5 13 5 14 6L16 8"/>
</svg>
                            </div>
                            <h4 class="culture-card__title">Integrity</h4>
                            <p class="culture-card__text">We build long-term relationships through trust, transparency, and accountability.</p>
                        </div>
                    </div>
                    <div class="col-6 fade-up" style="transition-delay:.35s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                               <svg xmlns="http://www.w3.org/2000/svg"
     width="22"
     height="22"
     viewBox="0 0 24 24"
     fill="none"
     stroke="#EC6502"
     stroke-width="1.8"
     stroke-linecap="round"
     stroke-linejoin="round">

    <!-- Monitor -->
    <rect x="3" y="4" width="18" height="12" rx="2"></rect>
    <path d="M8 20h8"></path>
    <path d="M12 16v4"></path>

    <!-- Small Gear -->
    <circle cx="17" cy="10" r="2"></circle>
    <path d="M17 7.5v1"></path>
    <path d="M17 11.5v1"></path>
    <path d="M14.5 10h1"></path>
    <path d="M18.5 10h1"></path>
</svg>
                            </div>
                            <h4 class="culture-card__title">Engineering Excellence</h4>
                            <p class="culture-card__text">We build long-term relationships through trust, transparency, and accountability.</p>
                        </div>
                    </div>
<div class="col-6 fade-up" style="transition-delay:.35s">
                        <div class="culture-card">
                            <div class="culture-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
     width="22"
     height="22"
     viewBox="0 0 24 24"
     fill="none"
     stroke="#EC6502"
     stroke-width="1.8"
     stroke-linecap="round"
     stroke-linejoin="round">

    <circle cx="12" cy="12" r="9"></circle>
    <path d="M8 12.5L10.8 15.3L16 10"></path>

</svg>
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
        <div class="row align-items-end">

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
                    <img src="{{ asset('images/about-image1.png') }}"
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
        <svg width="30" height="30" viewBox="0 0 24 24"
     fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">
    <circle cx="12" cy="10" r="5"/>
    <path d="M9.5 14L8 20L12 17.5L16 20L14.5 14"/>
</svg>
      </div>
      <div class="st-number" data-target="20" data-suffix="+">0</div>
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
      <div class="st-number" data-target="500" data-suffix="+">0</div>
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
      <div class="st-number" data-target="100" data-suffix="+">0</div>
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
      <!-- No counter for text value — left as-is -->
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
           <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E07A2F" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"> <circle cx="12" cy="12" r="3"/> <path d="M12 2V5"/><path d="M12 19V22"/> <path d="M2 12H5"/> <path d="M19 12H22"/> <path d="M5 5L7 7"/> <path d="M17 17L19 19"/><path d="M5 19L7 17"/><path d="M17 7L19 5"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#EC6502" stroke-width="1.8"  stroke-linecap="round" stroke-linejoin="round"> <circle cx="12" cy="12" r="9"></circle><path d="M12 3C9 6 9 18 12 21"></path><path d="M12 3C15 6 15 18 12 21"></path><path d="M3 12H21"></path><path d="M5 7.5C7 8.5 17 8.5 19 7.5"></path><path d="M5 16.5C7 15.5 17 15.5 19 16.5"></path></svg>
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
           <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">
    <circle cx="12" cy="13" r="5"/>
    <path d="M10 3L12 7L14 3"/>
    <path d="M12 10.5L12.9 12.3L14.9 12.6L13.45 14L13.8 16L12 15L10.2 16L10.55 14L9.1 12.6L11.1 12.3L12 10.5Z"/>
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
           <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">

    <!-- Light Rays -->
    <line x1="12" y1="2" x2="12" y2="5"/>
    <line x1="4.9" y1="4.9" x2="7" y2="7"/>
    <line x1="19.1" y1="4.9" x2="17" y2="7"/>

    <!-- Bulb -->
    <path d="M8 11a4 4 0 1 1 8 0c0 1.5-.8 2.5-1.8 3.5-.6.6-1.2 1.3-1.2 2H11c0-.7-.6-1.4-1.2-2C8.8 13.5 8 12.5 8 11Z"/>

    <!-- Bulb Base -->
    <path d="M10 19h4"/>
    <path d="M10.5 21h3"/>
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
           <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
     stroke="#E07A2F"
     stroke-width="1.6"
     stroke-linecap="round"
     stroke-linejoin="round">

    <path d="M7 12L10 15L17 8"/>
    <path d="M4 12L7 15"/>
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
         <svg xmlns="http://www.w3.org/2000/svg"
     width="22"
     height="22"
     fill="none"
     viewBox="0 0 24 24"
     stroke="#EC6502"
     stroke-width="1.8">
    <path stroke-linecap="round"
          stroke-linejoin="round"
          d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
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

<!-----form-location-sort-code------>
@include('sections.ready-to-scale')
@include('sections.location')

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


document.addEventListener('DOMContentLoaded', () => {

    const counters = document.querySelectorAll('.st-number[data-target]');

    const animateCounter = (el) => {
        const target = +el.dataset.target;
        const suffix = el.dataset.suffix || '';
        const duration = 2500;           // ms
        const frameRate = 1000 / 60;    // 60fps
        const totalFrames = Math.round(duration / frameRate);
        let frame = 0;

        const counter = setInterval(() => {
            frame++;
            // easeOutQuart for a natural deceleration
            const progress = 1 - Math.pow(1 - frame / totalFrames, 4);
            const current = Math.round(target * progress);
            el.textContent = current + suffix;

            if (frame === totalFrames) {
                clearInterval(counter);
                el.textContent = target + suffix; // ensure exact final value
            }
        }, frameRate);
    };

    // IntersectionObserver — fires counter only when card scrolls into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target); // run once
            }
        });
    }, { threshold: 0.3 });

    counters.forEach(el => observer.observe(el));
});



</script>
</section>
@endsection