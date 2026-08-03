@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Search results for: "{{ $query }}"</h2>

    @if($query === '')
        <p>Please enter a search term.</p>
    @elseif($pageResults === [] && $caseStudyResults->isEmpty())
        <p>No results found for "{{ $query }}".</p>
    @else
        @if(!empty($pageResults))
            <h4 class="mt-4">Pages</h4>
            <ul class="list-unstyled">
                @foreach($pageResults as $page)
                    <li class="mb-2">
                        <a href="{{ $page['url'] }}">{{ $page['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        @endif

        @if($caseStudyResults->isNotEmpty())
            <h4 class="mt-4">Case Studies</h4>
            <div class="row">
                @foreach($caseStudyResults as $study)
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/case-studies/'.$study->slug) }}">
                            <img src="{{ $study->cover_image_url }}" alt="{{ $study->image_alt }}" class="img-fluid mb-2">
                            <h5>{{ $study->title }}</h5>
                        </a>
                        <p>{{ $study->short_description }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</div>
@endsection