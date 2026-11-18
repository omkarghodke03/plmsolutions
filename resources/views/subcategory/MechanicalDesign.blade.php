@extends('layouts.app')
@php
    $primaryKeyword = 'Mechanical Design Services';
@endphp
<meta name="description" content="Get reliable Mechanical Design Services from experienced professionals. Delivering accurate, efficient, and cost-effective solutions trusted by 300+ global clients.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.milestonetech.net/engineering-solutions/mechanical-design">
@push('styles')
    @vite(['resources/css/service/list-service.css'])  
        @vite(['resources/css/aboutus.css']) 

@endpush
@section('title', 'Mechanical Design Services | Trusted by 300+ Global Clients')

@section('content')

<style>
    .our-services-header {
    display: flex;
    justify-content:flex-start;
    align-items:flex-start;
    gap: 60px;
    margin-bottom: 40px;
}
.our-services-tag {
    
    justify-self: left;
}
.plm-feature-box {
    display: flex;
    /*justify-content: space-between;*/
    align-items: center;
    gap:25px;
}

 .our-services-title {
        padding-bottom: 10px;
        gap: 15px;
    }

.our-services-header-right p {
    color: var(--plm-secondary);
    line-height: 1.8;
    text-align: right;
    margin: 0;
    width: 380px;
}    
@media (max-width: 575.98px) {
    .our-services-header-right p {
        text-align: left;
        width: 100%;
    }
    .plm-milestone-stats {
    margin: 10px 10px 0;}
}
@media (max-width: 767px) {
    .our-services-title {
        font-size: 30px;
    }
    .row {
        width: 100%;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-left: 0px;
        margin-right: 0px;
        padding-left: 0px;
        padding-right: 0px;
    }
}
</style>

<section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/discuss-trial-one.jpeg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="/">Home</a>
                    <span>›</span>
                    <a href="/engineering-solutions">Engineering Solutions</a>
                    <span>›</span>
                    <a href="/engineering-solutions/mechanical-design">Mechanical Design Services</a>
                    
                </div>
                <div class="abouthero-tag">
                    MECHANICAL ENGINEERING DESIGN
                </div>
                <h1 class="abouthero-title">
                    Mechanical Design Services for<br> Product & Engineering Needs
                </h1>
                <p class="abouthero-desc">
                    Get end-to-end Mechanical Design Services covering product development, CAD, manufacturing support, automotive design, FEA, documentation, value engineering, and rapid prototyping.
                </p>
                <div class="abouthero-buttons">
                    <a href="/contact" class="abouthero-btn-primary">
                         START A PROJECT
                        <span>→</span>
                    </a>
                    <a href="/case-studies" class="abouthero-btn-outline">
                        VIEW OUR WORK
                    </a>
                </div>
            </div>
        </div>
    </div>
       
</section>

<!--blog section listing page start --->
<section class="approach-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8 text-center">

                <div class="section-tag">
                    OUR APPROACH
                </div>

                <h2 class="section-title">
                    Mechanical Design Services Built Around<br> Your Engineering Needs
                </h2>

                <p class="section-description">
                    We align our design expertise with your technical requirements, production needs, and project goals. 
    Our teams focus on design accuracy, engineering efficiency, manufacturability, and practical solutions 
    that help improve product performance, streamline development, and support successful project delivery.
                </p>

            </div>
        </div>
    </div>
</section>


<section class="our-services-section">
    <div class="container">
        <!-- Header -->
        <div class="our-services-header ">
            <div class="our-services-header-left ">
                <span class="our-services-tag">OUR SERVICES</span>
                <h2 class="our-services-title ">
                    Our <span>Mechanical Design Services</span>
                </h2>
                 <p class="section-description">
                    Our Mechanical Design Services cover product design, CAD, manufacturing support, automotive design, FEA, documentation, value engineering, and rapid prototyping. We deliver accurate, practical, and production-focused solutions tailored to your product and project requirements.
                </p>
                
            </div>
          
        </div>

        <!-- Services Grid -->
        <div class="row g-4">

