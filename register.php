<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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

      <h1 class="logo"><a href="index.html">NITTE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
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

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sign up</li>
        </ol>
        <h2>Sign up</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="signup-form">
                  <form action="signup.php" method="post" enctype="multipart/form-data">
                    <h2>Register</h2>
                    <p class="hint-text">Create your account</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control" name="first_name" placeholder="Login/Faculty ID" required="required"></div> 
                            <div class="col"><input type="text" class="form-control" name="last_name" placeholder="User Name" required="required"></div>
                        </div>        	
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="desig" placeholder="Designation" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="did" placeholder="Department ID" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="cid" placeholder="Course ID" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="qual" placeholder="Qualification" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="date" class="form-control" name="doj" placeholder="Date of join" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                    </div>   <br>    
                    <div class="form-group">
                        <button type="submit" >Register Now</button>
                    </div> <br>
                    <div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
                  </form>
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

          <center>
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>NITTE</h3>
              <p>
              Nitte Meenakshi Institute of Technology,<br> P.B.No.6429, Yelahanka,<br> Bangalore 560064. <br>
                
                <strong>Phone:</strong> 1800-102-4984 / +91-81473-54955<br>
                <strong>Email:</strong> principal@nmit.ac.in<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/NMITBangalore/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.linkedin.com/company/nmit-dept-of-information-science-engineering" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          </center>
          
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

</body>

</html>