@extends('layouts.page')
@section('title', $singleEvent->title)
@section('content')

    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary" href="/events">Upcoming
                                Events</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Event Details</li>
                    </ul>
                    <p class="text-lighten">Participate in the upcoming events of Pokhara University.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- event single -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">{{ $singleEvent->title }}</h2>
                </div>
                <!-- event image -->
                @isset($singleEvent->image)
                    <div class="col-12 mb-4">
                        <img src="{{ asset('storage/'.$singleEvent->image) }}" alt="event thumb" class="img-fluid w-100">
                    </div>
                @endisset
            </div>
            <!-- event info -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-9">
                    <ul class="list-inline">
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-location-pin text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">LOCATION</h6>
                                    <p class="mb-0">Pokhara University</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-calendar text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">DATE</h6>
                                    <p class="mb-0">{{ $singleEvent->date }}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-time text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">TIME</h6>
                                    <p class="mb-0">10: 00 am</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- event details -->
            <div class="row">
                <div class="col-12 mb-50">
                    <h3>About Event</h3>
                    <div>
                        {!! $singleEvent->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /event single -->

@endsection
