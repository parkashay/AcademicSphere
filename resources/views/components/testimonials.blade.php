<div class="testimonials mt-5">
    <section class="section-medium section-arrow--bottom-center section-arrow-primary-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-white text-center">
                    <h2 class="section-title "> What Our Staff and Students Say About Us</h2>

                </div>
            </div>
        </div>
    </section>
    <section class="section-primary t-bordered">
        <div class="container">
            <div class="row testimonial-three testimonial-three--col-three">


                @foreach ($testimonials as $testimonial)
                    @if (
                        $testimonial->name == 'Bibek Shrestha' ||
                            $testimonial->name == 'Prakash Poudel' ||
                            $testimonial->name == 'Rita Adhikari')
                        <div class="col-md-4 testimonial-three-col">
                            <div class="testimonial-inner">
                                <div class="testimonial-image" itemprop="image">
                                    <img width="200" height="200"
                                        src="{{ asset('storage/' . $testimonial->avatar) }}">
                                </div>

                                <div class="testimonial-content vision-description">
                                    <p>
                                        {!! $testimonial->content !!}
                                    </p>
                                </div>

                                <div class="testimonial-meta mt-3">
                                    <strong class="testimonial-name mb-2"
                                        itemprop="name">{!! $testimonial->name !!}</strong>
                                    <span class="testimonial-job-title" itemprop="jobTitle">Student</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 testimonial-three-col">
                            <div class="testimonial-inner">
                                <div class="testimonial-image" itemprop="image">
                                    <img width="200" height="200"
                                        src="{{ asset('storage/' . $testimonial->avatar) }}">
                                </div>

                                <div class="testimonial-content vision-description">
                                    <p>
                                        {!! $testimonial->content !!}
                                    </p>
                                </div>

                                <div class="testimonial-meta mt-3">
                                    <strong class="testimonial-name mb-2"
                                        itemprop="name">{!! $testimonial->name !!}</strong>
                                    <span class="testimonial-job-title" itemprop="jobTitle">Staff</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>
</div>
