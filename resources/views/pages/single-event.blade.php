@extends('layouts.page')
@section('title', $singleEvent->title)
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="/events">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $singleEvent->title }}</li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive">
                    <h1 class="post-title">{{ $singleEvent->title }}</h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date" style="font-size: 25px; font-weight:600;">Event Date :

                                <?php
                                $dateTime = new DateTime(substr($singleEvent->date, 0, 10));
                                $formattedDate = $dateTime->format('F j, Y');
                                print_r($formattedDate);
                                ?>

                            </div>
                            <div class="post-share">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <div class="post-thumb-img spotlight" data-src="{{ asset('storage/' . $singleEvent->image) }}">
                            <img src="{{ asset('storage/' . $singleEvent->image) }}" alt="{{ $singleEvent->title }}">
                        </div>

                        <div class="content-text">
                            {!! $singleEvent->content !!}
                        </div>
                    </div>
                </div>

                <!-- more events -->
                <section class="latest-posts">
                    <div class="latest-header">
                        <div>
                            <h1>More</h1>
                        </div>
                        <div data-toggle="tooltip" data-placement="left" title="More posts"><a href="/events"><i
                                    class="fa-solid fa-square-rss"></i></a></div>
                    </div>
                    @foreach ($relatedEvents as $relatedEvent)
                        <div class="latest-posts-post">
                            <div class="recent-posts-title">
                                <a href="/posts/single/{{ $relatedEvent->id }}">{{ $relatedEvent->title }}</a>
                                <div class="recent-posts-date">
                                    <?php
                                    $dateTime = new DateTime(substr($relatedEvent->date, 0, 10));
                                    $formattedDate = $dateTime->format('F j, Y');
                                    print_r($formattedDate);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                </section>

            </div>
        </section>
    </main>
@endsection
