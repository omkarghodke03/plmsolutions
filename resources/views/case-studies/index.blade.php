@extends('layouts.app')

@section('title', 'Case Studies | Milestone PLM')

@section('meta_description', 'Explore Milestone PLM case studies covering manufacturing engineering, MEP coordination, structural detailing and engineering services.')

@section('meta_keywords', 'Milestone PLM case studies, manufacturing engineering, MEP services, structural services, CAD engineering')

@section('content')


<style>

    .case-studies-section {
        font-family: Arial, sans-serif;
        background: #ffffff;
        padding-bottom: 80px;
    }
    .case-filter-bar {
        width: 100%;
        background: #fff;
        border-top: 1px solid #eeeeee;
        border-bottom: 1px solid #eeeeee;
        padding: 14px 0;
    }

    .case-filter-inner {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .case-filter-list {
        display: flex;
        align-items: center;
        gap: 7px;
        flex: 1;
        overflow-x: auto;
        scrollbar-width: none;
        scroll-behavior: smooth;
    }

    .case-filter-list::-webkit-scrollbar {
        display: none;
    }


    /* FILTER BUTTON */

    .case-filter-btn {
        flex: 0 0 auto;
        border: 1px solid #dddddd;
        background: #ffffff;
        color: #222222;
        padding: 10px 18px;
        border-radius: 25px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: .7px;
        text-transform: uppercase;
        white-space: nowrap;
        cursor: pointer;
        transition: all .25s ease;
    }

    .case-filter-btn:hover {
        border-color: #EC6502;
        color: #EC6502;
    }

    .case-filter-btn.active {
        background: #EC6502;
        border-color: #EC6502;
        color: #ffffff;
    }


    /* LEFT / RIGHT BUTTON */

    .case-control {
        width: 32px;
        height: 32px;
        min-width: 32px;
        border-radius: 50%;
        border: 1px solid #EC6502;
        background: #ffffff;
        color: #EC6502;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        text-decoration: none;
        cursor: pointer;
        transition: all .25s ease;
    }

    .case-control:hover {
        background: #EC6502;
        color: #ffffff;
    }


    /* PROJECT COUNT */

    .case-project-count {
        min-width: 75px;
        text-align: right;
        color: #666666;
        font-size: 12px;
        white-space: nowrap;
    }

    .featured-case-wrapper {
        margin-top: 45px;
        margin-bottom: 38px;
    }

    .featured-case-card {
        position: relative;
        width: 100%;
        height: 380px;
        display: block;
        overflow: hidden;
        border-radius: 12px;
        background: #222222;
        text-decoration: none;
        box-shadow: 0 12px 35px rgba(0,0,0,.12);
    }

    .featured-case-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .5s ease;
    }

    .featured-case-card:hover .featured-case-image {
        transform: scale(1.04);
    }

    .featured-case-overlay {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(
                90deg,
                rgba(0,0,0,.80) 0%,
                rgba(0,0,0,.62) 38%,
                rgba(0,0,0,.30) 72%,
                rgba(0,0,0,.10) 100%
            );
    }

    .featured-case-content {
        position: relative;
        z-index: 2;
        height: 100%;
        max-width: 900px;
        padding: 45px 52px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .case-featured-label {
        align-self: flex-start;
        display: inline-block;
        background: #EC6502;
        color: #fff;
        padding: 6px 13px;
        border-radius: 3px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .case-category {
        color: #EC6502;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.1px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .featured-case-content .case-category {
        color: #dddddd;
    }

    .featured-case-title {
        color: #EC6502;
        font-size: 38px;
        line-height: 1.15;
        font-weight: 700;
        margin: 0 0 14px;
    }

    .featured-case-excerpt {
        color: #ffffff;
        font-size: 15px;
        line-height: 1.6;
        margin: 0 0 20px;
        max-width: 820px;
    }

    .case-read-more {
        color: #EC6502;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }


    /* TAG */

    .case-tag {
        position: absolute;
        left: 15px;
        bottom: 13px;
        z-index: 5;
        background: #EC6502;
        color: #ffffff;
        padding: 7px 13px;
        border-radius: 3px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }


    .case-grid {
        row-gap: 28px;
    }

    .case-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #ffffff;
        border: 1px solid #e5e5e5;
        border-radius: 7px;
        overflow: hidden;
        text-decoration: none;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .case-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,.10);
    }

    .case-card-image-wrap {
        position: relative;
        width: 100%;
        height: 245px;
        overflow: hidden;
        background: #eeeeee;
    }

    .case-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .45s ease;
    }

    .case-card:hover .case-card-image {
        transform: scale(1.05);
    }

    .case-card-body {
        flex: 1;
        padding: 22px 21px 25px;
    }

    .case-card-body .case-category {
        margin-bottom: 10px;
    }

    .case-card-title {
        color: #222222;
        font-size: 20px;
        line-height: 1.35;
        font-weight: 700;
        margin: 0 0 12px;
    }

    .case-card-excerpt {
        color: #777777;
        font-size: 14px;
        line-height: 1.65;
        margin: 0;
    }



    .case-no-result {
        display: none;
        padding: 60px 20px;
        text-align: center;
    }

    .case-no-result h3 {
        color: #222;
        font-size: 24px;
        margin-bottom: 8px;
    }

    .case-no-result p {
        color: #777;
        margin: 0;
    }

    .case-pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        margin-top: 50px;
    }

    .case-page-btn {
        width: 38px;
        height: 38px;
        border: 1px solid #dddddd;
        background: #ffffff;
        color: #222222;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        cursor: pointer;
        transition: all .2s ease;
    }

    .case-page-btn:hover,
    .case-page-btn.active {
        background: #EC6502;
        border-color: #EC6502;
        color: #ffffff;
    }

    .case-page-btn.disabled {
        opacity: .4;
        cursor: not-allowed;
    }

    @media (max-width: 991px) {

        .featured-case-card {
            height: 360px;
        }

        .featured-case-content {
            padding: 35px;
        }

        .featured-case-title {
            font-size: 32px;
        }

        .case-card-image-wrap {
            height: 210px;
        }

        .case-card-title {
            font-size: 18px;
        }
    }

    @media (max-width: 767px) {

        .case-filter-bar {
            padding: 10px 0;
        }

        .case-filter-inner {
            gap: 5px;
        }

        .case-filter-list {
            min-width: 0;
        }

        .case-control {
            width: 29px;
            height: 29px;
            min-width: 29px;
            font-size: 17px;
        }

        .case-project-count {
            display: none;
        }

        .case-filter-btn {
            padding: 9px 14px;
            font-size: 9px;
        }


        /* FEATURED */

        .featured-case-wrapper {
            margin-top: 25px;
            margin-bottom: 28px;
        }

        .featured-case-card {
            height: 450px;
            border-radius: 8px;
        }

        .featured-case-content {
            justify-content: flex-end;
            padding: 25px 21px 45px;
        }

        .featured-case-title {
            font-size: 26px;
            line-height: 1.18;
        }

        .featured-case-excerpt {
            font-size: 13px;
            line-height: 1.55;
        }


        /* GRID */

        .case-grid {
            row-gap: 20px;
        }

        .case-card-image-wrap {
            height: 220px;
        }

        .case-card-body {
            padding: 20px 18px 23px;
        }

        .case-card-title {
            font-size: 18px;
        }

        .case-card-excerpt {
            font-size: 14px;
        }

        .case-pagination {
            margin-top: 35px;
        }
    }


    @media (max-width: 400px) {

        .featured-case-card {
            height: 470px;
        }

        .featured-case-title {
            font-size: 24px;
        }

        .featured-case-content {
            padding-left: 18px;
            padding-right: 18px;
        }

        .case-card-image-wrap {
            height: 200px;
        }
    }
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
 <section class="cs-hero" style="background:linear-gradient(90deg,rgba(16,16,16,0.60) 0%,rgba(16,16,16,0.55) 35%,rgba(16,16,16,0.40) 60%,rgba(16,16,16,0.15) 100%),url('{{ asset('/images/engineering-solutions.jpg') }}');background-size:cover;background-position:center;background-repeat:no-repeat;">
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
<section class="case-studies-section">
    <div class="case-filter-bar">

        <div class="container">

            <div class="case-filter-inner">


                {{-- LEFT CONTROL --}}

                <button
                    type="button"
                    class="case-control"
                    id="caseScrollLeft"
                    aria-label="Previous categories">

                    ‹

                </button>


                {{-- CATEGORY BUTTONS --}}

                <div
                    class="case-filter-list"
                    id="caseFilterList">

                    @foreach($categories as $category)

                        <button
                            type="button"
                            class="case-filter-btn {{ $loop->first ? 'active' : '' }}"
                            data-category="{{ $category }}">

                            {{ $category }}

                        </button>

                    @endforeach

                </div>


                {{-- RIGHT CONTROL --}}

                <button
                    type="button"
                    class="case-control"
                    id="caseScrollRight"
                    aria-label="Next categories">

                    ›

                </button>


                {{-- COUNT --}}

                <div class="case-project-count">

                    {{ $totalProjects }} projects

                </div>

            </div>

        </div>

    </div>


    <div class="container">


        {{-- =====================================================
             FEATURED CARD
        ====================================================== --}}

        @php

            $featuredCase = collect($caseStudies)
                ->firstWhere('featured', true);

        @endphp


        @if($featuredCase)

            <div
                class="featured-case-wrapper"
                id="featuredCaseWrapper">

                <a
                    href="{{ route('case-studies.show', $featuredCase['slug']) }}"
                    class="featured-case-card"
                    data-category="{{ $featuredCase['category'] }}">

                    <img
                        src="{{ asset($featuredCase['image']) }}"
                        alt="{{ $featuredCase['title'] }}"
                        class="featured-case-image"
                        loading="eager"
                    >


                    <div class="featured-case-overlay"></div>


                    <div class="featured-case-content">

                        <span class="case-featured-label">
                            Featured
                        </span>


                        <div class="case-category">
                            {{ $featuredCase['category'] }}
                        </div>


                        <h1 class="featured-case-title">
                            {{ $featuredCase['title'] }}
                        </h1>


                        <p class="featured-case-excerpt">
                            {{ $featuredCase['excerpt'] }}
                        </p>


                        <span class="case-read-more">
                            Read Case Study →
                        </span>

                    </div>


                    <span class="case-tag">
                        {{ $featuredCase['tag'] }}
                    </span>

                </a>

            </div>

        @endif


        {{-- =====================================================
             OTHER CARDS
        ====================================================== --}}

        <div
            class="row case-grid"
            id="caseGrid">


            @foreach($caseStudies as $caseStudy)

                @if(!$caseStudy['featured'])

                    <div
                        class="col-lg-4 col-md-6 col-12 case-grid-item"
                        data-category="{{ $caseStudy['category'] }}">

                        <a
                            href="{{ route('case-studies.show', $caseStudy['slug']) }}"
                            class="case-card">

                            <div class="case-card-image-wrap">

                                <img
                                    src="{{ asset($caseStudy['image']) }}"
                                    alt="{{ $caseStudy['title'] }}"
                                    class="case-card-image"
                                    loading="lazy"
                                >


                                <span class="case-tag">
                                    {{ $caseStudy['tag'] }}
                                </span>

                            </div>


                            <div class="case-card-body">

                                <div class="case-category">
                                    {{ $caseStudy['category'] }}
                                </div>


                                <h2 class="case-card-title">
                                    {{ $caseStudy['title'] }}
                                </h2>


                                <p class="case-card-excerpt">
                                    {{ $caseStudy['excerpt'] }}
                                </p>

                            </div>

                        </a>

                    </div>

                @endif

            @endforeach

        </div>


        {{-- =====================================================
             NO RESULT
        ====================================================== --}}

        <div
            class="case-no-result"
            id="caseNoResult">

            <h3>
                No Case Studies Found
            </h3>

            <p>
                There are no case studies available for this category.
            </p>

        </div>


        {{-- =====================================================
             PAGINATION
        ====================================================== --}}

        <div
            class="case-pagination"
            id="casePagination">
        </div>


    </div>

