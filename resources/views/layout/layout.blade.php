<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDC Parul University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="src/img/ic.png" rel="icon">
  {{-- <link href="assets/img/ic.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ asset('src/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @section('header')
<!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">EDC</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="{{  asset('src/img/logo.png') }}" alt="" class="img-fluid"></a>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About Us</a></li>
          <li><a class="nav-link scrollto " href="{{ route('startupmart.view')}}">Startup Mart</a></li>
          <li><a class="nav-link scrollto" href="{{ route('achievements.view')}}">Achievements</a></li>
          <li class="dropdown"><a href="#"><span>Happenings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Flagship Events</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in/programs/hackathon">Vadodara Hackathon</a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in/programs/vsf">Vadodara Startup Festival</a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in/programs/women-startup">Women Entrepreneurs Meetup</a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in">Startup Demo Day</a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in">International Conference</a></li>
                  <li><a target="_blank" rel="noopener noreferrer" href="http://vadodarainnofest.paruluniversity.ac.in">Toycathon</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Initiatives</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Entrepreneurship Sensitisation Campaign</a></li>
                            <li><a href="{{ route('startupmart.view')}}">EDC Open Day</a></li>
                            <li><a href="{{ route('startupmart.view')}}">Idea Lounge</a></li>
                            <li><a href="{{ route('startupmart.view')}}">EDC Open House</a></li>
                            <li><a href="{{ route('startupmart.view')}}">Startup Yatra Series</a></li>
                            <li><a href="{{ route('startupmart.view')}}">Students Associateship Programme</a></li>
                            <li><a href="{{ route('webinar.view')}}">Webinars and Workshops</a></li>
                </ul>
              </li>
                            <li><a class="nav-link scrollto" href="{{ route('resources.view')}}">Resources</a></li>
            </ul>
          </li>
           <li><a class="nav-link scrollto" href="/#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- ======= End Header ===== -->

<!-- Floating Social Media bar Starts -->
<div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-facebook"></i>
    <a href="https://www.facebook.com/edcparuluniversity/" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fa fa-twitter"></i>
    <a href="https://twitter.com/edc_pu" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-in">
    <i class="fa fa-linkedin"></i>
    <a href="https://www.linkedin.com/in/edc-parul-university-8a5018119/" target="_blank">Connect us!</a>
  </div>
  <div class="fl-fl float-yt">
    <i class="fa fa-youtube"></i>
    <a href="" target="_blank">Subscribe us!</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fa fa-instagram"></i>
    <a href="https://www.instagram.com/edc_pu/" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-em">
    <i class="fa fa-envelope"></i>
    <a target="_blank" rel="noopener noreferrer" href="mailto:edc@paruluniversity.ac.in">Mail us!</a>
  </div>
  <div class="fl-fl float-tg">
    <i class="fa fa-telegram"></i>
    <a href="https://t.me/edcatpu" target="_blank">Join us!</a>
  </div>
</div>
<!-- Floating Social Media bar Ends -->

    @show

    @section('sp-css')

    @show

    @section('sp-script')

    @show

    @section('content')

    @show

    @section('footer')
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <a href="/" class="logo"><img src="{{  asset('src/img/logofooter.png') }}" alt="" class="img-fluid" style="margin-bottom:20px;"></a>
              <p>
                Entrepreneurship Development Centre<br>
               P.O.Limda, Ta.Waghodia – 391760 Dist. Vadodara, Gujarat (India)<br><br>
                <strong>Phone :</strong> 0266-8260350<br>
                <strong>Email :</strong> edc@paruluniversity.ac.in<br>
              </p>
              <div class="social-links mt-3">
                <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/edc_pu" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/edcparuluniversity" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/edc_pu/"" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/edc-parul-university-8a5018119/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('startupmart.view')}}">StartupMart</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('achievements.view')}}">Achievements</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('webinar.view')}}">Happenings</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in">Flagship Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#contact">Contact Us</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in/programs/hackathon">Vadodara Hackathon</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in/programs/women-startup">Women's Startup Meet</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in/programs/vsf">Vadodara Startup Festival</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in">Startup Demo Day</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in">National Forum on Social Entrepreneurship</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://vadodarainnofest.paruluniversity.ac.in">Vadodara Toycathon</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
            <div class="copyright">
                &copy; Copyright 2021. All Rights Reserved by <strong><span><a target="_blank" rel="noopener noreferrer" href="https://www.paruluniversity.ac.in"> Parul University.</a></span></strong>
            </div>
     
    </div>
  </footer>
<!-- ======= End Footer ====== -->

<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->


  <script src="{{  asset('src/vendor/aos/aos.js') }}"></script>
  <script src="{{  asset('src/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{  asset('src/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{  asset('src/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{  asset('src/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{  asset('src/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{  asset('src/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{  asset('src/js/main.js') }}"></script>


    @show


</body>
</html>
