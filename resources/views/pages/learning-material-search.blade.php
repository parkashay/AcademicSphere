@extends('layouts.page')
@section('title', 'Search results')
@section('content')



    <section class="section-sm mt-5">
        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Search</li>
            </ol>
            <!-- notice list -->
            @if (isset($posts) && $posts->count() > 0)
                <h5 class="mb-3 text-nowrap mr-3 section-heading ml-0 ">Search Result/s Found Related to
                    "{{ $query }}"</h5>
                <div class="row justify-content-center mt-2">
                    @foreach ($posts as $notice)
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="card p-0 rounded-0 hover-shadow">
                                <div class="card-body">
                                    
                                    <ul class="list-inline mb-3 ">
                                        <li class="list-inline-item mr-3 home-post-date">
                                            <?php
                                            $dateTime = new DateTime(substr($notice->created_at, 0, 10));
                                            $formattedDate = $dateTime->format('F j, Y');
                                            print_r($formattedDate);
                                            ?>
                                        </li>
                                        <li class="list-inline-item mr-3 my-1 ">
                                           {{$notice->course}}
                                        </li>
                                        <li class="list-inline-item">
                                            @foreach ($notice->keywords as $keyword)
                                                <span class="category-badge mb-4"><a
                                                        href="/search?search={{ $keyword }}">{{ strtoupper($keyword) }}</a></span>
                                            @endforeach
                                        </li>
                                    </ul>
                                    <a href="/learning-materials/single/{{ $notice->id }}" class="home-page-post-title text-capitalize">
                                        {{ $notice->title }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5 class="mb-0 text-nowrap mr-3 section-heading ml-0 text-danger">Sorry, no posts found related to
                        "{{ $query }}"</h5>

            @endif

        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination ">

                <div class="mi-auto mt-4">
                    {{ $posts->links('vendor.pagination.custom') }}

                </div>
            </ul>
        </nav>
        </div>
    </section>
@endsection
