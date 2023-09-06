
<section class="section-sm">
  <div class="container p-3" style="background-color: #fff;">
    <!-- course list -->
    <h2 class="my-2 ml-0 text-nowrap mr-3 section-heading highlight">Courses</h2>
        <div class="row justify-content-center">
   @foreach (['Course one', 'course two', 'course three'] as $course)
        <!-- course item -->
    <div class="col-lg-4 col-sm-6 mb-5">
      <div class="card p-0 border-primary rounded-0 hover-shadow">
        <div class="card-body">
          <a href="course-single.html">
            <h4 class="card-title">{{$course}}</h4>
          </a>
          <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna.</p>
          <a href="course-single.html" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
    </div>
   @endforeach
  </div>
</section>
