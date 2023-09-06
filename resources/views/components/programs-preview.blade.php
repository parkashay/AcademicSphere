
<section class="section-sm">
  <div class="container p-3" style="background-color: #fff;">
    <!-- course list -->
    <h2 class="my-2 ml-0 text-nowrap mr-3 section-heading highlight">Programs</h2>
        <div class="row justify-content-center">
   @foreach ($programs as $program)
        <!-- course item -->
    <div class="col-lg-4 col-sm-6 mb-5">
      <div class="card p-0 border-primary rounded-0 hover-shadow">
        <div class="card-body">
          <a href="course-single.html" class="vision-text">
            <h4 class="card-title h3-title vision-title" style="text-transform: capitalize;">{{$program->title}}</h4>
          </a>
          <strong><span class="category-badge">Coordinator</span> <span class="category-badge">{{$program->coordinator}}</span></strong>
          <p class="card-text mb-4 vision-description preview">
          {!! Str::limit($program->content, 200) !!}...
          </p> 
          <a href="course-single.html" class="mt-3 btn btn-lg btn-block btn-main">View Details</a>
        </div>
      </div>
    </div>
   @endforeach
  </div>
</section>
