<!-- news -->
<section class="section-sm">
    <div class="container p-3" style="background-color: #fff;">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between mb-sm-5 mt-sm-5">
                    <h2 class="mb-0 text-nowrap mr-3 section-heading highlight ml-0">Notice Board</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="/posts"
                            class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block outlined-btn">See
                            All</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-center mt-2">
            @foreach ($noticeBoard as $notice)
                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item mr-3 home-post-date">
                                    <?php
                                    $dateTime = new DateTime(substr($notice->created_at, 0, 10));
                                    $formattedDate = $dateTime->format('F j, Y');
                                    print_r($formattedDate);
                                    ?>
                                </li>
                                <li class="list-inline-item">
                                    @foreach ($notice->category as $category)
                                        <span class="category-badge">{{ $category }}</span>
                                    @endforeach
                                </li>
                            </ul>
                            <a href="/posts/single/{{ $notice->id }}">
                                <h4 class="card-title">{{ $notice->title }}</h4>
                            </a>
                            <p class="card-text mb-4"> {!! Str::limit($notice->content, 30) !!}
                            </p>
                            <a href="/posts/single/{{ $notice->id }}" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- /course item -->
            @endforeach
        </div>
    </div>
</section>
<!-- /news -->
