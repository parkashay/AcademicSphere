@if ($programsPreview->count() > 0)
    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Our Programs</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="/programs" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                @foreach ($programsPreview as $program)
                    <!-- course item -->
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <div class="card-body">
                                <a href="/programs/single/{{$program->id}}">
                                    <h4 class="card-title">{{ $program->title }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/programs" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">see all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->
@endif
