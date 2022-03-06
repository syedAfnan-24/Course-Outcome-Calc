<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nitte - Teacher's Assistant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">principal@nmit.ac.in</a>
        <i class="bi bi-phone-fill phone-icon"></i> 1800-102-4984 / +91-81473-54955
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://www.facebook.com/NMITBangalore/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/company/nmit-dept-of-information-science-engineering" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Nitte</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Features</a></li>
          <li><a class="nav-link scrollto" href="#contact">Log in</a></li>
          <li><a class="nav-link scrollto active" href="register.php">Sign up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome </h1>
      <h2>We are here to assist teachers to maintain there databases and records</h2>
      <a href="#contact" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Features</span>
          <h2>Features</h2>
          <p>A tool to get your work done faster and easier</p>
        </div>

        <div class="row">
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Maintain the data base</a></h4>
              <p>Upload the data base of your students, maintain their data efficiently </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Stay upto date</a></h4>
              <p>Get the and course outcomes calculated and stay updated</p>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Progression</a></h4>
              <p>Maintain and Keep track of the performance and Progress of your students</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Login and get started</h3>
          
          <a class="cta-btn" href="#contact">Get Started</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Login</span>
          <h2>Login</h2>
          <p>Login to get started</p>
        </div> 

        <div class="row" data-aos="fade-up">

          

          
            <div id="container">
              <center>
                <form action="login.php" method="post">
                  
                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                  <input type="text" name="uname" placeholder="Login ID"><br>
           <br>
                  <input type="password" name="password" placeholder="Password"><br>
           <br>
                  <button type="submit">Login</button>
                </form>
                <br>
                <p>new here? <a href="register.php">Click here to Signup</a></p>
                <p>forgot password? <a href="reset.php">Click here to reset</a></p>
              </center>
              
          </div>

        </div>

      </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Address</h3>
              <p>Nitte Meenakshi Institute of Technology, P.B.No.6429, Yelahanka, Bangalore 560064.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>principal@nmit.ac.in</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>1800-102-4984 / +91-81473-54955</p>
            </div>
          </div>

        </div>

        
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>