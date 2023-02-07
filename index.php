<!DOCTYPE html>
<html>
	<head>
		<title>Covitracker | Home</title>
		<?php include 'php/links.php'; ?>
		<link rel="stylesheet" type="text/css" href="css/style.css">							 <!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="css/common.css">						<!-- common CSS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	</head>
	<body>		<!-- data-spy="scroll" data-target=".navbar" data-offset="50" -->



<!-- ====================================================================== Top View START ======================================================================== -->


		<div class="top_view" id="home">

<!-- -------------------------------------------------------------------------- Nav Bar START ------------------------------------------------------------------------ -->


			<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
			  	<div class="container-fluid">
				    <a class="navbar-brand font-weight-bold text-white d-flex align-middle" href="#hero">Covitracker</a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav mb-2 mb-lg-0 ml-auto mr-lg-5 mr-md-4 mr-0 text-center">
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link active" aria-current="page" href="#hero">Home</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="login.php">About Covid-19</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="world.php">World</a>
				        </li>
				        <li class="nav-item font-weight-bold h5">
				          <a class="nav-link" href="india.php">India</a>
				        </li>
				        <li class="nav-item dropdown font-weight-bold h5 mr-lg-3 mr-md-3 mr-0">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user-circle text-warning"></i></a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="login.php">Log In</a>
						          <a class="dropdown-item" href="registration.php">Registration</a>
						        </div>
				        </li>
				      </ul>

				    </div>
				</div>
			</nav>


<!-- ------------------------------------------------------------------------ Nav Bar END ---------------------------------------------------------------------- -->



<!-- ------------------------------------------------------------------------ Hero START ---------------------------------------------------------------------- -->



			<div id="hero" class="hero">
				<div class="video_bg container-fluid h-100">
					<video autoplay loop muted plays-inline src="video/v4.mp4">	</video>
					


					<div class="container-fluid h-50 w-100">
						<p class="card-text h-100 d-flex justify-content-center align-items-end "><span class="typed-text "></span><span class="cursor">&nbsp;</span></p>
					</div>
					<div class="container-fluid h-50 w-100">
						<div class="row h-100">
							<div class="col-lg-12 col-md-12 col-12  d-flex justify-content-center align-items-end h-50">
								<hr class="divider bg-white mx-auto">
							</div>
							<div class="col-lg-12 col-md-12 col-12  d-flex justify-content-center align-items-start h-50 pt-3">
								<a href="#about" class="go_down"><i class="fas fa-chevron-circle-down fa-4x"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>


<!-- ------------------------------------------------------------------------ Hero END ---------------------------------------------------------------------- -->


		</div>


<!-- ====================================================================== Top View END ======================================================================== -->


