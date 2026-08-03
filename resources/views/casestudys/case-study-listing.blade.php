@extends('layouts.app')

@section('title','Case Studies')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<style>
    
    .cs-stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1px;
    background: #444;
    border: 1px solid #444;
    border-radius: 20px;
    overflow: hidden;
}


/* Outer flex row: arrows on either side of the scroll strip */
.cs-tabs-outer {
    display: flex;
    align-items: center;
    flex: 1;
    min-width: 0;
    gap: 4px;
}

.cs-tab-arrow {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background: var(--white);
    border: 1.5px solid #EC6502;
    border-radius: 50%;
    cursor: pointer;
    color: #EC6502;
    transition: all var(--trans);
    padding: 0;
}
.cs-tab-arrow:hover:not(:disabled) { border-color: var(--orange); color: var(--orange); }
.cs-tab-arrow:disabled             { opacity: 0.3; cursor: default; }


.cs-tabs-wrap {
    position: relative;
    flex: 1;
    min-width: 0;
    overflow: hidden;
}

.cs-tabs-wrap::before,
.cs-tabs-wrap::after {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    width: 20px;
    pointer-events: none;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.2s;
}
.cs-tabs-wrap::before { left:  0; background: linear-gradient(to right, var(--white), transparent); }
.cs-tabs-wrap::after  { right: 0; background: linear-gradient(to left,  var(--white), transparent); }
.cs-tabs-wrap.fade-left::before  { opacity: 1; }
.cs-tabs-wrap.fade-right::after  { opacity: 1; }

.cs-tabs-scroll {
    display: flex;
    gap: 6px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none;
    padding: 2px 0;
}
.cs-tabs-scroll::-webkit-scrollbar { display: none; }


.cs-tab {
    flex-shrink: 0;
    padding: 8px 18px;
    border: 1.5px solid #ddd;
    border-radius: 15px;
    background: transparent;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1px;
    color: var(--text);
    cursor: pointer;
    transition: all var(--trans);
    white-space: nowrap;
}
.cs-tab-arrow--left,
.cs-tab-arrow--right {
    position: static;  
    transform: none;
}
.cs-tab:hover  { border-color: var(--orange); color: var(--orange); }
.cs-tab.active { background: var(--orange); border-color: var(--orange); color: var(--white); }

/* Mobile: hide arrows, let native touch scroll work */
@media (max-width: 768px) {
    .cs-tab-arrow { display: none !important; }

    .cs-tabs-outer {
        gap: 0;
    }

    .cs-tabs-wrap::before,
    .cs-tabs-wrap::after { display: none; }
}
    
.cs-hero-title {
    font-size: clamp(2rem, 5vw, 60px);
    font-weight: 700;
    line-height: 1.2;
    color: var(--white);
    margin-bottom: 24px;
}
</style>

<section class="cs-hero" style="background-image: url('{{ asset('images/case-study-banner1.png') }}');">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <p class="cs-eyebrow">

                    <span class="cs-line"></span>

                    OUR WORK

                </p>

                <h1 class="cs-hero-title">

                    Precision<br>

                    Engineering,<br>

                    <span class="cs-accent">

                        Proven

                    </span>

                    <span class="cs-accent">

                        Results.

                    </span>

                </h1>

                <p class="cs-hero-body">

                    Real projects, measurable outcomes.

                    Explore how Milestone PLM delivers BIM,

                    structural and MEP engineering.

                </p>

            </div>

            <div class="col-lg-6">

                <div class="cs-stats-grid">

                    <div class="cs-stat-box">

                        <div class="cs-stat-num">

                            500+

                        </div>

                        <div class="cs-stat-label">

                            PROJECTS DELIVERED

                        </div>

                    </div>

                    <div class="cs-stat-box">

                        <div class="cs-stat-num">

                            15+

                        </div>

                        <div class="cs-stat-label">

                            COUNTRIES SERVED

                        </div>

                    </div>

                    <div class="cs-stat-box">

                        <div class="cs-stat-num">

                            $50M+

                        </div>

                        <div class="cs-stat-label">

                            REWORK COST SAVED

                        </div>

                    </div>

                    <div class="cs-stat-box">

                        <div class="cs-stat-num">

                            94%

                        </div>

                        <div class="cs-stat-label">

                            AVG CLASH REDUCTION

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ===== FILTER ===== --}}
<div class="cs-filter-wrap" id="csFilterBar">
    <div class="container">
        <div class="cs-filter-inner">

            <div class="cs-search-wrap">
                <svg class="cs-search-icon" viewBox="0 0 20 20" fill="none">
                    <circle cx="8.5" cy="8.5" r="5.75" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M13 13L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <input
                    type="text"
                    id="csSearch"
                    class="cs-search-input"
                    placeholder="Search projects..."
                    autocomplete="off"
                >
            </div>

            <div class="cs-tabs-outer">
                {{-- Left Arrow --}}
                <button class="cs-tab-arrow cs-tab-arrow--left" id="tabArrowLeft" aria-label="Scroll left">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>

                {{-- Scrollable Tabs --}}
                <div class="cs-tabs-wrap" id="csTabsWrap">
                    <div class="cs-tabs-scroll" id="csTabsScroll">
                        <button class="cs-tab active" data-cat="all">ALL</button>
                        @foreach($categories as $cat)
                            <button class="cs-tab" data-cat="{{ $cat }}">
                                {{ strtoupper($cat) }}
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Right Arrow --}}
                <button class="cs-tab-arrow cs-tab-arrow--right" id="tabArrowRight" aria-label="Scroll right">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>

            <div class="cs-count" id="csCount">
                {{ $caseStudies->count() }} projects
            </div>

        </div>
    </div>
