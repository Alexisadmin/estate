<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Easy Estate Rwanda- Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/logo/state.jpeg" rel="icon">
  <link href="assets/img/logo/state.jpeg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="" class="logo"><img src="assets/img/logo/state.jpeg" alt="" class="img-fluid"></a>
  
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="">Home</a></li>
          <li><a class="nav-link scrollto " href="{{ route('plot') }}">Plots</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('house') }}">House</a></li>
          <li><a class="nav-link scrollto " href="{{ route('cars') }}">Cars</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about-us') }}">about-us</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>             
              <li class="dropdown"><a href="{{ route('login') }}"><span>Login</span> <i class="bi bi-lock"></i></a>
              </li>
              
            </ul>
          </li> --}}
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Easy Estate Rwanda</h2>
          <ol>
            <li><a href="{{ route('house') }}">House</a></li>
            <li>Available  Houses</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Houses</h2>
          <p>Below houses all all availble for Sales if you are interrested please contact us  for more information                                                                                                                                 </p>
        </div>
        <div class="row portfolio-container">
         @foreach ($houses as $key=> $house )    

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('uploads/' . $house->front_image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Available in {{ $house->district }} District</h4>
                <p class="Text-success">Now Available</p>
                <div class="portfolio-links">         
                
                <a  href="/house-details/{{Crypt::encrypt($house['id'])}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <div class="member-info">
            <strong class="text-success">Price</strong> <span>{{ number_format($house->price)}} FRW</span>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
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
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main3.js"></script>

</body>

</html>