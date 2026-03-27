@extends('layouts.app')

@section('title', 'Home - Milestone')
{{--  Load sections.css only on home page --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
@section('content')

    @include('sections.hero')
    @include('sections.brand-slider')
    @include('sections.our-service')
    @include('sections.our-Delivery-Model')
    @include('sections.sector-expertise')
    @include('sections.global-expertise')
    @include('sections.cards')
    @include('sections.testimonials')
    @include('sections.ready-to-scale')
    @include('sections.location')
    @include('sections.our-capabilities')

@endsection