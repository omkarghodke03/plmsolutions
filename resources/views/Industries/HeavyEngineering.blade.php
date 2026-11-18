@extends('layouts.app')

@section('title', 'Heavy Engineering Industries')

@section('content')
<style>

/* ---------------------------------------------------------------------------
   1. VARIABLES
--------------------------------------------------------------------------- */
.automotive-section {
    --auto-primary: #EC6502;
    --auto-primary-dark: #cf5601;
    --auto-text-dark: #1d1d1d;
    --auto-text-gray: #5f5f5f;
    --auto-border-light: #e5e5e5;
    --auto-bg-light: #f5f5f5;
    --auto-font: Arial, sans-serif;
    font-family: var(--auto-font);
    color: var(--auto-text-dark);
    overflow-x: hidden;
}

.automotive-section * {
    font-family: var(--auto-font);
}

/* ---------------------------------------------------------------------------
   2. GLOBAL / BASE SECTION STYLES
--------------------------------------------------------------------------- */
.auto-content-section {
    padding: 70px 0;
    scroll-margin-top: calc(var(--auto-header-offset) + 60px);
}

/* Smooth page scrolling */
html {
    scroll-behavior: smooth;
}

.auto-heading {
    font-family: var(--plm-heading);
    font-weight: 700;
    font-size: clamp(26px, 4vw, 36px);
    line-height: 1.25;
    margin-bottom: 30px;
    color:black;
}

.auto-subheading {
    font-family: var(--plm-heading);
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 20px;
}

.abouthero-btn-primary,
.abouthero-btn-outline {
    height: 50px;
    font-size: 13px;
}

.auto-paragraph {
    font-family: var(--plm-heading);
    font-size: 15px;
    line-height: 1.5;
    color: var(--auto-text-gray);
    margin-bottom: 20px;
}

.auto-eyebrow {
    font-size: 14px;
    color: var(--auto-text-gray);
    margin-bottom: 4px;
}

.auto-btn-primary {
    display: inline-block;
    background-color: var(--auto-primary);
    color: #fff !important;
    font-weight: 500;
    font-size: 15px;
    padding: 12px 26px;
    border-radius: 4px;
    border: none;
    text-decoration: none;
    transition: background-color 0.2s ease, transform 0.15s ease;
}

.auto-btn-primary:hover {
    background-color: var(--auto-primary-dark);
    color: #fff;
    transform: translateY(-1px);
}

.auto-btn-lg {
    padding: 14px 34px;
    font-size: 16px;
}

.auto-chevron {
    color: var(--auto-primary);
    font-weight: 700;
    font-size: 20px;
    margin-right: 8px;
    display: inline-block;
    transform: translateY(1px);
}

/* ---------------------------------------------------------------------------
   3. STICKY TAB NAVIGATION
--------------------------------------------------------------------------- */
.auto-sticky-nav {
    position: sticky;
    top: var(--auto-header-offset); /* sits below your real site header */
    z-index: 100; /* must stay LOWER than your real header's z-index */
    background: var(--white, #fff);
    border-bottom: 1px solid var(--auto-border-light);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
}

.auto-nav-inner {
    padding: 14px 30px;
}

/* Breadcrumb */
.auto-breadcrumb .breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
    font-size: 14px;
    flex-wrap: wrap;
}

.auto-breadcrumb .breadcrumb-item a {
    color: var(--auto-text-gray);
    text-decoration: none;
}

.auto-breadcrumb .breadcrumb-item.active {
    color: var(--auto-text-dark);
    font-weight: 500;
}

.auto-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: var(--auto-text-gray);
}

.auto-home-icon {
    width: 16px;
    height: 16px;
    opacity: 0.6;
}

/* Tabs */
.auto-tab-nav {
    gap: 28px;
    flex-wrap: wrap;
}

.auto-tab-link {
    font-family: var(--plm-heading);
    color: var(--auto-text-gray) !important;
    font-size: 15px;
    font-weight: 500;
    padding: 6px 2px !important;
    border: none !important;
    border-bottom: 2px solid transparent !important;
    border-radius: 0 !important;
    background: transparent !important;
    transition: color 0.2s ease, border-color 0.2s ease;
    white-space: nowrap;
}

.auto-tab-link:hover {
    color: var(--auto-primary) !important;
}

.auto-tab-link.active {
    color: var(--auto-primary) !important;
    border-bottom-color: var(--auto-primary) !important;
    font-weight: 500;
}

/* ---------------------------------------------------------------------------
   4. OVERVIEW SECTION
--------------------------------------------------------------------------- */
.auto-overview-section .auto-overview-text {
    padding-right: 30px;
}