</div>
    @php $first = true; @endphp

   {{-- ===== GRID ===== --}}
<section class="cs-grid-section">
<div class="container">
    <div class="row g-4" id="csGrid">
        @forelse($caseStudies as $cs)
        <div class="col-12 col-md-6 col-lg-4 cs-card-col"
             data-cat="{{ $cs->category }}"
             data-title="{{ strtolower($cs->title) }}"
             data-desc="{{ strtolower($cs->short_description) }}">
            <a href="{{ route('case-studies.show', $cs->slug) }}" class="cs-card">
                <div class="cs-card-img-wrap">
                    <img src="{{ asset('casestudy/' . $cs->cover_image) }}"
                         alt="{{ $cs->image_alt ?? $cs->title }}"
                         class="cs-card-img" loading="lazy">
                    @if($cs->industry_tag)
                    <span class="cs-industry-badge">{{ strtoupper($cs->industry_tag) }}</span>
                    @endif
                </div>
                <div class="cs-card-body">
                    <p class="cs-card-cat">{{ strtoupper($cs->category) }}</p>
                    <h3 class="cs-card-title">{{ $cs->title }}</h3>
                    <p class="cs-card-desc">{{ $cs->short_description }}</p>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p>No case studies found</p>
        </div>
        @endforelse
    </div>
    <div class="text-center py-5 d-none" id="csEmptyJs">
        <p>No case studies found.</p>
    </div>
</div>
</section>

@include('sections.ready-to-scale')
@include('sections.location')
@endsection


<script>

const arrowLeft  = document.getElementById('tabArrowLeft');
const arrowRight = document.getElementById('tabArrowRight');
const tabsWrap   = document.getElementById('csTabsWrap');

function updateTabArrows() {
    if (!tabsScroll) return;

    if (window.innerWidth <= 768) {
        if (tabsWrap) {
            tabsWrap.classList.remove('fade-left', 'fade-right');
        }
        return;
    }

    const atStart = tabsScroll.scrollLeft <= 2;
    const atEnd   = tabsScroll.scrollLeft + tabsScroll.clientWidth >= tabsScroll.scrollWidth - 2;

    if (arrowLeft)  arrowLeft.disabled  = atStart;
    if (arrowRight) arrowRight.disabled = atEnd;
    if (tabsWrap) {
        tabsWrap.classList.toggle('fade-left',  !atStart);
        tabsWrap.classList.toggle('fade-right', !atEnd);
    }
}

if (arrowLeft)  arrowLeft.addEventListener('click',  () => tabsScroll.scrollBy({ left: -160, behavior: 'smooth' }));
if (arrowRight) arrowRight.addEventListener('click', () => tabsScroll.scrollBy({ left:  160, behavior: 'smooth' }));
if (tabsScroll) tabsScroll.addEventListener('scroll', updateTabArrows);
window.addEventListener('resize', updateTabArrows);
updateTabArrows();

</script>