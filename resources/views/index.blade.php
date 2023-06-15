<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pariwisata Grabag</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('css/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('css/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route ('index')}}">Pariwisata Grabag</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="{{route('register')}}">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>WISATA GRABAG</h1>
          <h2>Sistem Informasi Parawisata Kecamatan Grabag</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{asset ('login')}}" class="btn-get-started scrollto">Login</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/hero-img-01.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

 <!-- Vendor JS Files -->
 <script src="{{asset('js/aos/aos.js')}}"></script>
 <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
 <script src="{{asset('js/isotope-layout/isotope.pkgd.min.js')}}"></script>
 <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{asset('js/waypoints/noframework.waypoints.js')}}"></script>
 <script src="{{asset('js/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('js/main.js')}}""></script>

</body>

</html>
