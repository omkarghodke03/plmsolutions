@extends('layouts.app')
@php
    $primaryKeyword = 'Millwork Services';
@endphp
<meta name="description" content="Get expert Millwork Services for precision-crafted, functional, and high-quality solutions tailored to your project needs. Trusted by 300+ global clients.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.milestonetech.net/engineering-solutions/millwork-design">
@push('styles')
    @vite(['resources/css/service/list-service.css'])  
        @vite(['resources/css/aboutus.css']) 

@endpush
@section('title', 'Millwork Services | Trusted by 300+ Global Clients')

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
                    <a href="/engineering-solutions/millwork-design">Millwork Design Services</a>
                    
                </div>
                <div class="abouthero-tag">
                    ARCHITECTURE ENGINEERING & CONSTRUCTION
                </div>
                <h1 class="abouthero-title">
                    Millwork Design Services Tailored to Your<br> Project Requirements
                </h1>
                <p class="abouthero-desc">
                    Professional Millwork Design Services for commercial, residential, hospitality, retail, healthcare, 
                    and institutional projects, covering custom cabinetry, casework, furniture, architectural millwork, 
                    interior fit-outs, and specialty millwork with accurate detailing and production-ready documentation.
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
                    Millwork Design Services Built Around<br> Your Project Needs
                </h2>

                <p class="section-description">
                    Our Millwork Design Services follow a structured approach focused on project requirements, design intent, 
                    material specifications, and fabrication needs. We develop detailed millwork drawings and coordinated 
                    documentation with accurate dimensions, materials, hardware, and construction details to support 
                    fabrication, installation, and efficient project execution.
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
                    Our <span>Millwork Design Services</span>
                </h2>
                 <p class="section-description">
                    Our Millwork Design Services are structured to support different project scopes, design requirements, 
                    and application needs. Explore the services below to find the right millwork expertise for your project, 
                    with detailed design support and documentation aligned with your specific requirements.
                </p>
                
            </div>
          
        </div>

        <!-- Services Grid -->
        <div class="row g-4">

