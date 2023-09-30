<div class="toTop">
    <i class="fa fa-angle-up" aria-hidden="false">
    </i>
</div>

<!-- second nav -->
<div class="fixed-container mb-5">
    <div class="small-fixed show-large-screen">
        <ul class="show-large-screen">
            <li>
                <a href="/internal-examination" class="dropbtn">
                    EXAMINATION </a>
            </li>
            <li>
                <a href="/research" class="dropbtn">RESEARCH </a>
            </li>
            <li class="dropdown">

                <a href="" class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                    style="min-width: 100px;" aria-haspopup="true" aria-expanded="false">
                    STUDENT
                </a>
                <div class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenu2" style="color:#000;">
                    <a href="/learning-materials">Teaching Materials</a>
                    <hr>
                    <a href="/student-clubs">Student Clubs</a>
                    <hr>
                    <a href="/contact">Student's Suggestions</a>
                </div>
            </li>
            <li>
                <a href="/login" class="dropbtn">LOGIN </a>
            </li>
            <div class="search-container">
                <form action="{{ route('posts.search') }}" method="GET" name="search">
                    <input class="search expandright" id="searchright" type="search" placeholder="Search"
                        name="search">
                    <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
                </form>
            </div>
            </li>
        </ul>
    </div>
    <header class="header">
        <a id="cd-logo" href="/"><img src="{{ asset('logo/logo_pu.png') }}" alt="School of engineering pu"></a>
        <nav id="cd-top-nav" class="show-large-screen">

            <ul class="show-large-screen">
                <li>
                    <nav class="dropdown">
                        <a class="dropbtn">ABOUT US <i class="fa-solid fa-angle-down"></i></a>
                        <div class="invible-btn"></div>
                        <nav class="dropdown-content">

                            <nav class="dropdown-child">
                                <a href="/about" class="dropbtn-child">
                                    <div><span>General Information</span>
                                    </div>
                                </a>
                            </nav>
                            <nav class="dropdown-child">
                                <a href="/about/organizational-structure" class="dropbtn-child">
                                    <div><span>Organizational
                                            Structure</span>
                                    </div>
                                </a>
                            </nav>
                            <nav class="dropdown-child">
                                <a href="/message/director" class="dropbtn-child">
                                    <div><span>Message From Director</span>
                                    </div>
                                </a>
                            </nav>

                            <nav class="dropdown-child">
                                <a class="dropbtn-child">
                                    <div><span>Message From Coordinator</span> <span><i
                                                class="fa-solid fa-angle-right"></i></span></div>
                                </a>
                                <div class="invible-btn2"></div>
                                <nav class="dropdown-content-child">
                                    <a href="/message/computer">Bachelor of Computer Engineering</a>
                                    <a href="/message/civil">Bachelor of Civil Engineering</a>
                                    <a href="/message/electrical">Bachelor of Electrical & Electronics Engineering</a>
                                    <a href="/message/software">Bachelor of Software Engineering</a>
                                    <a href="/message/civil&rural">Bachelor of Civil & Rural Engineering</a>
                                </nav>
                            </nav>

                        </nav>
                    </nav>
                </li>

                <li>
                    <nav class="dropdown">
                        <a class="dropbtn">PROGRAMS <i class="fa-solid fa-angle-down"></i></a>
                        <div class="invible-btn"></div>
                        <nav class="dropdown-content">
                            <nav class="dropdown-child">
                                <a href="#" class="dropbtn-child">
                                    <div><span>Bachelor of Engineering</span> <span><i
                                                class="fa-solid fa-angle-right"></i></span></div>
                                </a>
                                <div class="invible-btn2"></div>
                                <nav class="dropdown-content-child">
                                    <a href="/programs/1">Bachelor of Computer Engineering</a>
                                    <a href="/programs/2">Bachelor of Civil Engineering</a>
                                    <a href="/programs/3">Bachelor of Electrical & Electronics Engineering</a>
                                    <a href="/programs/4">Bachelor of Software Engineering</a>
                                    <a href="/programs/5">Bachelor of Civil & Rural Engineering</a>
                                </nav>
                            </nav>
                            <nav class="dropdown-child">
                                <a href="/program/masters" class="dropbtn-child">
                                    <div><span>Masters of Engineering</span>
                                    </div>
                                </a>
                            </nav>
                        </nav>
                    </nav>
                </li>


                <li>
                    <nav class="dropdown">
                        <a class="dropbtn">ADMISSION <i class="fa-solid fa-angle-down"></i></a>
                        <div class="invible-btn"></div>

                        <nav class="dropdown-content">
                            <nav class="dropdown-child">
                                <a href="#" class="dropbtn-child">
                                    <div><span>Undergraduate</span> <span> <i
                                                class="fa-solid fa-angle-right"></i></span>
                                    </div>
                                </a>
                                <div class="invible-btn2"></div>
                                <nav class="dropdown-content-child">
                                    <a href="/admission/undergraduate">Paying</a>
                                    <a href="https://pu.edu.np/scholarship/">Scholarship</a>
                                </nav>
                            </nav>
                            <nav class="dropdown-child">
                                <a href="/admission/graduate" class="dropbtn-child">
                                    <div><span>Graduate</span>
                                    </div>
                                </a>
                            </nav>
                        </nav>


                    </nav>
                </li>


                <li>
                    <nav class="dropdown">
                        <a class="dropbtn">FACULTY & STAFF <i class="fa-solid fa-angle-down"></i></a>
                        <div class="invible-btn"></div>
                        <nav class="dropdown-content">
                            <a href="/faculty">Faculty </a>
                            <a href="/staff">Staff </a>
                        </nav>
                    </nav>
                </li>

                <li>
                    <nav class="dropdown">
                        <a class="dropbtn">NEWS & NOTICES <i class="fa-solid fa-angle-down"></i></a>
                        <div class="invible-btn"></div>
                        <nav class="dropdown-content">
                            <a href="/posts">News</a>
                            <a href="/posts">Notices</a>
                            <a href="/posts">Results</a>
                            <a href="/events">Events</a>
                        </nav>
                    </nav>
                </li>
                <li></li>


            </ul>
        </nav>
        <a id="cd-menu-trigger" class="show-small-screen" href="#0"><span class="cd-menu-text"></span><span
                class="cd-menu-icon"></span></a>
    </header>
