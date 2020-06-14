
<!DOCTYPE html>
<html class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>V-ID</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
	
	<script type="text/JavaScript">
		function Redirecionar(targ,selObj,restore) {
			var value = selObj.options[selObj.selectedIndex].value;
			if (value != '') {
				window.location.href = value;
			}
		}
	</script>

	
</script>

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="default-header">
		<nav style="background-color:#253a4d" class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo2.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">

						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Header Area -->
	
	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div style="background-color:white" class="overlay overlay-bg"></div>
			<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
<br><br><br><br><br><br><br>
		<div class="form-title-row">
				
		<img style="width:600px; margin-left-100px;" src="img/perfil.png" alt=""> <br>
		
		<br>
	
<h2>
<?php

	//session_start();
	//echo $_SESSION['name'] . '<br />';

	include "conexao.php";
	$sql = mysqli_query($con, "SELECT name,number FROM usuarios WHERE name='isa'");
        $name	= $_GET['name'];
        $number	= $_GET['number'];
        echo $name;
?>
        <br>
        V-ID
        <?php
                echo $number;
        ?>
       
	
	
<h2> <br>
 
      


				
        </div>   

        <div class="row">

          <div class="col-lg-3">

          </div>
		
	  
    </section>

    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section-gap">
	
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Modals error -->

    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
	<script src="js/main.js"></script>
</body>

</html>