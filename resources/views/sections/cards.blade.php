<style>
    .ir-section { background: #fff;  padding-top: 40px;
    padding-bottom: 40px; }
    .ir-heading { 
         font-size: 44px;
        font-weight: 700; 
        color: #1a1a1a;
         margin: 40px 0;
        --tw-leading: 1.1;
        line-height: 1.1;
        }
    .ir-heading span { color: #E86A1E; }
    .ir-view-all { font-size: .88rem; color: #1a1a1a; text-decoration: none; white-space: nowrap; }
    .ir-view-all:hover { color: #E86A1E; text-decoration: underline; }

    .ir-card { background: #fff; border-radius: 6px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,.08); display: flex; flex-direction: column; height: 290px; transition: transform .22s ease, box-shadow .22s ease; }
    .ir-card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,.13); }
.ir-thumb img { width:100%; height:100%; object-fit:cover; display:block; transition: transform .35s ease; }
    .ir-card:hover .ir-thumb img { transform: scale(1.04); }

    
    .ir-body {
        padding: 14px 16px 18px 22px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 6px;
        position: relative;            
    }

    
    .ir-body::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 40%;                      
        background: #E86A1E;
        border-radius: 0 2px 2px 0;
        transition: height 0.4s ease;   
        z-index: 2;
    }

    .ir-card:hover .ir-body::before {
        height: 100%;                    
    }

   
    .ir-arrow { color:#E86A1E; font-size:.7rem; letter-spacing:-2px; line-height:1; }
    .ir-title { font-size: 18px; font-weight:700; color:#1a1a1a; margin:0; line-height:1.4; }
    .ir-title a { color:inherit; text-decoration:none; }
    .ir-title a:hover { color:#E86A1E; text-decoration:underline; }

    @media(prefers-reduced-motion:reduce){
        .ir-card, .ir-thumb img { transition:none; }
        .ir-card:hover { transform:none; }
        .ir-card:hover .ir-thumb img { transform:none; }
        .ir-body::before { transition:none; }
        
    }
        
    @media (max-width: 480px) {
    .ir-card {
       margin: 15px;
        }
   }
   
    
    @media (min-width: 768px) and (max-width: 834px) {
      .ir-card {
       margin: 15px;
        }
   }

 
   @media (min-width: 835px) and (max-width: 1024px) {
   .ir-card {
       margin: 15px;
        }
  }
       
 .cs-header__right {
    display    : flex;
    align-items: center;
    gap        : 20px;
    flex-shrink: 0;
  }        
</style>

<section class="ir-section" aria-label="Insights and Resources">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="ir-heading">Insights &amp; <span>Resources</span></h2>
            <a href="/blogs/" class="cs-view-more">View All &rarr;</a>
        </div>

        <div class="row g-6">
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="ir-card">
                    <div class="ir-thumb">
                        <img src="{{ asset('images/9-steps-of-the-engineering-design-process.png') }}"
                             alt="9 Steps of the Engineering Design Process" title="9 Steps of the Engineering Design Process"
                             loading="lazy" width="400" height="260">
                    </div>
                    <div class="ir-body">
                        <h3 class="ir-title">
                            <a href="/blogs/outsourcing-3d-modeling-services-for-aec-and-engineering-projects/">
                               Outsourcing 3D Modeling Services for AEC and Engineering Projects
                            </a>
                        </h3>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="ir-card">
                    <div class="ir-thumb">
                        <img src="{{ asset('images/Essential Symbols on Engineering Drawings.png') }}"
                             alt="Essential Symbols on Engineering Drawings" title="9 Steps of the Engineering Design Process"
                             loading="lazy" width="400" height="260">
                    </div>
                    <div class="ir-body">
                        <h3 class="ir-title">
                            <a href="/blogs/value-engineering-in-construction-key-stages-and-benefits/">
                              Value Engineering in Construction Key Stages and Benefits
                            </a>
                        </h3>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="ir-card">
                    <div class="ir-thumb">
                        <img src="{{ asset('images/7-stages-of-construction-a-complete-guide.png') }}"
                             alt="7 Stages of Construction: A Complete Guide" title="9 Steps of the Engineering Design Process"
                             loading="lazy" width="400" height="260">
                    </div>
                    <div class="ir-body">
                        <h3 class="ir-title">
                            <a href="/blogs/step-by-step-process-for-structural-design-of-buildings-projects/">
                                Step-by-Step Process for Structural Design of Buildings & Projects
                            </a>
                        </h3>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>