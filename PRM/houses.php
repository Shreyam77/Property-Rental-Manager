<?php 
    session_start();
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PRM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- STYLE CSS -->
  <link rel="stylesheet" href="css/style1.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  		<!-- MATERIAL DESIGN ICONIC FONT -->
      <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

<!-- DATE-PICKER -->
<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style1.css">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

<!--/ Nav Start /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="index.php">Property Rental <span class="color-b">Manager</span></a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="property-grid.html">Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">About</a>
        </li>
      </ul>
    </div>
    
    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
   
    <button type="button" class="btn btn-b-n navbar-toggle-box1-collapse d-none d-md-block" data-toggle="collapse" 
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <a href="login.html">LOGIN</a>
      <span class="fa" aria-hidden="true"></span>
    </button>

  </div>
</nav>
<!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Adding House</h1>
            <span class="color-text-a">Hello <?php echo $_SESSION["username"] ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Owner Homepage
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Single Star /-->
   
  <!--/ News Single End /-->

<!--/ footer Star /-->
<section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="w-header-a">
            <h3 class="w-title-a text-brand">Property Rental Manager</h3>
          </div>
          <div class="w-body-a">
            <p class="w-text-a color-text-a">
              This system will enable house owners to manage tenants account as well as it will facilitate the customer to find them a perfect house according to their requirement.
            </p>
          </div>
          <div class="w-footer-a">
            <ul class="list-unstyled">
              <li class="color-a">
                <span class="color-text-a">Phone :</span> 7275499342</li>
              <li class="color-a">
                <span class="color-text-a">Email :</span> 18CS1A1018@kristujayanti.com</li>
            </ul>
          </div>
        </div>
      </div>

 
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="nav-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">Home</a>
            </li>
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Property</a>
            </li>
          </ul>
        </nav>
        <div class="socials-a">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-dribbble" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="copyright-footer">
          <p class="copyright color-text-a">
            &copy; Copyright
            <span class="color-a">Property Rental Manager</span> All Rights Reserved.
          </p>
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
          Designed by <a href="https://bootstrapmade.com/">Shreyam Gupta </a> & <a href="https://bootstrapmade.com/">Rishav Ranjan</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
/ 
		<script src="js/main1.js"></script>



</body>
</html>
