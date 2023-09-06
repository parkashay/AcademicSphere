@extends('layouts.page')
@section('title', 'Events - School of Engineering')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary"
                                href="@@page-link">Upcoming Events</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">What is Pokhara University up to? What events are being organized and a bried
                        detail about each of them here.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->


    <!-- Events -->
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <!-- event -->
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-img position-relative">
                                <img class="card-img-top rounded-0" src="{{asset('images/events/event-bg.png')}}" alt="event thumb">
                                <div class="card-date"><span
                                        class="mr-3">{{ substr($event->date, 8, 2) }}</span>{{ date('F', mktime(0, 0, 0, (int) substr($event->date, 5, 2), 10)) }}
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- location -->
                                <p><i class="ti-location-pin text-primary mr-2"></i>Pokhara University</p>
                                <a href="/events/single/{{$event->id}}">
                                    <h4 class="card-title"> {{ $event->title }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /events -->

@endsection
