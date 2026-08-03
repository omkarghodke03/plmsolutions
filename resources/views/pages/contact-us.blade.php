@extends('layouts.app')

@section('title', 'Contact Us ')

@section('content')
<style>
    :root{
        --rs-accent: #EC6502;
        --rs-accent-dark: #cf5701;
        --rs-text-dark: #1a1a1a;
        --rs-gray-bg: #f4f5f7;
        --rs-gray-text: #6b7280;
    }
 
    .rs-contact-section{
        background:#fff;
    }
 
    /* Make left & right columns equal height */
    .rs-contact-section .row.align-items-start{
        align-items: stretch !important;
    }
 
    .rs-contact-section .row.align-items-start > [class*="col-"]{
        display:flex;
        flex-direction: column;
    }
 
    .rs-contact-section .row.align-items-start > [class*="col-"] > .row{
        flex: 1;
    }
 
    .form-eyebrow{
        color: var(--rs-accent);
        font-weight: 500;
        font-size: .8rem;
        letter-spacing: .08em;
        margin-bottom: .5rem;
    }
 
    .rs-heading{
        font-family: var(--plm-heading);
        font-size:36px;
        font-weight: 700;
        color: var(--rs-text-dark);
        margin-bottom: 1rem;
    }
 
    .rs-subtext{
        font-family: var(--plm-heading);
        font-size: 15px;
    color: var(--plm-secondary);
        margin-bottom: 1.5rem;
        max-width: 480px;
    }
 
    /* ---- Info cards (left side) ---- */
    .rs-info-card{
        background: var(--rs-gray-bg);
        border-radius: 10px;
        padding: 1.5rem;
        height: 100%;
        box-shadow: 0 2px 6px rgba(0,0,0,.04);
        transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
    }
 
    .rs-info-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0,0,0,.10);
        background:#fff;
    }
 
    .rs-info-card h6{
        font-family: var(--plm-heading);
        font-weight: 500;
        color: var(--rs-text-dark);
        margin-bottom: .4rem;
    }
 
    .rs-info-card p{
        font-family: var(--plm-heading);
        color: var(--rs-gray-text);
        font-size: .9rem;
        margin: 0;
    }
 
    .rs-icon-box{
        width: 42px;
        height: 42px;
        border-radius: 8px;
        background:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        color: var(--rs-accent);
        font-size: 1.1rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 6px rgba(0,0,0,.06);
        transition: transform .25s ease, box-shadow .25s ease;
    }
 
    .rs-info-card:hover .rs-icon-box{
        transform: scale(1.08);
        box-shadow: 0 6px 14px rgba(236,101,2,.25);
    }
 
    /* Accent highlighted card (Email Support style) */
    .rs-info-card--accent{
        background: linear-gradient(135deg, var(--rs-accent), var(--rs-accent-dark));
        color:#fff;
        box-shadow: 0 6px 16px rgba(236,101,2,.25);
    }
 
    .rs-info-card--accent:hover{
        background: linear-gradient(135deg, var(--rs-accent-dark), var(--rs-accent));
        box-shadow: 0 14px 30px rgba(236,101,2,.35);
    }
 
    .rs-info-card--accent h6,
    .rs-info-card--accent p{
        color:#fff;
    }
 
    .rs-icon-box--light{
        background: rgba(255,255,255,.2);
        color:#fff;
        box-shadow: none;
    }
 
    .rs-info-card--accent:hover .rs-icon-box--light{
        box-shadow: 0 6px 14px rgba(0,0,0,.15);
    }
 
    /* ---- Form card (right side) ---- */
    #form-card3022{
         border-top:2px solid #EC6502;
        background:#fff;
        border: 1px solid #eee;
        border-radius:30px;
        padding: 2rem;
         box-shadow:
        0 10px 30px rgba(0,0,0,.06),
        0 2px 8px rgba(0,0,0,.03);
        height: 100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
    }
 
    .form-card h5{
        font-family: var(--plm-heading);
        font-weight: 500;
        color: var(--rs-text-dark);
        margin-bottom: 1.25rem;
    }
 
    .rs-field{
        margin-bottom: 1rem;
        flex: 1;
    }
 
    .rs-row{
        display:flex;
        gap: 1rem;
    }
 
    .rs-field label{
        display:block;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: .04em;
        color: var(--rs-text-dark);
        margin-bottom: .4rem;
    }
 
    .rs-field .req{
        color: var(--rs-accent);
    }
 
    .rs-field input,
    .rs-field select,
    .rs-field textarea{
        width: 100%;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: .7rem .9rem;
        font-size: .95rem;
        background:#fafafa;
        transition: border-color .2s, box-shadow .2s;
    }
 
    .rs-field input:focus,
    .rs-field select:focus,
    .rs-field textarea:focus{
        outline: none;
        border-color: var(--rs-accent);
        box-shadow: 0 0 0 3px rgba(236,101,2,.15);
        background:#fff;
    }
 
    .rs-field input.is-invalid,
    .rs-field select.is-invalid,
    .rs-field textarea.is-invalid{
        border-color: #dc3545;
    }
 
    .rs-error{
        display:block;
        color:#dc3545;
        font-size: .8rem;
        margin-top: .3rem;
    }
 
    #rsSubmit{
        width: 100%;
        background: var(--rs-accent);
        color:#fff;
        border: none;
        border-radius: 8px;
        padding: .85rem 1rem;
        font-weight: 700;
        font-size: .9rem;
        letter-spacing: .03em;
        display:flex;
        align-items:center;
        justify-content:center;
        gap: .5rem;
        cursor:pointer;
        transition: background .2s, transform .1s;
    }
 
    #rsSubmit:hover{
        background: var(--rs-accent-dark);
    }
 
    #rsSubmit:active{
        transform: scale(.98);
    }
 
    .rs-note{
        text-align:center;
        color: var(--rs-gray-text);
        font-size: .8rem;
        margin-top: 1rem;
        margin-bottom: 0;
    }
 
    @media (max-width: 767px){
        .rs-row{
            flex-direction: column;
            gap: 0;
        }
    }
    
    
    .rs-icon-box{
    width:45px;
    height:45px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#FFF3EA;
    border-radius:18px;
    transition:.35s ease;
}

