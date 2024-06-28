<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Welcome to RapidSol4Tech. Your one-stop solution for web development, hosting, and SharePoint development needs.'; ?>">
    <meta name="keywords"
        content="<?php echo isset($pageKeywords) ? $pageKeywords : 'RapidSol4Tech, web development, hosting, SharePoint development, software company, digital solutions'; ?>">
    <meta name="author" content="RapidSol4Tech">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'RapidSol4Tech'; ?></title>

    <!-- Open Graph tags -->
    <meta property="og:title"
        content="<?php echo isset($ogTitle) ? $ogTitle : 'RapidSol4Tech - Rapid Solutions For Your Business'; ?>">
    <meta property="og:description"
        content="<?php echo isset($ogDescription) ? $ogDescription : 'Learn more about RapidSol4Tech, a forward-thinking software company dedicated to delivering cutting-edge web development and hosting services.'; ?>">
    <meta property="og:image" content="<?php echo isset($ogImage) ? $ogImage : 'https://rapidsol4tech.com/img/'; ?>">
    <meta property="og:url" content="<?php echo isset($ogUrl) ? $ogUrl : 'https://rapidsol4tech.com'; ?>">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- JSON-LD structured data for organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "RapidSol4Tech",
        "url": "https://www.rapidsol4tech.com/",
        "logo": "https://www.rapidsol4tech.com/img/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+923123634163",
            "contactType": "Customer Service"
        }
    }
    </script>

</head>

<!--==========================
  Header
  ============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
                <a href="https://www.facebook.com/profile.php?id=61561315598597" class="facebook" target="_blank"><i
                        class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/rapidsol4tech" class="linkedin" target="_blank"><i
                        class="fa fa-linkedin"></i></a>
                <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
            </div>
        </div>
    </div>

    <div class="container ">

        <div class="logo float-left">

            <a href="/" class="scrollto">
                <img src="img/favicon.png" alt="RapidSol4Tech Logo" style="height: auto;">
            </a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <?php 
                $currentPage = basename($_SERVER['SCRIPT_FILENAME']); 
                ?>
                <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"><a href="/">Home</a></li>
                <li class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>"><a href="about.php">About Us</a></li>
                <li class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>"><a href="services.php">Services</a>
                </li>
                <li class="<?= ($currentPage == 'portfolio.php') ? 'active' : '' ?>"><a href="portfolio.php">Our
                        Portfolio</a></li>
                <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>"><a href="contact.php">Let's Start</a>
                <li class="<?= ($currentPage == 'faqs.php') ? 'active' : '' ?>"><a href="faqs.php">FAQ's</a>

            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->