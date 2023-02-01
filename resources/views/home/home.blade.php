<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Easy Estate Rwanda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/state.jpeg" rel="icon">
  <link href="assets/img/logo/state.jpeg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="">Easy Estate Rwanda</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="" class="active"><i class="bx bx-globe mb-o"></i>Home</a></li>
        <li><a href="plot"><i class="bx bx-building mb-0"></i>Plots</a></li>
        <li><a href="house"><i class="bx bx-building mb-0"></i>Houses</a></li>
        <li><a href="cars"><i class="bx bx-car mb-1"></i>Car </a></li>
        <li><a href="about-us"><i class="bx bx-user mb-1"></i>about-us</a></li>
        <a href="/contact-us"><i class="bx bx-phone mb-1"></i>Contact us</a>
        <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="login">Login</a></li>
            
          </ul>
        </li>      

     
        {{-- <li><a href="index.html" class="getstarted">Get Started</a></li> --}}
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>

  <!-- ======= Hero Section ======= -->
  @foreach($homes as $key => $home)
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
     
      <div class="carousel-inner" role="listbox">

        <!-- Slide -->
       
          
       
        <div class="carousel-item active" style="background-image: url('{{ asset('uploads/' . $home->image)}}')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{$home->title}}</h2>
              <p class="animate__animated animate__fadeInUp">{{$home->detail}}</p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
            </div>
          </div>
        </div>
      
        <!-- end looping slide -->
       

      </div>
  
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  @endforeach
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>easy estate Rwanda</h2>
            <i>Move to what moves you</i>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              The company Easy Estate Rwanda Ltd. specializes in buying, selling, and renting 
houses, land, and cars. We have set up YouTube, website, Facebook, Twitter, and 
Instagram searches for homes and plots that are available online and through our 
office, which allows customers to view multiple properties simultaneously in easy 
ways of mouse clicks. <br>
As our team has expanded, it has become increasingly crucial to recognize and 
describe the guiding principles that underpin all we do. Our basic principles shape 
and establish our culture, brand, business strategies, and who we are 
as professionals in the business world today. We encourage both our teammates 
and our clients to hold us accountable to these values:


            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>  Innovate and Lead </li>
              <li><i class="ri-check-double-line"></i> Embrace Accountability</li>
              <li><i class="ri-check-double-line"></i> Focus on Solutions</li>
              <li><i class="ri-check-double-line"></i> Build Relationships and Have Fun </li>
             <li> <i class="ri-check-double-line"></i> Great and Never Settle</li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/car/cc.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/house/sales.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/house/ren.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/house/fsale.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/plot/sales.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/plot/sa.jpg" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <h2 class="text-success">OUR MISSION</h2>
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              {{-- <h4><a href="#">Lorem Ipsum</a></h4> --}}
              <p>
                To make the buying and selling of real estate
                as cost-effective as possible, while
                maintaining the highest level of service.
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              {{-- <h4><a href="#">Dolor Sitema</a></h4> --}}
              <p>
                To provide accurate and up-to-date information
                skilled analysis and sound real estate advice.
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              {{-- <h4><a href="#">Sed ut perspiciatis</a></h4> --}}
              <p>To continually explore new ideas and
                technology, to make the selling and buying of
                real estate faster, less costly, and easier</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              {{-- <h4><a href="#">Nemo Enim</a></h4> --}}
              <p>
                To build our country together
              </p>
            </div>
          </div>
          {{-- <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div> --}}
          
        </div>

      </div>
      <div class="col-md-12 mt-6 mt-md-0">
        <div class="icon-box">
          {{-- <i class="bi bi-calendar4-week"></i> --}}
          <h4 class="text-success"><a href="#">OUR VISION</a></h4>
          <p>Our vision is to always strive to be the #1 real estate team in the Rwanda." and to help our team 
            members become the best that they can. Moreover, to give our customers the respect and service 
            they deserve, and the results they expect.</p>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->

    {{-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Houses</li>
              <li data-filter=".filter-card">Car</li>
              <li data-filter=".filter-web">Plot</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Easy Estate Rwanda</h3>
              <p>
                Rwanda-kigali
                Nyarugenge-nyamirambo 
                Maison tresor-2
                nd floor <br>
                KN115 St<br><br>
                <strong>Phone:</strong> +250 7878 12489 <br>
                +8613207970914<br>
                <strong>Email:</strong> easyestate@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                <a href="https://www.facebook.com/profile.php?id=100068283980411&mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/invites/contact/?i=iwtfa6kobx47&utm_content=q6go02x" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                <a href="https://youtube.com/@nrwanda2153" class="linkedin"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="plot">Plots</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="house">Houses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="car">Cars</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Plot Selling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">House Rental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Car Sales</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Car Rental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">House Rental</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Easy Estate Rwanda</h4>
            <p>move to what moves you. </p>
            <form action="" method="post">
              {{-- <input type="email" name="email"><input type="submit" value="Subscribe"> --}}
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Easy Estate Rwanda</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://github.com/Alexisadmin/Alexisadmin">@alexisadmin</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>