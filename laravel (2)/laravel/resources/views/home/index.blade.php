@extends('layouts.app')
@php
    $primaryKeyword = 'BIM Engineering Services';
@endphp
@section('title', 'Careers - Milestone Plm Solution')
{{--  Load sections.css only on home page --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush
@section('content')
    @include('sections.ready-to-scale')
    @include('sections.location')

@endsection