</div>


{{-- // Mobile view --}}
<nav id="cd-lateral-nav">
    <ul class="cd-navigation cd-single-item-wrapper">
        <li class="form-center">
            <form action="{{ route('posts.search') }}" method="GET"
                class="form-inline my-2 my-lg-0 header-search search-small search-small-screen" name="form">
                <input class=" form-control mr-sm-2" type="search" placeholder="Search here..." required
                    type="text" name="search">
            </form>
        </li>

    </ul>
    <ul class="cd-navigation show-small-screen">

        <li class="item-has-children">
            <a>ABOUT</a>
            <ul class="sub-menu">
                <li>
                    <a href="/about">General Information</a>
                </li>
                <li>
                    <a href="/about/organizational-structure">Organizational Structure</a>
                </li>

                <li>
                    <a href="/message/director">Message From Director</a>
                </li>
                <li class="item-has-children">
                    <a href="#">Message From Coordinator</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/message/computer">Bachelor of Computer Engineering</a>
                        </li>
                        <li>
                            <a href="/message/civil">Bachelor of Computer Engineering</a>
                        </li>
                        <li>
                            <a href="/message/electrical">Bachelor of Computer Engineering</a>
                        </li>
                        <li>
                            <a href="/message/software">Bachelor of Computer Engineering</a>
                        </li>
                        <li>
                            <a href="/message/civil&rural">Bachelor of Computer Engineering</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </li> <!-- item-has-children -->




        <li class="item-has-children">
            <a href="#">PROGRAMS</a>
            <ul class="sub-menu">
                <li class="item-has-children">
                    <a href="#">Bachelor of Engineering</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/programs/1">Bachelor of Computer Engineering</a>

                        </li>
                        <li>
                            <a href="/programs/2">Bachelor of Civil Engineering</a>

                        </li>
                        <li>
                            <a href="/programs/3">Bachelor of Electrical & Electronics Engineering</a>

                        </li>
                        <li>
                            <a href="/programs/4">Bachelor of Software Engineering</a>

                        </li>
                        <li>
                            <a href="/programs/5">Bachelor of Civil & Rural Engineering</a>

                        </li>
                    </ul>
                </li>
                <li class="item-has-children">
                    <a href="/program/masters">Masters of Engineering</a>
                </li>
            </ul>
        </li> <!-- item-has-children -->

        <li class="item-has-children">
            <a href="">ADMISSION</a>
            <ul class="sub-menu">
                <li class="item-has-children">
                    <a href="#">Undergraduate</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admisiion/undergraduate">Paying</a>
                        </li>
                        <li>
                            <a href="https://pu.edu.np/scholarship">Scholarship</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/admisiion/graduate">Graduate</a>

                </li>
            </ul>
        </li> <!-- item-has-children -->




        <li class="item-has-children">
            <a href="#">FACULTY & STAFF</a>
            <ul class="sub-menu">
                <li>
                    <a href="/faculty" class="dropbtn">FACULTY </a>

                </li>
                <li>
                    <a href="/staff" class="dropbtn">STAFF </a>

                </li>


            </ul>
        </li>


        <li class="item-has-children">
            <a href="#">NEWS & NOTICES</a>
            <ul class="sub-menu">
                <li>
                    <a href="/posts">News</a>

                </li>
                <li>
                    <a href="/posts">Notices</a>

                </li>
                <li>
                    <a href="/posts">Results</a>

                </li>
                <li>
                    <a href="/events">Events</a>

                </li>
            </ul>
        </li>

        <ul class="cd-single-item-wrapper">
            <li>
                <a href="/research" class="dropbtn">RESEARCH </a>

            </li>
        </ul>

        <ul class="cd-single-item-wrapper">
            <li>
                <a href="/internal-examination">INTERNAL
                    EXAMINATION</a>

            </li>
        </ul>

        <li class="item-has-children">
            <a href="#">STUDENT'S SECTION</a>
            <ul class="sub-menu">
                <li>
                    <a href="/learning-materials">Teaching Materials</a>

                </li>
                <li>
                    <a href="/student-clubs">Student Clubs</a>
                </li>
                <li>
                    <a href="/contact">Student's Suggestions</a>

                </li>
            </ul>
        </li>
    </ul> <!-- cd-navigation -->
</nav>
