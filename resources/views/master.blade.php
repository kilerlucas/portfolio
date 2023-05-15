<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>

        <!-- =======================================================
        * Template Name: PhotoFolio
        * Updated: Mar 10 2023 with Bootstrap v5.2.3
        * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

        <!-- Favicons -->
        <link href="{{asset('PhotoFolio/img/favicon.png')}}" rel="icon">
        <link href="{{asset('PhotoFolio/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('PhotoFolio/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('PhotoFolio/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('PhotoFolio/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('PhotoFolio/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('PhotoFolio/vendor/aos/aos.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('PhotoFolio/css/main.css')}}" rel="stylesheet">

    </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

          <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <i class="bi bi-camera"></i>
            <h1>PhotoFolio</h1>
          </a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="contact">Contact</a></li>
            </ul>
          </nav><!-- .navbar -->

          <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
        </header><!-- End Header -->

        <!--content-->
        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        </footer><!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader">
        <div class="line"></div>
        </div>

        <!-- Vendor JS Files -->
        <script src="{{asset('PhotoFolio/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('PhotoFolio/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('PhotoFolio/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('PhotoFolio/vendor/aos/aos.js')}}"></script>
<!--
        <script src="{{asset('PhotoFolio/vendor/php-email-form/validate.js')}}"></script>
-->

        <!-- Template Main JS File -->
        <script src="{{asset('PhotoFolio/js/main.js')}}"></script>
    </body>
</html>