<!-- -------------------------------------------------------------------------- About START ------------------------------------------------------------------------ -->

		<div class="container-fluid py-5" id="about">
			<div class="Section_heading text-center mb-3 mt-5">
				<h1> <u>About Covid-19</u></h1>
			</div>
			<div class="container-fluid">
				<div class="row mt-5">
					<div class="col-lg-6 col-md-6 col-12 p-5">
						<img src="images/cs1.jpg" alt="what is corona virus." class="img-fluid border shadow rounded">
					</div>
					<div class="col-lg-6 col-md-6 col-12 pt-4 pb-2 px-3 shadow border rounded-lg">
						<h2> What is Covid-19 ( Corona Virus ) ? </h2><br>
						<p>Coronaviruses are a group of related RNA viruses that cause diseases in mammals and birds. In humans and birds, they cause respiratory tract infections that can range from mild to lethal. Mild illnesses in humans include some cases of the common cold (which is also caused by other viruses, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19.</p>
						<p> In cows and pigs they cause diarrhea, while in mice they cause hepatitis and encephalomyelitis.There are many different kinds, and some cause disease. A coronavirus identified in 2019, SARS-CoV-2, has caused a pandemic of respiratory illness, called COVID-19.</p>
						<!-- <button class="btn btn-warning rounded-pill"><a href="login.php" class="text-decoration-none text-dark">Read more</a></button> -->
					</div>
				</div>
			</div>
			
		</div>


<!-- ------------------------------------------------------- About END --------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------- Symptoms START ------------------------------------------------------------------------ -->


			
		<div class="container-fluid py-5 symptoms" id="symptoms">
			<div class="Section_heading text-center mb-5 mt-5">
				<h1> <u>Symptoms</u></h1>
			</div>
			<div class="container py-5 shadow rounded-lg">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/fever2.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Fever</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/rn.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Running Nose</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/breath.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Breathing Problem</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/smell.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Loss of Smell</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/taste.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Loss of Taste</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/body ache.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Body Aches</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/appetite1.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Loss of Appetite</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<figure class="text-center">
							<img src="images/fatigue1.png" class="img-fluid" alt="" height="120" width="120">
							<figcaption> Fatigue</figcaption>
						</figure>
					</div>	
				</div>
			</div>
		</div>
			
<!-- -------------------------------------------------------------------------- Symptoms END ------------------------------------------------------------------------ -->



<!-- -------------------------------------------------------------------------- Precautions START ------------------------------------------------------------------------ -->

		<div class="container-fluid py-5 precautions" id="precautions">
			<div class="Section_heading text-center mb-5 mt-5">
				<h1> <u>Precautions</u></h1>
			</div>
			<div class="container shadow rounded-lg">
				<div class="row pt-3 pb-4 mb-5">
					<div class="col-lg-4 col-md-4 col-12 mt-5 mb-2">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/wash.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> Wash your hands frequently with Soap, Handwash or Sanitizer.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/mask.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> Wear mask to cover your nose and mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/distance.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> Avoid close contact, maintain 6ft distance with people who are unwell.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/stay.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> Stay home and self isolate from other members of the house if you feel unwell.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/news.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> Watch NEWS and stay updated with right information.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row py-3">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/medical.png" class="img-fluid" alt="" height="120" width="120">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p> If you get fever, cough and breathing problem seek medical care.</p>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

<!-- -------------------------------------------------------------------------- Precautions END ------------------------------------------------------------------------ -->
<!-- ------------------------------------------ Corona Update World Section START ------------------------------------ -->

		<section class="covid_update container-fluid mb-2 py-5 h-100 w-100 text-white" id="world">
			<div class="Section_heading text-center my-5">
				<h1 class="font-weight-bold"> <u>World Updates</u></h1>
			</div>
			<div class="container text-center py-5">
				<div class="row">	
					<div class="col-lg-4 col-md-4 col-12 py-3 ">
			  			<h2 id="tcnf"></h2>
			  			<h4 class="py-4 font-weight-bold">Total Confirmed Cases</h4>
					</div>
					<div class="col-lg-4 col-md-4 col-12 py-3">
			  			<h2 id="trec"></h2>
			  			<h4 class="py-4 font-weight-bold">Total Recorverd</h4>
					</div>
					<div class="col-lg-4 col-md-4 col-12 py-3">
			  			<h2 id="td"></h2>
			  			<h4 class="py-4 font-weight-bold">Total Deaths</h4>
					</div>
					<div class="col-lg-12 col-md-12 col-12 my-5 pt-5">
			  			<a href="world.php" class="py-3 font-weight-bold text-decoration-none w_button">See Country Wise Report</a>
					</div>
				</div>
			</div>
		</section>




<!-- ------------------------------------ Corona Update World Section END ------------------------------ -->

<!-- ---------------------------------- Corona Update India Section START --------------------------- -->


		<section class="covid_update container-fluid py-5 h-100 w-100 text-white" id="india">
			<div class="Section_heading text-center mb-5 pt-5">
				<h1 class="font-weight-bold"> <u>India Updates</u></h1>
			</div>
			<div class="container text-center py-5">
				<div class="row">	
					<div class="col-lg-3 col-md-3 col-12 py-3">
			  			<h2 id="itcnf"></h2>
			  			<h4 class="py-5 font-weight-bold">Total Confirmed Cases</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-12 py-3">
			  			<h2 id="itrec"></h2>
			  			<h4 class="py-5 font-weight-bold">Total Recorverd</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-12 py-3">
			  			<h2 id="itd"></h2>
			  			<h4 class="py-5 font-weight-bold">Total Deaths</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-12 py-3">
			  			<h2 id="iac"></h2>
			  			<h4 class="py-5 font-weight-bold">Active Cases</h4>
					</div>
					<div class="col-lg-12 col-md-12 col-12 my-5 pt-3">
			  			<a href="india.php" class=" py-3 font-weight-bold text-decoration-none i_button">See State Wise Report</a>
					</div>
				</div>
			</div>
		</section>


<!-- ----------------------------------- Corona Update India Section END --------------------------- -->



<!-- --------------------------------------------------------------------- Contact US START  ---------------------------------------------------------------------- -->
		<div class="container-fluid py-5 contact" id="contact">
			<div class="Section_heading text-center mb-3 mt-3 pt-3">
				<h1> <u>Contact Us Now !</u></h1>
			</div>

			<div class="container c_form">
				<div class="row pt-1 pb-3">
					<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12 pb-3 mt-3 form_border">
						<form action="" method="POST">
							<div class="form-group pt-4">
								<label class="h5">Your Name</label>
								<div class="form-row">
								    <div class="col">
								    	<input type="text" class="form-control" placeholder="First name" name="first_name" autocomplete="off" required>
								    </div>
								    <div class="col">
								    	<input type="text" class="form-control" placeholder="Last name" name="last_name" autocomplete="off" required>
								    </div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-row">
								    <div class="col">
								    	<label class="h5">Email Address</label>
									    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autocomplete="off" required>
								    </div>
								    <div class="col">
										<label class="h5">Mobile Number</label>
									    <input type="number" class="form-control" id="number" name="m_number" placeholder="e.g. 0123456789" required>
								    </div>
								</div>
							</div>
							<div class="form-group">
							    <label class="h5">Select Symptoms</label>
							    <br>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
							  		<input class="custom-control-input" type="checkbox" id="inlineCheckbox1" name="symptom[]" value="Fever">
							  		<label class="custom-control-label" for="inlineCheckbox1">Fever</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox2" name="symptom[]" value="Running Nose">
									<label class="custom-control-label" for="inlineCheckbox2">Running Nose</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox3" name="symptom[]" value="Breathing Problem">
									<label class="custom-control-label" for="inlineCheckbox3">Breathing Problem</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox4" name="symptom[]" value="Loss of Smell">
									<label class="custom-control-label" for="inlineCheckbox4">Loss of Smell</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox5" name="symptom[]" value="Loss of Taste">
									<label class="custom-control-label" for="inlineCheckbox5">Loss of Taste</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox6" name="symptom[]" value="Body Aches">
									<label class="custom-control-label" for="inlineCheckbox6">Body Aches</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox7" name="symptom[]" value="Loss of Appetite">
									<label class="custom-control-label" for="inlineCheckbox7">Loss of Appetite</label>
								</div>
								<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
									<input class="custom-control-input" type="checkbox" id="inlineCheckbox8" name="symptom[]" value="Fatigue">
									<label class="custom-control-label" for="inlineCheckbox8">Fatigue</label>
								</div>
							</div>
							<div class="form-group">
							    <label class="h5">Describe your Illness</label>
								<textarea class="form-control" id="describe" rows="2"></textarea>
							</div>
							<button type="submit" class="btn btn-lg btn-s">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>



<!-- ---------------------------------------------------------------------- Contact US END  -------------------------------------------------------------------- -->


<!-- --------------------------------------------------------------------- Footer START  ---------------------------------------------------------------------- -->


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


	<script src="js/type.js"></script>			<!-- Including typing effect js file -->


	<script src="js/worldliveupdate.js"></script>		<!-- Including World covid cases live update js file -->
	<script src="js/indialiveupdate.js"></script>		<!-- Including India covid cases live update js file -->

	<script>
		$(document).ready(function(){
			wl_covid()
			it_covid()
		})
	</script>


	</body>


</html>

