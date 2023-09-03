@if ($coursesPreview->count() > 0)
    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Our Courses</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="/courses" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                @foreach ($coursesPreview as $course)
                    <!-- course item -->
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <div class="card-body">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{substr($course->created_at, 0, 10)}}
                                    </li>
                                    <li class="list-inline-item"><a class="text-color" href="#">School of Engineering</a>
                                    </li>
                                </ul>
                                <a href="/courses/single/{{$course->id}}">
                                    <h4 class="card-title">{{ $course->title }}</h4>
                                </a>
                                <a href="/courses/single/{{$course->id}}" class="btn btn-primary btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/courses" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->
@endif