</section>


<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | ELEMENTS
    |--------------------------------------------------------------------------
    */

    const filterButtons =
        document.querySelectorAll('.case-filter-btn');

    const gridItems =
        Array.from(document.querySelectorAll('.case-grid-item'));

    const featuredWrapper =
        document.getElementById('featuredCaseWrapper');

    const featuredCard =
        featuredWrapper
            ? featuredWrapper.querySelector('.featured-case-card')
            : null;

    const pagination =
        document.getElementById('casePagination');

    const noResult =
        document.getElementById('caseNoResult');

    const filterList =
        document.getElementById('caseFilterList');

    const leftButton =
        document.getElementById('caseScrollLeft');

    const rightButton =
        document.getElementById('caseScrollRight');


    /*
    |--------------------------------------------------------------------------
    | PAGINATION SETTINGS
    |--------------------------------------------------------------------------
    */

    const itemsPerPage = 6;

    let currentCategory = 'All';

    let currentPage = 1;


    /*
    |--------------------------------------------------------------------------
    | GET FILTERED ITEMS
    |--------------------------------------------------------------------------
    */

    function getFilteredItems() {

        if (currentCategory === 'All') {

            return gridItems;

        }

        return gridItems.filter(function (item) {

            return item.dataset.category === currentCategory;

        });

    }


    /*
    |--------------------------------------------------------------------------
    | FEATURED CARD FILTER
    |--------------------------------------------------------------------------
    */

    function updateFeatured() {

        if (!featuredWrapper || !featuredCard) {
            return;
        }

        const featuredCategory =
            featuredCard.dataset.category;


        if (
            currentCategory === 'All' ||
            currentCategory === featuredCategory
        ) {

            featuredWrapper.style.display = '';

        } else {

            featuredWrapper.style.display = 'none';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | RENDER CARDS
    |--------------------------------------------------------------------------
    */

    function renderCards() {

        const filteredItems =
            getFilteredItems();


        /*
        | Hide all first
        */

        gridItems.forEach(function (item) {

            item.style.display = 'none';

        });


        /*
        | Current page
        */

        const start =
            (currentPage - 1) * itemsPerPage;

        const end =
            start + itemsPerPage;


        const pageItems =
            filteredItems.slice(start, end);


        /*
        | Show current page cards
        */

        pageItems.forEach(function (item) {

            item.style.display = '';

        });


        /*
        | Featured
        */

        updateFeatured();


        /*
        | No result
        */

        if (filteredItems.length === 0) {

            noResult.style.display = 'block';

        } else {

            noResult.style.display = 'none';

        }


        /*
        | Pagination
        */

        renderPagination(filteredItems.length);

    }


    /*
    |--------------------------------------------------------------------------
    | PAGINATION
    |--------------------------------------------------------------------------
    */

    function renderPagination(totalItems) {

        pagination.innerHTML = '';


        const totalPages =
            Math.ceil(totalItems / itemsPerPage);


        if (totalPages <= 1) {

            return;

        }


        /*
        | Previous
        */

        const previous =
            document.createElement('button');

        previous.type = 'button';

        previous.className =
            'case-page-btn' +
            (currentPage === 1 ? ' disabled' : '');

        previous.innerHTML = '‹';


        previous.addEventListener('click', function () {

            if (currentPage > 1) {

                currentPage--;

                renderCards();

                scrollToCards();

            }

        });
        pagination.appendChild(previous);

        for (
            let page = 1;
            page <= totalPages;
            page++
        ) {
            const button =
                document.createElement('button');
            button.type = 'button';
            button.className =
                'case-page-btn' +
                (page === currentPage ? ' active' : '');
            button.textContent = page;
            button.addEventListener('click', function () {
                currentPage = page;
                renderCards();
                scrollToCards();
            });
            pagination.appendChild(button);
        }

        const next =
            document.createElement('button');
        next.type = 'button';
        next.className =
            'case-page-btn' +
            (currentPage === totalPages ? ' disabled' : '');
        next.innerHTML = '›';

        next.addEventListener('click', function () {
            if (currentPage < totalPages) {
                currentPage++;
                renderCards();
                scrollToCards();
            }
        });
        pagination.appendChild(next);
    }

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            currentCategory =
                this.dataset.category;
            currentPage = 1;
            filterButtons.forEach(function (btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');
            renderCards();

        });

    });


    if (leftButton) {

        leftButton.addEventListener('click', function () {

            filterList.scrollBy({
                left: -250,
                behavior: 'smooth'
            });

        });

    }
    if (rightButton) {

        rightButton.addEventListener('click', function () {

            filterList.scrollBy({
                left: 250,
                behavior: 'smooth'
            });

        });

    }
    function scrollToCards() {

        const grid =
            document.getElementById('caseGrid');

        if (!grid) {
            return;
        }

        const position =
            grid.getBoundingClientRect().top +
            window.pageYOffset -
            100;

        window.scrollTo({
            top: position,
            behavior: 'smooth'
        });

    }


    renderCards();

});

</script>
@include('sections.location')
@endsection