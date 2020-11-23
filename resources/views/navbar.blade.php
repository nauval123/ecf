<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=width-device, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- General CSS Files -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">      <link href="../assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/css/components.css">

      <!-- Favicons -->

      <link href="../assets2/img/favicon.png" rel="icon">
      <link href="../assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="../assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="../assets2/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="../assets2/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="../assets2/vendor/aos/aos.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="../assets2/css/style.css" rel="stylesheet">

      <title>ECF</title>
  </head>
  <body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-primary ">
      <div class="container d-flex align-items-center">

          <h1 class="logo mr-auto"><a href="{{route('homepage')}}">EChickenFarm</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
              <ul>
                  <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                  <li><a href="{{route('homepage')}}#about">Tentang</a></li>
                  <li><a href="{{route('artikel')}}">Artikel</a></li>
                  <li><a href="{{route('homepage')}}#contact">Kontak</a></li>

              </ul>
          </nav><!-- .nav-menu -->

          <a href="{{route('login')}}" class="get-started-btn scrollto">Login</a>

      </div>
  </header><!-- End Header -->

    @yield('content')
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!-- Vendor JS Files -->
      <script src="../assets2/vendor/jquery/jquery.min.js"></script>
      <script src="../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="../assets2/vendor/php-email-form/validate.js"></script>
      <script src="../assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="../assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="../assets2/vendor/venobox/venobox.min.js"></script>
      <script src="../assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="../assets2/vendor/aos/aos.js"></script>

      <!-- Template Main JS File -->
      <script src="../assets/js/stisla.js"></script>
      <script src="../assets2/js/main.js"></script>
      <script src="../assets/js/scripts.js"></script>
      <script src="../assets/js/custom.js"></script>
  </body>
</html>
