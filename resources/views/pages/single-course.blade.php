@extends('layouts.page')
@section('title', $singleCourse->title)

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-white font-secondary" href="/courses">Our Courses</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Photography</li>
          </ul>
          <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->
<!-- section -->
<section class="section-sm">
    <div class="container">
      <div class="row">
       
      </div>
      <!-- course info -->
      <div class="row align-items-center mb-5">
        <div class="order-1 col-sm-6 mb-4 mb-xl-0">
          <h2>{{$singleCourse->title}}</h2>
        </div>
        <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
          <ul class="list-inline text-xl-center">
            <li class="list-inline-item mr-4 mb-3 mb-sm-0">
              <div class="d-flex align-items-center">
                <i class="ti-book text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">Credit</h6>
                  <p class="mb-0">3 hours</p>
                </div>
              </div>
            </li>
            <li class="list-inline-item mr-4 mb-3 mb-sm-0">
              <div class="d-flex align-items-center">
                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">DURATION</h6>
                  <p class="mb-0">06 months</p>
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
      <!-- course details -->
      <div>
        {!! $singleCourse->content !!}
      </div>
    </div>
  </section>
  <!-- /section -->


@endsection