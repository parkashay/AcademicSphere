@extends('layouts.page')
@section('title', 'About School of Engineering')
@section('content')


<section class="large-container section-sm mt-5">
    <div class=" pt-5">
        <ol class="breadcrumb ml-2">
            <li class="breadcrumb-item">
                <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                            class="fa-solid fa-house"></i></a></div>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Courses</li>
        </ol>
    </div>
    <div class="header-image text-over-image">
      <img
        class="bg-isolated-img"
        src="{{asset('images/about/about-page.jpg')}}"
        alt="about-pokhara-university-soe"
      />
      <div class="text-over-image-text">
        <p class="title txt-clr-1">About SOE</p>
        <p class="title-description blinking-text">
          SOE is a place of discovery, creativity and innovation located in
          Lekhnath, Pokhara on the land of nature
        </p>
      </div>
    </div>
          <div class="simple-layout">
            <div class="short-large-txt">
                  <p>
                      As a well reputed and nonprofit institution, School of Engineering is focused on creating educational opportunities for people from many lived experiences.
                  </p>
                  <a href="/" class="call-to-action-btn"><i class="fa-solid fa-arrow-right"></i> Explore SOE </a>
              </div>
              <div class="home-pu-count">
                  <h1 class="title">SOE at a glance</h1>
                  <hr>
                  <div class="home-data">
                      <div>
                          <h1>2009</h1>
                          <p>Opened In</p>
                      </div>
                      <div>
                          <h1>99+</h1>
                          <p> Professors</p>
                      </div>
                      <div>
                          <h1>10,000+</h1>
                          <p>Passed Out Students</p>
                      </div>
                      <div>
                          <h1>6</h1>
                          <p>Faculties</p>
                      </div>
                  </div>
                  <hr>
              </div>
               <div class="home-vision">
                  <h1 class="title">Our Vision</h1>
                  <div class="svg-background"></div>
                  <div class="svg-background svg-background-2"></div>
                  <div class="home-vision-container">
                      <div class="vision">
                          <div class="vision-image">
                              <img src="{{asset('/images/about/svision-tudents.webp')}}" alt="soe vision">
                          </div>
                          <div class="vision-text">
                              <p class="subtitle">Learning</p>
                              <p class="vision-title">Develop Knowledge through Experience</p>
                              <p class="vision-description">
                                  Our aim is to provide quality education with as much practical knowledge as possible so that the students will have the best possible talent when they graduate. Not only the existing knowledge but its our aim to make them innovative and adaptable to new ideas and methods. Innovation and Ideology will be taught along with academics.
                              </p>
                          </div>
                      </div>
                      <div class="vision">
                          <div class="vision-image">
                              <img src="{{asset('/images/about/vision-2.jpg')}}" alt="soe vision">
                          </div>
                          <div class="vision-text">
                              <p class="subtitle">Research</p>
                              <p class="vision-title">Discover Lasting Solutions</p>
                              <p class="vision-description">
                                  Students will be faciliated to gain the best education along with all the necessary toolkits, resources and opportunities. We provide the best teachers having years of experience in their respective fields and have guided a number of individuals in their course of life. They know how to cope with students and can guide all towards better future showing them the best gateway towards a better and prosperous career in their life.
                              </p>
                          </div>
                      </div>
                      <div class="vision">
                          <div class="vision-image">
                              <img src="{{asset('/images/about/vision-3.jpg')}}" alt="soe vision">
                          </div>
                          <div class="vision-text">
                              <p class="subtitle">Our role in the world</p>
                              <p class="vision-title">Partner to Serve Communities</p>
                              <p class="vision-description">
                                  Not only concerned with getting the degree but students will also be guided with new ideologies and innovations so that they will be the best of the best when their knowledge and curiosities will be even more flourished by the university. No obstacle might get in their way to success and prosperity.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="odd-bg section-cb48">
                  <div class="container-content-two-col">
                      <div class="side-img-text admission-overlap">
                          <div class="floating-image"><img src="{{asset('/images/research/research-2.jpg')}}" alt="pu-admission"></div>
                          <div class="main-content-xr45 overlap-bg-xr45">
                              <h1 class="semi-large-header">Why to choose us?</h1>
                              <p class="content-xr45-text">
                              <ol class="with-counter">
                                  <li>Degrees recognized at National and International level.</li>
                                  <li>Young professional academic management team and profound faculties.</li>
                                  <li>State-of-art laboratories and infrastructure with the best learning ambiance.</li>
                                  <li>Paid internship and placement opportunities.</li>
                              </ol>
                              </p>
                              <p class="content-xr45-text">
                                  <a href="/courses" class="call-to-action-btn"><i class="fa-solid fa-arrow-right"></i> See our Courses now </a>
                              </p>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
  </section>

@endsection
