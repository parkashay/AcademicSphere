@extends('layouts.page')
@section('title', $post->title)
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary" href="blog.html">Posts</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ Str::limit($post->title, 12) }}
                        </li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured
                        by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->
    <!-- blog details -->
    <section class="section-sm bg-gray">
        <div class="container">
            <div class="row">
                @isset($post->thumbnail)
                    <div class="col-12 mb-4">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="blog-thumb" class="img-fluid w-100">
                    </div>
                @endisset
                <div class="col-12">
                    <ul class="list-inline">
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span
                                class="font-weight-bold mr-2">Category :</span>
                            @foreach ($post->category as $category)
                                <span class="category-badge">{{ $category }}</span>
                            @endforeach
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i
                                class="ti-calendar mr-2"></i>{{ substr($post->created_at, 0, 10) }}</li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">Keywords:
                            @foreach ($post->keywords as $keyword)
                                <span class="keywords-badge">{{ $keyword }}</span>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <!-- border -->
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <!-- blog contect -->
                <div class="col-12 mb-5">
                    <h2>{{ $post->title }}</h2>
                    {!! $post->content !!}

                </div>
            </div>
        </div>
    </section>
    <!-- /blog details -->
@endsection
