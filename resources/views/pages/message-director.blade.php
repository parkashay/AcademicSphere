@extends('layouts.page')
@section('title', 'Message From Director')
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page">Message</li>
                <li class="breadcrumb-item active" aria-current="page">Director</li>
            </ol>

            <div class="tiles-container" style="display:flex;justify-content:cemter;">
                <div class="fixed-bg">
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="text-primary" style="font-size: 25px; font-weight:600;text-align:center;">
                                Message From Director
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
                                                    <img style="float: right;margin:20px;max-width:300px;"
                                                        src="{{ asset('images/teachers/om-prakash.jpg')}}" alt="...">

                                                    <div class="para-msg">
                                                        
                                                        <p>Dear Esteemed Students, Faculty, and Staff,</p>
                                                        <p>I hope this message finds you in good health and high spirits. As we
                                                            gear up for another academic year, it is with great pleasure and
                                                            enthusiasm that I extend my warmest welcome to each and every member
                                                            of our esteemed School of Engineering community.</p>

                                                       <p> The School of Engineering has long stood as a beacon of excellence,
                                                        committed to nurturing the finest engineering minds and driving
                                                        impactful innovations. Together, we form a dynamic and diverse
                                                        community dedicated to pushing the boundaries of knowledge and
                                                        addressing the world's pressing challenges.</p>

                                                       <p> As we embark on this new journey, I want to emphasize our shared
                                                        commitment to providing a world-class education that equips our
                                                        students with the skills, knowledge, and ethical foundation
                                                        necessary to excel in their chosen fields. Our distinguished faculty
                                                        members, with their wealth of experience and passion for teaching,
                                                        are here to guide and inspire you throughout your academic pursuits.</p>

                                                       <p> Furthermore, I encourage all of you to embrace the spirit of inquiry
                                                        and exploration. Our state-of-the-art laboratories and research
                                                        facilities are here to empower you in your quest for discovery and
                                                        innovation. Together, let's explore new frontiers and contribute to
                                                        the ever-evolving landscape of engineering.</p>

                                                        <p>In the coming months, we will actively engage with industries,
                                                            fostering partnerships that will expose you to real-world challenges
                                                            and provide invaluable hands-on experiences. Additionally, our
                                                            commitment to community engagement remains unwavering. Through
                                                            various outreach programs, we aim to leverage our collective
                                                            expertise to address the unique needs of our local communities.</p>

                                                       <p> Above all, let us remember the profound impact our work can have on
                                                        the world. By adhering to ethical engineering practices and
                                                        championing sustainability, we not only shape the future of our
                                                        profession but also leave a lasting legacy of positive change.</p>

                                                        <p>I have no doubt that this academic year will be marked by
                                                            extraordinary achievements and meaningful contributions from all
                                                            members of our community. Let us approach our endeavors with
                                                            determination, curiosity, and a collaborative spirit.</p>

                                                       <p> Once again, welcome to the School of Engineering. Together, we will
                                                        continue to scale new heights in engineering excellence.</p>

                                                       <p> Warm regards,</p>

                                                       <p> Er. Om Prakash Giri</p>
                                                       <p> Director, School of Engineering</p>
                                                    
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