.auto-video-wrapper {
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    line-height: 0;
}

.auto-video-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.auto-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.15);
    border: 2px solid #fff;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    backdrop-filter: blur(2px);
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.auto-play-btn:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%) scale(1.06);
}

.auto-play-btn svg {
    margin-left: 3px;
}

/* ---------------------------------------------------------------------------
   5. CHALLENGES SECTION
--------------------------------------------------------------------------- */
.auto-challenges-intro {
    margin-bottom: 60px;
}

.auto-challenges-img {
    width: 100%;
    border-radius: 4px;
    object-fit: cover;
}

.auto-challenges-text-col {
    padding-left: 40px;
}

.auto-chevron-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.auto-chevron-list li {
    border-bottom: 1px solid var(--auto-border-light);
}

.auto-chevron-list li a {
    font-family: var(--plm-heading);
    display: block;
    padding: 16px 4px;
    color: var(--auto-text-dark);
    text-decoration: none;
    font-size: 16px;
    transition: color 0.2s ease, padding-left 0.2s ease;
}

.auto-chevron-list li a:hover {
    color: var(--auto-primary);
    padding-left: 8px;
}

.auto-insight-box {
    background-color: var(--auto-bg-light);
    padding: 40px;
    border-radius: 4px;
    height: 100%;
}

.auto-insight-icon img {
    width: 56px;
    height: 56px;
    margin-bottom: 16px;
}

.auto-insight-heading {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 16px;
}

/* ---------------------------------------------------------------------------
   6. SOLUTIONS SECTION
--------------------------------------------------------------------------- */
.auto-solutions-section {
    text-align: left;
}

.auto-solutions-icon img {
    width: 56px;
    height: 56px;
    margin-bottom: 16px;
}

.auto-solutions-intro {
    color: var(--auto-primary);
    max-width: 800px;
}

.auto-solutions-grid {
    margin-top: 30px;
    row-gap: 24px;
}

.auto-solution-item {
    display: flex;
    align-items: flex-start;
    gap: 4px;
    text-decoration: none;
    color: var(--auto-text-dark);
    font-size: 15px;
    line-height: 1.6;
    padding-right: 20px;
    transition: color 0.2s ease;
}

.auto-solution-item:hover {
    color: var(--auto-primary);
}

.auto-solution-item .auto-chevron {
    flex-shrink: 0;
}


.auto-contact-section {
    background-color: var(--auto-bg-light);
}

