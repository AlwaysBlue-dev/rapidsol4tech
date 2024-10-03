<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Welcome to RapidSol4Tech. Your one-stop solution for web development, hosting, and sharepoint intranet needs.'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'RapidSol4Tech, web development, hosting, SharePoint development, software company, digital solutions'; ?>">
    <meta name="author" content="RapidSol4Tech">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'RapidSol4Tech'; ?></title>

    <!-- Canonical URL for the page to prevent duplicate content issues -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Open Graph tags -->
    <meta property="og:title"
        content="<?php echo isset($ogTitle) ? $ogTitle : 'RapidSol4Tech - Rapid Solutions For Your Business'; ?>">
    <meta property="og:description"
        content="<?php echo isset($ogDescription) ? $ogDescription : 'Learn more about RapidSol4Tech, a forward-thinking software company dedicated to delivering cutting-edge web development and hosting services.'; ?>">
    <meta property="og:image"
        content="<?php echo isset($ogImage) ? $ogImage : 'https://www.rapidsol4tech.com/img/'; ?>">
    <meta property="og:url" content="<?php echo isset($ogUrl) ? $ogUrl : 'https://www.rapidsol4tech.com'; ?>">

    <!-- Favicons -->
    <link href="img/favicon.webp" rel="icon">
    <link href="img/favicon.webp" rel="apple-touch-icon">

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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QZ8DYLG3MW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-QZ8DYLG3MW');
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
                <a href="https://www.facebook.com/profile.php?id=61561315598597" class="facebook text-white bg-dark"
                    target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/rapidsol4tech" class="linkedin text-white bg-dark"
                    target="_blank"><i class="fa fa-linkedin"></i></a>
                <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
            </div>
        </div>
    </div>
   

    <div class="container ">

        <div class="logo float-left bg-light">

            <a href="/" class="scrollto">
                <img src="img/logo.png" loading="lazy" alt="RapidSol4Tech Logo" style="height: auto;">
            </a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block bg-light">
            <ul>
                <?php 
                $currentPage = basename($_SERVER['SCRIPT_FILENAME']); 
                ?>
                <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"><a href="/">Home</a></li>
                <li class="<?= ($currentPage == 'services.php') ? 'active' : '' ?> drop-down"><a href="#">Services</a>
                    <ul>
                        <li class="drop-down"><a href="#">Web Development</a>
                            <ul>
                                <li><a href="custom-web.php">Custom Web Development</a></li>
                                <li><a href="ecommerce.php">E-Commerce Solutions</a></li>
                                <li><a href="cms.php">Content Management System (CMS)</a></li>
                                <li><a href="web-hosting.php">Web Hosting</a></li>
                                <li><a href="seo.php">SEO Optimization</a></li>
                            </ul>
                        </li>

                        <li class="drop-down"><a href="#">SharePoint Development</a>
                            <ul>
                                <li><a href="sharepoint-intranet.php">SharePoint Intranet
                                        Development</a></li>
                                <li><a href="custom-sharepoint.php">Custom ShrePoint
                                        Development</a></li>
                                <li><a href="power-automate.php">Power Automate</a></li>
                                <li><a href="sharepoint-lists-customization.php">SharePoint Lists
                                        Customization</a></li>
                                <li><a href="sharepoint-custom-forms.php">Custom Forms Development</a></li>

                            </ul>
                        </li>

                    </ul>

                </li>
                </li>
                <li class="<?= ($currentPage == 'portfolio.php') ? 'active' : '' ?>"><a href="portfolio.php">Our
                        Portfolio</a></li>
                <li class="<?= ($currentPage == 'packages.php') ? 'active' : '' ?>"><a href="packages.php">Packages</a>
                <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>"><a href="contact.php">Let's Start</a>
                <li class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>"><a href="about.php">About Us</a></li>
                <li class="<?= ($currentPage == 'faqs.php') ? 'active' : '' ?>"><a href="faqs.php">FAQ's</a>

            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<script>

</script>

<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>