.rs-info-card:hover .rs-icon-box{
    background:#EC6502;
    transform:translateY(-4px);
}

.rs-icon-box svg{
    width:30px;
    height:30px;
    transition:.35s ease;
}

.rs-info-card:hover .rs-icon-box svg path,
.rs-info-card:hover .rs-icon-box svg circle,
.rs-info-card:hover .rs-icon-box svg rect{
    stroke:#fff;
}

/*=========================================
    Our Offices Section
==========================================*/

.office-heading-section{
    padding:25px 0 25px;
    background:#ffffff;
    font-family:Arial, sans-serif;
}

.office-heading{
    font-family: var(--plm-heading);
    max-width:700px;
    margin:auto;
}

.office-title{
    font-family: var(--plm-heading);
    font-size:36px;
    font-weight:700;
    color:#111827;
    line-height:1.2;
    margin-bottom:12px;
}

.office-subtitle{
    font-family: var(--plm-heading);
    font-size:15px;
    color:#555;
    line-height:1.7;
    margin:0;
}



@media (min-width:1400px){

.office-title{
    font-size:56px;
}

.office-subtitle{
    font-size:20px;
}

}


@media (max-width:1200px){

.office-heading-section{
    padding:70px 0 55px;
}

.office-title{
    font-size:46px;
}

.office-subtitle{
    font-size:20px;
}

}


@media (max-width:991px){

.office-heading-section{
    padding:60px 0 50px;
}

.office-title{
    font-size:40px;
}

.office-subtitle{
    font-size:19px;
}

}

@media (max-width:767px){

.office-heading-section{
    padding:50px 15px 40px;
}

.office-title{
    font-size:32px;
    margin-bottom:10px;
}

.office-subtitle{
    font-size:17px;
    line-height:1.6;
}

}



@media (max-width:480px){

.office-heading-section{
    padding:15px 15px 15px;
}

.office-title{
    font-size:28px;
}

.office-subtitle{
    font-size:16px;
}

}
/*==================================================
 Headquarters Section
==================================================*/

.hq-section{
    padding-bottom:40px;
    background:#fff;
}

.hq-card{
    background:#fff;
    border-radius:24px;
    padding:35px;
    box-shadow:0 20px 60px rgba(0,0,0,.08);
    transition:.35s;
}

.hq-card:hover{
    transform:translateY(-5px);
    box-shadow:0 30px 70px rgba(0,0,0,.12);
}

/*==================================================
 Equal Height Columns
==================================================*/

.col-lg-5,
.col-lg-7{
    display:flex;
}

.hq-image,
.hq-content{
    width:100%;
}

/*==================================================
 Image
==================================================*/

.hq-image{
    overflow:hidden;
    border-radius:18px;
    min-height:510px;
    height:100%;
}

.hq-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition:.5s;
}

.hq-card:hover .hq-image img{
    transform:scale(1.05);
}

/*==================================================
 Content
==================================================*/
.hq-content{
    display:flex;
    flex-direction:column;
    /*justify-content:space-between;*/
    padding-left:15px;
}

.hq-title{
    font-family: var(--plm-heading);
    font-size:36px;
    font-weight:700;
    color:#111827;
    line-height:1.2;
    margin-bottom:10px;
}