@php 
$services = [
    [
        'title' => 'Product Design and Development Services',
        'image' => 'service-img/product-design-and-development-services.webp',
        'desc' => 'End-to-end product design and development services covering concept development, 3D modeling, design optimization, assemblies, and engineering documentation.',
        'link' => '/engineering-solutions/mechanical-design/product-design-and-development-services',
        'icon' => '<path d="M3 7l9-5 9 5-9 5-9-5z"/><path d="M3 7v10l9 5 9-5V7M12 12v10"/><path d="M7 9.5l5 2.5 5-2.5"/>'
    ],
    [
        'title' => 'CAD and Detailing Services',
        'image' => 'service-img/cad-and-detailing-services.webp',
        'desc' => 'Accurate 2D drafting, 3D CAD modeling, engineering detailing, assembly drawings, and manufacturing-ready documentation for mechanical components and products.',
        'link' => '/engineering-solutions/mechanical-design/cad-and-detailing-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M4 9h16M9 4v16"/><path d="M13 13l6 6M15 12l2-2 3 3-2 2z"/>'
    ],
    [
        'title' => 'Manufacturing Support Services',
        'image' => 'service-img/manufacturing-support-services.webp',
        'desc' => 'Engineering support for manufacturing through production drawings, design updates, component detailing, documentation, and design-for-manufacturing requirements.',
        'link' => '/engineering-solutions/mechanical-design/manufacturing-support-services',
        'icon' => '<path d="M4 20V8l8-5 8 5v12H4z"/><path d="M8 20v-6h8v6M8 9h8M12 3v5"/><path d="M6 11h2M16 11h2"/>'
    ],
    [
        'title' => 'Automotive Design Services',
        'image' => 'service-img/automotive-design-services.webp',
        'desc' => 'Automotive design support covering component development, 3D modeling, detailing, assemblies, engineering changes, and design documentation.',
        'link' => '/engineering-solutions/mechanical-design/automotive-design-services',
        'icon' => '<path d="M5 17h14l-1-6H6l-1 6z"/><path d="M7 11l2-5h6l2 5M4 17v3M20 17v3"/><circle cx="7.5" cy="17.5" r="1.5"/><circle cx="16.5" cy="17.5" r="1.5"/>'
    ],
    [
        'title' => 'Finite Element Analysis Services',
        'image' => 'service-img/finite-element-analysis-services.webp',
        'desc' => 'FEA services to evaluate structural performance, stress, deformation, and other engineering conditions for improved design reliability and performance.',
        'link' => '/engineering-solutions/mechanical-design/finite-element-analysis-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M4 10h16M10 4v16"/><path d="M6 7l4 3 4-5 4 6"/>'
    ],
    [
        'title' => 'Engineering Documentation Services',
        'image' => 'service-img/engineering-documentation-services.webp',
        'desc' => 'Comprehensive engineering documentation including drawings, specifications, technical manuals, BOMs, revision updates, and product documentation.',
        'link' => '/engineering-solutions/mechanical-design/engineering-documentation-services',
        'icon' => '<path d="M6 2h9l5 5v15H6z"/><path d="M15 2v6h5M9 12h8M9 16h8M9 20h5"/>'
    ],
    [
        'title' => 'Value Engineering and Value Analysis Services',
        'image' => 'service-img/value-engineering-and-value-analysis-services.webp',
        'desc' => 'Value engineering and value analysis services focused on optimizing product functionality, materials, components, and manufacturing processes while controlling costs.',
        'link' => '/engineering-solutions/mechanical-design/value-engineering-value-analysis-services',
        'icon' => '<path d="M12 3v18M5 7h14M7 12h10M9 17h6"/><circle cx="12" cy="3" r="2"/><circle cx="12" cy="21" r="2"/>'
    ],
    [
        'title' => 'Rapid Prototyping Services',
        'image' => 'service-img/rapid-prototyping-services.webp',
        'desc' => 'Rapid prototyping support to validate product concepts, test designs, identify improvements, and accelerate the transition from development to production.',
        'link' => '/engineering-solutions/mechanical-design/rapid-prototyping-services',
        'icon' => '<path d="M4 7l8-4 8 4-8 4-8-4z"/><path d="M4 7v10l8 4 8-4V7"/><path d="M12 11v10M8 5l8 4"/>'
    ],
];
@endphp

@foreach($services as $service)
<div class="col-lg-4 col-md-6">
    <div class="our-services-card">

        <div class="our-services-image">
            <img src="{{ asset($service['image']) }}"
                 alt="{{ $service['title'] }} Services"
                 loading="lazy">
        </div>

        <div class="our-services-content">

            <div class="our-services-title-row">
                <div class="our-services-icon">
                    <svg viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                    {!! $service['icon'] !!}
                    </svg>
                </div>

                <h3 class="our-services-card-title">
                    {{ $service['title'] }}
                </h3>
            </div>

            <p class="our-services-card-desc">
                {{ $service['desc'] }}
            </p>

            <a href="{{ url($service['link']) }}" class="our-services-btn">
                LEARN MORE →
            </a>

        </div>
    </div>
</div>
@endforeach



        </div>
    </div>
</section>

<!--------------------------------------------------------------
OUR TECHNOLOGY STACK  section code start . 
---------------------------------------------------------------->

