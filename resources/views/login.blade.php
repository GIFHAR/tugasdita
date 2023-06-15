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

    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <h3 class="mb-5">Sign in</h3>
                  <form action="{{url('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="text" class="form-control" name="email" id="inputEmail"
                               placeholder="Masukkan Email Anda">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword"
                               placeholder="Masukkan Password Anda">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Lanjutkan</button>
                </form>

                  <hr class="my-4">

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="{{asset ('register')}}">
                        <button type="button" class="btn btn-link">Create new</button>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
