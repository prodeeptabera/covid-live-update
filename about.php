<?php 

session_start();

if(!isset($_SESSION['first_name'])){
	header('location:index.php');
}

?>


<!DOCTYPE html>
<html>
	<head>
		<?php include 'php/links.php' ?>
		<title>Covitracker | About</title>

		<!-- <link rel="stylesheet" type="text/css" href="css/common.css"> -->							 <!-- common CSS -->
		<link rel="stylesheet" type="text/css" href="css/india.css">							 <!-- india CSS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			#about_tab{
				background-color: #f1b805;
				border: 2px solid transparent;
				border-radius: 5px;
				box-shadow: 0px 0px 12px #f1b805;
			}
		</style>

	
	</head>
	<body>



<!-- ====================================================================== Top View START ======================================================================== -->


		<div class="top_view" id="home">

<!-- -------------------------------------------------------------------------- Nav Bar START ------------------------------------------------------------------------ -->


			<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
			  	<div class="container-fluid">
				    <a class="navbar-brand mx-4 h4 text-white" href="#hero">Covitracker | About</a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav mb-2 mb-lg-0 ml-auto text-center">
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" aria-current="page" href="index.php">Home</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link text-white" id="about_tab" href="about.php">About</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="world.php">World</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="india.php">India</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="home.php#care">Care call</a>
				        </li>
				        <li class="nav-item font-weight-bold h5 border-left px-3">
				        	<a class="a1 text-warning text-decoration-none d-flex justify-content-center align-items-center my-2" href="#">Welcome, <?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?></a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link a2 text-white text-uppercase" id="logout" href="logout.php">Logout</a>
				        </li>
				      </ul>

				    </div>
				</div>
			</nav>


<!-- ------------------------------------------------------------------------ Nav Bar END ---------------------------------------------------------------------- -->




<!-- ====================================================================== Top View END ======================================================================== -->







<!-- -------------------------------------------------- Footer START  ------------------------------------------------- -->


		<footer class="footer bg-dark">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12 pt-4 pl-4 border-right">
						<div class="footer_heading mb-4">
							<h4 class="text-center">Contact Us</h4>
							<hr>
						</div>
						<div class="row text-center text-white">
							<div class="col-lg-12 col-md-12 col-12 pb-1 cpi">
								<i class="fas fa-envelope fa-2x"></i>
							</div>
							<div class="col-lg-12 col-md-12 col-12 pb-1 cp_text">
								 17/1, Sreenagar Main road, Kolkata - 700094
							</div>
							<div class="col-lg-12 col-md-12 col-12 pb-1 cpi">
								<i class="fas fa-phone-alt fa-2x"></i>
							</div>
							<div class="col-lg-12 col-md-12 col-12 pb-1 cp_text">
								 +91 0123456789
							</div>
							<div class="col-lg-12 col-md-12 col-12 pb-1 cpi">
								<i class="fas fa-at fa-2x"></i>
							</div>
							<div class="col-lg-12 col-md-12 col-12 pb-1 cp_text">
								 newscovid19@xyz.com
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12 pt-4 border-right">
						<div class="footer_heading mb-4">
							<h4 class="text-center">Useful Links</h4>
							<hr>
						</div>
						<p>
							<div class="row px-2 pt-4">
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://www.cowin.gov.in/" target="blank">  Co-WIN</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://covid19.india.gov.in/" target="blank">  Covid-19 Internal Ministry Notification </a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									 <i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://www.mohfw.gov.in/" target="blank"> Ministry of Health and Family Welfare</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://covidwarriors.gov.in/" target="blank">  COVID Warriors</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://covidwarriors.gov.in/" target="blank"> Download Aarogya Setu Mobile App</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://www.un.org/en" target="blank"> United Nations</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://www.who.int/" target="blank"> World Health Organization</a></p>
								</div>
								<div class="col-lg-6 col-md-6 col-12 d-flex link_text">
									<i class="fas fa-arrow-circle-right pr-2"></i><p class=""><a href="https://www.who.int/" target="blank"> Indian Covid update API</a></p>
								</div>
							</div>
						</p>					
					</div>

					<div class="col-lg-3 col-md-3 col-12 pt-4">
						<div class="footer_heading mb-4">
							<h4 class="text-center">Join our NewsLetter</h4>
							<hr>
						</div>
						<div class="row pt-4">
							<div class="col-lg-12 col-md-12 col-12 mb-4">
								<form action="">
									<div class="row text-center">
										<div class="form-group col-lg-12 col-md-12 col-12">
											<input type="email" class="form-control rounded-pill" id="nl_email" placeholder=" Enter email">
										</div>
										<div class="col-lg-12 col-md-12 col-12">
											<button class="btn btn-warning font-weight-bold rounded-pill " type="submit">Subscribe</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-12 col-md-12 col-12 d-flex justify-content-center align-items-center mb-4">
								<i class="fab fa-facebook pr-2 fa-2x s_icons" data-toggle="tooltip" data-placement="left" title="facebook"></i>
								<i class="fab fa-twitter pr-2 fa-2x s_icons" data-toggle="tooltip" data-placement="top" title="twitter"></i>
								<i class="fab fa-instagram pr-2 fa-2x s_icons" data-toggle="tooltip" data-placement="down" title="instagram"></i>
								<i class="fab fa-youtube pr-2 fa-2x s_icons" data-toggle="tooltip" data-placement="right" title="youtube"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-12 p-4 border-top">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.2970445263315!2d88.4045361292056!3d22.472232299077152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273d45ef56c7b%3A0x623080d6f28ab59d!2s76%2C%20Dhalua%2C%20Panchpota%2C%20Kolkata%2C%20West%20Bengal%20700094!5e1!3m2!1sen!2sin!4v1626765208158!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
		</footer>


<!-- --------------------------------------------------- Footer END  ------------------------------------------------------- -->













	</body>
<!-- --------------------------------------------------------------------- Navbar Active START  ---------------------------------------------------------------------- -->


<!-- ---------------------------------------------------------------------- Navbar Active END  -------------------------------------------------------------------- -->








</html>