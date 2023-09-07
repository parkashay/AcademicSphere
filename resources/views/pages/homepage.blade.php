@extends('layouts.page')
@section('title', 'School of Engineering - Home')
@section('content')

    {{-- Toast --}}
    @if (session()->has('message'))
    
    @endif


    @include('components.hero')
    @include('components.news-preview')
    @include('components.home-about')
    @include('components.programs-preview')
    @include('components.testimonials')
    @include('components.events-preview')
@endsection
