<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ECMO - Contact</title>
    <meta name="description"
        content="Archo is a beautifully unique Architecture & Interior HTML Template. It is a great choice for any type of architecture or construction-related company" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="assets/images/favicon.png" />

</head>

<body>

    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header header-style-two">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="outer-container">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/dark-header.png" alt=""
                                        title=""></a></div>
                        </div>

                        <div class="nav-outer pull-left clearfix">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                @include('partials.navbar')

                            </nav>

                        </div>

                        <!-- Outer Box -->
                        <div class="outer-box clearfix">

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler">menu <span class="icon ion-android-menu"></span></div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/dark-header.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->

        <!-- Map Section -->
        <section class="map-section">
            <div class="outer-container">
                <!-- Map Outer -->
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.487630372189!2d112.7748002!3d-7.396192900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1657516401044!5m2!1sid!2sid"
                        width="100%" height="560px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        <!-- End Map Section -->

        <!-- Contact Page Section -->
        <section class="contact-page-section">
            <div class="auto-container">
                <!-- Contact Info Boxed -->
                <div class="contact-info-boxed">
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h2>Politeknik Negeri Jember</h2>
                            <div class="text">Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari <br>Kabupaten
                                Jember, Jawa Timur 68121</div>
                            <div class="email">Email: <a href="mailto:infor@yourdomain.com">polije.ac.id</a></div>
                        </div>

                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <div class="call">Call directly:<br><a href="tel:+035-527-1710-70">(+62) 895-2341-8523</a>
                            </div>
                            <ul class="location-list">
                                <li><span>Jam Kerja:</span>Senin - Jum'at: 08:00 - 17:00 WIB</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Form Boxed -->
                <div class="form-boxed">
                    <div class="sec-title centered">
                        <h2>Have A Question? Contact Us</h2>
                    </div>

                    <div class="boxed-inner">
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <!-- Contact Form -->
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Enter your name..." required>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your Email" required>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject (optional)" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Here goes your message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="txt">Send Message</span></button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Contact Form -->
                    </div>

                </div>

            </div>
        </section>
        <!-- End Blog Detail Section -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo-footer.png" alt="" /></a>
                </div>
                <ul class="footer-page-nav">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="contact-info">Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari <br>Kabupaten Jember,
                    Jawa Timur 68121<br> <a href="tel:+62-895-2341-8523">(+62) 331 333531</a> <br> <a
                        href="mailto:politeknik@polije.ac.id">politeknik@polije.ac.id</a></div>
                <ul class="footer-social-icons">
                    <li><a href="http://facebook.com/" class="icofont-facebook"></a></li>
                    <li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
                    <li><a href="http://google.com/" class="icofont-google-plus"></a></li>
                    <li><a href="http://linkedin.com/" class="icofont-linkedin"></a></li>
                    <li><a href="http://rss.com/" class="icofont-rss"></a></li>
                    <li><a href="http://dribbble.com/" class="icofont-dribbble"></a></li>
                </ul>
                <div class="copyright">Copyright ©
                    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js">
                    </script>
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | Made with <i aria-hidden="true"></i> by <a
                        href="https://polije.ac.id/" target="_blank">Politeknik Negeri Jember</a>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/script.js"></script>

    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
    <script src="assets/js/map-script.js"></script>
    <!--End Google Map APi-->

</body>

</html>
