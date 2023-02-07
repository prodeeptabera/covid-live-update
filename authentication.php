<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OTP Authentication</title>
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
			<div class="h-auto w-75 py-lg-5 py-md-2 py-3 px-4 mx-auto shadow-lg rounded">
				<div class="row d-flex justify-content-center align-content-center">
					<div class="col-lg-6 col-md-6 col-12 my-auto  py-lg-5 py-sm-0  login_img">
						<img src="images/authentication.png" alt="" class="img-fluid rounded">
					</div>
					<div class="col-lg-6 col-md-6 col-12 bg-light rounded-lg login_card">
						<h3 class="text-center pt-lg-3 pt-md-2 pt-0">OTP Authentication</h3>
						<hr class="w-25 mx-auto mb-lg-2 mb-md-2 mb-0">
						<form class="rounded pt-5">
						  	<div class="form-row">
								<div class="form-group col-12">
							    	<label for="inputemail">Enter OTP</label>
							    	<input type="password" class="form-control rounded-pill" id="otp" placeholder="****" required>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-8 col-md-8 col-8">
									<button type="submit" class="btn btn-warning rounded-pill my-1 px-5 border font-weight-bold">Submit</button>
								</div>
								<div class="col-lg-4 col-md-4 col-4">
									<button class="btn btn-warning rounded-pill"><a href="index.php" class="text-decoration-none text-dark">Home.</a></button>
								</div>
							</div>
							<p class="mt-3">Go to <a href="" data-toggle="modal" data-target="#staticBackdrop">Login Page.</a></p>
							<p class="mt-1">Don't have an account ? <a href="registration.php">Register First.</a></p>
						</form>
					</div>
				</div>
		  	</div>
		</div>
	</body>
</html>