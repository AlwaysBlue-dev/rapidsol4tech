<!--==========================
    Footer
  ============================-->

<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-info">
                                <h3>RapidSol4Tech</h3>
                                <p>
                                    RapidSol4Tech is a forward-thinking software company dedicated to delivering
                                    cutting-edge web
                                    development, reliable hosting services, and expert SharePoint development. Our team
                                    of experienced
                                    professionals is passionate about leveraging the latest technologies to build robust
                                    digital solutions
                                    tailored to meet your specific requirements.
                                </p>
                            </div>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=61561315598597" class="facebook"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/company/rapidsol4tech" class="linkedin"
                                    target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="faqs.php">FAQ's</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>Contact Us</h4>
                                <p>
                                    332 Oak Avenue, Brooklyn, NY 11218<br>
                                    United States<br>

                                   789 Birch Avenue, Calgary, AB T2P 1A2<br>
                                    Canada<br>
                                   
                                    <strong>Email:</strong> info@rapidsol4tech.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="form">
                        <h4>Send us a message</h4>
                        <form id="contact-form" action="actions/send_email.php" method="post" role="form">
                        <input type="text" name="hidden_field" style="display: none;" autocomplete="off">    
                        <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="text-center">
                                <button id="submit-btn" type="submit" class="btn btn-primary">Send Message</button>
                                <div id="talk" style="display:none;">
                                    <!-- Loader animation -->
                                    <img src="img/loader.gif" alt="Loading..." />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-center">
                    <h4>Accepted Payment Methods</h4>
                    <img src="img/payment-methods/visa.webp" alt="Visa" class="payment-logo">
                    <img src="img/payment-methods/mastercard.webp" alt="MasterCard" class="payment-logo img-fluid">
                    <img src="img/payment-methods/paypal.webp" alt="PayPal" class="payment-logo img-fluid">
                    <img src="img/payment-methods/payoneer.webp" alt="Payoneer" class="payment-logo img-fluid">
                    <img src="img/payment-methods/applepay.webp" alt="ApplePay" class="payment-logo img-fluid">
                    <img src="img/payment-methods/gpay.webp" alt="GooglePay" class="payment-logo img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-md-left">
                    <p class="copyright">© 2024 RapidSol4Tech. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>


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
<script src="lib/jquery/jquery.min.js" defer></script>
<script src="lib/jquery/jquery-migrate.min.js" defer></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<script src="lib/easing/easing.min.js" defer></script>
<script src="lib/mobile-nav/mobile-nav.js" defer></script>
<script src="lib/wow/wow.min.js" defer></script>
<script src="lib/waypoints/waypoints.min.js" defer></script>
<script src="lib/counterup/counterup.min.js" defer></script>
<script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
<script src="lib/isotope/isotope.pkgd.min.js" defer></script>
<script src="lib/lightbox/js/lightbox.min.js" defer></script>


<!-- Template Main Javascript File -->
<script src="js/main.js" defer></script>