.auto-contact-intro {
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* ---------------------------------------------------------------------------
   8. RESPONSIVE (TABLET / MOBILE)
--------------------------------------------------------------------------- */

/* Tablet */
@media (max-width: 991.98px) {
    .auto-nav-inner {
        padding: 12px 20px;
    }

    .auto-tab-nav {
        gap: 20px;
        margin-top: 10px;
        justify-content: flex-start !important;
        overflow-x: auto;
        flex-wrap: nowrap;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .auto-tab-nav::-webkit-scrollbar {
        display: none;
    }

    .auto-heading {
        font-size: 28px;
    }

    .auto-overview-section .auto-overview-text {
        padding: 0 10px;
        margin-bottom: 30px;
    }

    .auto-challenges-text-col {
       padding: 0 15px;
        margin-top: 24px;
    }

    .auto-challenges-list-col {
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .auto-insight-box {
        padding: 30px;
    }
}

/* Mobile */
@media (max-width: 575.98px) {
    .auto-content-section {
        padding: 30px 0;
        scroll-margin-top: calc(var(--auto-header-offset) + 100px);
    }

    .auto-heading {
        font-size: 24px;
    }

    .auto-paragraph {
        font-size: 15px;
    }

    .auto-play-btn {
        width: 50px;
        height: 50px;
    }

    .auto-insight-box {
        padding: 24px;
    }

    .auto-tab-link {
        font-size: 14px;
    }

    .auto-btn-primary {
        width: 60%;
        text-align: center;
    }

    .auto-contact-section .auto-btn-primary {
        width: auto;
    }
}


/*==================================
    Services Section
===================================*/

.services-section{

    position:relative;
    padding:60px 0;
    background:#0f0f0f url("../images/art-image.png") center center no-repeat;
    background-size:cover;
    overflow:hidden;

}

.services-section::before{

    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.55);

}

.services-section .container{

    position:relative;
    z-index:2;

}

/*============================
Heading
=============================*/

.services-heading{

    max-width:520px;
    margin-bottom:70px;

}

.sub-title{

    display:flex;
    align-items:center;
    gap:10px;
    color:#ffffff;
    font-size:15px;
    margin-bottom:20px;

}

.sub-title .line{

    width:22px;
    height:2px;
    background:#EC6502;

}

.services-heading h2{
    color:#fff;
    font-size:45px;
    line-height:1.2;
    font-weight:700;
    margin:0;
}

/*============================
Grid
=============================*/

.services-grid{

    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;

}

/*============================
Card
=============================*/

.service-card{

    background:#fff;
    padding:42px;
    transition:.4s;
    position:relative;

}

.service-card:hover{

    transform:translateY(-12px);
    box-shadow:0 20px 60px rgba(0,0,0,.25);

}

/* Top Border Animation */

.service-card::before{

    content:"";
    position:absolute;
    left:0;
    top:0;
    width:0;
    height:4px;
    background:#EC6502;
    transition:.5s;

}

.service-card:hover::before{

    width:100%;

}

/* Icon */

.service-icon{

    width:56px;
    height:56px;
    background:#EC6502;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:28px;
    transition:.4s;

}

.service-card:hover .service-icon{

    transform:rotate(8deg) scale(1.08);

}

.service-icon img{

    width:28px;

}

.service-card h3{
    font-size:30px;
    margin-bottom:20px;
    font-weight:700;
    color:#222;

}

.service-card p{

    color:#6b6b6b;
    line-height:1.9;
    margin-bottom:25px;

}

/* Read More */

.service-card a{

    text-decoration:none;
    color:#111;
    font-weight:500;
    display:inline-flex;
    align-items:center;
    gap:8px;
    transition:.3s;

}

.service-card a span{

    color:#EC6502;
    transition:.3s;

}

.service-card:hover a{

    color:#EC6502;

}

.service-card:hover a span{

    transform:translateX(6px);

}

/*============================
Tablet
=============================*/

@media(max-width:991px){

.services-heading h2{

    font-size:42px;

}

.services-grid{

    grid-template-columns:repeat(2,1fr);

}

}

/*============================
Mobile
=============================*/

@media(max-width:767px){

.services-section{

    padding:70px 0;

}

.services-heading{

    margin-bottom:45px;

}

.services-heading h2{

    font-size:32px;

}

.services-grid{

    grid-template-columns:1fr;
    gap:25px;

}

.service-card{

    padding:30px;

}

.service-card h3{

    font-size:26px;

}

}
</style>


<section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/Architectural-Services.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="/">Home</a>
                    <span>›</span>
                    <a href="#">Industries</a>
                    <span>›</span>
                    <span class="active">Heavy Engineering</span>
                </div>
                <div class="abouthero-tag">
                 Heavy Engineering Industries
                </div>
                <h1 class="abouthero-title">
                    Heavy Engineering Design & Engineering Services
                </h1>
                <p class="abouthero-desc" style="font-size:16px;">
                    Delivering advanced CAD design, engineering analysis, detailing, and product development solutions for the heavy engineering industry. 
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

<!-- Sticky tab navigation section -->

<div class="auto-sticky-nav" id="autoStickyNav">
        <div class="container-fluid auto-nav-inner">
            <div class="row align-items-center gx-0">

                {{-- Breadcrumb --}}
                <div class="col-12 col-lg-6">
                    <!--<nav aria-label="breadcrumb" class="auto-breadcrumb">-->
                    <!--    <ol class="breadcrumb mb-0">-->
                    <!--        <li class="breadcrumb-item auto-breadcrumb-icon">-->
                    <!--            <a href="{{ url('/') }}">-->
                    <!--                <img src="{{ asset('images/icons/box-icon.svg') }}" alt="Home" class="auto-home-icon" onerror="this.style.display='none'">-->
                    <!--            </a>-->
                    <!--        </li>-->
                    <!--        <li class="breadcrumb-item">-->
                    <!--            <a href="{{ url('/industries') }}"></a>-->
                    <!--        </li>-->
                    <!--        <li class="breadcrumb-item active" aria-current="page"></li>-->
                    <!--    </ol>-->
                    <!--</nav>-->
                </div>

                {{-- Scroll-spy Tabs --}}
                <div class="col-12 col-lg-6">
                    <ul class="nav auto-tab-nav justify-content-lg-end" id="autoTabNav">
                        <li class="nav-item">
                            <a class="nav-link auto-tab-link auto-scroll-link active" data-target="#overview" href="javascript:void(0);">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link auto-tab-link auto-scroll-link" data-target="#challenges" href="javascript:void(0);">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link auto-tab-link auto-scroll-link" data-target="#solutions" href="javascript:void(0);">Solutions</a>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
<section class="automotive-section">
{{-- ============================================================
         2. OVERVIEW SECTION
    ============================================================ --}}
    <div id="overview" class="auto-content-section auto-overview-section" data-section="overview">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-5 auto-overview-text">
                     <p class="abouthero-tag">Overview Heavy Engineering </p>
                    <h2 class="auto-heading">Heavy engineering is evolving toward smarter, <span style="color: #EC6502;">more efficient, and highly engineered solutions</span></h2>
                    <p class="auto-paragraph">
                        The engineering, driving demand for reliable and efficient equipment. Integrated CAD, 3D modelling, CAE/FEA, structural design, detailing, and manufacturing support help deliver cost-effective, production-ready solutions. .
                    </p>
<a href="/contact" class="btn auto-btn-primary">Get in touch</a>
                </div>

                <div class="col-12 col-lg-7 auto-overview-media">
  <div class="auto-video-wrapper">

    <img id="videoThumbnail"
         src="{{ asset('images/infrastructureplmsolution.jpeg') }}"
         alt="Commercial building project"
         class="img-fluid auto-video-thumb" style="height:350px; object-fit:cover; border-radius:20px;">

    <button type="button" class="auto-play-btn" id="playVideoBtn">
        <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor">
            <path d="M8 5v14l11-7z"></path>
        </svg>
    </button>

    <video id="projectVideo"
           class="img-fluid"
           controls
           style="display:none; width:100%; border-radius:20px;">
        <source src="{{ asset('videos/herosectionvideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</div>
</div>

            </div>
        </div>
    </div>

    {{-- ============================================================
         3. CHALLENGES SECTION
    ============================================================ --}}
    
    <div id="challenges" class="auto-content-section auto-challenges-section" data-section="challenges">
       
        <div class="container">

            <div class="row align-items-start auto-challenges-intro">
                <div class="col-12 col-lg-6 auto-challenges-image-col" >
                    <img src="{{ asset('service-img/healthcare.jfif') }}"
                         alt="Commercial construction site"
                         class="img-fluid auto-challenges-img" style="border-radius:20px;">
                </div>
                <div class="col-12 col-lg-6 auto-challenges-text-col">
                    <p class="abouthero-tag">CHALLENGES</p>
                    <h2 class="auto-heading">Designing robust equipment for <span style="color: #EC6502;">demanding industrial applications</span></h2>
                    <p class="auto-paragraph">
                        Heavy engineering requires strong, reliable, and manufacturable equipment designed for high loads and continuous operation. Integrated engineering solutions optimize strength, durability, safety, manufacturability, and cost while reducing fabrication challenges and accelerating production.
                    </p>
                </div>
            </div>

            <div class="row auto-challenges-list-row">

                <div class="col-12 col-lg-6 auto-challenges-list-col">
                    <h3 class="auto-subheading">Main challenges</h3>
                    <ul class="auto-chevron-list">
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Increasing equipment and assembly complexity  </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Heavy-load and structural design requirements </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Shorter engineering and project delivery cycles </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Structural integrity and fatigue considerations </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Design-for-manufacturing and fabrication requirements </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Large welded structures and complex assemblies </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Tight dimensional tolerances and GD&T requirements </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Material selection and weight optimization </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Manufacturing consistency and quality requirements </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Cost reduction without compromising strength and reliability </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Engineering changes and revision management </a></li>
                        <li><a ><span class="auto-chevron">&rsaquo;</span> Integration of mechanical, hydraulic, electrical, and control systems </a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 auto-insight-col">
                    <div class="auto-insight-box">
                        <div class="auto-insight-icon">
                            <img src="{{ asset('images/icons/industry-icon.svg') }}" alt="" onerror="this.style.display='none'">
                        </div>
                        
                        <p class="abouthero-tag">Industry Insights</p>
                        <h3 class="auto-insight-heading"><span style="color: #EC6502;">Heavy Engineering</span></h3>
                        <p class="auto-paragraph">
                            The heavy engineering sector serves industries such as industrial machinery, material handling, power generation, construction, mining, and process equipment. Growing demands for structural integrity, equipment reliability, safety, and manufacturing efficiency are driving the adoption of integrated CAD, CAE/FEA, structural analysis, fabrication detailing, and manufacturing workflows. These capabilities help optimize designs, improve manufacturability, reduce production risks, and accelerate project delivery.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ============================================================
         4. SOLUTIONS SECTION
    ============================================================ --}}
    <div id="solutions" class="auto-content-section auto-solutions-section" data-section="solutions">
        <div class="container">

            <div class="auto-solutions-icon">
                <img src="{{ asset('images/icons/industry-icon.svg') }}" alt="" onerror="this.style.display='none'">
            </div>
          <p class="abouthero-tag">Our Solutions</p>
            <h2 class="auto-heading">Heavy Engineering <span style="color: #EC6502;">Design & Engineering Solutions</span></h2>
            <p class="auto-paragraph auto-solutions-intro">
                We provide end-to-end heavy engineering design and manufacturing support for OEMs, fabricators, contractors, and industrial organizations. 
            </p>

            <div class="row auto-solutions-grid">
                <div class="col-12 col-md-6 col-lg-4">
                    <a  class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading);  font-size: 15px;"><b>CAD Design & 3D Modelling</b> : Develop accurate, manufacturable 3D CAD models and production-ready designs for industrial machinery, equipment, structures, and mechanical components.</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a  class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading);  font-size: 15px;"><b>Industrial Equipment & Machinery Design</b> : Design and detail heavy machinery, industrial equipment, structures, skids, and mechanical assemblies based on load, space, and application requirements. </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a  class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading);  font-size: 15px; "><b>Structural Design & CAE / FEA Analysis</b> : Perform engineering analysis to assess stress, deformation, strength, stability, and load capacity, identifying design issues before manufacturing.</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a  class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading); font-size: 15px;"><b>Fabrication & Manufacturing Detailing</b> : Create detailed fabrication, manufacturing, and assembly drawings with dimensions, GD&T, weld symbols, BOMs, and material specifications for efficient production. </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a  class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading); font-size: 15px;"><b>Weldment, Tooling & Fixture Design</b> : Design welded structures, assemblies, jigs, fixtures, and tooling for strength, manufacturability, accuracy, and repeatability. </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading); font-size: 15px;"><b>DFMA & Design Optimization</b> : Optimize designs for manufacturability, assembly, material selection, weight, performance, and cost while maintaining reliability. </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading); font-size: 15px;"><b>Reverse Engineering & Engineering Documentation</b> : Convert existing equipment and engineering references into accurate 3D CAD models, 2D drawings, assemblies, BOMs, and technical documentation for upgrades and replacements. </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="auto-solution-item">
                        <span class="auto-chevron">&rsaquo;</span>
                        <span style="font-family: var(--plm-heading); font-size: 15px;"><b>Engineering Change & Manufacturing Support</b> : Support production with engineering changes, drawing revisions, BOM updates, design modifications, and issue resolution to ensure consistency and reduce rework. </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    

        

           



