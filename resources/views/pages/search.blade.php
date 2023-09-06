@extends('layouts.page')
@section('title', 'Search results')
@section('content')

<!-- news -->
<section class="section-sm">
    <div class="container">
        <!-- course list -->
        <div class="row justify-content-center">
        @if(isset($posts) && $posts->count() > 0)
        <h1>Search results found related to "{{$query}}"</h1>
            @foreach ($posts as $notice)
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3"><i class="ti-calendar mr-1 text-color"></i>{{ substr($notice->created_at, 0, 10) }}
                            </li>
                            <li class="list-inline-item">
                                @foreach ($notice->category as $category)
                                <span class="category-badge">{{ $category }}</span>
                                @endforeach
                            </li>
                        </ul>
                        <a href="/posts/single/{{$notice->id}}">
                            <h4 class="card-title">{{$notice->title}}</h4>
                        </a>
                        <p class="card-text mb-4"> {!! Str::limit($notice->content, 30) !!}
                        </p>
                        <a href="/posts/single/{{$notice->id}}" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- /course item -->
            @endforeach

        @else
            <h1>Sorry, no posts found related to "{{$query}}"</h1>

        @endif



        </div>
    </div>
    <div class="row">
        {{$posts->links()}}
    </div>
</section>

<!-- /news -->


@endsection