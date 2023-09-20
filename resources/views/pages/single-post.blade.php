@extends('layouts.page')
@section('title', $post->title)
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="/notice">Notice</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive fixed-bg px-4 py-5 border-7">
                    <h1 class="post-title">{{ $post->title }}</h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date"><i class="fa-solid fa-calendar"></i>

                                <?php
                                $dateTime = new DateTime(substr($post->created_at, 0, 10));
                                $formattedDate = $dateTime->format('F j, Y');
                                print_r($formattedDate);
                                ?>
                                | {{$post->created_at->format('H:i')}}

                            </div>
                            <div class="post-share">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        @isset($post->thumbnail)
                            <div class="post-thumb-img spotlight" data-src="{{ asset('storage/' . $post->thumbnail) }}">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                            </div>
                        @endisset

                        <div class="content-text">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>

                <!-- recent posts -->
                <section class="latest-posts border-7">
                    <div class="latest-header">
                        <div>
                            <h1>Latest</h1>
                        </div>
                        <div data-toggle="tooltip" data-placement="left" title="More posts"><a href="/posts"><i
                                    class="fa-solid fa-square-rss"></i></a></div>
                    </div>
                    @foreach ($relatedPosts as $relatedPost)
                        <div class="latest-posts-post">
                            <div class="recent-posts-title">
                                <a href="/posts/single/{{ $relatedPost->id }}">{{ $relatedPost->title }}</a>
                                <div class="recent-posts-date">
                                    <?php
                                    $dateTime = new DateTime(substr($relatedPost->created_at, 0, 10));
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
