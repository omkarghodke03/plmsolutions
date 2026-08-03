@extends('layouts.app')

@section('title', 'Careers - Milestone')

@section('content')

<style>
    .career-section{
    background:#fafafa;
    padding:90px 0;
}
.career-subtitle{
    display:inline-block;
    background:#FFF4ED;
    color:#EC6502;
    padding:8px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:700;
    letter-spacing:1px;
}
.career-heading{
    font-size:42px;
    font-weight:700;
    color:#222;
}
.career-text{
    max-width:620px;
    margin:auto;
    color:#666;
    font-size:16px;
}
.career-card{
    position:relative;
    overflow:hidden;
    background:#fff;
    border-radius:18px;
    border:1px solid #ececec;
    transition:.4s;
    box-shadow:0 10px 30px rgba(0,0,0,.05);
}
.career-top-line{
    height: 2px;
    width:0;
    background:#EC6502;
    transition:.4s;
}
.career-card:hover .career-top-line{
    width:100%;
}
.career-card-body{
    padding:20px;
}
.career-card:hover{
    transform:translateY(-10px);
    background:linear-gradient(180deg,#fff,#fff7f2);
    border-color:#EC6502;
    box-shadow:0 20px 45px rgba(236,101,2,.20);
}
.career-badge{
    display:inline-block;
    margin-bottom:20px;
    background:#FFF3EC;
    color:#EC6502;
    padding:7px 15px;
    border-radius:30px;
    font-size:12px;
    font-weight:700;
}
.career-title{
    font-size:24px;
    font-weight:700;
    margin-bottom:10px;
    color:#222;
    transition:.3s;
}
.career-card:hover .career-title{
    color:#EC6502;
}
.career-date{
    display:flex;
    align-items:center;
    gap:10px;
    color:#666;
    margin-bottom:10px;
}
.career-date svg{
    color:#EC6502;
}
.career-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:5px;
    width:150px;
    height:40px;
    border-radius:50px;
    text-decoration:none;
    border:1px solid #EC6502;
    color:#EC6502;
    font-weight:500;
    transition:.25s;
  }
  .career-btn svg{
    transition:.3s;
  }
  .career-btn:hover{
    background:#EC6502;
    color:#fff;
  }
  .career-btn:hover svg{
    transform:translateX(6px);
  }
  .pagination .page-link{
    color:#EC6502;
  }
   .pagination .active .page-link{
    background:#EC6502;
    border-color:#EC6502;
  }
@media(max-width:768px){
    .career-heading{
    font-size:30px;
     }
    .career-card-body{
    padding:18px;
    }
  .career-title{
    font-size:22px;
    }
}
</style>

<section class="abouthero-section" style="background:linear-gradient(90deg,rgba(16,16,16,0.60) 0%,rgba(16,16,16,0.55) 35%,rgba(16,16,16,0.40) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('images/discuss-trial-one.jpeg') }}'); background-size:cover; background-position:center; background-repeat:no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-10">
                <div class="abouthero-breadcrumb">
                    <a href="#">Home</a>
                    <span>›</span>
                    <a href="/services/Bim-Services">Career</a>
                   
                </div>
                <div class="abouthero-tag">
                Build Your Future
                </div>
                <h1 class="abouthero-title">
                    Build Your Career with Milastone PLM Solution
                </h1>
                <p class="abouthero-desc" style="font-size:16px;">
                   We believe great people build great solutions. That's why we invest in our employees through continuous learning, supportive leadership, exciting projects, and opportunities for career growth.
                </p>
                
            </div>
        </div>
    </div>
</section>

<section class="career-section">

    <div class="container">
        <div class="our-services-header ">
            <div class="our-services-header-left ">
                <span class="our-services-tag">OUR CAREER</span>
                <h2 class="our-services-title ">
                   Explore <span>Job Opportunities</span>
                </h2>
                 <p class="section-description">
                    Find the right opportunity to grow your skills, advance your career, and contribute to innovative PLM solutions.
                </p>
                
            </div>
          
        </div>
        <div class="row g-4">
            @forelse($jobs as $job)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="career-card h-100">
                        <div class="career-top-line"></div>
                        <div class="career-card-body d-flex flex-column">
                            <span class="career-badge">
                                OPEN POSITION
                            </span>
                            <h3 class="career-title">
                                {{ $job->title }}
                            </h3>
                            <div class="career-date">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="18"
                                     height="18"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span>
                                    Posted on {{ $job->created_at->format('M d, Y') }}
                                </span>
                            </div>
                            <a href="{{ route('jobs.show',$job->slug) }}"
                               class="career-btn mt-auto">
                                View Details
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="18"
                                     height="18"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light border rounded-4 text-center py-5">
                        <h5>No Current Openings</h5>
                        <p class="mb-0">
                            Currently there are no open positions available.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
        @if($jobs->hasPages())
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    {{ $jobs->links() }}
                </div>
            </div>
        @endif
    </div>
</section>
@include('sections.location')
@endsection