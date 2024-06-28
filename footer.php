<!--==========================
    Footer
  ============================-->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <h3>RapidSol4Tech</h3>
                                <p>RapidSol4Tech is a forward-thinking software company dedicated to delivering
                                    cutting-edge web
                                    development,
                                    reliable hosting services, and expert SharePoint development. Our team of
                                    experienced professionals
                                    is passionate about leveraging the latest technologies to build robust digital
                                    solutions tailored to
                                    meet your specific requirements.</p>
                            </div>


                            <div class="social-links">
                                <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
                                <a href="https://www.facebook.com/profile.php?id=61561315598597" class="facebook"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
                                <a href="https://www.linkedin.com/company/rapidsol4tech" class="linkedin"
                                    target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="services.php">Services</a></li>

                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>Contact Us</h4>
                                <p>
                                    Gulistan-e-Jauhar<br>
                                    Karachi, 75290<br>
                                    Pakistan<br>
                                    <strong>Phone:</strong> +923123634163<br>
                                    <strong>Email:</strong> info@rapidsol4tech.com<br>
                                </p>
                            </div>



                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>

                        <form id="contact-form" action="actions/send_email.php" method="post" role="form">
                            <div class="form-group col-md-12 col-10">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                            </div>
                            <div class="form-group col-md-12 col-10">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required />
                            </div>
                            <div class="form-group col-md-12 col-10">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group col-md-12 col-10">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="text-center col-md-12 col-10">
                                <button type="submit" title="Send Message" id="submit-btn">Send Message</button>
                                <div id="talk" style="display:none;">
                                    <!-- Loader animation -->
                                    <img src="img/loader.gif" alt="Loading..." />
                                </div>
                            </div>
                        </form>
                    </div>

                </div>



            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>RapidSol4Tech</strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- preloader -->
<div id="preloader"></div>



<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const loader = document.getElementById('talk');

    form.addEventListener('submit', (e) => {
        // Hide the submit button and show the loader
        submitBtn.style.display = 'none';
        loader.style.display = 'block';
    });
});
</script>


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>