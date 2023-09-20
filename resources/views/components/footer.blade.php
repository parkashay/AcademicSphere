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
            <div class="center">
                <div class="footer-link">
                    <h2 class="footer-link-header">QUICK LINKS</h2>
                    <ul>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/downloads">Downloads</a></li>
                        <li><a href="/learning-materials">Teaching Materials</a></li>
                        <li><a href="/posts">Notices</a></li>
                    </ul>
                </div>
            </div>
            <div class="center">
                <div class="footer-link">
                    <h2 class="footer-link-header">RELATED LINKS</h2>
                    <ul>
                        <li><a href="https://pu.edu.np/">Pokhara University</a></li>
                        <li><a href="https://nec.gov.np/">Nepal Engineering Council(NEC)</a></li>
                        <li><a href="https://www.neanepal.org.np/">Nepal Engineers Association (NEA)</a></li>
                        <li><a href="https://scholarship.pu.edu.np/">Scholarship</a></li>
                        <li><a href="https://pusoe.edu.np/">LMS</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-link">
                <h2 class="footer-link-header">Download & Login</h2>
                <ul>
                    <li><a href="/admin" target="_blank">DashBoard</a></li>


                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm btn-logout">Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li> <a href="{{ route('login') }}">Login</a></li>
                        <li> <a  href="{{ route('register') }}">Register</a> </li>
                    @endguest
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-link">
                <h2 class="footer-link-header">SCHOOL OF ENGINEERING</h2>
                <ul>
                    <li><a href="/about">General Information</a></li>
                    <li> <a href="/about/organizational-structure">Organizational Structure</a></li>
                    <li> <a href="/message/dean">Message From Dean</a></li>
                    <li> <a href="/message/director">Message From Director</a></li>

                </ul>
            </div>
            <div class="footer-link">
                <h2 class="footer-link-header">CONTACT US</h2>
                <div class="text-white">
                    <p>School of Engineering</p>
                    <p><strong>Block A - </strong> Pokhara Metropolitan City-30
                        Lekhnath, Kaski, Nepal</p>

                    <p> <strong>Telephone</strong>:+977-61-504046</p>
                    <p> <strong>Post Box</strong>: 427</p>
                    <p><strong>Email</strong>: info@pu.edu.np</p>
                        <br>
                    <p><strong>Block B - </strong> Pokhara Metropolitan City-26
                        Lekhnath, Kaski, Nepal</p>
                    <p> <strong>Telephone</strong>:+977-61-504046</p>
                    <p><strong>Email</strong>: purubhat2052@gmail.com</p>

                </div>
            </div>

        </div>
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
        print_r($current); ?> | <a href="#">ACADEMICSPHERE</a>
        </p>

    </div>
</footer>
