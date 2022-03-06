<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['login_id'])) {

 ?>
 <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('dbcon.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mse2</title>
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

      <h1 class="logo"><a href="index.html">NITTE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="logout.php">Log Out</a></li>
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
          <li>My profile</li>
        </ol>
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        
      </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
    <img style="" src="" alt="">
      <div class="container">
          <!--teacher's details-->
          <section id="portfolio-details" class="portfolio-details">
      <div class="container">
      
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="signup-form">
                  <form action="mse2entry.php" method="post" enctype="multipart/form-data">
                    <h2>Marks Entry</h2>
                    <p class="hint-text">Enter MSE 2 marks of your students:</p>
                    <?php
                      $id= $_SESSION['login_id'];
                      
                      $sql = "select f.course_id from faculty as f, course as c
                      where  f.course_id = c.course_id and f.f_id = '$id'";
                      $result = $conn->query($sql);
                      
                      if ($result->num_rows > 0) {
                        // output data of each row
                        
                        while($row = $result->fetch_assoc()) {
                          //echo "id: " . $row["id"]. " - Club: " . $row["Club"]. " Country: " . $row["Country"]. "<br>";
                        
                          echo "
                          <br>
                          <table>
                              <tr>
                                <td><b>Course ID: </b>". $row["course_id"] ."</td>
                              </tr>
                          </table>
                          ";
                        }
                      } else {
                        echo "0 results";
                      }
                      $conn->close();
                    ?>
                    <br>
                    <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="form-control" name="usn" placeholder="Student USN" required="required">
                    </div> <br>
                    <div class="form-group">
                        <input type="text" class="form-control" name="cid" placeholder="Course ID" required="required">
                    </div> <br>
                        <div class="row">
                            <h6>Question 1</h6>
                            <div class="col"><input type="text" class="form-control" name="1a" pattern="[0-4]" placeholder="1a - maximum marks 4"></div> 
                            <div class="col"><input type="text" class="form-control" name="1b" pattern="[0-3]" placeholder="1b - maximum marks 3"></div>
                            <div class="col"><input type="text" class="form-control" name="1c" pattern="[0-3]" placeholder="1c - maximum marks 3"></div>
                        </div> <br>
                        <div class="row">
                            <h6>Question 2</h6>
                            <div class="col"><input type="text" class="form-control" name="2a" pattern="[0-4]" placeholder="2a - maximum marks 4"></div> 
                            <div class="col"><input type="text" class="form-control" name="2b" pattern="[0-3]" placeholder="2b - maximum marks 3"></div>
                            <div class="col"><input type="text" class="form-control" name="2c" pattern="[0-3]" placeholder="2c - maximum marks 3"></div>
                        </div> <br>
                        <div class="row">
                            <h6>Question 1</h6>
                            <div class="col"><input type="text" class="form-control" name="3a" pattern="[0-4]" placeholder="3a - maximum marks 4"></div> 
                            <div class="col"><input type="text" class="form-control" name="3b" pattern="[0-3]" placeholder="3b - maximum marks 3"></div>
                            <div class="col"><input type="text" class="form-control" name="3c" pattern="[0-3]" placeholder="3c - maximum marks 3"></div>
                        </div> <br>
                        <div class="form-group">
                          <button type="submit" >Submit Marks</button>
                        </div> <br>

                  </form>
                </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
      </div>
    </section>

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>