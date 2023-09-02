@extends('layouts.page')
@section('title', 'Posts - School of Engineering')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary"
                                href="/posts">Posts and News</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured
                        by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- blogs -->
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <!-- blog post -->
                    <article class="col-lg-4 col-sm-6 mb-5">
                        <div
                            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                            <div class="card-body">
                                <!-- post meta -->
                                <ul class="list-inline mb-3">
                                    <!-- post date -->
                                    <li class="list-inline-item mr-3 ml-0">{{$post->created_at}}</li>
                                    <!-- author -->
                                    <li class="list-inline-item mr-3 ml-0">
                                        @foreach($post->category as $category)
                                         <span class="category-badge">{{ $category }}</span>
                                        @endforeach
                                        </li>
                                </ul>
                                <a href="/posts/single/{{$post->id}}">
                                    <h4 class="card-title">{{ $post->title }}</h4>
                                </a>
                                <p class="card-text">{!! Str::limit($post->content, 40) !!}</p>
                                <a href="/posts/single/{{$post->id}}" class="btn btn-primary btn-sm">read more</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /blogs -->
@endsection
