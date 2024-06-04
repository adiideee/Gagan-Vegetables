<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<title>Gagan Vegetables</title>
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav2.png">
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- Uicons Regular Rounded css -->
	<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
	<!-- flaticon css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- slick css -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" href="assets/css/rsmenu-main.css">
	<!-- nivo slider CSS -->
	<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<script src="jquery.min.js"></script>
</head>

<body class="defult-home">
	<div class="offwrap"></div>

	<!--Preloader start here-->
	<div id="pre-load">
		<div id="loader" class="loader">
			<div class="loader-container">
				<div class="loader-icon"><img src="assets/images/fav2.png" alt="Gagan Vegetables "></div>
			</div>
		</div>
	</div>
	
	<div class="main-content">
		<!--Full width header Start-->
		<div class="full-width-header">
			<!--Header Start-->
			<header id="rs-header" class="rs-header">
				<!-- Toolbar Area Start -->
				<div class="toolbar-area topbar-style1 hidden-md">
					<div class="container">
						<div class="row rs-vertical-middle">
							<div class="col-lg-7">
								<div class="toolbar-contact">
									<ul class="rs-contact-info">
										<li>
											<i class="fi fi-rr-envelope-plus"></i>
											<a href="#">support@gaganvegetables.com</a>
										</li>
										<li>
											<i class="fi fi-rr-phone-call"></i>
											<a href="#"> (+91) 87707 89871</a>
										</li>

									</ul>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="toolbar-sl-share">
									<ul class="clearfix">
										<li class="opening"> <em><i class="fi-rr-map-marker-home"></i>Supela, Bakhara
												(C.G.)</em> </li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Toolbar Area End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="row-table">
							<div class="col-cell header-logo">
								<div class="logo-area">
									<a href="index.php">
										<img class="normal-logo" src="assets/images/Myfinallogo.png" alt="logo">
										<img class="sticky-logo" src="assets/images/Myfinallogo.png" alt="logo">
									</a>
								</div>
							</div>
							<div class="col-cell">
								<div class="rs-menu-area">
									<div class="main-menu">
										<nav class="rs-menu hidden-md">
											<ul class="nav-menu">
												<li id="menu1">
													<a href="index.php">Home</a>
												</li>
												<li id="menu2">
													<a href="about.php">About</a>
												</li>
												<li id="menu3">
													<a href="services.php">Services</a>
												</li>
												<li id="menu4">
													<a href="gallery.php">Gallery</a>
												</li>
												<li id="menu5">
													<a href="contact.php">Contact</a>
												</li>
												<li >
													<?php
													if (isset($_SESSION["name"])) {
														$usr = $_SESSION["name"];	
														echo("<a href='./admin/logout.php'>$usr &nbsp;<img src='./assets/images/turn-off.png' style='margin-top:-5px';/></a>");
													}
													else
													{
														echo("<a href='login/login.php' style='font-size:17px;'>Login</a>");
													}

													?>
												</li>



											</ul> <!-- //.nav-menu -->

										</nav>
									</div> <!-- //.main-menu -->
								</div>
							</div>
							<div class="col-cell">
								<div class="expand-btn-inner">
									<ul>
										<li class="humburger">
											<a id="nav-expander" class="nav-expander bar" href="#">
												<div class="bar">
													<span class="dot1"></span>
													<span class="dot2"></span>
													<span class="dot3"></span>
													<span class="dot4"></span>
													<span class="dot5"></span>
													<span class="dot6"></span>
													<span class="dot7"></span>
													<span class="dot8"></span>
													<span class="dot9"></span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
				<!-- Canvas Mobile Menu start -->
				<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					<div class="close-btn">
						<a id="nav-close2" class="nav-close">
							<div class="line">
								<span class="line1"></span>
								<span class="line2"></span>
							</div>
						</a>
					</div>
					<ul class="nav-menu">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="services.php">Services</a>
						</li>
						<li>
							<a href="gallery.php">Gallery</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li >
													<?php
													if (isset($_SESSION["name"])) {
														$usr = $_SESSION["name"];	
														echo("<a href='./admin/logout.php'>$usr &nbsp;<img src='./assets/images/turn-off.png' style='margin-top:-5px';/></a>");
													}
													else
													{
														echo("<a href='login/login.php' style='font-size:17px;'>Login</a>");
													}

													?>
												</li>							
					</ul> <!-- //.nav-menu -->
					
				</nav>
				<!-- Canvas Menu end -->
			</header>
			<!--Header End-->
		</div>
		<!--Full width header End-->
		<script>
			$(document).ready(function () {
				$('li').removeClass("current-menu-item");
				url = $(location).attr("href");
				mn = url.split("/").slice(-1)[0];
				if (mn == "index.php") {
					$('#menu1').addClass("current-menu-item");
				}
				else if (mn == "about.php") {
					$('#menu2').addClass("current-menu-item");
				}
				else if (mn == "services.php") {
					$('#menu3').addClass("current-menu-item");
				}
				else if (mn == "gallery.php") {
					$('#menu4').addClass("current-menu-item");
				}
				else if (mn == "contact.php") {
					$('#menu5').addClass("current-menu-item");
				}
			});
		</script>