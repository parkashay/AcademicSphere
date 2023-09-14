@extends('layouts.page')
@section('title', 'Student Clubs')
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page">Student Clubs</li>

            </ol>

            <div class="tiles-container" style="display:flex;justify-content:cemter;">
                <div class="fixed-bg">
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="text-primary" style="font-size: 25px; font-weight:600;text-align:center;">
                                Student Clubs at School of Engineering
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <section class="section-sm px-5">
                            @foreach ($clubs as $club)
                                {!! $club->content !!}
                            @endforeach

                        </section>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
