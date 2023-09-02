@extends('layouts.page')
@section('title', 'Events - School of Engineering')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary"
                                href="@@page-link">Upcoming Events</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured
                        by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->


    <!-- Events -->
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach (['one', 'two', 'three', 'four', 'five', 'six'] as $item)
                    <!-- event -->
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-img position-relative">
                                <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
                                <div class="card-date"><span>18</span><br>December</div>
                            </div>
                            <div class="card-body">
                                <!-- location -->
                                <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
                                <a href="event-single.html">
                                    <h4 class="card-title">Event Title : {{$item}} This will be a sentence</h4>
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
