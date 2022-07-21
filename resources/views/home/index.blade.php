<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ECMO - Beranda</title>
    <meta name="description" content="ECMO" />
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
    <link rel="shortcut icon" href="assets/images/ecmo-icon.png" type="assets/image/x-icon">
    <link rel="icon" href="assets/images/ecmo-icon.png" type="assets/image/x-icon">
    <meta name="msapplication-TileImage" content="assets/images/ecmo-icon.png" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" crossorigin=""></script>

    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@^3.0.8/dist/esri-leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet-vector@3.1.3/dist/esri-leaflet-vector.js"></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.css"
        crossorigin="" />
    <script src="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.js" crossorigin=""></script>

    <!-- Load Esri Leaflet Vector from CDN -->
    <script src="https://unpkg.com/esri-leaflet-vector@3.1.3/dist/esri-leaflet-vector.js" crossorigin=""></script>

    <style>

    </style>

</head>

<body>
    <div class="page-wrapper">
        <!-- Main Header-->
        <header class="main-header">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="outer-container">
                    <div class="inner-container clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="/">
                                    <img src="assets/images/ecmo-logo.png" alt="" title="">
                                </a>
                            </div>
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
                    <div class="nav-logo"><a href="Beranda"><img src="assets/images/dark-header.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!--End Main Header -->

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="main-slider-carousel owl-carousel owl-theme">

                <div class="slide" style="background-image: url(assets/images/main-slider/back.png)">
                    <div class="auto-container">

                        <!-- Content Boxed -->
                        <div class="content-boxed">
                            <div class="inner-boxed">
                                <div class="title">Sistem</div>
                                <h1>Monitoring<br> Covid-19<span><i>Dirilis</i> 2022</span></h1>
                                <p>Sistem Monitoring pintar masa kini<br> yang menggunakan teknologi terbaru dan canggih
                                    <br>guna membangun Indonesia maju
                                </p>
                                <div class="btn-box">
                                    <a href="Tentang" class="see-projects">Kenali Kita Lebih Dekat</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="slide" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                    <div class="auto-container">
                    </div>
                </div>

            </div>

            <!--Scroll Dwwn Btn-->
            <div class="mouse-btn-down scroll-to-target" data-target=".experiance-section">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>

            <!-- Social Box -->
            <ul class="social-box">
                <li><a href="https://twitter.com/humaspolije" class="ion-social-twitter"></a></li>
                <li><a href="https://www.youtube.com/c/POLIJESIP" class="ion-social-youtube"></a></li>
                <li><a href="https://www.facebook.com/politekniknegerijember" class="ion-social-facebook"></a></li>
            </ul>

            <!-- Info -->
            <div class="info"><a href="tel:+62-331 333531">(+62) 331 333531</a> / <a
                    href="mailto:politeknik@polije.ac.id">politeknik@polije.ac.id</a></div>

        </section>
        <!-- End Banner Section -->

        <!-- Counter Section -->
        <section class="counter-section">
            <div class="auto-container">
                <div class="inner-container">
                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!-- Column -->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4500" data-stop="2000">0</span>
                                        </div>
                                        <h4 class="counter-title">Fasilitas Kesehatan <br> terdaftar</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Column -->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="3500" data-stop="34">0</span>
                                        </div>
                                        <h4 class="counter-title">Provinsi<br> terdaftar</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Column -->
                            <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                                <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="120">0</span>
                                        </div>
                                        <h4 class="counter-title">Kabupaten<br>terdaftar</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="page-title-section">
                            <div class="auto-container">
                                <h2>Data Pemantauan</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Counter Section -->


        <!-- Work Section -->
        <section class="work-section" style="background-image: url(assets/images/background/penting.png)">
            <div class="auto-container">
                <div class="content">
                    <div class="title">Berita Penting</div>
                    <h1>Persyaratan Mudik<br>dan Terawih</h1>
                    <p>Warga Indonesia boleh melakukan mudik Lebaran 2022 dengan syarat telah melakukan vaksin dosis
                        ketiga atau booster dan untuk pelaksanaan ibadah terawih dan sholat idul fitri dengan teteap
                        menjaga protokol kesehatan secara ketat</p>
                    <a href="https://youtu.be/8zBm9IBGpzU " class="lightbox-image video-box clearfix"><span
                            class="fa fa-play"><i class="ripple"></i></span></a>
                </div>
            </div>
        </section>
        <!-- End Work Section -->

        <!-- Peta Section-->
        <div class="page-title-section">
            <div class="auto-container">
                <h2>Peta Pintar</h2>
                <div id="map"></div>
            </div>
        </div>
        <!-- End Peta Section-->


        <!-- Trend Data Section-->
        <div class="page-title-section">
            <div class="auto-container">
                <h2>Trend Data</h2>
                <div style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <!-- End Trend Data Section-->

        < <!-- Testimonial Section -->
            <section class="testimonial-section" style="background-image: url(images/background/pattern-1.png)">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Carousel Column -->
                        <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="single-item-carousel owl-carousel owl-theme">

                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="quote-icon ion-quote"></div>
                                            <h2>Percayalah kita bangsa, kita bangsa petarung, bangsa pejuang. Insyallah
                                                kita mampu dalam menghadapi tantangan global yang berat sekarang</h2>
                                            <div class="category"><span>Ir.Joko Widodo</span> - 2020 </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="assets/images/resource/jokowi.png" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Testimonial Section -->

            <!-- Sponsors Section -->
            <section class="sponsors-section">
                <div class="auto-container">

                    <div class="carousel-outer">
                        <!--Sponsors Slider-->
                        <ul class="sponsors-carousel owl-carousel owl-theme">
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/tk.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/leaflet.png"
                                            alt=""></a></div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/esri.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/kopi88.png"
                                            alt=""></a></div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/ch.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/ai.png" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="image-box"><a href="#"><img src="assets/images/clients/apparel.png"
                                            alt=""></a></div>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>
            <!-- End Sponsors Section -->

            <!-- News Section -->
            <section class="news-section">
                <div class="outer-container">
                    <div class="clearfix">

                        <!-- News Block -->
                        <div class="news-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="Detail-berita1"><img src="assets/images/resource/berita-1.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="info-list">
                                        <li>09 Juli ,2022</li>
                                        <li>Berita Terkini</li>
                                    </ul>
                                    <h4><a href="Detail-berita1">Satgas Covid-19 Keluarkan Syarat Terbaru Pelaku
                                            Perjalanan Dalam Negeri</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="Detail-berita2"><img src="assets/images/resource/berita-2.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="info-list">
                                        <li>08 Maret ,2022</li>
                                        <li>Berita</li>
                                    </ul>
                                    <h4><a href="Detail-berita2">3 Kabar Baik Corona di Indonesia Bikin Ragam Aturan
                                            Lebih Longgar</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="Detail-berita3"><img src="assets/images/resource/berita-3.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="info-list">
                                        <li>07 Juli ,2022</li>
                                        <li>Berita Terkini</li>
                                    </ul>
                                    <h4><a href="Detail-berita3">Dalam Sehari Level PPKM Jabodetabek Berubah, Ini
                                            Penjelasan Satgas Covid-19</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- News Block -->
                        <div class="news-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="Detail-berita4"><img src="assets/images/resource/berita-4.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="info-list">
                                        <li>30 Mei ,2022</li>
                                        <li>Berita</li>
                                    </ul>
                                    <h4><a href="Detail-berita4">Jokowi: Pandemi Covid-19 Sudah Melandai, Aktivitas
                                            Masyarakat Mulai Normal</a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End News Section -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="auto-container">
                    <div class="logo">
                        <a href="Beranda"><img src="assets/images/logo-footer.png" alt="" /></a>
                    </div>
                    <ul class="footer-page-nav">
                        <li><a href="Beranda">Beranda</a></li>
                        <li><a href="Tentang">Tentang</a></li>
                        <li><a href="Berita">Berita</a></li>
                        <li><a href="Contact">Contact</a></li>
                    </ul>
                    <div class="contact-info">Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari <br>Kabupaten
                        Jember, Jawa Timur 68121<br> <a href="tel:+62-895-2341-8523">(+62) 331 333531</a> <br> <a
                            href="mailto:politeknik@polije.ac.id">politeknik@polije.ac.id</a></div>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.facebook.com/politekniknegerijember" class="icofont-facebook"></a></li>
                        <li><a href="https://twitter.com/humaspolije" class="icofont-twitter"></a></li>
                        <li><a href="https://www.youtube.com/c/POLIJESIP" class="icofont-youtube-play"></a></li>
                        <li><a href="https://www.instagram.com/humaspolije/" class="icofont-instagram"></a></li>
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
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script>
        const data = {
            labels: [
                'Positif',
                'Sembuh',
                'Memininggal Dunia'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [6112986, 5935845, 156798],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                layout: {
                    padding: 7
                }
            }
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

    </script>

    <script>
        const apiKey =
            "AAPKacae4c6fb433487c94bce2003aec0468Be9HKzTuNafV-yK2twmIF5Lyf2mXAF8Oheszupn0pD6AREgUDSQ6d4n02tbkgfZM";

        // const basemapEnum = "ArcGIS:Streets";
        const gray = L.esri.Vector.vectorBasemapLayer("ArcGIS:LightGray", {
            apikey: apiKey
        });

        var tersedia = L.icon({
            iconUrl: 'assets/images/icon-map/tersedia.png',
            iconSize: [32, 50], // size of the icon
        });

        var penuh = L.icon({
            iconUrl: 'assets/images/icon-map/penuh.png',
            iconSize: [32, 50], // size of the icon
        });


        // Identity Marker Point Map GIS;
        var rsPremiere = L.marker([-7.304479804811505, 112.76526029365439], {
                icon: tersedia
            }).bindPopup("<b> Rumah Sakit Premier Surabaya</b><br>" +
                "Jl. Sekolahan No.1, Kuthuk, Sidokare, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61214 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : tersedia <br>" +
                ""),
            rkzSurabaya = L.marker([-7.291211402946695, 112.73618535429375], {
                icon: tersedia
            }).bindPopup("<b> Rumah Sakit Katolik St. Vincentius a Paulo</b><br>" +
                "Jl. Diponegoro No.51, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Penuh <br>" +
                "Kamar Umum (Kelas 1-3) : tersedia <br>" +
                ""),
            puskessedati = L.marker([-7.393936249235849, 112.76340814172832], {
                icon: penuh
            }).bindPopup("<b> Puskesmas Sedati</b><br>" +
                "Jl. Senopati No.3-7, Kepuh, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),
            rsDeltaSurya = L.marker([-7.447026719366628, 112.70158364139134], {
                icon: tersedia
            }).bindPopup("<b> Rumah Sakit Delta Surya</b><br>" +
                "Jl. Pahlawan No.9, Jati, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61211 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Penuh <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : tersedia <br>" +
                ""),

            jktHospital = L.marker([-6.2182320457926865, 106.81617850403731], {
                icon: tersedia
            }).bindPopup("<b> Jakarta Hospital</b><br>" +
                "Jl. Jend. Sudirman No.Kav 49, RT.5/RW.4, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12930 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : tersedia <br>" +
                ""),

            rsSemarang = L.marker([-6.9942261120509315, 110.40742638243788], {
                icon: tersedia
            }).bindPopup("<b> Rumah Sakit Umum Pusat Dr.Kariadi Semarang</b><br>" +
                "Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsPadang = L.marker([-0.9434987669276792, 100.36708159841716], {
                icon: tersedia
            }).bindPopup("<b> Rumah Sakit Umum Pusat Dr. M. Djamil Padang</b><br>" +
                "Jl. Perintis Kemerdekaan, Sawahan Tim., Kec. Padang Tim., Kota Padang, Sumatera Barat 25171 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Penuh <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            siloamblk = L.marker([-1.2522495369408835, 116.87032684055045], {
                icon: tersedia
            }).bindPopup("<b>Siloam Hospitals Balikpapan</b><br>" +
                "Jl. MT Haryono No.23, Damai, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsponti = L.marker([-0.06156513716299948, 109.36461842701347], {
                icon: tersedia
            }).bindPopup("<b>RSUD dr Soedarso</b><br>" +
                "Jl. DR. Soedarso No.1, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Kosong <br>" +
                ""),

            puskessedati = L.marker([-7.393936249235849, 112.76340814172832], {
                icon: penuh
            }).bindPopup("<b> Puskesmas Sedati</b><br>" +
                "Jl. Senopati No.3-7, Kepuh, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            siloamMks = L.marker([-5.150113699844238, 119.4071597455174], {
                icon: penuh
            }).bindPopup("<b>Siloam Hospitals Makassar</b><br>" +
                "Jl. Metro Tj. Bunga No.Kav. 9, Tj. Merdeka, Sulawesi Selatan 90112 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            RSUKendari = L.marker([-3.9697061946251284, 122.52295765757948], {
                icon: penuh
            }).bindPopup("<b>Rumah Sakit Umum Permata Bunda Kendari</b><br>" +
                "Jl. Syech Yusuf No.9, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            RSManado = L.marker([-3.9697061946251284, 122.52295765757948], {
                icon: penuh
            }).bindPopup("<b>Rumah Sakit Umum Permata Bunda Kendari</b><br>" +
                "Jl. Syech Yusuf No.9, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            rspalu = L.marker([-0.9073923822527507, 119.87357217095752], {
                icon: penuh
            }).bindPopup("<b>RS Budi Agung Palu</b><br>" +
                "Jl. Maluku No.44, Lolu Sel., Kec. Palu Sel., Kota Palu, Sulawesi Tengah 94111 <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            rsambon = L.marker([-3.6269874039370835, 128.24279233290198], {
                icon: tersedia
            }).bindPopup("<b>RS Budi Agung Palu</b><br>" +
                "Jl. Laksdya Leo Wattimena, Negeri Lama, Kec. Baguala, Kota Ambon, Maluku <br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tidak Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsmanado = L.marker([-3.6269874039370835, 128.24279233290198], {
                icon: tersedia
            }).bindPopup("<b>Rumah Sakit Advent Manado</b><br>" +
                "Jl. 14 Februari, Teling Atas, Kec. Wanea, Kota Manado, Sulawesi Utara<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsyowari = L.marker([-2.5250846327906378, 140.46349647626923], {
                icon: tersedia
            }).bindPopup("<b>Rumah Sakit Yowari</b><br>" +
                "Doyo Baru, Distrik Waibu, Kabupaten Jayapura, Papua 99352<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tidak Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsalternate = L.marker([0.7884702986206458, 127.38718253152095], {
                icon: tersedia
            }).bindPopup("<b>RS. TNI-AD Ternate</b><br>" +
                "Jl. A.I.S Nasution No.2, Gamalama, Kec. Ternate Tengah, Kota Ternate, Maluku Utara<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsmedan = L.marker([0.7884702986206458, 127.38718253152095], {
                icon: tersedia
            }).bindPopup("<b>Rumah Sakit Umum (RSU) Sarah Medan</b><br>" +
                "Jl. Baja Raya No.10, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rsaceh = L.marker([3.5861232128093175, 98.67266699504292], {
                icon: penuh
            }).bindPopup("<b>Rumah Sakit Islam Malayahati</b><br>" +
                "Jl. Pangeran Diponegoro No.2 - 4, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "<b> Saat Ini Semua Kamar Penuh </b> <br>" +
                ""),

            rsbandaaceh = L.marker([5.539940738224492, 95.31004340449371], {
                icon: tersedia
            }).bindPopup("<b>RSU. Harapan Bunda</b><br>" +
                "Jl. Teuku Umar No.181-211, Seutui, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23243<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),

            rspalembang = L.marker([-2.9480277248787976, 104.73446902355784], {
                icon: tersedia
            }).bindPopup("<b>RSUD Siti Fatimah Az-Zahra Provinsi Sumatera Selatan</b><br>" +
                "Jl. Kol. H. Burlian, Suka Bangun, Kec. Sukarami, Kota Palembang, Sumatera Selatan 30151<br>" +
                "<br>" +
                "Data Kamar : <br>" +
                "Kamar Kelas Sangat Tinggi (Super VIP) : Tersedia <br>" +
                "Kamar Kelas Tinggi (VIP) : Tersedia <br>" +
                "Kamar Umum (Kelas 1-3) : Tersedia <br>" +
                ""),
            golden = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.');

        var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.'),
            rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');



        const map = L.map("map", {
            minZoom: 2
        }).setView([-0.753400, 113.954883], 4.6);


        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        const arcgisOnlineProvider = L.esri.Geocoding.arcgisOnlineProvider({
            apikey: apiKey
        });

        const gisDayProvider = L.esri.Geocoding.featureLayerProvider({
            url: "https://services.arcgis.com/BG6nSlhZSAWtExvp/ArcGIS/rest/services/GIS_Day_Registration_Form_2019_Hosted_View_Layer/FeatureServer/0",
            searchFields: ["event_name", "host_organization"],
            label: "GIS Day Events 2019",
            bufferRadius: 5000,
            formatSuggestion: function (feature) {
                return feature.properties.event_name + " - " + feature.properties.host_organization;
            }
        });

        var semua = L.layerGroup([rsPremiere, rkzSurabaya, puskessedati, rsDeltaSurya, jktHospital, rsSemarang,
            rsPadang, siloamblk, rsponti, siloamMks, RSUKendari, RSManado, rspalu, rsambon, rsmanado, rsyowari,
            rsalternate, rsmedan, rsaceh, rsbandaaceh, rspalembang
        ]);
        var sangat = L.layerGroup([rsPremiere, rkzSurabaya, jktHospital, rsSemarang, siloamblk, rsponti, rsmanado,
            rsalternate, rsmedan, rsbandaaceh, rspalembang
        ]);
        var tinggi = L.layerGroup([rsPremiere, rsDeltaSurya, jktHospital, rsSemarang, rsPadang, siloamblk, rsponti,
            rsambon, rsmanado, rsyowari, rsalternate, rsmedan, rsbandaaceh, rspalembang
        ]);
        var umum = L.layerGroup([rsPremiere, rkzSurabaya, rsDeltaSurya, jktHospital, rsSemarang, rsPadang, siloamblk,
            rsambon, rsmanado, rsyowari, rsalternate, rsmedan, rsbandaaceh, rspalembang
        ]);
        var penuh = L.layerGroup([puskessedati, siloamMks, RSUKendari, RSManado, rspalu, rsaceh]);


        var overlayMaps = {
            "Semua Faskes": semua,
            "Sangat Tinggi": sangat,
            "Tinggi": tinggi,
            "Umum": umum,
            "Penuh": penuh
        };

        const baseLayers = {
            "Road Map": L.esri.Vector.vectorBasemapLayer("ArcGIS:Streets", {
                apiKey: apiKey
            }).addTo(map),
            "Navigasi Map": L.esri.Vector.vectorBasemapLayer("ArcGIS:Navigation", {
                apiKey: apiKey
            }).addTo(map),
            "Dark Map": L.esri.Vector.vectorBasemapLayer("ArcGIS:DarkGray", {
                apiKey: apiKey
            }).addTo(map),
            "Street Map": L.esri.Vector.vectorBasemapLayer("ArcGIS:Imagery", {
                apiKey: apiKey
            }).addTo(map),
            "Base Map": L.esri.Vector.vectorBasemapLayer("OSM:Standard", {
                apiKey: apiKey
            }).addTo(map),
        }

        L.control.layers(baseLayers, overlayMaps).addTo(map);
        L.esri.Geocoding.geosearch({
            providers: [arcgisOnlineProvider, gisDayProvider]
        }).addTo(map);

    </script>

</body>

</html>
