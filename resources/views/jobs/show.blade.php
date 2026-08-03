@extends('layouts.app')

@section('title', $job->title . ' - Career Opportunity')

@section('content')

<style>
    .jobdetail-section{
        background:#fafafa;
        padding:90px 0;
    }
    .jobdetail-card{
        position:relative;
        overflow:hidden;
        background:#fff;
        border-radius:18px;
        border:1px solid #ececec;
        box-shadow:0 10px 30px rgba(0,0,0,.05);
        max-width:820px;
        margin:0 auto;
    }
    .jobdetail-top-line{
        height:4px;
        width:100%;
        background:#EC6502;
    }
    .jobdetail-body{
        padding:40px;
    }
    .jobdetail-back{
        display:inline-flex;
        align-items:center;
        gap:6px;
        color:#EC6502;
        font-weight:600;
        font-size:14px;
        text-decoration:none;
        margin-bottom:25px;
        transition:.25s;
    }
    .jobdetail-back:hover{
        color:#c95401;
        gap:10px;
    }
    .jobdetail-badge{
        display:inline-block;
        margin-bottom:18px;
        background:#FFF3EC;
        color:#EC6502;
        padding:7px 15px;
        border-radius:30px;
        font-size:12px;
        font-weight:700;
    }
    .jobdetail-title{
        font-size:32px;
        font-weight:700;
        color:#222;
        margin-bottom:12px;
    }
    .jobdetail-date{
        display:flex;
        align-items:center;
        gap:10px;
        color:#666;
        margin-bottom:25px;
        font-size:14px;
    }
    .jobdetail-date svg{
        color:#EC6502;
        flex-shrink:0;
    }
    .jobdetail-divider{
        height:1px;
        background:#ececec;
        margin:25px 0;
        border:none;
    }
    .jobdetail-desc{
        color:#555;
        font-size:16px;
        line-height:1.8;
        white-space:pre-line;
    }
    .jobdetail-footer{
        margin-top:35px;
        padding-top:25px;
        border-top:1px solid #ececec;
    }
    .career-btn{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        gap:5px;
        min-width:200px;
        height:46px;
        padding:0 20px;
        border-radius:50px;
        text-decoration:none;
        border:1px solid #EC6502;
        background:#EC6502;
        color:#fff;
        font-weight:600;
        font-size:15px;
        transition:.25s;
        cursor:pointer;
    }
    .career-btn:hover{
        background:#c95401;
        border-color:#c95401;
        color:#fff;
    }
    @media(max-width:768px){
        .jobdetail-body{
            padding:24px;
        }
        .jobdetail-title{
            font-size:26px;
        }
    }

    #omi-g{
        min-height: 380px;
    }
</style>

<section class="abouthero-section" id="omi-g" style="background:linear-gradient(90deg,rgba(16,16,16,0.60) 0%,rgba(16,16,16,0.55) 35%,rgba(16,16,16,0.40) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/IT-Services.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="/">Home</a>
                    <span>›</span>
                    <a href="{{ route('jobs.index') }}">Career</a>
                    <span>›</span>
                    <a href="#">{{ $job->title }}</a>
                </div>
                <div class="abouthero-tag">
                    Build Your Future
                </div>
                <h1 class="abouthero-title">
                    {{ $job->title }}
                </h1>
                <p class="abouthero-desc" style="font-size:16px;">
                    Explore this opportunity and take the next step in your career with Milastone PLM Solution.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="jobdetail-section">
    <div class="container">

        <a href="{{ route('jobs.index') }}" class="jobdetail-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            Back to all jobs
        </a>

        <div class="jobdetail-card">
            <div class="jobdetail-top-line"></div>
            <div class="jobdetail-body">

                <span class="jobdetail-badge">OPEN POSITION</span>

                <h2 class="jobdetail-title">{{ $job->title }}</h2>

                <div class="jobdetail-date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>Posted on {{ $job->created_at->format('M d, Y') }}</span>
                </div>

                <hr class="jobdetail-divider">

                <div class="jobdetail-desc">
                    {{ $job->description }}
                </div>

                <div class="jobdetail-footer">
                    <button type="button" class="career-btn" data-bs-toggle="modal" data-bs-target="#applyJobModal">
                        Apply for this Position
                    </button>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- Naveen apply.blade.php file include --}}
@include('jobs.apply')

@include('sections.location')
@endsection