<section class="ts-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="ts-label">
                    OUR TECHNOLOGY STACK
                </div>
                <h2 class="ts-title">
                    Powered by Leading
                    <span>Mechanical Design Software</span>
                </h2>
                <p class="ts-desc">
                    Our mechanical design professionals use industry-leading CAD, 3D modeling, simulation, and engineering 
                    platforms to develop accurate designs, detailed documentation, optimized components, and production-ready solutions.
                </p>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/Archicad.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/AutoCAD.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/3DS_max.png') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/autodeskbim360.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/AutodeskInventor.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/DIALux.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/Sketchup.png')}}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/Enscape.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/V_ray.png') }}" alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 ts-col-5">
                <div class="ts-card">
                    <img src="{{ asset('service-img/REVIT.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------------------------------------------
Why Milestone PLM  section code start . 
---------------------------------------------------------------->
<section class="plm-milestone-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Left Content -->
            <div class="col-lg-5">

                <div class="plm-milestone-content">
                     <div class="bim-tagwhyplm bim-anim bim-anim--down">
                        <span class="bim-tag__bar" aria-hidden="true"></span>
                         WHY MILESTONE PLM
                    </div>
                    <h2 class="plm-milestone-title">
                         Trusted Expertise for <span>Mechanical Design</span>
                    </h2>

                    <p class="plm-milestone-text">
                        With experienced mechanical design professionals, advanced engineering capabilities, and a quality-focused approach, Milestone PLM delivers accurate, practical, and production-ready design solutions aligned with your technical requirements and project goals.  
                    </p>

                </div>

            </div>

            <!-- Right Stats -->
            <div class="col-lg-7">

                <div class="plm-milestone-stats">

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <circle cx="12" cy="12" r="8"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M12 7V17"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>

    <path d="M15 9.5C15 8.5 14 8 12 8C10 8 9 8.8 9 10C9 11.2 10 11.8 12 12C14 12.2 15 12.8 15 14C15 15.2 14 16 12 16C10 16 9 15.5 9 14.5"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>
</svg>
</div>
                        <span class="counter" data-target="60">0</span><span>%</span>   
                        <small>COST SAVINGS VS IN-HOUSE</small> 
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
        <circle cx="12" cy="12" r="8"
            stroke="currentColor"
            stroke-width="1.8"/>
        <path d="M12 8V12L15 14"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"/>
    </svg>
</div>
                        <span class="counter" data-target="98">0</span><span>%</span>
                        <small>ON-TIME DELIVERY RATE</small>
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
   <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <circle cx="12" cy="8" r="4"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M5 20C5 16.5 8 14 12 14C16 14 19 16.5 19 20"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>
</svg>
</div>
                        <span class="counter" data-target="48">0</span><span>H</span>
                        <small>TEAM ASSEMBLY TIME</small>
                    </div>

                    <div class="plm-stat-card">
                        <div class="plm-stat-icon">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
    <rect x="4" y="5" width="16" height="15" rx="2"
        stroke="currentColor"
        stroke-width="1.8"/>

    <path d="M8 3V7M16 3V7M4 9H20"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"/>

    <path d="M9 14L11 16L15 12"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"/>
</svg>
</div>
                        <span class="counter" data-target="19">0</span><span>+</span>
                        <small>YEARS OF AEC EXPERTISE</small>
                    </div>

                </div>

            </div>

        </div>

        <!-- Features -->

       <div class="row mt-5 g-0">

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
           <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
            </div>
            <div>
            <h5>On-Time Delivery</h5>
            <p>Structured execution process and repeatable delivery.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
           <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
            </div>
            <div>
            <h5>Cost Advantage</h5>
            <p>Up to 60% savings compared to traditional staffing.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
            </div>
                <div>
                 <h5>Team Ready</h5>
                 <p>Dedicated teams assembled quickly and professionally.</p>
                </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <div>
            <h5>Elastic Scale</h5>
            <p>Scale up or down without recruitment delays.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
            <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <div>
            <h5>Proven Track Record</h5>
            <p>Trusted by firms across multiple countries.</p></div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="plm-feature-box">
           <div class="plm-icon-wrap" style="margin:15px; padding:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                
            </div>
            <div>
            <h5>Certified Quality</h5>
            <p>Strict quality control and review workflows.</p></div>
        </div>
    </div>

</div>

    </div>

</section>

<script>
    /*term AEC with Engineering Services srction js code */
const counters = document.querySelectorAll('.counter');

const startCounter = () => {

    counters.forEach(counter => {

        const target = +counter.getAttribute('data-target');

        let count = 0;

        const update = () => {

            const increment = target / 60;

            if(count < target){

                count += increment;

                counter.innerText = Math.ceil(count);

                requestAnimationFrame(update);

            }else{

                counter.innerText = target;
            }
        };

        update();
    });
};

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            startCounter();
            observer.disconnect();
        }
    });

},{threshold:0.3});

observer.observe(document.querySelector('.plm-milestone-section'));

</script>

@include('sections.ready-to-scale')
@include('sections.location')
@endsection