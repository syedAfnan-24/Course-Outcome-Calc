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

  <title>My Students</title>
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
          <li><a href="home.html">My profile</a></li>
          <li>My Students</li>
        </ol>
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
        
      </div>
    </section><!-- End Breadcrumbs -->
    

    <section class="inner-page">
    <img style="" src="" alt="">
      <div class="container">
          <!--teacher's details-->
          <?php
                $id= $_SESSION['login_id'];
                    
                echo "<h4>My Students Details: </h4>";
                
                $mysql = "select s.Student_name,s.USN,s.gender from students as s,course as c, students_course as sc,faculty as f,login as l
                where sc.USN = s.USN and
                c.course_id = sc.course_id and
                f.course_id = sc.course_id and
                f.f_id = l.login_id and
                f.f_id = '$id'";
                $result = $conn->query($mysql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    while($row = $result->fetch_assoc()) {
                      //echo "id: " . $row["id"]. " - Club: " . $row["Club"]. " Country: " . $row["Country"]. "<br>";
                      echo "
                      <br>
                      
                      <table>
                            <tr id=\"tdata\">
                                <td><b>USN: </b>". $row["USN"] ."</td>
                            </tr>
                            <tr id=\"tdata\">
                                <td><b>Student Name: </b>". $row["Student_name"] ."</td>
                            </tr>
                            <tr id=\"tdata\">
                                <td><b>Gender: </b>". $row["gender"] ."</td>
                            </tr>
                            <hr>
                      </table>
                      ";
                    }
                  } else {
                    echo "0 results";
                  }
                $conn->close();
                ?>
                <!--;--->
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