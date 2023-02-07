<?php
// session_start();

	include 'dbconn.php';
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
			$pass_decode = password_verify($password, $db_pass);

			if($pass_decode){
					echo "login success";
			}
			else{
					echo "Worng password";
			}
		}
		else{
				echo "Invalid User.";
		}

	}
  // header("Location:../home.php");

?>