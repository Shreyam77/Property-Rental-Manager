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
  <link href="img/apple-touch-icon.png" rel="icon">
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

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
    <a class="navbar-brand text-brand" href="index.html">Property Rental <span class="color-b">Manager</span></a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="property-grid.html">Property</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Register</a>
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
      <a href="login.php">LOGIN</a>
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
            <h1 class="title-single">Owner Homepage</h1>
            <span class="color-text-a">Hello <?php echo $_SESSION["username"] ?> </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <br>
	<div class="container">
	<section>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Houses</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Add Tenant</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured Posts</a>
			</li>
		</ul>


		<div class="tab-content" id="myTabContent">
      <!-- DASHBOARD -->
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		  </div>
			
      <!-- HOUSES -->
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      <br/>      
                <div class="table-users">
                  <div class="header"></div>
                  <table cellspacing="0">
                      <tr>
                        <th width="100">FlatNo.</th>
                        <th width="100">HouseNo.</th>
                        <th width="100">Town</th>
                        <th width="150">Address</th>
                        <th width="150">Type</th>
                        <th width="100">Status</th>
                      </tr> 
                  </table>
                </div>
          <?php
            $oid = $_SESSION["ownerid"];
            $query2 = mysqli_query($connection,"Select * from houses where oid=$oid");
            while($row2 = mysqli_fetch_array($query2))
            {
            $hno = $row2['hno'];
            $query3 = mysqli_query($connection,"Select * from flat where hno=$hno");
            $row3 = mysqli_fetch_array($query3)    
            
          ?>
                <div class="table-users">
                  <div class="header"></div>
                  <table cellspacing="0">
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th width="230"></th>
                      </tr> 
                      <tr>
                        <td width="100"><?php echo $row3['fno'] ?></td>
                        <td width="100"><?php echo $row2['hno'] ?></td>
                        <td width="100"><?php echo $row2['town'] ?></td>
                        <td width="150"><?php echo $row2['address'] ?></td>
                        <td width="150"><?php echo $row2['type'] ?></td>
                        <td width="100"><?php echo $row3['status'] ?></td>
                      </tr>
                  </table>
                </div>
          <?php
            }
          ?>


				<form name="form1" method="POST" action="add_details.php" enctype="multipart/form-data">
					<br><br>
          <button type="submit" name="add_house" class="btn btn-a">Add more houses</button>        
				</form>
      
      </div>
			
      <!-- PAYMENTS -->
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Delete</div>
			
      <!-- NEXT -->
			<div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
				<br>
				<h3>Featured Posts</h3>
			</div>

		</div>


	</section>
	</div><!-- container -->


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

</body>
</html>
