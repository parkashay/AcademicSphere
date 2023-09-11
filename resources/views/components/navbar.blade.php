<div class="toTop">
    <i class="fa fa-angle-up" aria-hidden="false">
    </i>
</div>

<!-- second nav -->

<header class="header">
    <a id="cd-logo" href="./"><img src="{{ asset('logo/logo_pu.png') }}" alt="School of engineering pu">School Of
        Engineering</a>
    <nav id="cd-top-nav" class="show-large-screen">

        <ul class="show-large-screen">
            <li><a href="/" id="homen home" style="--nav-hover-clr:#ff0051;">Home</a></li>
    
            <li>
                <nav class="dropdown">
                    <a class="dropbtn" style="--nav-hover-clr:#ce0c94;">ABOUT <i class="fa-solid fa-angle-down"></i></a>
                    <div class="invible-btn"></div>
                    <nav class="dropdown-content">
                        <a href="/about">General Information</a>
                        <a href="/about/organizational-structure">Organizational Structure</a>
                        <a href="/message/dean">Message From Dean</a>
                        <a href="/message/director">Message From Director</a>
                    </nav>
                </nav>
            </li>

            <li>
                <nav class="dropdown">
                    <a class="dropbtn" style="--nav-hover-clr:#456990;">Programs <i
                            class="fa-solid fa-angle-down"></i></a>
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
                    <a class="dropbtn" style="--nav-hover-clr:#ce0c36;">ADMISSION <i
                            class="fa-solid fa-angle-down"></i></a>
                    <div class="invible-btn"></div>
                    <nav class="dropdown-content">
                        <a href="/admisiion/undergraduate">Undergraduate</a>
                        <a href="/admisiion/graduate">Graduate</a>
                    </nav>
                </nav>
            </li>


            <li>
                <nav class="dropdown">
                    <a href="/faculty" class="dropbtn" style="--nav-hover-clr:#ce0c36;">FACULTY </a>
                </nav>
            </li>

            <li>
                <nav class="dropdown">
                    <a href="/staff" class="dropbtn" style="--nav-hover-clr:#5a0374;">STAFF </a>
                </nav>
            </li>

            
            <li>
                <nav class="dropdown">
                    <a class="dropbtn" style="--nav-hover-clr:#e06f1f;">NEWS & NOTICES <i
                            class="fa-solid fa-angle-down"></i></a>
                    <div class="invible-btn"></div>
                    <nav class="dropdown-content">
                        <a href="/posts" >News</a>
                        <a href="/posts" >Notices</a>
                        <a href="/posts" >Results</a>
                        <a href="/events" >Events</a>
                    </nav>
                </nav>
            </li>
            

            <li>
                <nav class="dropdown">
                    <a class="dropbtn" style="--nav-hover-clr:#b31240;"> COMITTEE & CELL <i
                            class="fa-solid fa-angle-down"></i></a>
                    <div class="invible-btn"></div>
                    <nav class="dropdown-content">
                        <a href="/internal-examination" >Internal Examination</a>
                        <a href="/student-welfare">Student Welfare</a>
                    </nav>
                </nav>
            </li>
            <li>
                <nav class="dropdown">
                    <a class="dropbtn" style="--nav-hover-clr:#b31240;"> STUDENT'S SECTION <i
                            class="fa-solid fa-angle-down"></i></a>
                    <div class="invible-btn"></div>
                    <nav class="dropdown-content">
                        <a href="/learning-materials" >Teaching Materials</a>
                        <a href="/contact">Student's Suggestions</a>
                    </nav>
                </nav>
            </li>
          
            <li>
                <div class="search-container">
                    <form action="{{ route('posts.search') }}" method="GET" name="search">
                        <input class="search expandright" id="searchright" type="search" placeholder="Search"
                            name="search">
                        <label class="button searchbutton" for="searchright"><span
                                class="mglass">&#9906;</span></label>
                    </form>
                </div>
            </li>
            <li>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm btn-logout">Logout</button>
                    </form>
                @endauth
                @guest
                    <a style="--nav-hover-clr:#8318b4;" href="{{ route('login') }}">Login</a>
                    <a style="--nav-hover-clr:#8318b4;" href="{{ route('register') }}">Register</a>
                @endguest
            </li>
        </ul>
    </nav>
    <a id="cd-menu-trigger" class="show-small-screen" href="#0"><span class="cd-menu-text"></span><span
            class="cd-menu-icon"></span></a>
</header>


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
        <ul class="cd-single-item-wrapper">
            <li><a href="./index.php">Home</a></li>
        </ul>
        <li class="item-has-children">
            <a href="#">Academics</a>
            <ul class="sub-menu">
                <li class="item-has-children">
                    <a href="#">Undergraduate(B.E)</a>
                    <ul class="sub-menu">
                        <li><a href="how-to-apply.php">How to Apply</a></li>
                        <li><a href="scholarship.php">Scholarship</a></li>
                        <li><a href="./undergraduate.php">Undergraduate(B.E)</a></li>
                    </ul>
                </li>
                <li class="item-has-children">
                    <a href="#">Graduate(M.Sc)</a>
                    <ul class="sub-menu">
                        <li><a href="how-to-apply.php">How to Apply</a></li>
                        <li><a href="scholarship.php">Scholarship</a></li>
                        <li><a href="./graduate.php">Graduate</a></li>
                    </ul>
                </li>
            </ul>
        </li> <!-- item-has-children -->

        <li class="item-has-children">
            <a href="">ADMISSION</a>
            <ul class="sub-menu">
                <li><a href="admission.php">Introduction</a></li>
                <li><a href="how-to-apply.php">How to Apply</a></li>
                <li><a href="scholarship.php">Scholarship</a></li>
                <li><a href="./undergraduate.php">Undergraduate(B.E)</a></li>
                <li><a href="./graduate.php">Graduate(M.Sc.)</a></li>
                <li><a href="./academic-calendar.php">Academic Calendar</a></li>
            </ul>
        </li> <!-- item-has-children -->

        <li class="item-has-children">
            <a href="#">News & Notices</a>
            <ul class="sub-menu">
                <li> <a href="./allpost.php">SOE News</a></li>
                <li><a href="./category.php?category=Notice&key=2">SOE Notices</a></li>
                <li><a href="./studymaterials.php">eLearning</a></li>
                <li><a href="./academic-calendar.php">Academic Calendar</a></li>
                <li><a href="#">Vacancy & Career</a></li>
            </ul>
        </li> <!-- item-has-children -->
        <ul class="cd-single-item-wrapper">
            <li><a href="./gallery.php">Gallery</a></li>
        </ul>
        <li class="item-has-children">
            <a href="#">About SOE</a>
            <ul class="sub-menu">
                <li><a href="about.php">About us</a></li>
                <li><a href="./messagefromdirector.php">Message from Director</a></li>
                <li><a href="#">Vision Mission Goals and Objective</a></li>
                <li><a href="#">History of PoU</a></li>
                <li><a href="./contact.php">Contact Us</a></li>
                <li><a href="./staffs.php">Faculties and Staffs</a></li>
            </ul>
        </li>
        <li class="item-has-children">
            <a href="#">Others</a>
            <ul class="sub-menu">
                <li><a href="./coming-soon.php">Faculty Reseaches</a></li>
                <li><a href="./coming-soon.php">Workshops</a></li>
                <li><a href="./coming-soon.php">Vision Mission Goals and Objective</a></li>
                <li><a href="./coming-soon.php">Seminars & Conferences</a></li>
            </ul>
        </li>

        <li>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endguest
        </li>
    </ul> <!-- cd-navigation -->
</nav>
