@extends('layouts.page')
@section('title', 'Courses - School of Engineering')
@section('content')

    <section class="section-sm mt-5">
        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Courses</li>
            </ol>
            <!-- courses list -->

            <div class="grey-bg container-fluid">
                <section id="minimal-statistics">
                    <div class="row">

                        @foreach ($courses as $course)
                            <div class="col-xl-3 col-sm-6 col-12 my-2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                               
                                                <div class="media-body">
                                                   <a href="/courses/single/{{$course->title}}">{{$course->title}}</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

        </div>


        <nav aria-label="Page navigation example">
            <ul class="pagination ">

                <div class="mi-auto mt-4">
                    {{ $courses->links('vendor.pagination.custom') }}
                </div>
            </ul>
        </nav>
        </div>
    </section>


@endsection
