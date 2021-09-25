<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('author')
        @yield('keywords')
        @yield('description')
        
        <link rel="shortcut icon" type="image/x-icon" href="">
        
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
        <!-- Icofont Css -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
        <!-- Icofont -->
        <link rel="stylesheet" href="assets/plugins/icofont/icofont.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body data-spy="scroll" data-target=".fixed-top">
        <nav class="navbar navbar-expand-lg fixed-top trans-navigation">
            <div class="container">
                <a class="navbar-brand" href="/">
                    BUATCV
                    <!-- <img src="assets/images/logo.png" alt="" class="img-fluid b-logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                  </button>

                <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                    <ul class="navbar-nav ">
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                <a class="dropdown-item " href="index.html">
                                    Home-1
                                </a>
                                <a class="dropdown-item " href="index-2.html">
                                    Home-2
                                </a> 
                                <a class="dropdown-item " href="index-3.html" target="blank">
                                    Onepage
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smoth-scroll" href="{{ route('create-cv') }}">Form CV</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!--  FOOTER AREA START  -->
        <section id="footer" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-8 col-md-8">
                        <div class="footer-widget footer-link">
                            <h4>BuatCV - best CV builder platform</h4>
                            <p>buatcv adalah platform untuk membuat CV dan Surat Lamaran Kerja secara online dengan mudah, cepat dan praktis. Hanya 5 menit, pengguna sudah dapat mengunduh CV berkualitas dan mengirim lamaran saat itu juga.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="footer-widget footer-link">
                            <h4>About</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-md-6">
                        <div class="footer-widget footer-link">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report Bug</a></li>
                                <li><a href="#">License</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="footer-widget footer-text">
                            <h4>Our location</h4>
                            <p class="mail"><span>Mail:</span> promdise@gmail.com</p>
                            <p><span>Phone :</span>+202-277-3894</p>
                            <p><span>Location:</span> 455 West Orchard Street Kings Mountain, NC 28086,NOC building</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-copy">
                            © 2021 BuatCV inc. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  FOOTER AREA END  -->
        
        <!-- Main jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4.3.1 -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
       <!-- Woow animtaion -->
        <script src="assets/plugins/counterup/wow.min.js"></script>
        <script src="assets/plugins/counterup/jquery.easing.1.3.js"></script>
         <!-- Counterup -->
        <script src="assets/plugins/counterup/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Google Map -->
        <script src="assets/plugins/google-map/gmap3.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>   
        <!-- Contact Form -->
        <script src="assets/plugins/form/contact.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
