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
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('plot') }}">Plots</a></li>
          <li><a class="nav-link scrollto" href="{{ route('house') }}">House</a></li>
          <li><a class="nav-link scrollto " href="{{ route('cars') }}">Cars</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about-us') }}">about-us</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact-us</a></li>               
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Easy Estate Rwanda</h1>
          <h2>The company Easy Estate Rwanda Ltd. specializes in buying, selling, and renting 
            houses, land, and cars. We have set up YouTube, website, Facebook, Twitter, and 
            Instagram searches for homes and plots that are available online and through our 
            office, which allows customers to view multiple properties simultaneously in easy 
            ways of mouse clicks.</h2>
          {{-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div> --}}
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/logo/easy.jpeg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
   
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>OUR CORE VALUES</h2>
          <p>
            As our team has expanded, it has become increasingly crucial to recognize and 
describe the guiding principles that underpin all we do. Our basic principles shape 
and establish our culture, brand, business strategies, and who we are 
as professionals in the business world today. We encourage both our teammates 
and our clients to hold us accountable to these values:

          </p>
        </div>
        <div class="row portfolio-container">

          @foreach($homes as $key => $home)           
      
          <div class="col-lg-4 col-md-6 portfolio-item filter-car">
            <div class="portfolio-wrap">
              <img src="{{  asset('uploads/' . $home->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $home->title }}</h4>
                <p>{{ $home->details }}</p>
                <div class="portfolio-links">
                  <a href="{{  asset('uploads/' . $home->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $home->detail }}"><i class="bx bx-plus"></i></a>
                  {{-- <a href="" title="More Details"><i class="bx bx-show"></i>More</a> --}}
                </div>
              </div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="plot">Plots</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="house">Houses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="cars">Cars</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us">About-us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Buy & Selling plots</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Buying Plots</a></li> --}}
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
           
              {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
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