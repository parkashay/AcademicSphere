<!-- events -->
<section class="section-sm mt-5 ">

    <div class="container p-3" style="background-color: #fff;">
        <div class="row my-2">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between mb-sm-5 mt-sm-5">
                    <h2 class="mb-0 text-nowrap mr-3 section-heading highlight ml-0">Upcoming Events</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <div>
                        <a href="/events"
                            class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block outlined-btn">See
                            All</a>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($eventBoard as $event)

            <li class="d-table mb-4 w-100 border-bottom hover-shadow">
                <div class="d-md-table-cell text-center p-4 .event-date text-white mb-4 mb-md-0 event-date">
                    <span class="h2 d-block">
                        <?php
                        $dateTime = new DateTime(substr($event->date, 0, 10));
                        $formattedDate = $dateTime->format('j');
                        print_r($formattedDate);
                        ?>
                        </span> 
                        <?php
                        $dateTime = new DateTime(substr($event->date, 0, 10));
                        $formattedDate = $dateTime->format('F, Y');
                        print_r($formattedDate);
                        ?>

                </div>
                <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0 py-3">
                    <a href="notice-single.html" class="h4 mb-3 d-block">{{$event->title}}</a>
                    <p class="mb-0">
                        {!! Str::limit($event->content, 200) !!}
                    </p>
                </div>
                <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="events/single/{{$event->id}}"
                        class="btn btn-read-more">view details</a></div>
            </li>
        @endforeach
    </div>

</section>
<!-- /events -->
