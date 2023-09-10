@extends('layouts.page')
@section('title', 'Staffs - School of Engineering')
@section('content')


    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary" href="blog.html">Our Officials</a>
                        </li>
                    </ul>
                    <p class="text-lighten">Staffs currently involved and associated with Pokhara University.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->


    <!-- staffs -->
    <section class="section">
        <div data-ref="mixitup-target" class="container">
            <div class="row">
                <div class="col-12">
                    <!-- staffs designation list -->
                    <ul class="list-inline text-center filter-controls mb-5">
                        @foreach ($designations as $designation)
                            <li class="list-inline-item m-3 text-uppercase" data-filter=".{{$designation}}">{{$designation}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <!-- staff list -->
            <div class="row" data-ref="mixitup-container">
                @foreach ($staffs as $staff)
                    <!-- staff -->
                    <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 {{$staff->designation}}">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset('storage/' . $staff->profile_image) }}"
                                alt="teacher">
                            <div class="card-body">
                                <a href="/staffs/single/{{ $staff->id }}">
                                    <h4 class="card-title"> {{ $staff->fullname }} </h4>
                                </a>
                                <p>
                                    {{$staff->designation}}
                                </p>
                                <p>
                                    {!! Str::limit($staff->content, 50) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /staffs -->
@endsection