.hq-address{
    font-family: var(--plm-heading);
    font-size:15px;
    color:#555;
    line-height:1.8;
    margin-bottom:10px;
}

/*==================================================
 Map
==================================================*/

.hq-map{
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
    margin-bottom:30px;
}

.hq-map iframe{
    width:100%;
    height:260px;
    border:none;
    display:block;
}

/*==================================================
 Buttons
==================================================*/

.hq-buttons{
    font-family: var(--plm-heading);
    display:flex;
    gap:18px;
    flex-wrap:wrap;
}

.btn-hq{
    font-family: var(--plm-heading);
    background:#EC6502;
    color:#fff;
    border:2px solid #EC6502;
    padding:14px 30px;
    border-radius:50px;
    font-size:15px;
    font-weight:500;
    text-decoration:none;
    transition:.35s;
}

.btn-hq:hover{
    background:#fff;
    color:#EC6502;
    box-shadow:0 15px 30px rgba(236,101,2,.25);
}

/*==================================================
 Laptop
==================================================*/

@media(max-width:1199px){

.hq-image{
    min-height:560px;
}

.hq-title{
    font-size:34px;
}

}

/*==================================================
 Tablet
==================================================*/

@media(max-width:991px){

.col-lg-5,
.col-lg-7{
    display:block;
}

.hq-content{
    padding-left:0;
    margin-top:25px;
}

.hq-image{
    min-height:420px;
}

.hq-title{
    font-size:30px;
}

.hq-map iframe{
    height:240px;
}

}

/*==================================================
 Mobile
==================================================*/

@media(max-width:767px){

.hq-section{
    padding:60px 0;
}

.hq-card{
    padding:20px;
    border-radius:18px;
}

.hq-image{
    min-height:300px;
    margin-bottom:20px;
}

.hq-title{
    font-size:24px;
    text-align:center;
}

.hq-address{
    text-align:center;
    font-size:16px;
}

.hq-map iframe{
    height:220px;
}

.hq-buttons{
    flex-direction:column;
}

.btn-hq{
    width:100%;
    text-align:center;
    justify-content:center;
}

}

/*==================================================
 Small Mobile
==================================================*/

@media(max-width:480px){

.hq-image{
    min-height:240px;
}

.hq-title{
    font-size:22px;
}

.hq-address{
    font-size:15px;
}

.hq-map iframe{
    height:180px;
}

.btn-hq{
    font-size:14px;
    padding:13px 18px;
}

}


</style>

<section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.95) 0%,rgba(16,16,16,0.88) 35%,rgba(16,16,16,0.55) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/final-job-delivered-four.jpeg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-8">

                <div class="abouthero-breadcrumb">
                    <a href="/home">Home</a>
                    <span>›</span>
                    <a href="/contact-us">Contact us</a>
                </div>

                <div class="abouthero-tag">
                 Milestone PLM  
                </div>

                <h1 class="abouthero-title" >
                 Contact us
                </h1>

                <p class="abouthero-desc" style="font-size:16px;" >
                    Contact our BIM Modeling and Engineering Design experts for Architectural BIM, Structural BIM, MEP BIM, BIM Coordination, Scan to BIM, and staffing solutions. Get a free consultation today.
                </p>

            </div>

        </div>
    </div>
</section>

