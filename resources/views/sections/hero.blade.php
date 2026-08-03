{{-- resources/views/sections/hero.blade.php --}}

<style>

.plm-hero__stat-label {
    color: #ececec;
}
    @media (max-width: 576px) {
    .plm-hero__btn {
        width: 220px;
        text-align: center;
        justify-content: center;
    }
    .plm-hero__heading{
        font-size: 45px;
    }
    .plm-hero__stat-num {
    font-size: 40px;
    }
    .plm-hero__stat-label{
    font-size: 15px;
    }
}
@media (max-width: 991px) {
    .plm-hero__content {
        padding-top: 45px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .plm-hero {
        min-height: 70vh;
    }
    .plm-hero__heading {
    font-size: 55px;
        
    }
    .plm-hero__stat-num {
        font-size:45px;
    }
    .plm-hero__stat-label {
    font-size: 15px; 
    }
}
@media (min-width: 835px) and (max-width: 1024px) {
     .plm-hero {
        min-height: 70vh;
    }
    .plm-hero__heading {
    font-size:60px;
        
    }
    .plm-hero__stat-num {
        font-size:50px;
    }
    .plm-hero__stat-label {
    font-size: 20px; 
    }
    
}

</style>
<section class="plm-hero" aria-label="Hero section">

    {{-- Background Video --}}
    <video class="plm-hero__video" autoplay muted loop playsinline preload="none" aria-hidden="true">
        <source src="{{ asset('videos/herosectionvideo.mp4') }}" type="video/mp4">
    </video>
    <div class="plm-hero__overlay" aria-hidden="true"></div>

    {{-- Content --}}
    <div class="container plm-hero__content">
        <div class="row align-items-center min-vh-plm">
            <div class="col-12 col-lg-6">

                {{-- Eyebrow --}}
                <p class="plm-hero__eyebrow">
                    <span class="plm-hero__eyebrow-line" aria-hidden="true"></span>
                    Engineering Excellence
                </p>

                {{-- Heading with animated text --}}
                <h1 class="plm-hero__heading">
                    Helping companies,<br>
                    Navigate <span class="plm-hero__heading" style="color: #EC6601;">
    change
</span>
                </h1>

                {{-- CTAs --}}
                <div class="plm-hero__ctas d-flex flex-wrap gap-3">
                    <a href="{{ url('/contact-us') }}" class="plm-hero__btn plm-hero__btn--primary">
                        Start Your Project &nbsp;&rarr;
                    </a>
                    <a href="{{ url('/services/bim-services') }}" class="plm-hero__btn plm-hero__btn--outline">
                        View Our Services
                    </a>
                </div>
<div class="plm-hero__stats">
            <div class="plm-hero__divider" aria-hidden="true"></div>
            <div class="row g-0">
                <div class="col-6 col-sm-3">
                    <div class="plm-hero__stat">
                        <span class="plm-hero__stat-num">300+</span>
                        <span class="plm-hero__stat-label">Projects</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="plm-hero__stat">
                        <span class="plm-hero__stat-num">185+</span>
                        <span class="plm-hero__stat-label">Experts</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="plm-hero__stat">
                        <span class="plm-hero__stat-num">110+</span>
                        <span class="plm-hero__stat-label">Clients</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="plm-hero__stat">
                        <span class="plm-hero__stat-num">21+</span>
                        <span class="plm-hero__stat-label">Years</span>
                    </div>
                </div>
            </div>
        </div>
            </div>
            {{-- Right side: leave space for video to show through --}}
        </div>

        {{-- Stats --}}
        

    </div>
</section>