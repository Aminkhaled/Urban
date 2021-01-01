<?php get_header(); ?>
<div class="contact-area pt-115 pb-20">
    <div class="container">
        <div class="contact-info-wrap-3 pb-50">
            <h3>contact info</h3>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-location-pin "></i>
                        <h4>our address</h4>
                        <p>
                           4 Moaaz Ibn Jabal st.behind National Eye Hospital El Hegaz sq. Heliopolis,Cairo,Egypt.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                        <ul>
                            <li><i class="icon-screen-smartphone"></i> +201122885544 </li>
                            <li><i class="icon-envelope "></i> <a href="#"> Omer@urban.automotive</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-clock "></i>
                        <h4>openning hour</h4>
                        <p> 10:00am - 22:00pm </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-in-touch-wrap">
            <h3>Get In Touch</h3>
            <div class="contact-from contact-shadow">
                <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input name="name" type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
