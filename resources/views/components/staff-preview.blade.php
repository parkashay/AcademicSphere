<!-- Staffs Preview -->
@if ($boardOfDirectors->count() > 0)
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Associated Members</h2>
                </div>
                @foreach ($boardOfDirectors as $staff)
                    <!-- teacher -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset('storage/' . $staff->profile_image) }}"
                                alt="teacher">
                            <div class="card-body">
                                <a href="teacher-single.html">
                                    <h4 class="card-title">{{ $staff->fullname }}</h4>
                                </a>
                                <p>{{ $staff->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
<!-- /Staffs Preview -->
