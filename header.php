<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RapidSol4Tech - Rapid solutions for your business</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

</head>

<!--==========================
  Header
  ============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <!-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container ">

        <div class="logo float-left">
            <!-- <h1 class="text-light"><a href="index.php" class="scrollto"><span>RapidSol4Tech</span></a></h1> -->
            <a href="index.php" class="scrollto">
                <img src="img/favicon.png" alt="RapidSol4Tech Logo" style="height: auto;">
            </a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <?php 
                $currentPage = basename($_SERVER['SCRIPT_FILENAME']); 
                ?>
                <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>"><a href="index.php">Home</a></li>
                <li class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>"><a href="about.php">About Us</a></li>
                <li class="<?= ($currentPage == 'services.php') ? 'active' : '' ?>"><a href="services.php">Services</a>
                </li>
                <li class="<?= ($currentPage == 'portfolio.php') ? 'active' : '' ?>"><a href="portfolio.php">Our
                        Projects</a></li>
                <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>"><a href="contact.php">Let's Start</a>
                <li class="<?= ($currentPage == 'faqs.php') ? 'active' : '' ?>"><a href="faqs.php">FAQ's</a>

                    <!-- <li><a href="#team">Team</a></li> -->
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->

            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->