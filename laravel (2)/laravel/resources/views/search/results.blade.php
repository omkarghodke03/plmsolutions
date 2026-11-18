@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Search results for: "{{ $query }}"</h2>

    @if($query === '')
        <p>Please enter a search term.</p>
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

    @endif
</div>
@endsection