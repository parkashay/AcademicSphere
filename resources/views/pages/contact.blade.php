@extends('layouts.page')
@section('title', 'Contact')
@section('content')
<main class="cd-main-contentS">
    <section class="component-main component-main-posts">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <div data-toggle="tooltip" data-placement="left" title="Home"><a href="./index.php"><i class="fa-solid fa-house"></i></a></div>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </section>
    <div class="container-content-two-col">
        <div class="cover-bg">
            <img src="{{asset('images/backgrounds/campus.jpg')}}" alt="pu-cover-img">
        </div>

        <div class="contact-map">
            <div class="two-col">
                <div class="contact-info">
                    <p class="contact-info-header">Contact Information</p>
                    <div class="contact-two-col">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">Pokhara Metropolitan City-30, Lekhnath, Kaski, Nepal</div>
                    </div>
                    <div class="contact-two-col">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text"><a href="tel:+977-61-504046">+977-61-504046</a><br><a href="tel:+977-61-504047">+977-61-504047</a><br><a href="tel:+977-61-504048">+977-61-504048</a></div>
                    </div>
                    <div class="contact-two-col">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text"><a href="mailto:soe@pu.edu.np">soe@pu.edu.np</a></div>
                    </div>
                    <div class="contact-social-links">
                        <div class="social-icon" style="--icon-hover-clr:#1674ea"><i class="fa-brands fa-facebook"></i></div>
                        <div class="social-icon" style="--icon-hover-clr:#f70000"><i class="fa-brands fa-youtube"></i></div>
                        <div class="social-icon" style="--icon-hover-clr:#1c96e9"><i class="fa-brands fa-twitter"></i></div>
                        <div class="social-icon" style="--icon-hover-clr:#fff"><i class="fa-brands fa-github"></i></div>
                    </div>
                </div>
                <div class=" contact-form">
                    <h3 class="contact-info-header list-title">Send us a Message</span></h3>

                    <div class=" card">
                        <form class="card-form">
                            <div class="input">
                                <input type="text" class="input-field" required />
                                <label class="input-label">Full name</label>
                            </div>
                            <div class="input">
                                <input type="text" class="input-field" required />
                                <label class="input-label">Email</label>
                            </div>
                            <div class="input">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message.."></textarea>
                            </div>
                            <div class="action">
                                <button class="action-button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h3 class="list-title" style="margin-bottom: 2em; text-align:center;font-size:2em">Locate us on Map</span></h3>

            <div class="g-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2031.4977106248716!2d84.03032945329386!3d28.186908777088835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399597b93139b86d%3A0xc810d3ad871b63e3!2sPokhara%20University%20School%20Of%20Engineering%20Block%20B!5e0!3m2!1sen!2snp!4v1662215267873!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</main>
@endsection