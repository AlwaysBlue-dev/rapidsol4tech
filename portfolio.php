<!DOCTYPE html>
<?php
// Meta tags
$pageTitle = "RapidSol4Tech - Our Portfolio";
$pageDescription = "Explore RapidSol4Tech's portfolio showcasing our latest projects and achievements.";
$pageKeywords = "RapidSol4Tech, portfolio, projects, web development, hosting, sharePoint development, sharepoint intranet";
$ogTitle = "RapidSol4Tech - Our Portfolio";
$ogDescription = "Explore RapidSol4Tech's portfolio showcasing our latest projects and achievements.";
$ogImage = "https://www.rapidsol4tech.com/img/portfolio/sharepoint7.webp";
$ogUrl = "https://www.rapidsol4tech.com/portfolio.php";
$canonicalUrl = "https://www.rapidsol4tech.com/portfolio.php";

// Include header.php for consistent structure
include 'header.php';
?>

<!--==========================
      Portfolio Section
    ============================-->

<body>
    <section id="portfolio" class="wow fadeInUp section-bg bg-dark" style="margin-top:200px;">
        <div class="container">
            <header class="section-header">
                <h3 class="text-white">Our Portfolio</h3>
                <p class="text-white">Browse through our successful projects and see how we've delivered excellence for
                    our clients!</p>
            </header>


            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active text-white">All</li>
                        <li data-filter=".filter-app" class="text-white">SharePoint Development </li>
                        <li data-filter=".filter-web" class="text-white">Website Development</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint7.webp" loading="lazy" class="img-fluid" alt="portfolio-1">
                        <div class="portfolio-info">
                            <h4> <a href="#" data-toggle="modal" data-target="#modalApp1"
                                    title="More Details">SharePoint Development</a></h4>
                            <p class="text-white">A unified SharePoint platform for efficient resource management.</p>


                            <div>
                                <a href="img/portfolio/sharepoint7.webp" data-lightbox="portfolio" data-title="App 1"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp1"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for App 1 -->
                <div class="modal fade" id="modalApp1" tabindex="-1" role="dialog" aria-labelledby="modalApp1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp1Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        The project aims to develop a cohesive SharePoint environment where employees
                                        can seamlessly navigate and utilize various business tools and resources. This
                                        includes integrating key portals such as HR and Benefits, Employee Resources,
                                        Time and Attendance, Tasks and Projects, and other essential applications like
                                        Keeper, QuickBooks, Bamboo HR, Clock In/Out, Workforce, Mail, Calendar, and
                                        Teams.
                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Integrated Portals</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Time Tracking</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Task Management</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Third-Party Integration</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Communication Tools</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> User-Friendly Interface</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Custom Dashboards</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Document Management</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Responsive Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Reporting</b></li>
                                </ul>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint8.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp2">SharePoint Development</a></h4>
                            <p>A custom SharePoint solution for centralized data management and real-time collaboration.
                            </p>
                            <div>
                                <a href="img/portfolio/sharepoint8.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp2"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for App 2 -->
                <div class="modal fade" id="modalApp2" tabindex="-1" role="dialog" aria-labelledby="modalApp2Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp2Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        In a testament to my adaptability and problem-solving skills, We successfully
                                        developed a custom SharePoint solution tailored to the unique requirements of
                                        the client's design. Despite encountering initial challenges with feasibility
                                        and obtaining clarity on requirements, We embarked on the project with
                                        determination to deliver a solution that not only met but exceeded the client's
                                        expectations. The resulting dashboard seamlessly integrated various elements
                                        from SharePoint, providing the client with a centralized platform for managing
                                        diverse data sets and facilitating real-time updates.
                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Custom Dashboard</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Seamless Integration</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Real-Time Updates</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>User-Centric Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Dynamic Reporting</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Centralized Data Management</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Collaboration Tools</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Automated Workflows</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web6.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb4">Website Development</a></h4>
                            <p>Created a web app for users to upload and share information about local bike shops.
                            </p>
                            <div>
                                <a href="img/portfolio/web6.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb4"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint9.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp2">SharePoint Development</a></h4>
                            <p>A custom SharePoint solution for centralized data management and real-time collaboration.
                            </p>
                            <div>
                                <a href="img/portfolio/sharepoint9.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp2"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint1.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp3">SharePoint Development</a></h4>
                            <p>A multilingual government website designed for improved public service access and
                                efficiency.</p>
                            <div>
                                <a href="img/portfolio/sharepoint1.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp3"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for App 3 -->
                <div class="modal fade" id="modalApp3" tabindex="-1" role="dialog" aria-labelledby="modalApp3Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp3Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        This project is a multilingual website for a government entity, aimed at
                                        enhancing public service efficiency and accessibility.
                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Multilingual Support</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Public Service Portals</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Accessibility Features</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Interactive Forms</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Document Management</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Real-Time Notifications</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Secure User Authentication</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Analytics and Reporting</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Responsive Design</b></li>

                                </ul>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web8.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb4">Website Development</a></h4>
                            <p>Created a web app for users to upload and share information about local bike shops.
                            </p>
                            <div>
                                <a href="img/portfolio/web8.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb4"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint2.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp3">SharePoint Development</a></h4>
                            <p>A multilingual government website designed for improved public service access and
                                efficiency.</p>
                            <div>
                                <a href="img/portfolio/sharepoint2.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp3"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint3.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp6">SharePoint Development</a></h4>
                            <p>A SharePoint solution for the Dubai Department of Economy and Tourism, enhancing service
                                access for consumers and businesses.</p>
                            <div>
                                <a href="img/portfolio/sharepoint3.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp6"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for App 6 -->
                <div class="modal fade" id="modalApp6" tabindex="-1" role="dialog" aria-labelledby="modalApp6Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp6Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        This project involves the development of a comprehensive SharePoint website for
                                        the Dubai Department of Economy and Tourism, designed to provide easy access to
                                        services and information for both consumers and businesses.
                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>
                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Multilingual Support</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>User-Friendly Navigation</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Essential Service Integration</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Centralized Information Hub</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint5.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp4">SharePoint Development</a></h4>
                            <p>A custom five-page SharePoint solution built from a handwritten design.</p>
                            <div>
                                <a href="img/portfolio/sharepoint5.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp4"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for App 4 -->
                <div class="modal fade" id="modalApp4" tabindex="-1" role="dialog" aria-labelledby="modalApp4Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp4Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        Reflecting our dedication to excellence and meticulous attention to detail. We
                                        successfully translated a handwritten design provided by the client into a fully
                                        functional website. The project encompassed the creation of five distinct pages:
                                        Home, Wealth Management, Insurance, Business Development, and Employee
                                        Resources. Each page was meticulously crafted to mirror the client's vision
                                        while meeting the specified requirements.
                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">

                                    <li><i class="fas fa-check-circle"></i><b>Multi-Page Website Development</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Wealth Management Page</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Insurance Services Page</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Business Development Page</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Employee Resources Portal</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Client-Centered Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint10.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp7">SharePoint Development</a></h4>
                            <p>A dynamic footer system for SharePoint that provides real-time, URL-based information
                                display.</p>
                            <div>
                                <a href="img/portfolio/sharepoint10.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp7"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for App 7 -->
                <div class="modal fade" id="modalApp7" tabindex="-1" role="dialog" aria-labelledby="modalApp7Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp7Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        We developed and delivered a dynamic footer system for a SharePoint-based web
                                        application, designed to provide real-time information based on the current
                                        page's URL. The solution was created in our own development environment and
                                        delivered to the client as a SharePoint Solution Package (WSP).

                                    </p>
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Dynamic Content Display</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>URL-Based Information Retrieval</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Seamless Integration with SharePoint</b>
                                    </li>
                                    <li><i class="fas fa-check-circle"></i><b>User-Friendly Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Customizable Layout</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint6.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp5">SharePoint Development</a></h4>
                            <p>A user-friendly website for Dubai's economy and tourism services.</p>
                            <div>
                                <a href="img/portfolio/sharepoint6.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp5"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for App 5 -->
                <div class="modal fade" id="modalApp5" tabindex="-1" role="dialog" aria-labelledby="modalApp5Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalApp5Label">
                                    <i class="fas fa-info-circle"></i> SharePoint Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        This project is specifically for the Dubai Department of Economy and Tourism.
                                        The website is designed to cater to both consumers and businesses, providing
                                        them with relevant information and services.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>Consumer & Business Portals</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Multilingual Support</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Services & Information Hub</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Interactive Navigation</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Secure Access</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Business Service Tools</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Enhanced User Experience</b></li>
                                </ul>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web7.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb4">Website Development</a></h4>
                            <p>Created a web app for users to upload and share information about local bike shops.
                            </p>
                            <div>
                                <a href="img/portfolio/web7.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb4"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for Web 4 -->
                <div class="modal fade" id="modalWeb4" tabindex="-1" role="dialog" aria-labelledby="modalWeb4Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalWeb4Label">
                                    <i class="fas fa-info-circle"></i> Web Development Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        We developed a web application that allows users to upload and share information
                                        about bike shops, including location and services offered. The platform fosters
                                        a community of bike enthusiasts by providing a centralized hub for discovering
                                        and discussing local bike shops.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>User Registration and Profiles</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Shop Information Upload</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Location Mapping</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Search and Filter</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web4.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb3">Website Development</a></h4>
                            <p>Created a music web app for uploading, managing, and listening to favorite tracks.
                            </p>
                            <div>
                                <a href="img/portfolio/web4.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb3"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for Web 3 -->
                <div class="modal fade" id="modalWeb3" tabindex="-1" role="dialog" aria-labelledby="modalWeb3Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalWeb3Label">
                                    <i class="fas fa-info-circle"></i> Web Development Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        Developed a web application that allows users to upload, manage, and listen to
                                        their favorite music tracks. The platform provides a seamless user experience,
                                        enabling users to easily access and organize their music library while enjoying
                                        an interactive listening experience.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>User Registration and Profiles</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Music Upload</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Music Player</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Playlist Management</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Search and Filter</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web5.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb5">Website Development</a></h4>
                            <p>Developed a Django web platform for managing datasets with secure transactions and AWS S3
                                integration.
                            </p>
                            <div>
                                <a href="img/portfolio/web5.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb5"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for Web 5 -->
                <div class="modal fade" id="modalWeb5" tabindex="-1" role="dialog" aria-labelledby="modalWeb5Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalWeb5Label">
                                    <i class="fas fa-info-circle"></i> Web Development Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        We successfully developed a sophisticated web platform utilizing Python Django
                                        and MySQL for dataset management. Users can list datasets, both free and paid,
                                        with administrators having exclusive access to upload datasets to an AWS S3
                                        bucket, which seamlessly reflects on the website. Integration with Stripe
                                        enables secure transactions for dataset purchases. The platform includes user
                                        authentication features, ensuring personalized experiences and data security.
                                        With its intuitive interface and robust functionalities, this project
                                        streamlines dataset exchange processes, enhancing efficiency and user
                                        satisfaction in the digital domain.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>User Authentication</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Dataset Listing (Free and Paid)</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Admin Access for Dataset Upload</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Integration with AWS S3</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Secure Transactions via Stripe</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Intuitive User Interface</b></li>
                                    <li><i class="fas fa-check-circle"></i><b> Responsive Design</b></li>
                                </ul>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web3.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb2">Website Development</a></h4>
                            <p>Created a user-friendly stock management app with inventory tracking, efficient search,
                                and robust validation.
                            </p>
                            <div>
                                <a href="img/portfolio/web3.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb2"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Web 2 -->
                <div class="modal fade" id="modalWeb2" tabindex="-1" role="dialog" aria-labelledby="modalWeb2Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalWeb2Label">
                                    <i class="fas fa-info-circle"></i> Web Development Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        We collaborated with a client to develop a user-friendly stock management web
                                        application, offering seamless inventory tracking and efficient stock
                                        management. Users can easily search for items and access related stock details.
                                        The application provides flexible sorting options for arranging items based on
                                        preference, along with robust validation mechanisms to ensure data accuracy.
                                        This project highlights my expertise in web development and client
                                        collaboration, delivering a tailored solution to optimize stock management
                                        processes.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>User-friendly Interface</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Seamless Inventory Tracking</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Efficient Item Search</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Detailed Stock Information</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Flexible Sorting Options</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Robust Data Validation</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/web1.webp" loading="lazy" class="img-fluid" alt="portfolio-15">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalWeb1">Website Development</a></h4>
                            <p>A dedicated platform offering exclusive discounts and benefits for teachers to ease their
                                financial burdens.</p>
                            <div>
                                <a href="img/portfolio/web1.webp" data-lightbox="portfolio" data-title="SharePoint"
                                    class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalWeb1"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal for Web 1 -->
                <div class="modal fade" id="modalWeb1" tabindex="-1" role="dialog" aria-labelledby="modalWeb1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalWeb1Label">
                                    <i class="fas fa-info-circle"></i> Web Development Project Details
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="lead"><i class="fas fa-book-open"></i> Overview:</p>
                                <div class="project-description">
                                    <p>
                                        This web development project aims to create an online platform dedicated to
                                        teachers, offering exclusive discounts on various products and services. The
                                        website will provide an easy-to-use interface where educators can access
                                        discounts on items such as classroom supplies, technology, professional
                                        development courses, and local services. The project seeks to support teachers
                                        by alleviating some of their financial burdens while fostering a community of
                                        appreciation for their valuable contributions.
                                </div>

                                <p><strong><i class="fas fa-star"></i> Key Features:</strong></p>

                                <ul class="features-list">
                                    <li><i class="fas fa-check-circle"></i><b>User Registration and Profiles</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Exclusive Discounts for Teachers</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Vendor Partnerships</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Easy Navigation and Search Filters</b>
                                    </li>
                                    <li><i class="fas fa-check-circle"></i><b>Community Forums and Feedback</b></li>
                                    <li><i class="fas fa-check-circle"></i><b>Responsive Design</b></li>
                                </ul>




                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times"></i> Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/sharepoint4.webp" loading="lazy" class="img-fluid" alt="portfolio-2">
                        <div class="portfolio-info">
                            <h4><a href="#" data-toggle="modal" data-target="#modalApp6">SharePoint Development</a></h4>
                            <p>A SharePoint solution for the Dubai Department of Economy and Tourism, enhancing service
                                access for consumers and businesses.</p>
                            <div>
                                <a href="img/portfolio/sharepoint4.webp" data-lightbox="portfolio"
                                    data-title="SharePoint" class="link-preview" title="Preview">
                                    <i class="ion ion-eye"></i>

                                </a>
                                <a href="#" class="link-details" data-toggle="modal" data-target="#modalApp6"
                                    title="More Details">
                                    <i class="ion ion-android-open"></i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    </section><!-- #portfolio -->
    <?php include 'footer.php'; ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6676f1f69d7f358570d2570e/1i10a2bmc';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

</body>