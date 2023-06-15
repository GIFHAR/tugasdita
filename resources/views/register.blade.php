<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pariwisata Grabag</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5">
              <h2 class="fw-bold mb-5 text-center">Sign up now</h2>
              <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama Anda">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password Anda">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Confirm</button>
            </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="{{asset('img/login.jpg')}}" class="rounded-4 shadow-4" style="width: 75%"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->


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
