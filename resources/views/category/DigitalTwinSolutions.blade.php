@extends('layouts.app')
@php
    $primaryKeyword = 'Digital Twin Solutions';
@endphp
<meta name="description" content="Transform assets and operations with Digital Twin Solutions for BIM data, asset tagging, equipment metadata, facility databases, and smarter decision-making.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.milestonetech.net/data-analytics-solutions">
@push('styles')
    @vite(['resources/css/service/list-service.css'])  
        @vite(['resources/css/aboutus.css']) 

@endpush
@section('title', 'Digital Twin Solutions | Leading Digital Twin Services Company')

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
                    <a href="/digital-twin-solutions">Digital Twin Solutions</a>
                    
                </div>
                <div class="abouthero-tag">
                    DIGITAL TWIN SOLUTIONS
                </div>
                <h1 class="abouthero-title">
                    Digital Twin Solutions for Smarter Asset Management
                </h1>
                <p class="abouthero-desc">
                    Create connected digital representations of physical assets and facilities with Digital Twin Solutions that integrate BIM data, asset information, equipment metadata, and facility databases to improve visibility, operations, maintenance, and decision-making.
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
                     Digital Twin Solutions That Connect<br> Data, Assets & Operations
                </h2>

                <p class="section-description">
                    Our Digital Twin Solutions connect BIM models, asset data, and facility information. 
                    From Revit BIM enhancement and asset tagging to COBie data, metadata integration, QR codes, 
                    facility databases, and custom dashboards, we help improve asset visibility, operations, 
                    and decision-making.
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
                     Our <span>Digital Twin Solutions</span>
                </h2>
                 <p class="section-description">
                    Our Digital Twin Solutions connect BIM models, asset data, and facility information to improve
                    asset visibility, streamline operations, and support smarter lifecycle management.
                </p>
                
            </div>
          
        </div>

        <!-- Services Grid -->
        <div class="row g-4">
@php
$services = [
    [
        'title' => 'Revit BIM Model Enhancement',
        'image' => 'service-img/revit-bim-model-enhancement-services.webp',
        'desc' => 'Enhance Revit BIM models with accurate, structured, and asset-ready information to support digital twin development and facility management.',
        'link' => '/digital-twin-solutions/revit-bim-model-enhancement-services',
        'icon' => '<path d="M4 17l8-5 8 5-8 5-8-5z"/><path d="M4 12l8-5 8 5"/><path d="M4 7l8-4 8 4"/><path d="M12 7v10"/>'
    ],
    [
        'title' => 'Asset Tagging',
        'image' => 'service-img/asset-tagging-services.webp',
        'desc' => 'Organize and identify physical assets with structured tagging to improve asset tracking, information access, and lifecycle management.',
        'link' => '/digital-twin-solutions/asset-tagging-services',
        'icon' => '<path d="M20 12l-8 8-9-9V4h7l10 8z"/><circle cx="7" cy="7" r="1.5"/>'
    ],
    [
        'title' => 'COBie Data Creation',
        'image' => 'service-img/cobie-data-creation-services.webp',
        'desc' => 'Create accurate COBie data to organize equipment, spaces, systems, and asset information for seamless digital handover and facility operations.',
        'link' => '/digital-twin-solutions/cobie-data-creation-services',
        'icon' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v16M14 4v16"/><path d="M8 14h3M14 14h3"/>'
    ],
    [
        'title' => 'Equipment Metadata Integration',
        'image' => 'service-img/equipment-metadata-integration-services.webp',
        'desc' => 'Integrate structured equipment metadata into digital models to provide accessible, reliable information for asset management and operations.',
        'link' => '/digital-twin-solutions/equipment-metadata-integration-services',
        'icon' => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1-1.8 1.8-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6V20h-2.6v-.2a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1-1.8-1.8.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.6-1H4v-2.6h.2a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9l-.1-.1 1.8-1.8.1.1a1.7 1.7 0 0 0 1.9.3 1.7 1.7 0 0 0 1-1.6V4h2.6v.2a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1 1.8 1.8-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.6 1h.2v2.6h-.2a1.7 1.7 0 0 0-1.6 1z"/>'
    ],
    [
        'title' => 'QR Code Integration',
        'image' => 'service-img/qr-code-integration-services.webp',
        'desc' => 'Connect physical assets with digital information through QR code integration for quick access to equipment and facility data.',
        'link' => '/digital-twin-solutions/qr-code-integration-services',
        'icon' => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><path d="M14 14h3v3h-3zM18 18h3v3h-3zM14 18h2M18 14h3"/>'
    ],
    [
        'title' => 'Facility Database Creation',
        'image' => 'service-img/facility-database-creation-services.webp',
        'desc' => 'Build structured facility databases that centralize asset and building information for efficient management, maintenance, and operations.',
        'link' => '/digital-twin-solutions/facility-database-creation-services',
        'icon' => '<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v7c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12v7c0 1.7 3.6 3 8 3s8-1.3 8-3v-7"/>'
    ],
    [
        'title' => 'Custom Dashboard Development',
        'image' => 'service-img/custom-dashboard-development-services.webp',
        'desc' => 'Develop custom dashboards that provide clear visibility into assets, facilities, performance, and operational data for informed decision-making.',
        'link' => '/digital-twin-solutions/custom-dashboard-development-services',
        'icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 16v-5M12 16V7M17 16v-8"/><path d="M7 19h10"/>'
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
                    <span>Digital Twin Technologies</span>
                </h2>
                <p class="ts-desc">
                    Our Digital Twin professionals leverage leading BIM, asset management, data integration, 
                    and visualization technologies to create connected digital environments that improve asset 
                    visibility, facility operations, and lifecycle management.
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
                         Trusted Expertise for
                        <span>Digital Twin Solutions</span>
                    </h2>

                    <p class="plm-milestone-text">
                        With experienced BIM professionals, structured asset data capabilities, and a quality-focused
                        approach, Milestone PLM delivers reliable Digital Twin Solutions that connect models, assets,
                        and facility information for smarter operations and lifecycle management.
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