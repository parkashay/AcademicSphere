@extends('layouts.page')
@section('title', 'About School of Engineering')
@section('content')

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary"
                                href="@@page-link">About Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured
                        by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4" src="{{ asset('images/about/about-page.jpg') }}" alt="about image">
                    <h2 class="section-title">ABOUT POKHARA UNIVERSITY</h2>
                    <h3>Introduction</h3>
                    <p>
                        Nepal adopted the multi-university concept in 1983. The idea of Pokhara University (PU) was
                        conceived in 1986; however, it was established only in 1997 under the Pokhara University Act, 1997.
                        The Incumbent Honorable Prime Minister and the Honorable Minister for Education of the Federal
                        Democratic Republic Nepal are the Chancellor and the Pro-Chancellor, respectively. The Chancellor
                        appoints the Vice Chancellor, the principal executive officer of the university. The Registrar is
                        designated to assist him/her in financial management and general administration. A non-profit
                        autonomous institution, PU is partly funded by the Government of Nepal and partly by revenues from
                        its students and affiliated colleges.
                    </p>

                    <h3>Objectives</h3>
                    <p>
                    <ul>
                        <p>
                           - produce adept human resource in science and technology, humanities and management, and law and
                            education for nation building
                        </p>
                        <p>- encourage the participation of private sectors in higher education through extension programs
                        </p>
                        <p>- create healthy, disciplined, result-oriented academic environment that focuses on higher
                            education</p>
                        <p>- promote competitive and quality higher education through fair competition</p>
                        <p>- accelerate socio-economic transformation in line with community services</p>
                    </ul>
                    </p>
                    <h3>Financing</h3>
                    <p>
                        Pokhara University manages its expenditures mainly from three sources: Nepal Government’s grants,
                        revenue from students and affiliated institutions. PU has been gradually reducing its dependence on
                        government coffer in line with Nepal Government’s fiscal policy of cost-effective sharing with
                        private sectors. However, it fully depends on government grants for financing the capital
                        expenditure, especially on building infrastructures for academic and administrative purposes. With
                        the local community-endowed land, PU provides spaces for Schools and Research Centers included in
                        the University Plan. PU credits donors and contributors involved in the construction of
                        infrastructures, such as hostel, library, stadium, and auditorium.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    @include('components.facts-count')

    @include('components.video-preview')

    @include('components.staff-preview')

@endsection
