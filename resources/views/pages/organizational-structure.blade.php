@extends('layouts.page')
@section('title', 'Organizational Structure')
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="/about">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">Organizational Structure</li>
            </ol>

            <div class="tiles-container" style="display:flex;justify-content:cemter;">
                <div class="fixed-bg">
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="text-primary" style="font-size: 25px; font-weight:600;text-align:center;">
                                Organizational Structure
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <img src="{{ asset('images/about/org-strucrure.png') }}" alt="org-strucrure" />
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
