@extends('layouts.app')
@push('styles')
    @vite(['resources/css/service/list-service.css'])  
        @vite(['resources/css/aboutus.css']) 

@endpush
@section('title', 'Services')

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

    <section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/Architectural-Services.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="#">Home</a>
                    <span>›</span>
                    <a href="#">Services</a>
                    <span>›</span>
                    <span class="active">Architectural BIM</span>
                </div>
                <div class="abouthero-tag">
                    BUILDING INFORMATION MODELING
                </div>
                <h1 class="abouthero-title">
                    BIM & Engineering
                    Services by
                    Milestone PLM
                </h1>
                <p class="abouthero-desc">
                    End-to-end BIM delivery across every project phase and LOD
                    level inside your tools, to your standards, from day 1.
                </p>
                <div class="abouthero-buttons">
                    <a href="/contat-us" class="abouthero-btn-primary">
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
                    Engineering Services Built Around
                    <br>
                    How Your Practice Works
                </h2>

                <p class="section-description">
                    We embed directly into your delivery environment — working inside your tools,
                    to your standards, with named engineers who are accountable from brief to handover.
                    Every engagement is backed by an ISO-aligned quality management system,
                    ensuring your deliverables are accurate, coordinated, and audit-ready.
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
                    Our <span>Engineering Services</span>
                </h2>
                 <p class="section-description">
                    Seven discipline-specific practice areas each staffed by
                    engineers who work exclusively in that domain.
                </p>
                
            </div>
          
        </div>

        <!-- Services Grid -->
        <div class="row g-4">
            @php
            $services = [
                [
                    'title' => 'BIM Services',
                    'image' => 'service-img/bim-services.jpg',
                    'desc' => 'End-to-end BIM delivery across all project phases and LOD levels, working inside your Revit or Navisworks environment from day one.',
                    'icon' => '<path d="M12 2L2 7l10 5 10-5-10-5zm0 7.27L4.55 7 12 4.73 19.45 7 12 9.27zM2 17l10 5 10-5-1.45-.72L12 19.27l-8.55-4.27L2 17zm0-5l10 5 10-5-1.45-.73L12 14.27 3.45 11 2 12z"/>'
                ],
                [
                    'title' => 'Architectural Services',
                    'image' => 'service-img/architectural-services.jpg',
                    'desc' => 'Coordinated documentation packages that your site teams can build from — shop drawings, CDs, and renovation sets checked across all trades before issue.',
                    'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>'
                ],
                [
                    'title' => 'Millwork Design',
                    'image' => 'service-img/millwork-services.jpg',
                    'desc' => 'Casework and joinery design drawn to CNC-ready tolerances. We know the difference between millwork that renders and millwork that builds.',
                    'icon' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>'
                ],
                [
                    'title' => 'Structural Engineering',
                    'image' => 'service-img/structural-design-services.jpg',
                    'desc' => 'Structural drawings and BIM coordination for complex projects across all load-bearing systems.',
                    'icon' => '<path d="M2 20h20M6 20V10M10 20V4M14 20V10M18 20V4"/>'
                ],
                [
                    'title' => 'MEP Engineering',
                    'image' => 'service-img/mep-services.jpg',
                    'desc' => 'Mechanical, Electrical and Plumbing design fully coordinated within the BIM model to eliminate clashes before construction.',
                    'icon' => '<path d="M12 2a5 5 0 0 1 5 5c0 5-5 13-5 13S7 12 7 7a5 5 0 0 1 5-5z"/><circle cx="12" cy="7" r="2"/>'
                ],
                [
                    'title' => 'Engineering Solutions',
                    'image' => 'service-img/engineering-solutions.jpg',
                    'desc' => '2D drafting and technical documentation services delivered fast, accurate, and ready for permit or construction.',
                    'icon' => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/>'
                ],
                [
                    'title' => 'AEC Services',
                    'image' => 'service-img/hospital-service.jpg',
                    'desc' => 'High quality 3D modeling and visualization services that bring your design intent to life before a single brick is laid.',
                    'icon' => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>'
                ],
            ];
            @endphp

            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="our-services-card">
                    <div class="our-services-image">
                        <img src="{{ asset($service['image']) }}"
                             alt="{{ $service['title'] }}"
                             loading="lazy">
                    </div>
                    <div class="our-services-content">

                        <!-- ICON + TITLE IN ONE LINE -->
                        <div class="our-services-title-row">
                            <div class="our-services-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
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
                        <a href="#" class="our-services-btn">
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
                    <span>Engineering Software</span>
                </h2>
                <p class="ts-desc">
                    Our engineers work with globally trusted design and BIM platforms
                    to ensure accuracy, interoperability, and seamless collaboration.
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
                         Term AEC with
                        <span>Engineering Services</span>
                    </h2>

                    <p class="plm-milestone-text">
                        Built to close the gap between how Western AEC firms run
                        projects and where the world's best engineering talent
                        actually sits.
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