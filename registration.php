<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Registration</title>
		<?php include 'php/links.php'; ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.bg_cover{
				height: 100vh;
				width: 100%;
			}
			hr{
				height: 0.3vh;
				background-color: #f1b805;
			}
		</style>
	</head>
	<body>
		<div class=" container-fluid bg_cover d-flex justify-content-center align-items-center">
			<div class="h-auto w-75 py-lg-2 py-md-2 py-2 px-4 mx-auto shadow-lg rounded">
				<div class="row py-lg-0 py-md-0 py-3 d-flex justify-content-center align-content-center">
					<div class="col-lg-6 col-md-6 col-12 bg-light rounded-lg reg_card order-lg-1 order-md-1 order-2">
						<h3 class="text-center pt-3">Register Yourself</h3>
						<hr class="w-25 mx-auto">
						<form class="rounded" action="php/registerdb.php" method="POST" onsubmit="return validation()">
							<div class="form-group">
								<label>Your Name</label>
								<div class="form-row">
								    <div class="col">
								    	<input type="text" class="form-control rounded-pill" id="fname" placeholder="First name" name="first_name" autocomplete="off" required>
								    	<span id="s_fname" class="text-danger"></span>
								    </div>
								    <div class="col">
								    	<input type="text" class="form-control rounded-pill" id="lname" placeholder="Last name" name="last_name" autocomplete="off" required>
								    	<span id="s_lname" class="text-danger"></span>

								    </div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-row">
								    <div class="col">
								    	<label for="email">Email Address</label>
									    <input type="email" class="form-control rounded-pill" id="email" placeholder="abc@xyz.com" name="email" autocomplete="off" required>
								    	<span id="s_email" class="text-danger"></span>

								    </div>
								    <div class="col">
										<label for="number">Mobile Number</label>
									    <input type="number" class="form-control rounded-pill" id="number" name="m_number" placeholder="e.g. 0123456789" autocomplete="off" required>
								    	<span id="s_number" class="text-danger"></span>
								    	
								    </div>
								</div>
							</div>
							<div class="form-group">
							    <label for="address">Your address</label>
								<textarea class="form-control rounded-pill" id="address" rows="1" name="address"></textarea>
								<span id="s_address" class="text-danger"></span>

							</div>
						  	<div class="form-row">
								<div class="form-group col">
							    	<label for="password">Password</label>
							    	<input type="password" class="form-control rounded-pill" id="password" placeholder="********" name="pass"required>
								   	<span id="s_password" class="text-danger"></span>

							    </div>
							    <div class="form-group col">
							    	<label for="cpassword">Confirm Password</label>
							    	<input type="password" class="form-control rounded-pill" id="cpassword" placeholder="********" name="c_pass" required>
									<span id="s_cpassword" class="text-danger"></span>

							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-8 col-md-8 col-8">
									<button type="submit" class="btn btn-warning rounded-pill my-1 px-5 border font-weight-bold" name="submit">Submit</button>
								</div>
								<div class="col-lg-4 col-md-4 col-4">
									<button class="btn btn-warning rounded-pill"><a href="index.php" class="text-decoration-none text-dark">Home.</a></button>
								</div>
							</div>
							<p class="mt-1">Have an account ? <a href="login.php">Login here.</a></p>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 col-6 my-auto  pt-lg-5 pt-5  reg_img order-lg-2 order-md-2 order-1">
						<img src="images/reg1.png" alt="" class="img-fluid rounded">
					</div>
				</div>
		  	</div>
		</div>

		<script type="text/javascript">
			function validation(){
				var f_name = document.getElementById('fname').value;
				var l_name = document.getElementById('lname').value;
				// var email = document.getElementById('email').value;
				var m_number = document.getElementById('number').value;
				// var address = document.getElementById('address').value;
				var pass = document.getElementById('password').value;
				var cpass = document.getElementById('cpassword').value;

				var only_text = /^[A-Za-z]+$/;



				if((f_name.length <2) || (f_name.length > 30)){
					document.getElementById('s_fname').innerHTML = " ** keep length between 2 - 30";
					return false;
				}
				else if(!f_name.match(only_text)){
					document.getElementById('s_fname').innerHTML = " ** only characters allowed.";
					return false;
				}



				if((l_name.length <2) || (l_name.length > 30)){
					document.getElementById('s_lname').innerHTML = " ** keep length between 2 - 30";
					return false;
				}

				else if(!l_name.match(only_text)){
					document.getElementById('s_lname').innerHTML = " ** only characters allowed.";
					return false;
				}



				if((m_number.length <10) || (m_number.length > 10)){
					document.getElementById('s_number').innerHTML = " ** enter 10 digit number";
					return false;
				}



				if((pass.length <8) || (pass.length > 30)){
					document.getElementById('s_password').innerHTML = " ** keep length between 8 - 30";
					return false;
				}

				if((cpass.length <8) || (cpass.length > 30)){
					document.getElementById('s_cpassword').innerHTML = " ** keep length between 8 - 30";
					return false;
				}
				else if(cpass != pass){
					document.getElementById('s_cpassword').innerHTML = " ** passwords did not matched.";
					return false;
				}
	 		}
			
		</script>
	</body>
</html>