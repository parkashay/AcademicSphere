<div class="toTop">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<!-- second nav -->
<header class="header">
  <a id="cd-logo" href="./index.php"><img src="{{asset('logo/logo_pu.png')}}" alt="School of engineering pu">School Of Engineering</a>
  <nav id="cd-top-nav" class="show-large-screen">
    <ul class="show-large-screen">
      <li><a href="../#" id="homen home" style="--nav-hover-clr:#ff0051;">Home</a></li>
      <li>
        <nav class="dropdown">
          <a class="dropbtn" style="--nav-hover-clr:#456990;">Academics <i class="fa-solid fa-angle-down"></i></a>
          <div class="invible-btn"></div>
          <nav class="dropdown-content">
            <nav class="dropdown-child">
              <a href="#" class="dropbtn-child" style="--nav-hover-clr:#9A7085;">
                <div><span>Undergraduate(B.E)</span> <span><i class="fa-solid fa-angle-right"></i></span></div>
              </a>
              <div class="invible-btn2"></div>
              <nav class="dropdown-content-child">
                <a href="how-to-apply.php" style="--nav-hover-clr:#49BEAA;">How to Apply</a>
                <a href="#" style="--nav-hover-clr:#EEB868;">Scholarship</a>
                <a href="./undergraduate.php" style="--nav-hover-clr:#74A9A0;">Undergraduate(B.E)</a>
              </nav>
            </nav>
            <nav class="dropdown-child">
              <a href="#" class="dropbtn-child" style="--nav-hover-clr:#e0a21f;">
                <div><span>Graduate(M.Sc)</span> <span><i class="fa-solid fa-angle-right"></i></span></div>
              </a>
              <div class="invible-btn2"></div>
              <nav class="dropdown-content-child">
                <a href="how-to-apply.php" style="--nav-hover-clr:#36b336;">How to Apply</a>
                <a href="#" style="--nav-hover-clr:#b31240;">Scholarship</a>
                <a href="./graduate.php" style="--nav-hover-clr:#9d2b16;">Graduate(M.E)</a>
              </nav>
            </nav>
          </nav>
        </nav>
      </li>
      <li>
        <nav class="dropdown">
          <a class="dropbtn" style="--nav-hover-clr:#ce0c94;">Admission <i class="fa-solid fa-angle-down"></i></a>
          <div class="invible-btn"></div>
          <nav class="dropdown-content">
            <a href="admission.php" style="--nav-hover-clr:#017a8e;">Introduction</a>
            <a href="how-to-apply.php" style="--nav-hover-clr:#ff8e84;">How to Apply</a>
            <a href="#" style="--nav-hover-clr:#0040ff;">Scholarship</a>
            <a href="./academic-calendar.php" style="--nav-hover-clr:#ffa500;">Academic Calendar</a>
          </nav>
        </nav>
      </li>
      <li>
        <nav class="dropdown">
          <a class="dropbtn" style="--nav-hover-clr:#e06f1f;">News & Notices <i class="fa-solid fa-angle-down"></i></a>
          <div class="invible-btn"></div>
          <nav class="dropdown-content">
            <a href="./allpost.php" style="--nav-hover-clr:#9d5716;">SOE News</a>
            <a href="./category.php?category=Notice&key=2" style="--nav-hover-clr:#e0a21f;">SOE Notices</a>
            <a href="./studymaterials.php" style="--nav-hover-clr:#e03e1f;">eLearning</a>
            <a href="./academic-calendar.php" style="--nav-hover-clr:#9d2b16;">Academic Calendar</a>
            <a href="#" style="--nav-hover-clr:#1460a8;">Vacancy & Career</a>
          </nav>
        </nav>
      </li>
      <li><a href="./gallery.php" style="--nav-hover-clr:#29b312;">Gallery</a></li>
      <li>
        <nav class="dropdown">
          <a class="dropbtn" style="--nav-hover-clr:#b31240;"> About Soe <i class="fa-solid fa-angle-down"></i></a>
          <div class="invible-btn"></div>
          <nav class="dropdown-content">
            <a href="./about.php" style="--nav-hover-clr:#ff571a;">About us</a>
            <a href="./messagefromdirector.php" style="--nav-hover-clr:#b312a2;">Message from Director</a>
            <a href="./contact.php" style="--nav-hover-clr:#6918b4;">Contact Us</a>
            <a href="./staffs.php" style="--nav-hover-clr:#8318b4;">Faculties and Staffs</a>
          </nav>
        </nav>
      </li>
      <li>
        <nav class="dropdown">
          <a class="dropbtn" style="--nav-hover-clr:#31bc76;">Research <i class="fa-solid fa-angle-down"></i></a>
          <div class="invible-btn"></div>
          <nav class="dropdown-content content-research-overflow">
            <a href="./coming-soon.php" style="--nav-hover-clr:#6918b4;">Faculty Researches</a>
            <a href="./coming-soon.php" style="--nav-hover-clr:#bf3769;">Workshops</a>
            <a href="./coming-soon.php" style="--nav-hover-clr:#e03e1f;">Seminars & Conferences</a>
          </nav>
        </nav>
      </li>
      <li>
        <div class="search-container">
          <form action="{{route('posts.search')}}" method="GET" name="search">
            <input class="search expandright" id="searchright" type="search" placeholder="Search" name="search">
            <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <a id="cd-menu-trigger" class="show-small-screen" href="#0"><span class="cd-menu-text"></span><span class="cd-menu-icon"></span></a>
</header>
<nav id="cd-lateral-nav">
  <ul class="cd-navigation cd-single-item-wrapper">
    <li class="form-center">
      <form action="{{route('posts.search')}}" method="GET" class="form-inline my-2 my-lg-0 header-search search-small search-small-screen" name="form">
        <input class=" form-control mr-sm-2" type="search" placeholder="Search here..." required type="text" name="search">
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
      <a href="#">Research</a>
      <ul class="sub-menu">
        <li><a href="./coming-soon.php">Faculty Reseaches</a></li>
        <li><a href="./coming-soon.php">Workshops</a></li>
        <li><a href="./coming-soon.php">Vision Mission Goals and Objective</a></li>
        <li><a href="./coming-soon.php">Seminars & Conferences</a></li>
      </ul>
    </li>
  </ul> <!-- cd-navigation -->

</nav>