<script>
document.addEventListener('DOMContentLoaded', function () {

    var stickyNav   = document.getElementById('autoStickyNav');
    var tabLinks     = document.querySelectorAll('.auto-tab-link');
    var scrollLinks  = document.querySelectorAll('.auto-scroll-link');
    var sections     = document.querySelectorAll('.auto-content-section[data-section]');

    if (!sections.length) {
        return;
    }

    function setActiveTab(targetId) {
        tabLinks.forEach(function (link) {
            if (link.getAttribute('data-target') === targetId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    function getNavHeight() {
        var navOwnHeight = stickyNav ? stickyNav.offsetHeight : 0;
        var rootEl = document.querySelector('.automotive-section') || document.documentElement;
        var headerOffsetRaw = getComputedStyle(rootEl).getPropertyValue('--auto-header-offset');
        var headerOffset = parseFloat(headerOffsetRaw) || 0;
        return navOwnHeight + headerOffset;
    }

    function buildSpyObserver() {
        var navHeight = getNavHeight();

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var id = '#' + entry.target.getAttribute('id');
                    setActiveTab(id);
                }
            });
        }, {
            root: null,
            rootMargin: '-' + (navHeight + 10) + 'px 0px -60% 0px',
            threshold: 0
        });

        sections.forEach(function (section) {
            observer.observe(section);
        });

        return observer;
    }

    var spyObserver = buildSpyObserver();

    scrollLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            var targetId = this.getAttribute('data-target');
            var targetEl = document.querySelector(targetId);
            if (!targetEl) return;

            var navHeight = getNavHeight();
            var targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - navHeight - 10;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            setActiveTab(targetId);
        });
    });

    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            spyObserver.disconnect();
            spyObserver = buildSpyObserver();
        }, 250);
    });

});



document.getElementById('playVideoBtn').addEventListener('click', function () {

    document.getElementById('videoThumbnail').style.display = 'none';
    this.style.display = 'none';

    const video = document.getElementById('projectVideo');
    video.style.display = 'block';
    video.play();

});

</script>


@include('sections.location')
@endsection