@extends('layouts.app')
@section('title',($caseStudy['seo_title']??$caseStudy['title']).' | Milestone PLM')
@section('meta_description',$caseStudy['seo_description']??$caseStudy['excerpt'])
@section('content')
<style>
.case-single{font-family:Arial,sans-serif;color:#111;background:#fff}
.case-single *{box-sizing:border-box}
.case-hero{position:relative;min-height:435px;background-image:linear-gradient(90deg,rgba(0,0,0,.78) 0%,rgba(0,0,0,.62) 45%,rgba(0,0,0,.35) 100%),url('{{ asset($caseStudy['image']) }}');background-size:cover;background-position:center;display:flex;align-items:center;color:#fff}
.case-hero-inner{padding:65px 0}
.case-breadcrumb{ font-family:Arial,sans-serif; display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:25px;font-size:12px;letter-spacing:1.5px;text-transform:capitalize}
.case-breadcrumb a{font-family:Arial,sans-serif; color:#ffffff73;text-decoration:none}
.case-breadcrumb a:hover{color:#EC6502}
.case-breadcrumb span{color:#999}
.case-breadcrumb .current{color:#EC6502}
.case-hero-tag{font-family:Arial,sans-serif; display:inline-block;color:#EC6502;font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:15px}
.case-hero h1{font-family:Arial,sans-serif; font-size:52px;line-height:1.12;font-weight:700;max-width:850px;margin:0 0 25px}
.case-hero-desc{font-family:Arial,sans-serif; font-size:16px;line-height:1.7;max-width:680px;color:#eee;margin:0 0 25px}
.case-tags{font-family:Arial,sans-serif; display:flex;flex-wrap:wrap;gap:8px}
.case-tag{font-family:Arial,sans-serif; display:inline-flex;padding:7px 13px;border:1px solid rgba(236,101,2,.7);background:rgba(236,101,2,.16);color:#fff;border-radius:3px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.4px}
.case-hero-meta{font-family:Arial,sans-serif; display:flex;flex-wrap:wrap;gap:25px;margin-top:22px;font-size:14px;color:#eee}
.case-hero-meta span{display:inline-flex;align-items:center;gap:7px}
.case-main{padding:65px 0}
.case-content{padding-right:35px}
.case-section{padding:0 0 42px;margin-bottom:42px;border-bottom:1px solid #e8e8e8}
.case-label{font-family:Arial,sans-serif; display:flex;align-items:center;gap:12px;color:#EC6502;font-size:12px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;margin-bottom:22px}
.case-label:before{content:"";display:block;width:34px;height:2px;background:#EC6502}
.case-section h2{font-family:Arial,sans-serif; font-size:30px;line-height:1.25;font-weight:700;margin:0 0 18px;color:#101010}
.case-section p{font-family:Arial,sans-serif; font-size:16px;line-height:1.9;color:#172235;margin:0 0 18px}
.case-challenge-list{display:flex;flex-direction:column;gap:13px;margin-top:25px}
.case-challenge-item{display:flex;align-items:center;gap:14px;font-size:15px;color:#172235}
.case-number{flex:0 0 33px;width:33px;height:33px;background:#EC6502;color:#fff;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700}
.case-deliverables{background:#f8f8f8;border-left:3px solid #EC6502;border-radius:0 6px 6px 0;padding:25px 28px;margin-top:25px}
.case-deliverables-title{font-family:Arial,sans-serif; font-size:12px;font-weight:700;color:#EC6502;letter-spacing:2px;text-transform:uppercase;margin-bottom:18px}
.case-deliverables ul{list-style:none;padding:0;margin:0}
.case-deliverables li{position:relative;padding-left:31px;margin-bottom:14px;font-size:15px;color:#172235;line-height:1.5}
.case-deliverables li:last-child{margin-bottom:0}
.case-deliverables li:before{content:"✓";position:absolute;left:0;top:0;width:20px;height:20px;border:1px solid #EC6502;color:#EC6502;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700}
.case-process{position:relative;margin-top:25px}
.case-process:before{content:"";position:absolute;left:22px;top:25px;bottom:25px;width:1px;background:#ddd}
.case-process-item{position:relative;display:flex;gap:20px;margin-bottom:28px}
.case-process-item:last-child{margin-bottom:0}
.case-process-number{position:relative;z-index:2;flex:0 0 45px;width:45px;height:45px;background:#191919;color:#fff;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700}
.case-process-content{padding-top:2px}
.case-process-content h3{font-family:Arial,sans-serif; font-size:16px;font-weight:700;margin:0 0 7px}
.case-process-content p{font-family:Arial,sans-serif; font-size:14px;line-height:1.7;color:#6d7580;margin:0}
.case-sidebar{position:sticky;top:25px}
.case-details{font-family:Arial,sans-serif; border:1px solid #e5e5e5;border-radius:8px;background:#fff;padding:25px;box-shadow:0 4px 18px rgba(0,0,0,.03)}
.case-details-title{font-family:Arial,sans-serif; color:#EC6502;font-size:12px;letter-spacing:2.5px;font-weight:700;text-transform:uppercase;padding-bottom:18px;border-bottom:2px solid #EC6502}
.case-detail{display:flex;gap:15px;padding:20px 0;border-bottom:1px solid #e8e8e8}
.case-detail:last-of-type{border-bottom:0}
.case-detail-icon{flex:0 0 32px;width:32px;height:32px;background:#fff5ed;color:#EC6502;display:flex;align-items:center;justify-content:center;border-radius:2px;font-size:15px}
.case-detail-text{min-width:0}
.case-detail-text small{display:block;color:#687181;font-size:10px;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px}
.case-detail-text strong{display:block;color:#111;font-size:15px;line-height:1.4;word-break:break-word}
.case-contact{margin-top:20px;background:#EC6502;border-radius:6px;padding:25px 20px;color:#fff}
.case-contact h3{font-family:Arial,sans-serif; font-size:18px;font-weight:700;margin:0 0 10px}
.case-contact p{font-family:Arial,sans-serif; font-size:13px;line-height:1.6;margin:0 0 18px;color:#fff}
.case-contact-btn{display:flex;align-items:center;justify-content:center;width:100%;background:#191919;color:#fff;text-decoration:none;padding:13px 15px;border-radius:4px;font-size:12px;font-weight:700;letter-spacing:1px}
.case-contact-btn:hover{background:#000;color:#fff}
.case-social{margin-top:20px;border:1px solid #e5e5e5;border-radius:6px;padding:18px}
.case-social-title{font-size:11px;letter-spacing:1.5px;color:#777;text-transform:uppercase;margin-bottom:13px}
.case-social-links{display:flex;gap:9px}
.case-social-links a{width:38px;height:38px;border:1px solid #ddd;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#111;text-decoration:none;font-size:13px;font-weight:700;transition:.25s}
.case-social-links a:hover{background:#EC6502;color:#fff;border-color:#EC6502}
.case-related{margin-top:15px;border:1px solid #e5e5e5;border-radius:6px;padding:20px}
.case-related small{display:block;font-size:10px;letter-spacing:1.5px;color:#777;text-transform:uppercase;margin-bottom:10px}
.case-related a{font-family:Arial,sans-serif; display:flex;justify-content:space-between;align-items:center;color:#111;text-decoration:none;font-size:14px}
.case-related a:hover{color:#EC6502}
.case-related a span:last-child{color:#EC6502;font-size:20px}
.case-gallery-section{padding-bottom:50px}
.case-gallery-title{font-size:30px;font-weight:700;margin:0 0 25px}
.case-gallery-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}
.case-gallery-item{position:relative;border:0;padding:0;background:#eee;border-radius:8px;overflow:hidden;cursor:pointer;min-height:250px;width:100%}
.case-gallery-item:first-child{grid-row:span 2}
.case-gallery-item img{width:100%;height:100%;min-height:250px;object-fit:cover;display:block;transition:transform .4s ease}
.case-gallery-item:first-child img{min-height:510px}
.case-gallery-item:hover img{transform:scale(1.04)}
.case-gallery-overlay{position:absolute;inset:0;background:rgba(0,0,0,0);display:flex;align-items:center;justify-content:center;transition:.3s}
.case-gallery-item:hover .case-gallery-overlay{background:rgba(0,0,0,.28)}
.case-gallery-zoom{width:42px;height:42px;background:#EC6502;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:19px;opacity:0;transition:.3s}
.case-gallery-item:hover .case-gallery-zoom{opacity:1}
.case-gallery-caption{margin-top:12px;font-size:11px;color:#687181;letter-spacing:1px;text-transform:uppercase}
.case-quote{background:#191919;color:#fff;border-radius:7px;padding:38px;margin-top:20px}
.case-quote-mark{color:#EC6502;font-size:40px;line-height:.5}
.case-quote-text{font-size:17px;line-height:1.8;font-style:italic;margin:15px 0 25px;color:#eee}
.case-quote-author{display:flex;align-items:center;gap:15px}
.case-quote-line{width:32px;height:2px;background:#EC6502}
.case-quote-author strong{display:block;font-size:14px}
.case-quote-author small{display:block;color:#8d96a3;font-size:12px;margin-top:4px}
.case-prev-next{background:#191919;padding:48px 0}
.case-prev-next-grid{display:grid;grid-template-columns:1fr auto 1fr;align-items:center;gap:40px}
.case-prev-next-item{text-decoration:none;display:flex;flex-direction:column;gap:9px}
.case-prev-next-item span{color:#EC6502;font-size:16px;font-weight:700}
.case-prev-next-item strong{color:#fff;font-size:14px;font-weight:400;line-height:1.5}
.case-prev-next-item:hover strong{color:#EC6502}
.case-prev{text-align:left}
.case-next{text-align:right}
.case-prev-next-divider{width:1px;height:90px;background:#444}
.case-lightbox{position:fixed;inset:0;z-index:999999;background:rgba(0,0,0,.93);display:none;align-items:center;justify-content:center;padding:30px 90px}
.case-lightbox.active{display:flex}
body.case-lightbox-open{overflow:hidden}
.case-lightbox-content{position:relative;display:flex;flex-direction:column;align-items:center;justify-content:center;width:100%;height:100%}
.case-lightbox-image{max-width:90vw;max-height:82vh;width:auto;height:auto;object-fit:contain;border-radius:5px}
.case-lightbox-counter{color:#fff;font-size:13px;letter-spacing:1px;margin-top:12px}
.case-lightbox-close,.case-lightbox-prev,.case-lightbox-next{position:absolute;border:1px solid rgba(255,255,255,.3);background:rgba(255,255,255,.08);color:#fff;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:.25s;z-index:5}
.case-lightbox-close{right:20px;top:20px;width:48px;height:48px;border-radius:50%;font-size:30px}
.case-lightbox-prev,.case-lightbox-next{font-family:Arial,sans-serif; top:50%;transform:translateY(-50%);width:52px;height:52px;border-radius:50%;font-size:38px}
.case-lightbox-prev{left:25px}
.case-lightbox-next{right:25px}
.case-lightbox-close:hover,.case-lightbox-prev:hover,.case-lightbox-next:hover{background:#EC6502;border-color:#EC6502}
@media(max-width:1199px){
.case-hero h1{font-size:44px}
.case-content{padding-right:15px}
}
@media(max-width:991px){
.case-hero{min-height:420px}
.case-hero-inner{padding:55px 0}
.case-hero h1{font-size:40px}
.case-main{padding:50px 0}
.case-sidebar{position:relative;top:auto;margin-top:20px}
.case-content{padding-right:0}
.case-gallery-item:first-child img{min-height:400px}
.case-gallery-item img{min-height:195px}
}
@media(max-width:767px){
.case-hero{min-height:500px;background-position:center}
.case-hero-inner{padding:45px 0}
.case-breadcrumb{font-size:10px}
.case-hero h1{font-size:32px;line-height:1.2;margin-bottom:18px}
.case-hero-desc{font-size:14px;line-height:1.7}
.case-hero-meta{gap:12px;flex-direction:column;font-size:13px}
.case-main{padding:40px 0}
.case-section{padding-bottom:32px;margin-bottom:32px}
.case-section h2{font-size:25px}
.case-section p{font-size:14px;line-height:1.8}
.case-gallery-grid{grid-template-columns:1fr}
.case-gallery-item:first-child{grid-row:auto}
.case-gallery-item:first-child img,.case-gallery-item img{min-height:250px;height:250px}
.case-gallery-title{font-size:25px}
.case-quote{padding:28px 22px}
.case-quote-text{font-size:15px}
.case-prev-next{padding:35px 0}
.case-prev-next-grid{grid-template-columns:1fr;gap:25px}
.case-prev-next-divider{display:none}
.case-next{text-align:left}
.case-lightbox{padding:20px 12px}
.case-lightbox-image{max-width:calc(100vw - 24px);max-height:75vh}
.case-lightbox-close{right:10px;top:10px;width:42px;height:42px}
.case-lightbox-prev,.case-lightbox-next{width:42px;height:42px;font-size:30px}
.case-lightbox-prev{left:8px}
.case-lightbox-next{right:8px}
}
</style>
<main class="case-single">
<section class="case-hero">
<div class="container">
<div class="case-hero-inner">
<div class="case-breadcrumb">
<a href="{{ url('/') }}">Home</a>
<span>›</span>
<a href="{{ route('case-studies.index') }}">Case Studies</a>
<span>›</span>
<span class="current">{{ $caseStudy['tag']??$caseStudy['category'] }}</span>
</div>
<div class="case-hero-tag">{{ $caseStudy['category'] }}</div>
<h1>{{ $caseStudy['title'] }}</h1>
<p class="case-hero-desc">{{ $caseStudy['excerpt'] }}</p>
<div class="case-tags">
@if(!empty($caseStudy['services']))
@foreach($caseStudy['services'] as $service)
<span class="case-tag">{{ $service }}</span>
@endforeach
@elseif(!empty($caseStudy['tag']))
<span class="case-tag">{{ $caseStudy['tag'] }}</span>
@endif
</div>
<div class="case-hero-meta">
@if(!empty($caseStudy['location']))
<span>📍 {{ $caseStudy['location'] }}</span>
@endif
@if(!empty($caseStudy['timeline']))
<span>◷ {{ $caseStudy['timeline'] }}</span>
@endif
@if(!empty($caseStudy['team']))
<span>♙ {{ $caseStudy['team'] }}</span>
@endif
@if(!empty($caseStudy['industry']))
<span>▣ {{ $caseStudy['industry'] }}</span>
@endif
</div>
</div>
</div>
</section>
<section class="case-main">
<div class="container">
<div class="row g-4">
<div class="col-lg-8">
<div class="case-content">
@if(!empty($caseStudy['overview']))
<section class="case-section">
<div class="case-label">Project Overview</div>
<p>{{ $caseStudy['overview'] }}</p>
</section>
@endif
@if(!empty($caseStudy['challenge']))
<section class="case-section">
<div class="case-label">The Challenge</div>
<h2>{{ $caseStudy['challenge_title']??'What made this project complex' }}</h2>
@if(is_array($caseStudy['challenge']))
<p>{{ $caseStudy['challenge']['description']??'' }}</p>
@if(!empty($caseStudy['challenge']['items']))
<div class="case-challenge-list">
@foreach($caseStudy['challenge']['items'] as $index=>$item)
<div class="case-challenge-item">
<span class="case-number">{{ str_pad($index+1,2,'0',STR_PAD_LEFT) }}</span>
<span>{{ $item }}</span>
</div>
@endforeach
</div>
@endif
@else
<p>{{ $caseStudy['challenge'] }}</p>
@endif
</section>
@endif
@if(!empty($caseStudy['solution'])||!empty($caseStudy['approach']))
<section class="case-section">
<div class="case-label">Our Approach</div>
<h2>{{ $caseStudy['approach_title']??'How Milestone PLM delivered' }}</h2>
@if(!empty($caseStudy['approach']))
<p>{{ is_array($caseStudy['approach'])?($caseStudy['approach']['description']??''):$caseStudy['approach'] }}</p>
@else
<p>{{ $caseStudy['solution'] }}</p>
@endif
@if(!empty($caseStudy['deliverables']))
<div class="case-deliverables">
<div class="case-deliverables-title">Key Deliverables</div>
<ul>
@foreach($caseStudy['deliverables'] as $deliverable)
<li>{{ $deliverable }}</li>
@endforeach
</ul>
</div>
@endif
</section>
@endif
@if(!empty($caseStudy['process']))
<section class="case-section">
<div class="case-label">Delivery Process</div>
<h2>{{ $caseStudy['process_title']??'How we structured the work' }}</h2>
<div class="case-process">
@foreach($caseStudy['process'] as $index=>$step)
<div class="case-process-item">
<div class="case-process-number">{{ str_pad($index+1,2,'0',STR_PAD_LEFT) }}</div>
<div class="case-process-content">
<h3>{{ $step['title'] }}</h3>
<p>{{ $step['description'] }}</p>
</div>
</div>
@endforeach
</div>
</section>
@endif
@if(!empty($caseStudy['gallery']))
<section class="case-gallery-section">
<div class="case-label">Glimpse of Work</div>
<h2 class="case-gallery-title">Project in Pictures</h2>
<div class="case-gallery-grid">
@foreach($caseStudy['gallery'] as $index=>$image)
<button type="button" class="case-gallery-item" onclick="openCaseGallery({{ $index }})">
<img src="{{ asset($image) }}" alt="{{ $caseStudy['title'] }} - Project Image {{ $index+1 }}" loading="lazy">
<span class="case-gallery-overlay">
<span class="case-gallery-zoom">↗</span>
</span>
</button>
@endforeach
</div>
<div class="case-gallery-caption">{{ $caseStudy['tag']??$caseStudy['title'] }}</div>
</section>
@endif
@if(!empty($caseStudy['quote']))
<div class="case-quote">
<div class="case-quote-mark">“</div>
<div class="case-quote-text">"{{ is_array($caseStudy['quote'])?($caseStudy['quote']['text']??''):$caseStudy['quote'] }}"</div>
@if(is_array($caseStudy['quote'])&&!empty($caseStudy['quote']['author']))
<div class="case-quote-author">
<span class="case-quote-line"></span>
<div>
<strong>{{ $caseStudy['quote']['author'] }}</strong>
@if(!empty($caseStudy['quote']['designation']))
<small>{{ $caseStudy['quote']['designation'] }}</small>
@endif
</div>
</div>
@endif
</div>
@endif
</div>
</div>
<div class="col-lg-4">
<aside class="case-sidebar">
<div class="case-details">
<div class="case-details-title">Project Details</div>
@if(!empty($caseStudy['client']))
<div class="case-detail">
<div class="case-detail-icon">▣</div>
<div class="case-detail-text">
<small>Client</small>
<strong>{{ $caseStudy['client'] }}</strong>
</div>
</div>
@endif
@if(!empty($caseStudy['location']))
<div class="case-detail">
<div class="case-detail-icon">⌖</div>
<div class="case-detail-text">
<small>Location</small>
<strong>{{ $caseStudy['location'] }}</strong>
</div>
</div>
@endif
@if(!empty($caseStudy['service']))
<div class="case-detail">
<div class="case-detail-icon">⚒</div>
<div class="case-detail-text">
<small>Service</small>
<strong>{{ $caseStudy['service'] }}</strong>
</div>
</div>
@endif
@if(!empty($caseStudy['industry']))
<div class="case-detail">
<div class="case-detail-icon">▤</div>
<div class="case-detail-text">
<small>Industry</small>
<strong>{{ $caseStudy['industry'] }}</strong>
</div>
</div>
@endif
@if(!empty($caseStudy['timeline']))
<div class="case-detail">
<div class="case-detail-icon">◷</div>
<div class="case-detail-text">
<small>Timeline</small>
<strong>{{ $caseStudy['timeline'] }}</strong>
</div>
</div>
@endif
@if(!empty($caseStudy['team']))
<div class="case-detail">
<div class="case-detail-icon">♙</div>
<div class="case-detail-text">
<small>Team Size</small>
<strong>{{ $caseStudy['team'] }}</strong>
</div>
</div>
@endif
<div class="case-contact">
<h3>Work on a similar project?</h3>
<p>Tell us about your requirements and we'll respond within 24 hours.</p>
<a href="{{ url('/contact') }}" class="case-contact-btn">GET IN TOUCH →</a>
</div>
<div class="case-social">
<div class="case-social-title">Connect With Us</div>
<div class="case-social-links">
<a href="{{ $socials['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
<a href="{{ $socials['instagram'] }}" target="_blank" rel="noopener" aria-label="Instagram">ig</a>
<a href="{{ $socials['youtube'] }}" target="_blank" rel="noopener" aria-label="YouTube">yt</a>
</div>
</div>
@if(!empty($caseStudy['related_service']))
<div class="case-related">
<small>Related Service</small>
<a href="{{ $caseStudy['related_service_url']??url('/services') }}">
<span>{{ $caseStudy['related_service'] }}</span>
<span>↗</span>
</a>
</div>
@endif
</div>
</aside>
</div>
</div>
</div>
</section>
<section class="case-prev-next">
<div class="container">
<div class="case-prev-next-grid">
<a href="{{ route('case-studies.show',$previous['slug']) }}" class="case-prev-next-item case-prev">
<span>← PREVIOUS</span>
<strong>{{ $previous['title'] }}</strong>
</a>
<div class="case-prev-next-divider"></div>
<a href="{{ route('case-studies.show',$next['slug']) }}" class="case-prev-next-item case-next">
<span>NEXT →</span>
<strong>{{ $next['title'] }}</strong>
</a>
</div>
</div>
</section>
</main>
@if(!empty($caseStudy['gallery']))
<div class="case-lightbox" id="caseLightbox" aria-hidden="true">
<button type="button" class="case-lightbox-close" onclick="closeCaseGallery()" aria-label="Close">×</button>
<button type="button" class="case-lightbox-prev" onclick="changeCaseGallery(-1)" aria-label="Previous image">‹</button>
<div class="case-lightbox-content">
<img id="caseLightboxImage" class="case-lightbox-image" src="" alt="">
<div class="case-lightbox-counter">
<span id="caseLightboxCurrent">1</span> / <span id="caseLightboxTotal">{{ count($caseStudy['gallery']) }}</span>
</div>
</div>
<button type="button" class="case-lightbox-next" onclick="changeCaseGallery(1)" aria-label="Next image">›</button>
</div>
<script>
const caseGallery=@json(array_map(function($image){return asset($image);},$caseStudy['gallery']));
let caseGalleryIndex=0;
function openCaseGallery(index){
caseGalleryIndex=index;
updateCaseGallery();
document.getElementById('caseLightbox').classList.add('active');
document.getElementById('caseLightbox').setAttribute('aria-hidden','false');
document.body.classList.add('case-lightbox-open');
}
function closeCaseGallery(){
document.getElementById('caseLightbox').classList.remove('active');
document.getElementById('caseLightbox').setAttribute('aria-hidden','true');
document.body.classList.remove('case-lightbox-open');
}
function updateCaseGallery(){
document.getElementById('caseLightboxImage').src=caseGallery[caseGalleryIndex];
document.getElementById('caseLightboxImage').alt='Project Image '+(caseGalleryIndex+1);
document.getElementById('caseLightboxCurrent').textContent=caseGalleryIndex+1;
}
function changeCaseGallery(direction){
caseGalleryIndex+=direction;
if(caseGalleryIndex<0){
caseGalleryIndex=caseGallery.length-1;
}
if(caseGalleryIndex>=caseGallery.length){
caseGalleryIndex=0;
}
updateCaseGallery();
}
document.addEventListener('keydown',function(e){
const lightbox=document.getElementById('caseLightbox');
if(!lightbox||!lightbox.classList.contains('active'))return;
if(e.key==='Escape')closeCaseGallery();
if(e.key==='ArrowLeft')changeCaseGallery(-1);
if(e.key==='ArrowRight')changeCaseGallery(1);
});
document.getElementById('caseLightbox').addEventListener('click',function(e){
if(e.target===this)closeCaseGallery();
});
</script>
@endif

@include('sections.location')
@endsection