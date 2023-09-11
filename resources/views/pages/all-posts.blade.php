@extends('layouts.page')
@section('title', 'All Notices')
@section('content')

    <section class="section-sm mt-5">
        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>

                <li class="breadcrumb-item active" aria-current="page">All Notices</li>
            </ol>

            <h2 class="mb-0 text-nowrap mr-3 section-heading highlight ml-0">SOE Notice Board</h2>
            <!-- notice list -->
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
                                    <li class="list-inline-item">
                                        @foreach ($notice->category as $category)
                                            <span class="category-badge"><a
                                                    href="/search?search={{ $category }}">{{ strtoupper($category) }}</a></span>
                                        @endforeach
                                    </li>
                                </ul>
                                <a href="/posts/single/{{ $notice->id }}" class="home-page-post-title">
                                    {{ $notice->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
