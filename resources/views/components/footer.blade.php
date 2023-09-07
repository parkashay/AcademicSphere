<footer>
    <div class="footer-about">
        <img src="{{ asset('logo/logo_pu.png') }}" alt="pu-logo" class="logo">
        <p class="soe-slogan">School of Engineering</p>
        <h1 class="soe-title">About Us</h1>
        <p class="soe-description">
            School of Engineering comes under the the Faculty of Science and Technology. It was established in 1997
            under the Pokhara University Act. In 1997. PU has adopted four years Bachelor's Programs of Engineering
            based on credit-semester system. An academic year of the University consists of two semesters of 16 weeks
            each.
        </p>
    </div>
    <div class="footer-links">
        <div class="footer-links">
            <div class="footer-link">
                <h2 class="footer-link-header">Academics</h2>
                <ul>
                    <li><a href="/courses">Courses</a></li>
                    <li><a href="/programs">Programs</a></li>
                </ul>
            </div>
            <div class="footer-link">
                <h2 class="footer-link-header">Information</h2>
                <ul>
                    <li><a href="/about">Introduction</a></li>
                    <li><a href="/calendar">Academic Calendar</a></li>

                </ul>
            </div>

            <div class="footer-link">
                <h2 class="footer-link-header">Posts</h2>
                <ul>
                    <li><a href="/posts">News and Notices</a></li>
                    <li><a href="/events">Events</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-links">
            <div class="center">
                <div class="footer-link">
                    <h2 class="footer-link-header">About us</h2>
                    <ul>
                        <li><a href="/about">Introduction</a></li>
                        <li><a href="/staff">Faculties and Staffs</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-link">
                <h2 class="footer-link-header">Download & Login</h2>
                <ul>
                    <li><a href="/admin" target="_blank">DashBoard</a></li>
                    <li><a href="/gallery.php">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-link">
                <h2 class="footer-link-header">Study and Research</h2>
                <ul>
                    <li><a href="/learning-materials">Learning Materials</a></li>
                    <li><a href="https://pu.edu.np/publications" target="_blank">Faculty Researches</a></li>
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

        <p> &copy;School of Engineering <?php $current = date('Y');
        print_r($current); ?> | <a href="/">&copy;AcademicSphere</a>
        </p>

    </div>
</footer>
