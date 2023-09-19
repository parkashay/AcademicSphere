@extends('layouts.page')
@section('title', 'Message From Coordinator')
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page">Message</li>
                <li class="breadcrumb-item active" aria-current="page">Coordinator</li>
                <li class="breadcrumb-item active" aria-current="page"><?php
                $from === 'computer' ? 'Computer' : 'Other';
                ?></li>
            </ol>

            <div class="tiles-container" style="display:flex;justify-content:cemter;">
                <div class="fixed-bg">
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="text-primary" style="font-size: 25px; font-weight:600;text-align:center;">
                                Message From Coordinator
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <section class="staff-details">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 mb-4 mb-sm-5">
                                        <div class="card card-style1 border-0">
                                            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                                <div>

                                                    <img style="float: right;margin:10px;max-width:250px;aspect-ratio:1;border-radius:50%;"
                                                        src="{{ asset('images/coordinators/' . $from . '.jpg') }}"
                                                        alt="Dean-soe-pu">

                                                    <div class="para-msg">

                                                        <p> Dear Esteemed Students,</p>

                                                        <p> I hope this message finds you in good health and high spirits.
                                                            As the Coordinator of the School of Engineering, it is my
                                                            privilege to extend a warm welcome to you as you embark on this
                                                            exciting journey towards a future in engineering.

                                                            The School of Engineering prides itself on its dedication to
                                                            providing a top-tier education, with a focus on practical
                                                            application and hands-on learning. Our team of accomplished
                                                            faculty members is committed to nurturing your skills and
                                                            helping you reach your fullest potential.</p>

                                                        <p> Over the course of your studies, you will have access to
                                                            cutting-edge labs, research facilities, and a curriculum that is
                                                            designed to prepare you for the challenges and opportunities
                                                            that lie ahead. It is my hope that you will embrace these
                                                            resources with enthusiasm and creativity.

                                                            Throughout your time here, you will also have the opportunity to
                                                            engage with industry professionals, gaining invaluable insights
                                                            and experiences that will shape your perspective on engineering.
                                                            Additionally, we encourage you to participate in community
                                                            outreach initiatives, using your skills to make a positive
                                                            impact on the world around you.</p>

                                                        <p>I am confident that you will find your experience at the School
                                                            of Engineering to be enriching and transformative. Remember,
                                                            your journey in engineering is not just about academic
                                                            achievements, but also about personal growth, teamwork, and a
                                                            commitment to ethical engineering practices.</p>

                                                        <p>I encourage you to approach this academic year with an open mind,
                                                            a thirst for knowledge, and a determination to excel. The
                                                            possibilities are boundless, and I have no doubt that you will
                                                            rise to the challenges that await you.</p>

                                                        <p>Once again, welcome to the School of Engineering. I look forward
                                                            to witnessing your successes and being a part of your
                                                            educational journey.</p>

                                                        <p> Remember, our work as engineers carries a profound
                                                            responsibility.
                                                            By adhering to ethical practices and embracing sustainable
                                                            solutions, we play a crucial role in shaping a better, more
                                                            inclusive future for all.</p>

                                                        <p> I have every confidence that this academic year will be marked
                                                            by
                                                            remarkable achievements and significant contributions from each
                                                            member of our community. Let us approach our endeavors with
                                                            determination, resilience, and a spirit of collaboration.</p>

                                                        <p> Once again, welcome to the School of Engineering. Together, we
                                                            will
                                                            continue to advance the frontiers of engineering knowledge and
                                                            inspire positive change in the world.</p>

                                                        <p> Warm regards,</p>

                                                        @if ($from === 'computer')
                                                            <strong>
                                                                <p>Dr. Udaya Raj Dhungana</p>
                                                            </strong>
                                                            <p> Coordinator, BoCE</p>
                                                        @elseif($from === 'civil')
                                                            <strong>
                                                                <p>Er. Om Prakash Giri</p>
                                                            </strong>
                                                            <p> Coordinator, BCE</p>
                                                        @elseif($from === 'electrical')
                                                            <strong>
                                                                <p>Er. Niraj Khadka</p>
                                                            </strong>
                                                            <p> Coordinator, BEEE</p>
                                                        @elseif($from === 'software')
                                                            <strong>
                                                                <p>Dr, Udaya Raj Dhungana</p>
                                                            </strong>
                                                            <p> Coordinator, BSE</p>
                                                        @else
                                                            <strong>
                                                                <p>Er. Om Prakash Giri</p>
                                                            </strong>
                                                            <p> Coordinator, BCRE</p>
                                                        @endif


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
