<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Easy Estate Rwanda- house</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../assets/img/logo/state.jpeg" rel="icon">
  <link href="../assets/img/logo/state.jpeg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="" class="logo"><img src="assets/img/logo/state.jpeg" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="">house</a></li>
          <li><a class="nav-link scrollto " href="plot">Plot</a></li>
          <li><a class="nav-link scrollto active" href="house">House</a></li>
          <li><a class="nav-link scrollto " href="cars">Cars</a></li>
          <li><a class="nav-link scrollto" href="about-us">about-us</a></li>
          <li><a class="nav-link scrollto" href="contact-us">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>             
              <li class="dropdown"><a href="login"><span>Login</span> <i class="bi bi-clock"></i></a>
              </li>
              
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Available house</h2>
          <ol>
            <li><a href="{{ route('house') }}">House</a></li>
            <li>house details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{  asset('uploads/' . $house->front_image) }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{  asset('uploads/' . $house->side_image) }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{  asset('uploads/' . $house->view_1) }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{  asset('uploads/' . $house->view_2) }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>House Details</h3>
              <ul>
                <li><strong class="text-warning">This house is available for {{ $house->housing_type }}</strong></li>
                <li><strong>Province</strong>:{{ $house->province }}</li>
                <li><strong>District</strong>: {{ $house->district }}</li>
                <li><strong>Sector</strong>: {{ $house->sector }}</li>
                <li><strong>Price</strong>{{number_format( $house->price) }} FRW</li>
                <li><strong>this houses also has</strong>: {{ $house->bedroom +$house->bathroom  }} <strong> Rooms and</strong> {{ $house->salon }} Sallon</li>
                <li>This house is located in<strong> {{ $house->village }}</strong></li>
                <span>
                  {{ $house->description }}
                </span>

              </ul>
              <li><a href="https://wa.me/c/8613207970914"><x-bxl-whatsapp style="height:40px" />See our Catalog Here</a></li>
            </div>
            
            <div class="portfolio-description">
              <h2>For more details</h2>
              <p>
                <i> Please Contact:+250787812489/+8613207970914 we are here for you <b>24/7</b> </i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Easy Estate Rwanda</h3>
            <p>
              Rwanda-kigali <br>
              Nyarugenge District <br>
              nyamirambo Sector <br>
              Maison tresor-2 <sup>nd</sup>Floor <br>
              <strong>Phone:</strong> +250 787 812 489 / +8613207970914 <br>
              <strong>Email:</strong> easyestate@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Plot</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="house">houses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="house">Houses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="cars">Cars</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us">About-us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Buy & Selling houses</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Buying houses</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="#">Buying Houses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Selling House</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Car Rental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Car Selling</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Please Follow us on our social Media</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/profile.php?id=100068283980411&mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/invites/contact/?i=iwtfa6kobx47&utm_content=q6go02x" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://youtube.com/@nrwanda2153" class="linkedin"><i class="bx bxl-youtube"></i></a>
           
          </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Easy Estate Rwanda</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
          Designed by <a href="https://github.com/Alexisadmin/Alexisadmin">@alexisadmin</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main3.js"></script>

</body>

</html>