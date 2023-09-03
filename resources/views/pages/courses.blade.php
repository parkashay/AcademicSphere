@extends('layouts.page')
@section('title', 'Courses - School of Engineering')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary" href="courses.html">Our
                                Courses</a></li>
                        <li class="list-inline-item text-white h3 font-secondary "></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured
                        by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- courses -->
    <section class="section">
        <div class="container">
            <!-- course list -->
            <div class="row justify-content-center">
              @foreach (['Physics','Chemistry','Biology','Maths','Electrical','Communication'] as $item)
                    <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#"></a></li>Engineering
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">{{$item}}</h4>
                            </a>
                            <p class="card-text mb-4"> 
                                Providing with the updated syllabus and quality education to the students.
                            </p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">See Details</a>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <!-- /course list -->
          
        </div>
    </section>
    <!-- /courses -->
@endsection
