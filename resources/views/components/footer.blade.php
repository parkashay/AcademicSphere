<footer>
  <div class="footer-about">
    <img src="{{asset('logo/logo_pu.png')}}" alt="pu-logo" class="logo">
    <p class="soe-slogan">School of Engineering</p>
    <h1 class="soe-title">About Us</h1>
    <p class="soe-description">
      School of Engineering comes under the the Faculty of Science and Technology. It was established in 1997 under the Pokhara University Act. In 1997. PU has adopted four years Bachelor's Programs of Engineering based on credit-semester system. An academic year of the University consists of two semesters of 16 weeks each.
    </p>
  </div>
  <div class="footer-links">
    <div class="footer-links">
      <div class="footer-link">
        <h2 class="footer-link-header">Academics</h2>
        <ul>
          <li><a href="./undergraduate.php">Undergraduate</a></li>
          <li><a href="./graduate.php">Graduate</a></li>
        </ul>
      </div>
      <div class="footer-link">
        <h2 class="footer-link-header">Admission</h2>
        <ul>
          <li><a href="./admission.php">Introduction</a></li>
          <li><a href="./how-to-apply.php">How to apply</a></li>
          <li><a href="./scholarship.php">Scholarship</a></li>
          <li><a href="./academic-calendar.php">Academic calander</a></li>
        </ul>
      </div>

      <div class="footer-link">
        <h2 class="footer-link-header">News & Notices</h2>
        <ul>
          <li><a href="./allpost.php">SOE News</a></li>
          <li><a href="./category.php?category=Notice&key=2">SOE Notices</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-links">
      <div class="center">
        <div class="footer-link">
          <h2 class="footer-link-header">About us</h2>
          <ul>
            <li><a href="./messagefromdirector.php">Message from Director</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
            <li><a href="../staffs.php">Faculties and Staffs</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-link">
        <h2 class="footer-link-header">Download & Login</h2>
        <ul>
          <li><a href="./login.php" target="_blank">Login</a></li>
          <li><a href="./assets/files/SOE-PU-Entrance-Sylllabus.pdf">SOE-PU-Entrance-Syllabus</a></li>
          <li><a href="./assets/files/coverpage_2077-Updated-website.pdf">Guidelines</a></li>
          <li><a href="./gallery.php">Gallery</a></li>
          <li><a href="./studymaterials.php">eLearning</a></li>
        </ul>
      </div>
      <div class="footer-link">
        <h2 class="footer-link-header">Research</h2>
        <ul>
          <li><a href="./coming-soon.php">Faculty Researches</a></li>
          <li><a href="./coming-soon.php">Scholarship</a></li>
          <li><a href="./coming-soon.php">Workshops</a></li>
          <li><a href="./coming-soon.php">Seminars & Conferences</a></li>
        </ul>
      </div>

    </div>
  </div>
  <div class="footer-contact-details">
    <hr>
    <div class="footer-contact-containers">
      <ul class="footer-contact">
        <li><i class="fa-solid fa-location-dot"></i>
          <p>
            Pokhara Metropolitan City-30, Lekhnath, Kaski, Nepal
          </p>
        </li>
        <li><i class="fa-solid fa-phone"></i><a href="tel:+977-61-504046">+977-61-504046</a></li>
        <li><i class="fa-solid fa-envelope"></i><a href="mailto:soe@pu.edu.np">soe@pu.edu.np</a></li>
      </ul>
    </div>
    <hr>
  </div>
  <div class="social-links">
    <p>connect with us</p><br>
    <div class="icons">
      <a href="">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href=""><i class="fab fa-twitter"></i></a>
      <a href=""><i class="fab fa-youtube"></i></a>
    </div>
  </div>
  <div class="copyright">

    <p> &copy;School of Engineering <?php $current = date("Y");
                                    print_r($current); ?> | <a href="./about_site.blade.php">About this site</a>
    </p>

  </div>
</footer>