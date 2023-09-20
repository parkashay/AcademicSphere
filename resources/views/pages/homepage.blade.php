@extends('layouts.page')
@section('title', 'An Official Site of School of Engineering')
@section('content')
    {{-- Toast --}}
    @if (session()->has('message'))
    @endif


    @include('components.hero')
    @include('components.popup')
    <div class="fixed-bg-lgg">

        <div class="mb-2">
            @include('components.news-preview')

        </div>
        <div class="mb-2">
            @include('components.home-about')

        </div>
        <div class="mb-2">
            @include('components.programs-preview')

        </div>
        <div class="mb-2">
            @include('components.testimonials')

        </div>
        <div class="mb-2">
            @include('components.events-preview')

        </div>
    </div>
@endsection
