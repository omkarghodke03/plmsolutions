@extends('layouts.app')

@section('title','Case Studies')

@section('content')

{{-- ===== HERO SECTION ===== --}}

<section class="cs-hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <p class="cs-eyebrow">

                    <span class="cs-line"></span>

                    OUR WORK

                </p>

                <h1 class="cs-hero-title">

                    Precision

                    Engineering,

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

<svg class="cs-search-icon"

viewBox="0 0 20 20"

fill="none">

<circle

cx="8.5"

cy="8.5"

r="5.75"

stroke="currentColor"

stroke-width="1.5"/>

<path

d="M13 13L17 17"

stroke="currentColor"

stroke-width="1.5"

stroke-linecap="round"/>

</svg>


<input

type="text"

id="csSearch"

class="cs-search-input"

placeholder="Search projects..."

autocomplete="off"

>

</div>



<div class="cs-tabs-wrap">

<div

class="cs-tabs-scroll"

id="csTabsScroll"

>

<button

class="cs-tab active"

data-cat="all"

>

ALL

</button>


@foreach($categories as $cat)

<button

class="cs-tab"

data-cat="{{ $cat }}"

>

{{ strtoupper($cat) }}

</button>

@endforeach


</div>

</div>



<div

class="cs-count"

id="csCount"

>

{{ $caseStudies->count() }}

projects

</div>

</div>

</div>

</div>



{{-- ===== GRID ===== --}}

<section class="cs-grid-section">

<div class="container">

<div

class="row g-4"

id="csGrid"

>


@forelse($caseStudies as $cs)

<div

class="col-12 col-md-6 col-lg-4 cs-card-col"

data-cat="{{ $cs->category }}"

data-title="{{ strtolower($cs->title) }}"

data-desc="{{ strtolower($cs->short_description) }}"

>


<a

href="{{ route('case-studies.show',$cs->slug) }}"

class="cs-card"

>


<div class="cs-card-img-wrap">

<img

src="{{ asset('casestudy/'.$cs->cover_image) }}"

alt="{{ $cs->image_alt ?? $cs->title }}"

title="{{ $cs->image_title ?? $cs->title }}"

class="cs-card-img"

loading="lazy"

>


@if($cs->industry_tag)

<span

class="cs-industry-badge"

>

{{ strtoupper($cs->industry_tag) }}

</span>

@endif

</div>



<div class="cs-card-body">

<p class="cs-card-cat">

{{ strtoupper($cs->category) }}

</p>


<h3 class="cs-card-title">

{{ $cs->title }}

</h3>


<p class="cs-card-desc">

{{ $cs->short_description }}

</p>

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
@endsection