@php 
$services = [
    [
        'title' => 'Commercial Millwork Services',
        'image' => 'service-img/commercial-millwork-services.webp',
        'desc' => 'Detailed millwork design and documentation for commercial spaces, supporting functional layouts, material requirements, fabrication, and installation.',
        'link' => '/engineering-solutions/millwork-design/commercial-millwork-services',
        'icon' => '<path d="M3 21h18M5 21V7h14v14M8 7V3h8v4M8 11h2M14 11h2M8 15h2M14 15h2"/>'
    ],
    [
        'title' => 'Residential Millwork Services',
        'image' => 'service-img/residential-millwork-services.webp',
        'desc' => 'Millwork design solutions for residential interiors, developed with attention to space, functionality, finishes, dimensions, and installation requirements.',
        'link' => '/engineering-solutions/millwork-design/residential-millwork-services',
        'icon' => '<path d="M3 11l9-8 9 8"/><path d="M5 10v11h14V10M9 21v-6h6v6"/>'
    ],
    [
        'title' => 'Hospital Millwork Services',
        'image' => 'service-img/hospital-millwork-services.webp',
        'desc' => 'Specialized millwork documentation for hospital environments, considering functional requirements, durability, hygiene, accessibility, and installation needs.',
        'link' => '/engineering-solutions/millwork-design/hospitality-millwork-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M12 7v10M7 12h10"/>'
    ],
    [
        'title' => 'Retail and Store Millwork Services',
        'image' => 'service-img/retail-and-store-millwork-services.webp',
        'desc' => 'Millwork design for retail and store environments, supporting display areas, counters, fixtures, storage, and other interior elements.',
        'link' => '/engineering-solutions/millwork-design/retail-and-store-millwork-services',
        'icon' => '<path d="M4 8h16l-1 13H5L4 8z"/><path d="M7 8V5a5 5 0 0110 0v3M8 12h8"/>'
    ],
    [
        'title' => 'Healthcare and Institutional Millwork Services',
        'image' => 'service-img/healthcare-and-institutional-millwork-services.webp',
        'desc' => 'Purpose-driven millwork design for healthcare and institutional spaces, with documentation aligned to functional, operational, and project-specific requirements.',
        'link' => '/engineering-solutions/millwork-design/healthcare-and-institutional-millwork-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M8 12h8M12 8v8"/><path d="M7 20v2M17 20v2"/>'
    ],
    [
        'title' => 'Custom Cabinetry and Casework Millwork Services',
        'image' => 'service-img/custom-cabinetry-and-casework-millwork-services.webp',
        'desc' => 'Detailed cabinetry and casework designs with accurate dimensions, configurations, materials, hardware, and construction details for fabrication.',
        'link' => '/engineering-solutions/millwork-design/custom-cabinetry-and-casework-millwork-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M12 4v16M4 12h16"/><circle cx="9" cy="8" r="1"/><circle cx="15" cy="16" r="1"/>'
    ],
    [
        'title' => 'Custom Furniture Millwork Services',
        'image' => 'service-img/custom-furniture-millwork-services.webp',
        'desc' => 'Custom furniture design and detailing developed around specific dimensions, materials, finishes, construction methods, and fabrication requirements.',
        'link' => '/engineering-solutions/millwork-design/custom-furniture-millwork-services',
        'icon' => '<path d="M4 10h16v7H4z"/><path d="M6 17v4M18 17v4M7 10V7a5 5 0 0110 0v3"/>'
    ],
    [
        'title' => 'Architectural Millwork Services',
        'image' => 'service-img/architectural-millwork-services.webp',
        'desc' => 'Architectural millwork detailing that translates design intent into precise layouts, elevations, sections, details, and fabrication documentation.',
        'link' => '/engineering-solutions/millwork-design/architectural-millwork-services',
        'icon' => '<path d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6M8 10h2M14 10h2"/>'
    ],
    [
        'title' => 'Interior Fit Out Millwork Services',
        'image' => 'service-img/interior-fit-out -millwork-services.webp',
        'desc' => 'Millwork design and detailing for interior fit-out projects, supporting coordinated layouts, finishes, dimensions, and installation documentation.',
        'link' => '/engineering-solutions/millwork-design/interior-fit-out-millwork-services',
        'icon' => '<path d="M4 4h16v16H4z"/><path d="M4 9h16M9 4v16M14 4v16"/><path d="M7 16h10"/>'
    ],
    [
        'title' => 'Specialty and Custom Millwork Services',
        'image' => 'service-img/specialty-and-custom-millwork-services.webp',
        'desc' => 'Specialized millwork design for unique applications, complex requirements, and custom elements requiring tailored detailing and fabrication support.',
        'link' => '/engineering-solutions/millwork-design/specialty-and-custom-millwork-services',
        'icon' => '<path d="M12 3l2.5 5.5L20 11l-5.5 2.5L12 19l-2.5-5.5L4 11l5.5-2.5L12 3z"/><path d="M19 17l1 2 2 1-2 1-1 2-1-2-2-1 2-1 1-2z"/>'
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
                    <span>Millwork Design Software</span>
                </h2>
                <p class="ts-desc">
                    Our millwork professionals use industry-leading CAD, 3D modeling, and design platforms 
                    to develop precise layouts, detailed drawings, 3D models, and fabrication-ready documentation, 
                    supporting accurate design development and efficient project coordination.
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
                         Trusted Expertise for <span>Millwork Projects</span>
                    </h2>

                    <p class="plm-milestone-text">
                        With experienced millwork design professionals and advanced CAD and 3D modeling capabilities, 
                        Milestone PLM delivers accurate, fabrication-ready designs and documentation aligned with your 
                        project requirements and installation needs.
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