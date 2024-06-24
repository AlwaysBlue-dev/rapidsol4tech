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
                    <form action="" method="post" role="form">
                        <!-- Name -->
                        <div class="form-group position-relative">
                            <label for="formName" class="d-block">
                                <i class="icon" data-feather="user"></i>
                            </label>
                            <input type="text" name="name" id="formName" class="form-control form-control-lg thick"
                                placeholder="Name">
                        </div>

                        <!-- E-mail -->
                        <div class="form-group position-relative">
                            <label for="formEmail" class="d-block">
                                <i class="icon" data-feather="mail"></i>
                            </label>
                            <input type="email" name="email" id="formEmail" class="form-control form-control-lg thick"
                                placeholder="E-mail">
                        </div>

                        <!-- Service -->
                        <div class="form-group position-relative">
                            <label for="formService" class="d-block">
                                <i class="icon" data-feather="briefcase"></i>
                            </label>
                            <select id="formService" name="service" class="form-control form-control-lg thick">
                                <option value="" disabled selected>Select Service</option>
                                <option value="Sharepoint Development">Sharepoint Development</option>
                                <option value="Web development">Web development</option>
                                <option value="Hosting">Hosting</option>
                                <option value="Web development + Hosting">Web development + Hosting</option>
                            </select>
                        </div>

                        <!-- How did you hear about us? -->
                        <div class="form-group position-relative">
                            <label for="formReferral" class="d-block">
                                <i class="icon" data-feather="info"></i>
                            </label>
                            <select id="formReferral" name="service" class="form-control form-control-lg thick">
                                <option value="" disabled selected>How did you hear about us?</option>
                                <option value="Google">Google</option>
                                <option value="Friend or colleague">Friend or colleague</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Facebook">Facebook</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Email">Email</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="form-group message">
                            <textarea id="formMessage" name="message" class="form-control form-control-lg" rows="7"
                                placeholder="About Project"></textarea>
                        </div>

                        <!-- Submit btn -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" tabIndex="-1">Let's Start </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- #pricing -->
    <?php include 'footer.php'; ?>
</body>