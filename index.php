<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PrintStudio India Pvt Ltd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/pss_logo.png" rel="icon">
  <link href="img/pss_logo.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

<script src="amc/pclogin2.js"></script>
<!--<script type="text/javascript" src="amc/contact us_files/naveen_script.js"></script>-->
 <script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
var x1 = new Date().toLocaleString( {timeZone: 'Asia/Kolkata'});
// changing the display to UTC string
document.getElementById('ct').innerHTML = x1;
tt=display_c();

 }
 
</script>
<body oncontextmenu="return false;">

<!-- ======= Header ======= -->

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <style>
logo {
  border: 0.5px solid #ddd;
  border-radius: 15px;
  padding: 5px;
width: 300px;
}
      

  </style>
     <h2 class="logo" img src="img/ps_logo.jpg"></h2>
				<img src="img/ps_logo.png" alt="ecil" style="width:250px">
     
      <nav id="navbar" class="navbar">
        <ul>
		<!--<li><a class="getstarted scrollto" href="amc/search.php"><img src="amc/images/SEARCH.jpg" alt="search" style="width:250PX" ></a></li>-->
          <li><a class="nav-link scrollto active" href="https://support.printstudio.in"></a></li>
          <li><a class="nav-link scrollto" href="#">About</a></li>
          <li><a class="nav-link scrollto" href="https://support.printstudio.in">FTP Server</a></li>
          <li><a class="nav-link   scrollto" href="https://printstudio.in">Engineer Number</a></li>
          <li><a class="nav-link scrollto" href="amc/services.html">Services</a></li>
          <li <a class="dropdown"><a href="https://support.printstudio.in/amc/contact/vcard.html">Contact</i></a>
           <li><a class="nav-link scrollto"  href="# ">AMC Asset List</li></a>
		   <li><a class="getstarted scrollto" href="amc/login.php">ENGINEER LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
           <h1>PrintStudio (India) Pvt Ltd</h1>
             <h2>COMPUTERS AND PRINTERS ANNUAL MAINTENANCE</h2>
               <div class="d-flex justify-content-center justify-content-lg-start">
               <a href="amc/complaintLog.php" class="btn-get-started scrollto">COMPLANT LOG</a>&nbsp;
               <a href="amc/form.php" class="btn-get-started scrollto">VIEW STATUS</a>              			  
              </div>
             </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/why-us.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
  <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>COMPLAINT STATUS</h4>
            <p>Check Complaint Status Enter (Serial Number or User Name or Phone Number) </p>                       
<form action="amc/ComplaintDetails.php" method="GET">
<div class="input-group mb-3">
 <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="SerialNumber (or) UserName ">
 <button type="submit" class="btn btn-primary">Search</button>			  
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
   
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
         <strong><span>Suggestion and Further Details Contact Administrator :support@printstudio.in</span></strong>
      </div>
      <div class="credits">
        <strong><span>Best viewed in Firefox & Google Chrome</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>