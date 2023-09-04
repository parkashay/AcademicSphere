<!-- news -->
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Notice Board</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="/posts" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see
                            all</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-center">
            @foreach ($noticeBoard as $notice)
                <!-- course item -->
                <div class=" col-sm-12 col-lg-6 mb-5">
                    <div class="card card-post p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body card-body-news">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item mr-3"><i
                                        class="ti-calendar mr-1 text-color"></i>{{ substr($notice->created_at, 0, 10) }}
                                </li>
                                <li class="list-inline-item">
                                    @foreach ($notice->category as $category)
                                        <span class="category-badge">{{ $category }}</span>
                                    @endforeach
                                </li>
                            </ul>
                            <a href="/posts/single/{{$notice->id}}">
                                <h4 class="card-title">{{Str::limit($notice->title, 60)}}</h4>
                            </a>
                         
                        </div>
                    </div>
                </div>
                <!-- /course item -->
            @endforeach
        </div>
        <!-- /course list -->
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /news -->
