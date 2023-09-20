@extends('layouts.page')
@section('title', 'Message From Dean')
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page">Message</li>
                <li class="breadcrumb-item active" aria-current="page">Dean</li>
            </ol>

            <div class="tiles-container" style="display:flex;justify-content:cemter;">
                <div class="fixed-bg">
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="text-primary" style="font-size: 25px; font-weight:600;text-align:center;">
                                Message From Director
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <section class="staff-details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 mb-4 mb-sm-5">
                                        <div class="card card-style1 border-0">
                                            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                                <div>
                                                    @foreach ($staff as $staf)
                                                        <img style="ffloat: right;margin:10px;max-width:250px;aspect-ratio:1;border-radius:50%;"
                                                            src="{{ asset('storage/' . $staf->profile_image) }}"
                                                            alt="Dean-soe-pu">

                                                        <div class="para-msg">

                                                            {!! $staf->content !!}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