<section class="rs-contact-section py-5 ">
    <div class="container">
        <div class="row g-4 align-items-start">
 
            {{-- ================= LEFT SIDE — GET IN TOUCH ================= --}}
            <div class="col-lg-6">
                <p class="abouthero-tag">GET IN TOUCH</p>
                <h2 class="rs-heading">Let&rsquo;s Build Your <span style="color:#EC6502;">Next Project Together</h2>
                <p class="rs-subtext">
                    Partner with our team to transform your ideas into scalable, high-performance
                    digital solutions that help your business move faster, operate smarter, and
                    compete globally.
                </p>
 
                <div class="row g-3 mt-2">
                    <div class="col-sm-6">
                        <div class="rs-info-card">
                            <div class="rs-icon-box">
                                <i class="bi bi-geo-alt"><svg width="34" height="34" viewBox="0 0 24 24" fill="none"xmlns="http://www.w3.org/2000/svg"><path d="M12 22C12 22 19 15.5 19 10C19 6.13 15.87 3 12 3C8.13 3 5 6.13 5 10C5 15.5 12 22 12 22Z" stroke="#EC6502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <circle cx="12" cy="10" r="2.5" stroke="#EC6502"  stroke-width="2"/></svg></i>
                            </div>
                            <h6>Head Office</h6>
                            <p>Thane 202 Siddhashram CHS, Gokhale Road</p>
                        </div>
                    </div>
 
                    <div class="col-sm-6">
                        <div class="rs-info-card rs-info-card--accent">
                            <div class="rs-icon-box rs-icon-box--light">
                                <i class="bi bi-envelope"> <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <rect x="3" y="5" width="18" height="14" rx="2"
              stroke="#EC6502"
              stroke-width="2"/>
        <path d="M4 7L12 13L20 7"
              stroke="#EC6502"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg></i>
                            </div>
                            <h6>Email Support</h6>
                            <p>info@milestoneplm.com</p>
                        </div>
                    </div>
 
                    <div class="col-sm-6">
                        <div class="rs-info-card">
                            <div class="rs-icon-box">
                                <i class="bi bi-telephone">   <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M22 16.92V20C22 20.55 21.55 21 21 21C11.61 21 4 13.39 4 4C4 3.45 4.45 3 5 3H8.09C8.57 3 8.98 3.34 9.07 3.81L9.73 7.19C9.81 7.6 9.68 8.02 9.39 8.31L7.3 10.4C8.67 13.08 10.92 15.33 13.6 16.7L15.69 14.61C15.98 14.32 16.4 14.19 16.81 14.27L20.19 14.93C20.66 15.02 21 15.43 21 15.91V16.92"
              stroke="#EC6502"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg></i>
                            </div>
                            <h6>Let&rsquo;s Talk</h6>
                            <p>Phone : +91-80-4737-0000</p>
                        </div>
                    </div>
 
                    <div class="col-sm-6">
                        <div class="rs-info-card">
                            <div class="rs-icon-box">
                                <i class="bi bi-clock"> <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="9"
                stroke="#EC6502"
                stroke-width="2"/>
        <path d="M12 7V12L15.5 14"
              stroke="#EC6502"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"/>
    </svg></i>
                            </div>
                            <h6>Office Hours</h6>
                            <p>Monday &ndash; Saturday<br>9:00 AM &ndash; 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
 
            {{-- ================= RIGHT SIDE — YOUR EXISTING FORM ================= --}}
            <div class="col-lg-6">
                <div class="form-card" id="form-card3022">
 
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

<!--=========================================
    Our Offices
==========================================-->

<section class="office-heading-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <div class="office-heading text-center">

                    <h2 class="office-title">
                        <span style="color:#EC6502;">Visit Our </span> Office
                    </h2>

                    <p class="office-subtitle">
                        Meet our team and explore innovative engineering solutions with us.
                    </p>

                </div>

            </div>
        </div>

    </div>
</section>

<section class="hq-section">
    <div class="container">
        <div class="hq-card">
            <div class="row g-4 align-items-stretch">
                <!-- Left Image -->
                <div class="col-lg-7 d-flex">
                    <div class="hq-image w-100">
                        <img src="{{ asset('images/infrastructureplmsolution.jpeg') }}"
                             alt="NCR Headquarters">
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-5 d-flex">
                    <div class="hq-content">
                         <p class="abouthero-tag">OUR LOCATION</p>
                        <h2 class="hq-title">
                           India Thane 
                        </h2>
                        <p class="hq-address">
                            202 Siddhashram CHS, 
                            Gokhale Road
                           Thane Maharashtra
                        </p>
                        <!-- Google Map -->
                        <div class="hq-map">
                            <iframe
                                  src="https://www.google.com/maps?q=Milestone+PLM+Solutions+Pvt.+Ltd.,+202,+Siddhashram+CHS,+Gopal+Krishna+Gokhale+Marg,+Thane+West,+Thane,+Maharashtra+400602&output=embed"
                                loading="lazy"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <!-- Buttons -->
                        <div class="hq-buttons">
                            <a href="https://www.google.com/maps/dir//202,+Milestone+PLM+Solutions+Pvt+Ltd,+Siddhashram+CHS,+Gopal+Krishna+Gokhale+Marg,+opp.+Hanuman+Temple,+next+to+Ishan+Arcade,+Thane+West,+Thane,+Maharashtra+400602/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3be7b920b6428a8b:0xf2495ed1c7bfa39d?sa=X&ved=1t:57443&ictx=111" class="btn-hq" target="_blank">
                                Get Directions
                            </a>
                            <a href="#" class="btn-hq">
                                Explore Headquarters
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('sections.location')
@endsection
 

@push('scripts')
<script>
    
    document.getElementById('rsForm')?.addEventListener('submit', function () {
        const btn = document.getElementById('rsSubmit');
        const label = btn.querySelector('.rs-btn-label');
        const arrow = btn.querySelector('.rs-arrow');
        const spinner = btn.querySelector('.rs-spinner');
        if (btn.disabled) return;
        btn.disabled = true;
        arrow?.classList.add('d-none');
        spinner?.classList.remove('d-none');
        label.textContent = 'SENDING...';
    });
    
</script>
@endpush
 