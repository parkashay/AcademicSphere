@if($eventBoard->count() > 0)
    <!-- events -->
<section class="section bg-gray">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="d-flex align-items-center section-title justify-content-between">
                  <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
                  <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                  <div>
                      <a href="/events" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <!-- event -->
          @foreach ($eventBoard as $event)
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
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
                        <h4 class="card-title">{{$event->title}}</h4>
                    </a>
                </div>
            </div>
        </div>
          @endforeach
      </div>
      <!-- mobile see all button -->
      <div class="row">
          <div class="col-12 text-center">
              <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
          </div>
      </div>
  </div>
</section>
<!-- /events -->
@endif
