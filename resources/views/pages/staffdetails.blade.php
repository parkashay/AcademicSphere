@extends('layouts.page')
@section('title', 'Staff Details')
@section('content')

    <main class="cd-main-contentS fixed-bg">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{ $staff->fullname }}</li>
            </ol>



            <section class="staff-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div class="card card-style1 border-0">
                                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <img style="max-width:250px;" src="{{ asset('storage/' . $staff->profile_image) }}" alt="...">
                                        </div>
                                        <div class="col-lg-6 px-xl-10">
                                            <div class="bg-secondary d-lg-inline-block p-2 mb-1-9 rounded">
                                                <h3 class="h2 text-white mb-0">{{ $staff->fullname }}</h3>

                                            </div>
                                            <ul class="list-unstyled mb-1-9">
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Designation:</span>
                                                    {{ $staff->designation }}</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Experience:</span>
                                                   {{$staff->experience}}</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                                        {{$staff->email}}</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Website:</span>
                                                   {{$staff->website}}</li>
                                                <li class="display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Phone:</span>
                                                        {{$staff->phone}}</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div>
                                <span class="section-title text-primary mb-3 mb-sm-4">About</span>
                                {!! $staff->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </section>

    </main>

@endsection
