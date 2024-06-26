<!DOCTYPE html>
<?php include 'header.php'; ?>
<!--==========================
     Contact Section
    ============================-->

<body>
    <section id="pricing" class="wow fadeInUp section-bg ">

        <div class="container mt-5">

            <header class="section-header">
                <h3>Let's Talk About Your Project</h3>
                <p>Discuss your vision with us and let's bring your project to life!</p>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <img src="img/contact.png" class="img-fluid mt-3" alt="Contact Us">
                </div>
                <div class="col-md-6">
                    <form id="contact-form-talk" action="send_email.php" method="post" role="form">
                        <div class="form-row">
                            <!-- Name -->
                            <div class="form-group col-md-12 col-10">
                                <label for="formName">
                                    <i class="icon" data-feather="user"></i> Name
                                </label>
                                <input type="text" name="name" id="formName" class="form-control form-control-lg thick"
                                    placeholder="Name" required>
                            </div>

                            <!-- E-mail -->
                            <div class="form-group col-md-12 col-10">
                                <label for="formEmail">
                                    <i class="icon" data-feather="mail"></i> E-mail
                                </label>
                                <input type="email" name="email" id="formEmail"
                                    class="form-control form-control-lg thick" placeholder="E-mail" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <!-- Service -->
                            <div class="form-group col-md-12 col-10">
                                <label for="formService">
                                    <i class="icon" data-feather="briefcase"></i> Service
                                </label>
                                <select id="formService" name="service" class="form-control form-control-lg thick"
                                    required>
                                    <option value="" disabled selected>Select Service</option>
                                    <option value="Sharepoint Development">Sharepoint Development</option>
                                    <option value="Web development">Web development</option>
                                    <option value="Hosting">Hosting</option>
                                    <option value="Web development + Hosting">Web development + Hosting</option>
                                </select>
                            </div>

                            <!-- How did you hear about us? -->
                            <div class="form-group col-md-12 col-10">
                                <label for="formReferral">
                                    <i class="icon" data-feather="info"></i> How did you hear about us?
                                </label>
                                <select id="formReferral" name="referral" class="form-control form-control-lg thick"
                                    required>
                                    <option value="" disabled selected>How did you hear about us?</option>
                                    <option value="Google">Google</option>
                                    <option value="Friend or colleague">Friend or colleague</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Email">Email</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group col-md-12 col-10">
                            <label for="formMessage">About Project</label>
                            <textarea id="formMessage" name="message" class="form-control form-control-lg" rows="7"
                                placeholder="About Project" required></textarea>
                        </div>

                        <!-- Submit btn -->
                        <div class="text-center col-md-12 col-10">
                            <button type="submit" class="btn btn-primary" id="submit">Let's Start</button>
                            <div id="loader" class="loader" style="display:none;">
                                <!-- Loader animation -->
                                <img src="img/loader.gif" alt="Loading..." />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- #pricing -->
    <?php include 'footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const form = document.getElementById('contact-form-talk'); // Make sure to select your form
        const submitBtn = document.getElementById('submit');
        const loader = document.getElementById('loader');

        form.addEventListener('submit', (e) => {
            // Prevent the default form submission
            // e.preventDefault(); // Uncomment if you need to prevent actual form submission for testing

            // Hide the submit button and show the loader
            submitBtn.style.display = 'none';
            loader.style.display = 'block';

            // Allow the form to be submitted
            // form.submit(); // Uncomment this line if you uncommented e.preventDefault()
        });
    });
    </script>

</body>