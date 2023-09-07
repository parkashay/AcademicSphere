@extends('layouts.page')
@section('title', $singleProgram->title . '-SOE')
@section('content')
    <main class="cd-main-contentS fixed-bg px-3">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Currently Running Programs</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $singleProgram->title }}</li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive overflow-hidden">
                    <h1 class="post-title">{{ $singleProgram->title }}</h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date" style="font-size: 25px; font-weight:600;">Coordinator:
                                <a href="/staff">{{ $singleProgram->coordinator }}</a>

                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <div class="content-text">
                            {!! $singleProgram->content !!}
                        </div>
                    </div>
                </div>

                <!-- more events -->
                <section class="latest-posts">
                    <div class="latest-header">
                        <div>
                            <h1>Other Programs</h1>
                        </div>
                        <div data-toggle="tooltip" data-placement="left" title="Other Programs"><a href="/#programs"><i
                                    class="fa-solid fa-square-rss"></i></a></div>
                    </div>
                    @foreach ($otherPrograms as $otherProgram)
                        <div class="latest-posts-post">
                            <div class="recent-posts-title">
                                <a class="text-danger font-weight-bold text-lg-left" style="font-size: 20px" href="/programs/{{ $otherProgram->id }}">{{ $otherProgram->title }}</a>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                </section>

            </div>
        </section>
    </main>
@endsection
