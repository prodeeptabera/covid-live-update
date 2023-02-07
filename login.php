<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User-Login</title>
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
						<img src="images/login.png" alt="" class="img-fluid rounded">
					</div>
					<div class="col-lg-6 col-md-6 col-12 bg-light rounded-lg login_card">
						<h3 class="text-center pt-lg-3 pt-md-2 pt-0">Log in</h3>
						<hr class="w-25 mx-auto mb-lg-2 mb-md-2 mb-0">
						<form class="rounded" action="" method="POST">
						  	<div class="form-row pt-lg-3 pt-md-2 pt-0">
								<div class="form-group col-12 pt-lg-3 pt-md-2 pt-0">
							    	<label for="inputemail">Email</label>
							    	<input type="email" class="form-control rounded-pill" id="inputemail" placeholder="abc@xyz.com" name="email" required>
								    <span id="ls_email" class="text-danger"></span>

							    </div>
							    <div class="form-group col-12 pt-lg-2 pt-md-2 pt-0">
							    	<label for="inputpassword">Password</label>
							    	<input type="password" class="form-control rounded-pill" id="inputpassword" placeholder="********" name="password" required>
								    <span id="ls_password" class="text-danger"></span>

							    </div>
							</div>
							<!-- <p>Forgot Password ? <a href="" data-toggle="modal" data-target="#staticBackdrop">Click here.</a></p> -->
							<div class="row align-items-center pt-lg-3 pt-md-2 pt-0">
								<div class="col-lg-8 col-md-8 col-8">
									<button type="submit" class="btn btn-warning rounded-pill my-1 px-5 border font-weight-bold" name="submit">Log in</button>
								</div>
								<div class="col-lg-4 col-md-4 col-4">
									<button class="btn btn-warning rounded-pill"><a href="index.php" class="text-decoration-none text-dark">Home.</a></button>
								</div>
							</div>
							<p class="mt-1 pt-lg-2 pt-md-2 pt-0">Don't have an account ? <a href="registration.php">Register First.</a></p>
						</form>
					</div>
				</div>
		  	</div>
		</div>

		<!-- Modal -->
		<!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered">
		    	<div class="modal-content p-3 bg-light">
				    <div class="row p-3">
				      	<div class="col-lg-12 col-md-12 col-12">
				      		<div class="row">
				      			<div class="col-lg-10 col-md-10 col-10">
						        	<h5 class="modal-title" id="staticBackdropLabel">Forgot your password?</h5>
						        	<hr class="w-25">
					        	</div>
				      			<div class="col-lg-2 col-md-2 col-2">
						        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						        	  	<span aria-hidden="true">&times;</span>
						        	</button>
						        </div>
					        </div>
				      	</div>
				      	<div class="col-lg-12 col-md-12 col-12">

					      	<div class="container text-center pt-4">
					      		<p>Enter the email address associated with your account and we’ll send you an OTP to reset your password.</p>
					      	</div>
					      	<form class="rounded pb-4">
							  	<div class="form-row">
									<div class="form-group col-12">
								    	<label for="inputemail">Email</label>
								    	<input type="email" class="form-control rounded-pill" id="searchemail" placeholder="abc@xyz.com" name="otpemail" required>
								    </div>
								</div>
							</form>
						</div>
				      	<div class="col-lg-12 col-md-12 col-12">
					    	<div class="row pb-4">
				      			<div class="col-lg-6 col-md-6 col-6">
					        		<button type="button" class="btn btn-warning rounded-pill font-weight-bold px-5" name="otpsubmit">Send OTP</button>
					        	</div>
				      			<div class="col-lg-6 col-md-6 col-6">
					        		<button type="button" class="btn btn-warning rounded-pill px-4 float-right" data-dismiss="modal">Close</button>
					        	</div>
				      		</div>
				      	</div>
			    	</div>
			    </div>
		  	</div>
		</div> -->
	</body>
</html>





<?php
// session_start();

	include 'php/dbconn.php';
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];

		$password = $_POST['password'];

		$email_search = "select * from users where email = '$email'";
		$query = mysqli_query($con,$email_search);

		$query_result = mysqli_fetch_array($query);

		if($query_result['email'] == $email)
		{
			$db_pass = $query_result['password'];
			$_SESSION['first_name'] = $query_result['first_name'];
			$_SESSION['last_name'] = $query_result['last_name'];
			$pass_decode = password_verify($password, $db_pass);

			if($pass_decode){
					// echo "login success";
				?>

				<script type="text/javascript">
					
					location.replace("home.php");
					
				</script>

				<?php
			}
			else{
					// echo "Worng password";
				?>

				<script type="text/javascript">
					
					document.getElementById('ls_password').innerHTML = " ** Entered password is wrong.";
					
				</script>

				<?php
  				// header("Location: http://localhost/project/Covid%20update/login.php");

			}
		}
		else{
				// echo "Invalid User.";
				?>

				<script type="text/javascript">
					
					document.getElementById('ls_email').innerHTML = " ** Unregistered E-mail Id.";
					
				</script>

				<?php
	  			// header("Location: http://localhost/project/Covid%20update/login.php");
  				exit();

		}
        mysqli_close($con);


	}


	// if(isset($_POST['otpsubmit']))
	// {
	// 	$otpemail = $_POST['otpemail'];

	// 	$email_search = "select * from users where email = '$email'";
	// 	$query = mysqli_query($con,$email_search);

	// 	$query_result = mysqli_fetch_array($query);

	// 	if($query_result['email'] == $email)
	// 	{

	// 	}
	// }


?>

