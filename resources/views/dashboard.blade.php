
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

      <h1 class="logo me-auto"><a href="{{route('index')}}">Pariwisata Grabag</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#event">Event</a></li>
          <li><a class="nav-link scrollto" href="#destinasi">Destinasi</a></li>
          <li><a class="nav-link   scrollto" href="#peta">Peta</a></li>
          <li><a class="getstarted scrollto" href="{{route ('index')}}">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Pariwisata Grabag</h1>
        </div>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><img src="https://cdn.pixabay.com/photo/2020/12/28/20/43/prambanan-5868468_1280.jpg" class="card-img-top equal-image" alt="wisata"></div>
            <h4 class="title text-center"><a href="#destinasi">Destinasi Wisata</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="https://cdn.pixabay.com/photo/2019/05/24/20/16/bali-4227100_1280.jpg" class="card-img-top equal-image" alt="event"></div>
              <h4 class="title text-center"><a href="#event">Event Grabag</a></h4>
            </div>
          </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="https://cdn.pixabay.com/photo/2018/06/18/23/03/europe-3483539_1280.jpg" class="card-img-top equal-image" alt="peta"></div>
              <h4 class="title text-center"><a href="#peta">Peta</a></h4>
            </div>
        </div>

      </div>
    </div>
  </section>


    <!-- ======= Services Section ======= -->
    <section id="event" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Event Grabag</h2>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('img/acara1.jpg')}}" class="card-img-top equal-image" alt=""></div>
                <h4><a href="">Syawalan di Pantai Genjik Kertonadi</a></h4>
                <p>Pantai Genjik Kertonadi adalah pantai selatan wilayah Grabag paling barat, tepatnya di desa Kertojayan. Seperti deretan pantai lainnya di Kecamatan Grabag, pantai ini ramai dikunjungi wisatawan lokal mengakhiri kunjungan wisata musim "Syawalan" 1440 H. Menurut Sekdes setempat syawalan tahun ini tidak seramai tahun-tahun sebelumnya.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('img/acara2.jpg')}}" class="card-img-top equal-image" alt=""></div>
                <h4><a href="">Acara Sedekah Laut Kertojayan</a></h4>
                <p>Kegiatan ini sudah menjadi agenda rutin dilaksanakan pada tiap bulan Suro, yang banyak menarik perhatian pengunjung untuk datang  menyaksikan jalannya prosesi ini. Ribuan pengunjung antusias datang dari pagi dari baik warga Grabag dan sekitarnya, bahkan dari luar wilayah Kabupaten Purworejo menyempatkan datang untuk menyaksikan acara ini.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><img src="{{asset('img/acara3.jpg')}}" class="card-img-top equal-image" alt=""></div>
                <h4><a href="">Wisata Terapi Garam di Pantai Jetis</a></h4>
                <p>Objek wisata terapi garam tersebut dikelola oleh Kelompok Usaha Garam Rakyat (Kugar) Pendowo Limo yang terletak di bagian timur pantai Jetis. Terapi Garam di tempat itu, bisa membantu melancarkan sirkulasi peredaran darah dan merangsang syaraf sakit yang ada di telapak tangan dan kaki.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->


        <!-- ======= Team Section ======= -->
        <section id="destinasi" class="team section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Destinasi Wisata</h2>
              </div>

              <div class="row">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                  <div class="member d-flex align-items-start">
                    <div class=""><img src="{{asset('img/pantai1.jpg')}}" class="card-img-top equal-image" alt="" style="width: 18rem;"></div>
                    <div class="member-info">
                      <h4>Pantai Genjik</h4>
                      <p>Pantai ini terkenal sebagai tempat pelelangan ikan, ternyata Pantai Genjik mempunyai pesona keindahan dari hamparan air laut-nya yang bersih dengan pasir hitamnya yang halus.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                      <div class=""><img src="{{asset('img/pantai2.png')}}" class="card-img-top equal-image" alt="" style="width: 18rem;"></div>
                      <div class="member-info">
                        <h4>Pantai Munggangsari</h4>
                        <p>Pantai yang satu ini terlihat alami dan tidak terlalu ramai. Dilihat dari fasilitas pantai, sebetulnya, tidak ada yang istimewa.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                      <div class=""><img src="{{asset('img/pantai3.jpg')}}" class="card-img-top equal-image" alt="" style="width: 18rem;"></div>
                      <div class="member-info">
                        <h4>Pantai Ketawang</h4>
                        <p>Pantai ketawang memiliki ciri khas dengan keindahan pemandangan deretan pohon cemara. Dengan hamparan pasir putih dan biru-nya air laut cocok membuat para wisatawan dari luar kota merasa lebih rileks saat liburan di pantai ini.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                      <div class=""><img src="{{asset('img/pantai4.jpg')}}" class="card-img-top equal-image" alt="" style="width: 18rem;"></div>
                      <div class="member-info">
                        <h4>Pantai Jetis</h4>
                        <p>Pantai Jetis kini cukup populer di kalangan wisatawan dengan adanya spot payung-payung yang menggantung di pohon. Tentunya, adanya spot foto dari payung warna-warni dapat membuat wisatawan memiliki foto liburan yang Instagramable.</p>
                      </div>
                    </div>
                  </div>

              </div>

            </div>
          </section><!-- End Team Section -->


          <section id="peta" class="contact">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Peta</h2>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body p-0">
                    <div class="map-container">
                        <iframe src="https://wisatakecamatangrabag.gis.co.id/#12.35/-7.81104/109.87621" frameborder="0"></iframe>
                    </div>
                </div>
              </div>
            <style>
                .card {
                    height: 500px;
                    border: none;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .map-container {
                    position: relative;
                    padding-bottom: 100%; /* 1:1 aspect ratio */
                    height: 0;
                }

                .map-container iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
            </style>
            </div>
          </section><!-- End Contact Section -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
